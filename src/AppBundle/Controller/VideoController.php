<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Comment;
use AppBundle\Model\Video;
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
     * @Route("/watch")
     */
    public function showAction(Request $request)
    { 
      $id = $request->query->get('v');
      $video = new Video();
      $info_vote = array();
      $recurence_comment = false;
      $v = $video->getVideo($id);
      if(isset($_COOKIE['pseudo'])){
        $info_u = new Nostreamer();  
        $user_id = $info_u->getId($_COOKIE['pseudo']);
        $info_vote = $video->getVote($id,$user_id['idNostreamer']);
        if(isset($_POST['likes'])){ 
           $type = "insert"; 
           if($info_vote) 
             $type = "update";
           $video->setVote($id,$user_id['idNostreamer'],1,0,$type);
        }
        if(isset($_POST['dislikes'])){
          $type = "insert"; 
           if($info_vote) 
             $type = "update";
           $video->setVote($id,$user_id['idNostreamer'],0,1,$type);
        }
        
        if(isset($_COOKIE['last_comment_video']) && isset($_POST['comment'])){
          if($_COOKIE['last_comment_video'] == $_POST['comment'])
           $recurence_comment = true;
         } 
        
        if(isset($_POST['send_comment']) && $recurence_comment == false){
           $com = new Comment();
           $message = $_POST['comment'];
           $video_ch = $v['idChannel'];
           setcookie("last_comment_video",$_POST['comment']); 
           $com->setCommentVideo($message,$id,$user_id['idNostreamer'],$video_ch);
          }
        
        $info_vote = $video->getVote($id,$user_id['idNostreamer']);
        
        
      }
      if(!isset($info_vote[0]))
        $info_vote = array(0=>"");
      $user = $video->getUserByIdVideo($id);
      $list_v = $video->getListVideo();
      $list_c = $video->getListChannelByIdVideo();
      $list_p = $video->getListPageByIdVideo();
      $comments = $video->getComments($id);
      $v = $video->getVideo($id);
      return $this->render('View/videotest.html.php',
      array(
          "dislikes"=>$v['dislikes'],
          "likes"=>$v['likes'],
          "title" => $v['nameVideo'],
          "views" => $v['viewsVideo'],
          "info_date" => $v['dateVideo'],
          "description" => $v['descriptionVideo'],
          "video_channel"=>$user['nameChannel'],
          "video_page"=>$user['namePage'],
          "v"=>$id,
          "video" => $list_v,
          "channel"=>$list_c,
          "page"=>$list_p,
          "vote"=>$info_vote[0],
          "comments"=>$comments
      ));
    }
}