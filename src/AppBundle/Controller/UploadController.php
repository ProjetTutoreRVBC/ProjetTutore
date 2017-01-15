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
      if(isset($_FILES['file'])) {
        $file = new Upload();
        $file->add($_FILES);
      }
      return $this->render('View/upload.html.php');
    }
}