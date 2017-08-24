<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 8/9/17
 * Time: 10:53 AM
 */
namespace AppBundle\Controller;
use AppBundle\Entity\News;
use AppBundle\Form\NewsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class NewsController extends Controller
{
    public $session;
    public function __construct(SessionInterface $session)
    {
        $this-> session = $session;
    }
    /**
     * @Route("/admin/news", name="admin_news_index")
     * @Route("/admin/news/reset-filter/{slug}/", name="admin_news_reset_filter")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request, $slug= null)
    {
        // breadcrumb, title, css, meta, keywords, description settings
        // sayfaya özel script ve css dosyası yoksa page_Script ve page_styles alanı silinir.
        $page_header = array(
            'page_header'=> 'News',         // Ana Başlık
            'level'      => 'News',         // Üst sayfa
            'herePage'   => 'News',         // bulunduğun sayfa
            'href'       => '/admin/news',  // sayfa urlsi
            'childUrl'   => '',             // alt sayfa urlsi
            'page_title' => 'Haberler',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'js/fastclick.js'
            ),
        );
        if($slug == "clean")
        {
            $this->session->remove('filterNews');
            return $this->redirectToRoute('admin_news_index');
        }
        if ($request->request->get('filterKeys') && $request->isMethod('POST')){
            $filterKeys = trim($request->request->get('table-search'));
            if ($this->session->get('filterNews') != $filterKeys){
                $this->session->remove('filterNews');
                $this->session->set('filterNews', $filterKeys);
            }
        }
        if ($this->session->get('filterNews') != ""){
            $repository = $em = $this->getDoctrine()->getManager()->getRepository(News::class);
            $query = $repository->createQueryBuilder('n')
                ->where('n.title LIKE :title')
                ->andWhere('n.remove = :remove')
                ->setParameters(array('title'=>'%'.strtolower($this->session->get('filterNews')).'%', 'remove' => 0))
                ->getQuery();
            $news = $query->getArrayResult();
        } else {
            $news = $em = $this-> getDoctrine()->getManager()
                ->getRepository('AppBundle:News')->createQueryBuilder('n')
                ->innerJoin("n.tags",'g')
                ->where("n.remove = :remove")
                ->setParameter('remove', 0)
                ->getQuery()
                ->getResult();
        }
        return $this->render('admin/news/index.html.twig', array(
            'page_header'   => $page_header,
            'news'          => $news,
        ));
    }
    /**
     * @Route("admin/news/add", name="admin_news_add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request, UploadedFile $file = null)
    {
        $page_header = array(
            'page_header'=> 'News',         // Ana Başlık
            'level'      => 'News',         // Üst sayfa
            'herePage'   => 'News Add',     // bulunduğun sayfa
            'href'       => '/admin/news/',  // sayfa urlsi
            'childUrl'   => '/admin/news/add',  // alt sayfa urlsi
            'page_title' => 'Haber Ekle',     // title baslıgı
            'page_script'=> array(        // sayfa bazlı scritpler
                'js/fastclick.js',
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'build/select2/dist/js/select2.full.min.js'
            ),
            'page_styles' => array(
                'build/select2/dist/css/select2.min.css',
            ),
        );
        $news = new News;
        $form = $this->createForm(NewsType::class, $news);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $tags           = $form['tags']         -> getData();
            $title          = $form['title']        -> getData();
            $description    = $form['description']  -> getData();
            $seoTitle       = $form['seoTitle']     -> getData();
            $seoKeywords    = $form['seoKeywords']  -> getData();
            $seoDescription = $form['seoDescription']->getData();
            $files           = $form['imageUrl']     -> getData();

            if ($files -> guessExtension() != 'jpeg' || $files -> guessExtension() != 'jpg' ||
                $files -> guessExtension() != 'png' || $files -> guessExtension() != 'bmp' ){
                $this->addFlash('danger', ' Yüklediğniz Dosyanın Uzantısı Desteklenmemektedir. Uzantınız = '. $files->guessExtension() );
                $this->redirectToRoute('admin_news_add', array(), 301);
            }
            $fileName = $files->getClientOriginalName();
            $fileName = explode(".", $fileName);
            $fileName = array_shift($fileName);
            $fileName = $fileName . "-". date('Y-d-m'). "." . $files->guessExtension();

            if($files -> getClientSize() > 5000000){
                $this->addFlash('danger', '5Mb dan daha büyük resim yükleyemezsiniz. Şuanki Boyutu = ' .$files->getClientSize() . 'kB');
                $this->redirectToRoute('admin_news_add', array(), 301);
            }

            $files -> move(
                $this->getParameter('news_files'),
                $fileName
            );

            $news -> setTitle( $title );
            $news -> setDescription( $description );
            $news -> setSeoTitle( $seoTitle );
            $news -> setSeoKeywords( $seoKeywords );
            $news -> setSeoDescription( $seoDescription );
            $news -> setTags( $tags );
            $news -> setImageUrl( $fileName );
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($news);
            $em -> flush();
            $this->addFlash('success', 'Kaydetme İşlemi Başarılı');
            return $this->redirectToRoute('admin_news_index', array(), 301);
        }
        return $this->render('admin/news/add.html.twig', [
            'page_header' => $page_header,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/news/detail/{id}", name="admin_news_detail")
     * @Method("GET")
     */
    public function detailAction($id)
    {
    }
    /**
     * @Route("/admin/news/edit/{id}", requirements={"id": "\d+"}, name="admin_news_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $page_header = array(
            'page_header'=> 'News Edit',         // Ana Başlık
            'level'      => 'News',         // Üst sayfa
            'herePage'   => 'News Edit',         // bulunduğun sayfa
            'href'       => '/admin/news/',  // sayfa urlsi
            'childUrl'   => '/admin/news/edit/'. $id,             // alt sayfa urlsi
            'page_title' => 'Haber Düzenle',     // title baslıgı
            'page_script'=> array(        // sayfa bazlı scritpler
                'js/fastclick.js',
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'build/select2/dist/js/select2.full.min.js'
            ),
            'page_styles' => array(
                'build/select2/dist/css/select2.min.css',
            ),
        );

        $news = $this->getDoctrine()
            ->getRepository('AppBundle:News')
            ->find( $id );

        $news -> setTitle( $news->getTitle() );
        $news -> setDescription ( $news->getDescription() );
        $news -> setDescription ( $news->getDescription() );
        $news -> setSeoTitle    ( $news->getSeoTitle() );
        $news -> setSeoDescription ( $news->getSeoDescription() );
        $news -> setSeoKeywords ( $news->getSeoKeywords() );
        $news -> setSeoKeywords ( $news->getSeoKeywords() );
        $newsImage = $news -> getImageUrl();


        $form = $this->createForm(NewsType::class, $news);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $title          = $form['title']        -> getData();
            $description    = $form['description']  -> getData();
            $seoTitle       = $form['seoTitle']     -> getData();
            $seoKeywords    = $form['seoKeywords']  -> getData();
            $seoDescription = $form['seoDescription']->getData();
            $updateDate  = new \DateTime('now');

            $em = $this->getDoctrine()->getManager();
            $newsUpdate = $em->getRepository('AppBundle:News')->find($id);

            $newsUpdate->setTitle($title);
            $newsUpdate->setDescription($description);
            $newsUpdate->setSeoTitle($seoTitle);
            $newsUpdate->setSeoKeywords($seoKeywords);
            $newsUpdate->setSeoDescription($seoDescription);
            $newsUpdate->setUpdateDate($updateDate);


            $em->flush();
            $this->addFlash('success', 'Güncelleme İşlemi Başarılı');
            return $this->redirectToRoute('admin_news_index', array(), 301);
        }
        return $this->render('admin/news/edit.html.twig', array(
            'page_header' => $page_header,
            'form' => $form->createView(),
            'newsImage' => $newsImage,
        ));
    }
    /**
     * @Route("/admin/news/delete/{id}", name="admin_news_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AppBundle:News')->find( $id );
        if ( $category -> getRemove() == 0 ) {
            $category -> setRemove(1);
        }
        $em -> flush();
        $this->addFlash('success', 'Silme İşlemi Başarılı');
        return $this->redirectToRoute('admin_news_index', array(), 301);
    }
    /**
     * @Route("/admin/news/bulkDelete", name="admin_news_bulkDelete")
     * @Method({"GET", "POST"})
     */
    public function bulkDeleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if($request -> isMethod('POST') && $request->request->get('btn_bulkDelete')) {
            foreach($request->request->all() as $key => $value){
                $tmp = explode('_',$key);
                if($tmp[0] == 'bulkDelete') {
                    $category = $em->getRepository('AppBundle:News')->find( $value );
                    $category -> setRemove(1);
                }
            }
            $em -> flush();
            $this->addFlash('success', 'Seçili alanlar başarı ile silindi');
        }
        return $this->redirectToRoute("admin_news_index", array(), 301);
    }
    /**
     * @Route("/admin/news/active/{id}", name="admin_news_activeSetter")
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
        $activeProcess = $em->getRepository('AppBundle:News')->find($id);
        $activeProcess->setActive($activeStatus);
        $em -> flush();
        return new JsonResponse($activeStatus);
    }



}