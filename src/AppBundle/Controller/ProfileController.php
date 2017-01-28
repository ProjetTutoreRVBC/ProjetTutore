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
      $user = new Nostreamer();
      $info_page = $user_page->getPage($slug); 
      $user_post = new Post();
      $recurence = false;
      $info_vote = array();
      if(isset($_COOKIE['pseudo'])){
        if(isset($_POST) && $_POST != null){
         if(isset($_COOKIE['last_post']) && isset($_POST['new_post'])){
          if($_COOKIE['last_post'] == $_POST['new_post'])
           $recurence = true;
         }
         if(isset($_POST['new_post']) && $recurence == false){
           $post = new Post();
           $post->add($info_page['idPage'],$info_page['idChannel'],$_POST['new_post']);
           setcookie("last_post",$_POST['new_post']);;
          }
          if(isset($_POST['delete_post'])){
           $post = new Post();
           $post->delete($_POST['idPost']);
          }

          if(isset($_POST['like'])){
           $post = new Post();
           $user_id = $user->getId($_COOKIE['pseudo']); 
           $vote = $post->getVote($user_id['idNostreamer'],$_POST['id-post-like']); 
           $type = "insert"; 
           if($vote) 
             $type = "update";
           $post->setVote($_POST['id-post-like'],$user_id['idNostreamer'],1,0,$type);
          }

          if(isset($_POST['dislike'])){
           $post = new Post();
           $user_id = $user->getId($_COOKIE['pseudo']); 
           $vote = $post->getVote($user_id['idNostreamer'],$_POST['id-post-dislike']); 
           $type = "insert"; 
           if($vote) 
             $type = "update";
            $post->setVote($_POST['id-post-dislike'],$user_id['idNostreamer'],0,1,$type);
          }
        }
          $user_id = $user->getId($_COOKIE['pseudo']);  
          $list = $user_post->getListVote($user_id['idNostreamer']);
          for($i=0;$i < sizeof($list); $i++){
            $info_vote[$list[$i]['idPost']]['like'] = $list[$i]['likes'];
            $info_vote[$list[$i]['idPost']]['dislike'] = $list[$i]['dislikes'];
          }
           // update page
      }
      $info_post = $user_post->getListPost($info_page["idPage"]);
      return $this->render('View/page.html.php',array("profile"=>$info_page,"posts"=>$info_post,"vote"=>$info_vote));
    }
  
    
}