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
      $info_c = $user->getChannel($slug);
      $subs =  $user->getSubsChannel($info_c['idChannel']);
      $video = new Video(); 
      $list_v = $video->getListVideo();
      $list_c = $video->getListChannelByIdVideo();
      $list_p = $video->getListPageByIdVideo();
      $user_channels = [];
      $isSubscribed = 0;
      if(isset($_COOKIE['pseudo'])){
        $owner_page = new Nostreamer();
        $user_channels = $owner_page->getChannels($_COOKIE['pseudo']);
        $user_id = $owner_page->getId($_COOKIE['pseudo']);
        $isSubscribed = $user->isSubscribed($user_id['idNostreamer'], $info_c['idChannel']);
        /*if(isset($_POST['abonnement']) && $_POST != null){
            $user_id = $owner_page->getId($_COOKIE['pseudo']);
            $user->addSubChannel($user_id['idNostreamer'],$_POST['abonnement']);
          }*/
      }
      return $this->render('View/channel.html.php',array("isSubscribed"=>$isSubscribed,
                                                         "owner_channel"=>$info_c['pseudoNostreamer'],
                                                         "user_channels"=>$user_channels,
                                                         "idChannel"=>$info_c['idChannel'],
                                                         "profile"=>$info_c['profile_img'],
                                                         "banniere"=>$info_c['banniere_img'],
                                                         "name_channel"=>$info_c['nameChannel'],
                                                         "subs_channel"=>$subs['COUNT(*)'],
                                                         "video" => $list_v,"channel"=>$list_c,
                                                         "page"=>$list_p));
    }
  
  
}