<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Nostreamer;
use AppBundle\Entity\User;

//Others
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class VideoController extends Controller
{
    /**
     * @Route("/watch?video/{slug}",name="video_show")
     */
    public function showAction($id)
    { 
      return $this->render('View/video.html.php');
    }
}