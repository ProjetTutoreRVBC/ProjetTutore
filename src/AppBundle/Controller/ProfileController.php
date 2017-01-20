<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Post;
use AppBundle\Model\Page;
use AppBundle\Model\Nostreamer;
use AppBundle\Entity\User;

//Others
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ProfileController extends Controller
{
    /**
     * Matches /profile/*
     *
     * @Route("/profile/{slug}",name="profile_index")
     */
    public function showAction($slug)
    { 
      $user_page = new Page();
      $info_page = $user_page->getPage($slug); 
      $user_post = new Post();
      $info_post = $user_post->getListPost($info_page["idPage"]);
      return $this->render('View/page.html.php',array("profile"=>$info_page,"posts"=>$info_post));
    }
}