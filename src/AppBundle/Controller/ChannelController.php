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
      $user_channels = [];  
      if(isset($_COOKIE['pseudo'])){
        $owner_page = new Nostreamer();
        $user_channels = $owner_page->getChannels($_COOKIE['pseudo']);
        if(isset($_POST['abonnement']) && $_POST != null){
            $user_id = $owner_page->getId($_COOKIE['pseudo']);
            $user->addSubChannel($user_id['idNostreamer'],$_POST['abonnement']);
          }
      }
      return $this->render('View/channel.html.php',array("owner_channel"=>$info_c['pseudoNostreamer'],
                                                         "user_channels"=>$user_channels,
                                                         "idPage"=>$idPage['idPage'],
                                                         "profile"=>$info_c['profile_img'],
                                                         "banniere"=>$info_c['banniere_img'],
                                                         "name_channel"=>$info_c['nameChannel'],
                                                         "subs_channel"=>$subs['COUNT(*)'],
                                                         "video" => $list_v,"channel"=>$list_c,
                                                         "page"=>$list_p));
    }
  
  
}