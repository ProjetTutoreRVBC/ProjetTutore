<?php

namespace AppBundle\Controller;

use AppBundle\Model\Upload;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UploadController extends Controller
{
    /**
     * @Route("upload")
     */
    public function uploadAction()
    {
      $size ="";
      $msg="";
      if(isset($_FILES['file'])) {
        $file = new Upload();
        $msg = $file->add($_FILES);
        $size = $_FILES["file"]["size"] / 1024;
      }
      return $this->render('View/upload.html.php',array("size"=>$size,"status"=>$msg));
      
    }
}