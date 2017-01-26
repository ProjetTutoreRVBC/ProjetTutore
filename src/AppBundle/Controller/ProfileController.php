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
      $recurence = false;
      if(isset($_POST) && $_POST != null){
       if(isset($_COOKIE['last_post']) && isset($_POST['new_post'])){
        if($_COOKIE['last_post'] == $_POST['new_post'])
         $recurence = true;
       }
       if(isset($_POST['new_post']) && $recurence == false){
         $post = new Post();
         $post->add($info_page['idPage'],$info_page['idChannel'],$_POST['new_post']);
         $info_post = $user_post->getListPost($info_page["idPage"]);
         setcookie("last_post",$_POST['new_post']);;
        }
        if(isset($_POST['delete_post'])){
         $post = new Post();
         $post->delete($_POST['idPost']);
         $info_post = $user_post->getListPost($info_page["idPage"]);
        }
        
        if(isset($_POST['like'])){
         $post = new Post();
         $post->setLike($_POST['id-post-like']);
         $info_post = $user_post->getListPost($info_page["idPage"]);
        }
        
        if(isset($_POST['dislike'])){
         $post = new Post();
         $post->setDislike($_POST['id-post-dislike']); 
         $info_post = $user_post->getListPost($info_page["idPage"]);
        }
        
      }
      return $this->render('View/page.html.php',array("profile"=>$info_page,"posts"=>$info_post));
    }
  
    
}