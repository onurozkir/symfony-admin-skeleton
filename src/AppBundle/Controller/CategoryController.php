<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class CategoryController extends Controller
{
    public $session;
    public function __construct(SessionInterface $session)
    {
        $this-> session = $session;
    }
    /**
     * @Route("/admin/category/reset-filter/{slug}/", name="admin_category_reset_filter")
     * @Route("/admin/category/{page}/", defaults={"page": "1"}, requirements={"page": "[1-9]\d*"}, name="admin_category_index")
     * @Method({"GET", "POST"})
     * @Cache(smaxage=10)
     */
    public function indexAction(Request $request, $slug = null, $page = null)
    {
        $page_header = array(
            'page_header'=> 'Categories',         // Ana Başlık
            'level'      => 'Categories',         // Üst sayfa
            'herePage'   => 'Categories',         // bulunduğun sayfa
            'href'       => '/admin/category',  // sayfa urlsi
            'childUrl'   => '',             // alt sayfa urlsi
            'page_title' => 'Kategoriler',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'js/fastclick.js'
            ),
        );
        if($slug == "clean")
        {
            $this->session->remove('filterCategory');
            return $this->redirectToRoute('admin_category_index');
        }


        if ($request->request->get('filterKeys') && $request->isMethod('POST')){
            $filterKeys = trim($request->request->get('table-search'));
            if ($this->session->get('filterCategory') != $filterKeys){
                $this->session->remove('filterCategory');
                $this->session->set('filterCategory', $filterKeys);
            }
        }


        if ($this->session->get('filterCategory') != ""){
            $repository = $em = $this->getDoctrine()->getManager()->getRepository(Category::class);
            $query = $repository->createQueryBuilder('c')
                ->where('c.title LIKE :title')
                ->andWhere('c.remove = :remove')
                ->setParameters(array('title'=>'%'.strtolower($this->session->get('filterCategory')).'%', 'remove' => 0))
                ->getQuery();
            $category = $query->getArrayResult();
        } else {
            $category = $em = $this-> getDoctrine()->getManager()
                ->createQuery(
                    'SELECT cc
                     FROM AppBundle:Category cc
                     WHERE cc.remove = :remove')
                ->setParameter('remove', 0);
               // $dql = "SELECT cc FROM AppBundle:Category cc WHERE cc.remove = 0";
        }

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $categories = $paginator -> paginate(
            $category,
            $request -> query -> getInt('page', $page),
            $request -> query -> getInt('limit', 5)
        );





        return $this->render('admin/category/index.html.twig', [
            'page_header' => $page_header,
            'categories'  => $categories,
        ]);

    }
    /**
     * @Route("/admin/category/add/", name="admin_category_add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {
        $page_header = array(
            'page_header'=> 'Categories Add',         // Ana Başlık
            'level'      => 'Categories',         // Üst sayfa
            'herePage'   => 'Category Add',         // bulunduğun sayfa
            'href'       => '/admin/category/',  // sayfa urlsi
            'childUrl'   => '/admin/category/add',             // alt sayfa urlsi
            'page_title' => 'Kategori Ekle',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                'js/fastclick.js'
            ),
        );
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $title      = $form['title'] -> getData();
            $category -> setTitle( $title );
            $em = $this->getDoctrine() -> getManager();
            $em -> persist($category);
            $em -> flush();
            $this->addFlash('success', 'Kaydetme İşlemi Başarılı');
            return $this->redirectToRoute('admin_category_index', array(), 301);
        }

        return $this->render('admin/category/add.html.twig', [
            'page_header' => $page_header,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin/category/detail/{id}", name="admin_category_detail")
     * @Method("GET")
     */
    public function detailAction($id)
    {
    }
    /**
     * @Route("/admin/category/edit/{id}", requirements={"id": "\d+"}, name="admin_category_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $page_header = array(
            'page_header'=> 'Categories Edit',         // Ana Başlık
            'level'      => 'Categories',         // Üst sayfa
            'herePage'   => 'Category Edit',         // bulunduğun sayfa
            'href'       => '/admin/category/',  // sayfa urlsi
            'childUrl'   => '/admin/category/edit/'. $id,             // alt sayfa urlsi
            'page_title' => 'Kategori Düzenle',     // title baslıgı
            'page_script'=> array(          // sayfa bazlı scritpler
                'js/jquery-slimscroll/jquery.slimscroll.min.js',
                ),
        );

        $category = $this->getDoctrine()
            ->getRepository('AppBundle:Category')
            ->find( $id );

        $category -> setTitle( $category->getTitle() );
        $category -> setSort ( $category->getSort() );

        $form = $this->createForm(CategoryType::class, $category);

        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $title = $form['title']-> getData();
            $sort  = $form['sort'] -> getData();
            $date  = new \DateTime('now');

            $em = $this->getDoctrine()->getManager();
            $categories = $em->getRepository('AppBundle:Category')->find($id);

            $categories->setTitle($title);
            $categories->setSort($sort);
            $categories->setUpdateDate($date);

            $em->flush();
            $this->addFlash('success', 'Güncelleme İşlemi Başarılı');
            return $this->redirectToRoute('admin_category_index', array(), 301);
        }
        return $this->render('admin/category/edit.html.twig', array(
            'page_header' => $page_header,
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/admin/category/delete/{id}", name="admin_category_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('AppBundle:Category')->find( $id );
        if ( $category -> getRemove() == 0 ) {
            $category -> setRemove(1);
        }
        $em -> flush();
        $this->addFlash('success', 'Silme İşlemi Başarılı');
        return $this->redirectToRoute('category_index_paginated', array(), 301);
    }
    /**
     * @Route("/admin/category/bulkDelete", name="admin_category_bulkDelete")
     * @Method({"GET", "POST"})
     */
    public function bulkDeleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if($request -> isMethod('POST') && $request->request->get('btn_bulkDelete')) {
            foreach($request->request->all() as $key => $value){
                $tmp = explode('_',$key);
                if($tmp[0] == 'bulkDelete') {
                    $category = $em->getRepository('AppBundle:Category')->find( $value );
                    $category -> setRemove(1);
                }
            }
        $em -> flush();
            $this->addFlash('success', 'Seçili alanlar başarı ile silindi');
        }
        return $this->redirectToRoute("admin_category_index", array(), 301);
    }
    /**
    * @Route("/admin/category/active/{id}", name="admin_category_activeSetter")
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
        $activeProcess = $em->getRepository('AppBundle:Category')->find($id);
        $activeProcess->setActive($activeStatus);
        $em -> flush();
        return new JsonResponse($activeStatus);
    }
}
