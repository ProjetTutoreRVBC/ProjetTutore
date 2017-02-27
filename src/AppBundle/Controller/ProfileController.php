<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Comment;
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
      $recurence_post = false;
      $recurence_comment =false;
      $info_vote = array();
      $current_user_page = array(0=>array("namePage" => ""));
      if(isset($_COOKIE['pseudo'])){
        if(isset($_POST) && $_POST != null){
         if(isset($_COOKIE['last_post']) && isset($_POST['new_post'])){
          if($_COOKIE['last_post'] == $_POST['new_post'])
           $recurence_post = true;
         }
         if(isset($_COOKIE['last_comment']) && isset($_POST['comment'])){
          if($_COOKIE['last_comment'] == $_POST['comment'])
           $recurence_comment = true;
         } 
         if(isset($_POST['new_post']) && $recurence_post == false){
           $post = new Post();
           $post->add($info_page['idPage'],$_POST['new_post']);
           setcookie("last_post",$_POST['new_post']);
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
          
          if(isset($_POST['send_comment']) && $recurence_comment == false){
           $com = new Comment();
           $user_id = $user->getId($_COOKIE['pseudo']);
           $message = $_POST['comment'];
           $page_id =  $info_page['idPage'];
           $post_id =  $_POST['post_id'];
           $page_ch =  $info_page['idChannel'];
           setcookie("last_comment",$_POST['comment']); 
           $com->setCommentPost($message,$post_id,$user_id['idNostreamer'],$page_id,$page_ch);
          }
          
          if(isset($_POST['delete_comment'])){
           $com = new Comment();
           $user_id = $user->getId($_COOKIE['pseudo']);
           $message = $_POST['idComment'];
           $com->deleteComment($_POST['idComment'],$user_id['idNostreamer']);
          }
          
        }
          $user_id = $user->getId($_COOKIE['pseudo']);  
          $list = $user_post->getListVote($user_id['idNostreamer']);
          for($i=0;$i < sizeof($list); $i++){
            $info_vote[$list[$i]['idPost']]['like'] = $list[$i]['likes'];
            $info_vote[$list[$i]['idPost']]['dislike'] = $list[$i]['dislikes'];
          }
        $current_user_page = $user_page->getMainPage($user_id['idNostreamer']);
      }
      $info_post = $user_post->getListPost($info_page["idPage"]);
      $info_post_comment = $user_post->getComments($info_page["idPage"]);
      $comments = array();
      for($i=0;$i < sizeof($info_post_comment); $i++){
            $comments[$info_post_comment[$i]['idPost']][$info_post_comment[$i]['idComment']]['dateComment'] = $info_post_comment[$i]['dateComment'];
            $comments[$info_post_comment[$i]['idPost']][$info_post_comment[$i]['idComment']]['pseudoNostreamer'] = $info_post_comment[$i]['pseudoNostreamer'];
            $comments[$info_post_comment[$i]['idPost']][$info_post_comment[$i]['idComment']]['text'] = $info_post_comment[$i]['messageComment'];
          }
      
      $subsPage = $user_page->getSubsPage($info_page["idPage"]);
      return $this->render('View/page.html.php',array("profile"=>$info_page,"subs"=>$subsPage,"posts"=>$info_post,"vote"=>$info_vote,"comments"=>$comments,"user_page"=>$current_user_page[0]['namePage']));
    }
  
     /**
      * @Route("/profile/")
      */
      public function errorAction(){
        return $this->render("View/error.html.php");
      }
    
}