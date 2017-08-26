<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 8/22/17
 * Time: 10:14 AM
 */
namespace AppBundle\Controller;

use AppBundle\Entity\ContactMessages;
use AppBundle\Form\ContactMessagesType;
use AppBundle\Service\FileUpload;
use AppBundle\Utils\Slugger;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ContactMessageController extends Controller
{    
    private $session;
    function __construct()
    {
        $this-> session = new Session();
    }
    /**
     * @Route("/admin/contactmessage/{page}", defaults={"page": 1}, requirements={"page": "[1-9]\d*"}, name="admin_contactmessage_index" )
     * @Route("/admin/contactmessage/reset-filter/{slug}/", name="admin_contactmessage_reset_filter")
     * @Method({"GET", "POST"})
     * @Cache(smaxage=20)
     */
    public function indexAction(Request $request, $slug = null, $page = null)
    {
        $page_header = array(
            'page_header'=> 'Contact Message',         // Ana Başlık
            'level'      => 'Contact Message',         // Üst sayfa
            'herePage'   => 'Contact Message',         // bulunduğun sayfa
            'href'       => '/admin/contactmessage',  // sayfa urlsi
            'childUrl'   => '',             // alt sayfa urlsi
            'page_title' => 'İletişim Mesajları',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'build/iCheck/icheck.min.js'
            ),
            'page_styles' => array(
                'build/iCheck/flat/blue.css'
            )
        );
        if ( $slug == "clean")
        {
            $this->session->remove('filterContactMessage');
            return $this->redirectToRoute('admin_contactmessage_index');
        }
        if ( $request->request->get('filterKeys') && $request->isMethod('POST')){
            $filterKeys = trim($request->request->get('table-search'));
            if ($this->session->get('filterContactMessage') != $filterKeys){
                $this->session->remove('filterContactMessage');
                $this->session->set('filterContactMessage', $filterKeys);
            }
        }


        if ( $this->session->get('filterContactMessage') != ""){
            $repository = $em = $this->getDoctrine()->getManager()->getRepository(ContactMessages::class);
            $query = $repository->createQueryBuilder('cm')
                ->where('cm.nameSurname LIKE :nameSurname')
                ->andWhere('cm.remove = :remove')
                ->setParameters(array('nameSurname'=>'%'.strtolower($this->session->get('filterContactMessage')).'%', 'remove' => 0))
                ->getQuery();
            $contactMessage = $query->getArrayResult();
        } else {
            $contactMessage = $em = $this-> getDoctrine()->getManager()
                ->createQuery(
                    'SELECT ccm
                    FROM AppBundle:ContactMessages ccm
                    WHERE ccm.remove = :remove
                    ORDER BY ccm.sendDate ASC'
                )
                ->setParameter('remove', 0);
        }

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $contactMessage = $paginator -> paginate(
            $contactMessage,
            $request -> query -> getInt('page', $page),
            $request -> query -> getInt('limit', 20)
        );

        return $this->render('admin/contact-message/index.html.twig', array(
            'page_header' => $page_header,
            'contactMessage' => $contactMessage,
        ));
    }
    /**
     * @Route("/admin/contactmessage/add", name="admin_contactmessage_add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request, Slugger $slugger, FileUpload $fileUpload)
    {
        $page_header = array(
            'page_header'=> 'Contact Address Add',         // Ana Başlık
            'level'      => 'Contact Address',         // Üst sayfa
            'herePage'   => 'Contact Address',         // bulunduğun sayfa
            'href'       => '/admin/contact',  // sayfa urlsi
            'childUrl'   => '/admin/contact/add',             // alt sayfa urlsi
            'page_title' => 'İletişim Adresi Ekle',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js'
            ),
        );

        $contactMessage = new ContactMessages();
        $form = $this->createForm(ContactMessagesType::class, $contactMessage);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contactMessage->setNameSurname($form['nameSurname']->getData());
            $contactMessage->setPhone($form['phone']->getData());
            $contactMessage->setAddress($slugger->slugify($form['address']->getData()));
            $contactMessage->setMessageTitle($form['messageTitle']->getData());
            $contactMessage->setMessage($slugger->slugify($form['message']->getData()));
            /*
             * e mail doğruluk
             */
            $email = $form['email']->getData();
            $email = explode("@", $email);
            $email = explode(".", $email[1]);

            if (preg_match("/\d[0-9+*-+,.?<>!]/", $email[0])) {
                $this->addFlash('error', 'Geçerli Bir Mail Adresi Giriniz. Girdiğiniz Mail = ' . $form['email']->getData());
                return $this->redirectToRoute('admin_contactmessage_add', array(), 301);
            } else {
                $contactMessage->setEmail($form['email']->getData());
            }
            /*
             * İp Adress
             */
            $contactMessage->setIpAddress($request->getClientIp());
            /*
             * Dokument Yukleme
             */
            $files = $form['attachment']->getData();
            if (isset($files) || $files != "" ) {
                $contactMessage->setAttachment($fileUpload->documentUploader($files));
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactMessage);
            $em->flush();
            /**
             * Mail Service
             * Mail templateleri hazırla ve buraya ekle
             */

            $this->addFlash('success', 'Kaydetme İşlemi Başarılı');
            return $this->redirectToRoute('admin_contactmessage_index', array(), 301);
        }

        return $this->render('admin/contact-message/add.html.twig', [
            'page_header' => $page_header,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/contactmessage/detail/{id}", name="admin_contactmessage_detail")
     * @Method("GET")
     */
    public function detailAction(ContactMessages $contactMessages)
    {
        $page_header = array(
            'page_header'=> 'Contact Message Detail',         // Ana Başlık
            'level'      => 'Contact Message',         // Üst sayfa
            'herePage'   => 'Contact Message',         // bulunduğun sayfa
            'href'       => '/admin/contactmessage',  // sayfa urlsi
            'childUrl'   => '/admin/contactmessage/detail',             // alt sayfa urlsi
            'page_title' => 'İletişim Mesajları Detayı',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
            ),
        );
        $read = $contactMessages -> getReadByAdmin();
            if ( $read == 0) {
                $em = $this->getDoctrine()->getManager();
                $readItem = $em->getRepository('AppBundle:ContactMessages')->find( $contactMessages -> getId() );
                    $readItem -> setReadByAdmin( 1 );
                    $em -> flush();
            }

        $attachmentExt = "";
        $ext = $contactMessages -> getAttachment();
        if ( $ext != "" ) {
        $ext = explode(".", $ext);
            if ( $ext[1] == "doc" || $ext[1] == "docx" || $ext[1] == "pdf" || $ext[1] == "odt" || $ext[1] == "txt") {
                $attachmentExt = "document";
            }
            elseif ($ext[1] == "jpg" || $ext[1] == "jpeg" || $ext[1] == "bmp" || $ext[1] == "png") {
                $attachmentExt = "img";
            }
        }

        return $this->render('admin/contact-message/detail.html.twig', [
            'page_header' => $page_header,
            'post' => $contactMessages,
            'attachmentExt' => $attachmentExt,
        ]);
    }
    /**
     * @Route("/admin/contantmessage/back-post/{id}/", name="admin_contactmessage_backpost")
     * @Method({"GET"})
     */
    public function backPostAction($id, ContactMessages $contactMessages)
    {
        $page_header = array(
            'page_header'=> 'Reply Message',         // Ana Başlık
            'level'      => 'Reply Message',         // Üst sayfa
            'herePage'   => 'Reply Message',         // bulunduğun sayfa
            'href'       => '/admin/contactmessage/back-post/' . $id,  // sayfa urlsi
            'childUrl'   => '/admin/contactmessage/detail/' . $id,             // alt sayfa urlsi
            'page_title' => 'Mail Oluştur',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'js/bootstrap3-wysihtml5.all.min.js'
            ),
            'page_styles' => array(
                'css/bootstrap3-wysihtml5.min.css'
            )
        );


        return $this->render('admin/contact-message/backpost.html.twig', array(
            'page_header' => $page_header,
            'post' => $contactMessages,
        ));
    }
    /**
     * @Route("/admin/contactmessage/delete/{id}", name="admin_contactmessage_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteItem = $em->getRepository('AppBundle:ContactMessages')->find( $id );
        if ( $deleteItem -> getRemove() == 0 ) {
            $deleteItem -> setRemove( 1 );
        }
        $em -> flush();
        $this->addFlash('success', 'Silme İşlemi Başarılı');
        return $this->redirectToRoute('admin_contactmessage_index', array(), 301);
    }
    /**
     * @Route("/admin/contactmessage/bulkDelete", name="admin_contactmessage_bulkDelete")
     * @Method({"GET", "POST"})
     */
    public function bulkDeleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if($request -> isMethod('POST') && $request->request->get('btn_bulkDelete')) {
            foreach($request->request->all() as $key => $value){
                $tmp = explode('_',$key);
                if($tmp[0] == 'bulkDelete') {
                    $category = $em->getRepository('AppBundle:ContactMessages')->find( $value );
                    $category -> setRemove(1);
                }
            }
            $em -> flush();
            $this->addFlash('success', 'Seçili alanlar başarı ile silindi');
        }
        return $this->redirectToRoute("admin_contactmessage_index", array(), 301);
    }
    /**
     * @Route("/admin/contactmessage/important/{id}", name="admin_contactmessage_importantSetter")
     * @Method({"GET", "POST"})
     */
    public function isImportantSetter(Request $request, $id = null)
    {
        if (!$request->isXmlHttpRequest())
        {
            throw new NotFoundHttpException();
        }
        $activeStatus = $request->request->get('active');
        if($activeStatus == "checked"){ $activeStatus = 0;} else {$activeStatus = 1;}
        $em = $this->getDoctrine()->getManager();
        $activeProcess = $em->getRepository(ContactMessages::class)->find( $id );
        $activeProcess->setImportant($activeStatus);
        $em -> flush();
        return new JsonResponse($activeStatus);
    }
    /**
     * @Route("/admin/contactmessage/show-important/{reference}/{page}/", defaults={"page": 1}, requirements={"page": "[1-9]\d*"}, name="admin_show_important")
     */
    public function showImportantAction(Request $request, $reference = null, $page = null)
    {
        $page_header = array(
            'page_header'=> 'Contact Message',         // Ana Başlık
            'level'      => 'Contact Message',         // Üst sayfa
            'herePage'   => 'Contact Message',         // bulunduğun sayfa
            'href'       => '/admin/contactmessage',  // sayfa urlsi
            'childUrl'   => '',             // alt sayfa urlsi
            'page_title' => 'İletişim Mesajları',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'build/iCheck/icheck.min.js'
            ),
            'page_styles' => array(
                'build/iCheck/flat/blue.css'
            )
        );
        if($reference == "u") {
            $contactMessage = $em = $this->getDoctrine()->getManager()
                ->createQuery(
                    'SELECT ccm
                    FROM AppBundle:ContactMessages ccm
                    WHERE ccm.important = :important AND ccm.remove = 0
                    ORDER BY ccm.sendDate ASC'
                )
                ->setParameter('important', 1);

            /**
             * @var $paginator \Knp\Component\Pager\Paginator
             */
            $paginator  = $this->get('knp_paginator');
            $contactMessage = $paginator -> paginate(
                $contactMessage,
                $request -> query -> getInt('page', $page),
                $request -> query -> getInt('limit', 20)
            );
        } else {
            $this-> redirectToRoute("admin_contactmessage_index", array(), 301);
        }

        return $this->render('admin/contact-message/index.html.twig', array(
            'page_header' => $page_header,
            'contactMessage' => $contactMessage
        ));
    }
    /**
     * @Route("/admin/banned", name="admin_banned")
     */
    public function bannedAction()
    {
        $ban = "<center> <h1>Genç Dostum Anlamadım Galiba...  Onur Tarafından  B A N L A N D I N....</h1></center>";
        return $ban;
    }

}