<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ContactAddress;
use AppBundle\Form\ContactAddressType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    private $session;
    public function __construct(SessionInterface $session)
    {
        $this-> session = $session;
    }
    /**
     * @Route("/admin/contact/{page}", defaults={"page": 1}, requirements={"page": "[1-9]\d*"}, name="admin_contact_index")
     * @Route("/admin/contact/reset-filter/{slug}/", name="admin_contact_reset_filter")
     * @Method({"GET", "POST"})
     * @Cache(smaxage=20)
     */
    public function indexAction(Request $request, $page = null, $slug = null)
    {
        $page_header = array(
            'page_header'=> 'Contact',         // Ana Başlık
            'level'      => 'Contact',         // Üst sayfa
            'herePage'   => 'Contact',         // bulunduğun sayfa
            'href'       => '/admin/contact',  // sayfa urlsi
            'childUrl'   => '',             // alt sayfa urlsi
            'page_title' => 'İletişim Bilgileri',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
            ),
        );

        if ($slug == "clean")
        {
            $this->session->remove('filterContactAddress');
            return $this->redirectToRoute('admin_contact_index');
        }
        if ($request->request->get('filterKeys') && $request->isMethod('POST')){
            $filterKeys = trim($request->request->get('table-search'));
            if ($this->session->get('filterContactAddress') != $filterKeys){
                $this->session->remove('filterContactAddress');
                $this->session->set('filterContactAddress', $filterKeys);
            }
        }
        if ($this->session->get('filterContactAddress') != ""){
            $repository = $em = $this->getDoctrine()->getManager()->getRepository(ContactAddress::class);
            $query = $repository->createQueryBuilder('ca')
                ->where('ca.title LIKE :title')
                ->andWhere('ca.remove = :remove')
                ->setParameters(array('title'=>'%'.strtolower($this->session->get('filterContactAddress')).'%', 'remove' => 0))
                ->getQuery();
            $contactAddress = $query->getArrayResult();
        }
            else {
            $contactAddress = $em = $this-> getDoctrine()->getManager()
                ->createQuery(
                    'SELECT cca
                     FROM AppBundle:ContactAddress cca
                     WHERE cca.remove = :remove')
                ->setParameter('remove', 0);
        }
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $contactAddress = $paginator -> paginate(
            $contactAddress,
            $request -> query -> getInt('page', $page),
            $request -> query -> getInt('limit', 15)
        );
        return $this->render("admin/contact/index.html.twig", array(
            'page_header' => $page_header,
            'contactAddress' => $contactAddress,

        ));
    }
    /**
     * @Route("/admin/contact/add", name="admin_contactaddress_add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
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
        $contactAddress = new ContactAddress();
        $form = $this->createForm(ContactAddressType::class, $contactAddress);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $contactAddress -> setTitle( $form['title'] -> getData() );
            $contactAddress -> setCompanyName( $form['companyName'] -> getData() );
            $contactAddress -> setAddress( $form['address'] -> getData() );
            $contactAddress -> setPhone( $form['phone'] -> getData() );
            $contactAddress -> setPhoneTwo( $form['phoneTwo'] -> getData() );
            $contactAddress -> setFax( $form['fax'] -> getData() );
            $contactAddress -> setMail( $form['mail'] -> getData() );
            $contactAddress -> setAuthPerson( $form['authPerson'] -> getData() );
            $contactAddress -> setType( $form['type'] -> getData() );
            $contactAddress -> setCityId( $form['cityId'] -> getData()-> getTitle() );
            $coordinate  = $form['coordinate'] -> getData();
            if (strstr($coordinate, ";")){
                $coordinate = explode(";", $coordinate);
                if (strlen($coordinate[0]) != 9 && strlen($coordinate[1]) != 9 ){
                    $this->addFlash('danger', 'Koordinant Sisteminde yanlış ifadeler var');
                    return $this->redirectToRoute('admin_contactaddress_add', array(), 301);
                }else{
                    $contactAddress -> setCoordinate( $form['coordinate'] -> getData() );
                }
            }else{
                $this->addFlash('error', 'Koordinant Sisteminde yanlış ifadeler var');
                return $this->redirectToRoute('admin_contactaddress_add', array(), 301);
            }
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($contactAddress);
            $em -> flush();
            $this->addFlash('success', 'Kaydetme İşlemi Başarılı');
            return $this->redirectToRoute('admin_contact_index', array(), 301);
        }

        return $this->render('admin/contact/add.html.twig', [
            'page_header' => $page_header,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/contact/detail/{id}", name="admin_contactaddress_detail")
     * @Method("GET")
     */
    public function detailAction(ContactAddress $post)
    {
        $page_header = array(
            'page_header'=> 'Contact Address Detail',         // Ana Başlık
            'level'      => 'Contact Address',         // Üst sayfa
            'herePage'   => 'Contact Address',         // bulunduğun sayfa
            'href'       => '/admin/contact',  // sayfa urlsi
            'childUrl'   => '/admin/contact/detail',             // alt sayfa urlsi
            'page_title' => 'İletişim Adresi Detay',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'https://maps.googleapis.com/maps/api/js?key=AIzaSyB5TMd1gvSrm38rIXMG6M0luqsfONw9FHE&callback=myMap',

            ),
        );

        return $this->render('admin/contact/detail.html.twig', [
            'page_header' => $page_header,
            'posts' => $post,
        ]);
    }
    /**
     * @Route("/admin/contact/edit/{id}", requirements={"id": "\d+"}, name="admin_contactaddress_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $page_header = array(
            'page_header'=> 'Contact Address',         // Ana Başlık
            'level'      => 'Contact Address',         // Üst sayfa
            'herePage'   => 'Contact Address Edit',         // bulunduğun sayfa
            'href'       => '/admin/contact',  // sayfa urlsi
            'childUrl'   => '/admin/contact/edit/'. $id,             // alt sayfa urlsi
            'page_title' => 'Contact Address Düzenle',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
            ),
        );

        $contactAddress = $this->getDoctrine()
            ->getRepository('AppBundle:ContactAddress')
            ->find( $id );

        $contactAddress -> setTitle( $contactAddress->getTitle() );
        $contactAddress -> setAddress( $contactAddress->getAddress() );
        $contactAddress -> setCompanyName( $contactAddress->getCompanyName() );
        $contactAddress -> setPhone( $contactAddress->getPhone() );
        $contactAddress -> setPhoneTwo( $contactAddress->getPhoneTwo() );
        $contactAddress -> setFax( $contactAddress->getFax() );
        $contactAddress -> setMail( $contactAddress->getMail() );
        $contactAddress -> setAuthPerson( $contactAddress->getAuthPerson() );
        $contactAddress -> setType( $contactAddress->getType() );
        $contactAddress -> setCoordinate( $contactAddress->getCoordinate() );
        $contactAddress -> setCityId( $contactAddress -> getCityId() );



        $form = $this->createForm(ContactAddressType::class, $contactAddress);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $title =  $form['title'] -> getData() ;
            $companyName= $form['companyName'] -> getData() ;
            $address    = $form['address'] -> getData() ;
            $phone      = $form['phone'] -> getData() ;
            $phoneTwo   = $form['phoneTwo'] -> getData() ;
            $fax        = $form['fax'] -> getData() ;
            $mail       = $form['mail'] -> getData() ;
            $authPerson = $form['authPerson'] -> getData() ;
            $type       = $form['type'] -> getData() ;
            $cityId     = $form['cityId'] -> getData()-> getTitle() ;
            $date       = new \DateTime('now');
            $coordinate = $form['coordinate'] -> getData();
            if (strstr($coordinate, ";")){
                $coordinate = explode(";", $coordinate);
                if (strlen($coordinate[0]) != 9 && strlen($coordinate[1]) != 9 ){
                    $this->addFlash('danger', 'Koordinant Sisteminde yanlış ifadeler var');
                    return $this->redirectToRoute('admin_contactaddress_add', array(), 301);
                }else{
                    $coordinate =  $form['coordinate'] -> getData() ;
                }
            }else{
                $this->addFlash('danger', 'Koordinant Sisteminde yanlış ifadeler var');
                return $this->redirectToRoute('admin_contactaddress_add', array(), 301);
            }

            $em = $this->getDoctrine()->getManager();
            $contactAddress = $em->getRepository('AppBundle:ContactAddress')->find($id);

            $contactAddress->setTitle($title);
            $contactAddress->setCompanyName($companyName);
            $contactAddress->setAddress($address);
            $contactAddress->setPhone($phone);
            $contactAddress->setPhoneTwo($phoneTwo);
            $contactAddress->setFax($fax);
            $contactAddress->setMail($mail);
            $contactAddress->setAuthPerson($authPerson);
            $contactAddress->setType($type);
            $contactAddress->setCityId($cityId);
            $contactAddress->setUpdateDate($date);

            $em->flush();
            $this->addFlash('success', 'Güncelleme İşlemi Başarılı');
            return $this->redirectToRoute('admin_contact_index', array(), 301);
        }
        return $this->render('admin/contact/edit.html.twig', array(
            'page_header' => $page_header,
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/admin/contact/delete/{id}", name="admin_contactaddress_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AppBundle:ContactAddress')->find( $id );
        if ( $category -> getRemove() == 0 ) {
            $category -> setRemove(1);
        }
        $em -> flush();
        $this->addFlash('success', 'Silme İşlemi Başarılı');
        return $this->redirectToRoute('admin_contact_index', array( 'id' =>  $id ), 301);
    }
    /**
     * @Route("/admin/contact/bulkDelete", name="admin_contactaddress_bulkDelete")
     * @Method({"GET", "POST"})
     */
    public function bulkDeleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if($request -> isMethod('POST') && $request->request->get('btn_bulkDelete')) {
            foreach($request->request->all() as $key => $value){
                $tmp = explode('_',$key);
                if($tmp[0] == 'bulkDelete') {
                    $category = $em->getRepository('AppBundle:ContactAddress')->find( $value );
                    $category -> setRemove(1);
                }
            }
            $em -> flush();
            $this->addFlash('success', 'Seçili alanlar başarı ile silindi');
        }
        return $this->redirectToRoute("admin_category_index", array(), 301);
    }
    /**
     * @Route("/admin/contact/active/{id}", name="admin_contactaddress_activeSetter")
     * @Method({"GET", "POST"})
     */
    public function isActiveSetter(Request $request, $id = null)
    {
        if (!$request->isXmlHttpRequest())
        {
            throw new NotFoundHttpException();
        }
        $activeStatus = $request->request->get('active');
        if($activeStatus == "true"){ $activeStatus = 1;} else {$activeStatus = 0;}
        $em = $this->getDoctrine()->getManager();
        $activeProcess = $em->getRepository('AppBundle:ContactAddress')->find( $id );
        $activeProcess->setActive($activeStatus);
        $em -> flush();
        return new JsonResponse($activeStatus);
    }
}