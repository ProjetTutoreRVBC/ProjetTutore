<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
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
      return $this->render('View/channel.html.php',array("profile"=>$info_c['profile_img'],"banniere"=>$info_c['banniere_img'],"name_channel"=>$info_c['nameChannel'],"subs_channel"=>$subs['COUNT(*)'],"video" => $list_v,"channel"=>$list_c,"page"=>$list_p));
    }
}