<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Page;
use AppBundle\Model\Video;
use AppBundle\Model\Channel;
use AppBundle\Model\Nostreamer;
use AppBundle\Entity\User;

//Others
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ChannelController extends Controller
{
    /**
     * Matches /channel/*
     *
     * @Route("/channel/{slug}",name="channel_index")
     */
    public function showAction($slug)
    { 
      $user = new Channel();
      $idPage = $user->getPageId($slug);
      $info_c = $user->getChannel($slug);
      $subs =  $user->getSubsChannel($idPage['idPage']);
      $video = new Video(); 
      $list_v = $video->getListVideo();
      $list_c = $video->getListChannelByIdVideo();
      $list_p = $video->getListPageByIdVideo();
      if(isset($_COOKIE['pseudo'])){  
        if(isset($_POST['abonnement']) && $_POST != null){
            $user_page = new Page();
            $user = new Nostreamer();
            $user_id = $user->getId($_COOKIE['pseudo']);
            $user_page->addSubPage($user_id['idNostreamer'],$_POST['abonnement']);
          }
      }
      return $this->render('View/channel.html.php',array("idPage"=>$idPage['idPage'],"profile"=>$info_c['profile_img'],"banniere"=>$info_c['banniere_img'],"name_channel"=>$info_c['nameChannel'],"subs_channel"=>$subs['COUNT(*)'],"video" => $list_v,"channel"=>$list_c,"page"=>$list_p));
    }
  
  
}