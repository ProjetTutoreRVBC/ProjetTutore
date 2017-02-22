<?php

namespace AppBundle\Controller;

use AppBundle\Model\Channel;
use AppBundle\Model\Upload;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UploadController extends Controller
{
    /**
     * Matches /upload/*
     * 
     * @Route("/upload/{slug}",name="upload_index")
     */
    public function showAction($slug)
    {
      $size ="";
      $msg="";
      if(isset($_POST) && $_POST != null && isset($_FILES['miniature']) && isset($_FILES['video'])) {
        
        $file = new Upload();
        $c = new Channel();
        $info_c = $c->getChannel($slug);
        
        $f = array("file"=>$_FILES['video'],"miniature"=>$_FILES['miniature'],"description"=>$_POST["description"],"idChannel"=>$info_c['idChannel']);
        
        $file->add($f,$_POST['video_name'],"video");
        return $this->redirectToRoute('home');
      }
      return $this->render('View/upload.html.php',array("size"=>$size,"status"=>$msg));
      
    }
}