<?php
/**
 * Created by PhpStorm.
 * User: onurozkir
 * Date: 8/22/17
 * Time: 1:54 PM
 */
namespace AppBundle\Service;

use AppBundle\Utils\Slugger;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\RouterInterface;

class FileUpload
{
    protected $session;
    protected $router;
    protected $slugger;
    protected $targetDir;
    public function __construct(RouterInterface $router, Slugger $slugger){
        $this->session = new Session();
        $this->router = $router;
        $this->slugger = $slugger;
    }
    public function imageUploader(Request $request, Slugger $slugger, UploadedFile $uploadedFile)
    {

    }

    public function documentUploader($files = array())
    {
             $ext = $files -> guessExtension();
        if ( $ext == 'doc' || $ext == 'docx' || $ext == 'txt' || $ext == 'odt' || $ext == 'xsl' || $ext == 'xlsx' )
        {
            $fileName = $this -> slugger -> fileSlugify( $files->getClientOriginalName() );
            $fileName = explode(".", $fileName);
            if ( $fileName[1] == "sql" ) { return $this->router->generate('admin_banned'); }
            $fileName = array_shift($fileName);
            $fileName = $fileName . "-". date('mdYHis'). "." . $files->guessExtension();
            if($files -> getClientSize() > 1200000){
                $this->session->getFlashBag()->add('error', '12Mb dan daha büyük dokuman yükleyemezsiniz. Şuanki Boyutu = ' .$files->getClientSize() . 'kB');
                return new RedirectResponse($this->router->generate("admin_contactmessage_add"));
            }
            $files -> move(
                $this->getTargetDir("doc"),
                $fileName
            );
        }else{
            $this-> session->getFlashBag()->add('error', ' Yüklediğniz Dosyanın Uzantısı Desteklenmemektedir. Uzantınız = '. $files->guessExtension() );
            return new RedirectResponse($this->router->generate("admin_contactmessage_add"));
        }
        return $fileName;
    }
    public function getTargetDir( $parameter )
    {
        switch ( $parameter ) {
            case "img":
                $uploadDirectory = "/assets/uploads/images";
                break;
            case "doc":
                $uploadDirectory = "/assets/uploads/document";
                break;
            case "video";
                $uploadDirectory = "/assets/uploads/videos";
                break;
            default:
                $uploadDirectory = "/assets/uploads/";
        }
        $this->targetDir =  getcwd() . $uploadDirectory;
        return $this->targetDir;
    }
}