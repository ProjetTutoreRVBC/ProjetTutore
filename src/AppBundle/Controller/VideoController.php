<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
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
      $v = $video->getVideo($id);
      $user = $video->getUserByIdVideo($id);
      $list_v = $video->getListVideo();
      $list_c = $video->getListChannelByIdVideo();
      $list_p = $video->getListPageByIdVideo();
      return $this->render('View/videotest.html.php',
      array(
        "title" => $v['nameVideo'],
         "views" => $v['viewsVideo'],
          "info_date" => $v['dateVideo'],
          "description" => $v['descriptionVideo'],
          "video_channel"=>$user['nameChannel'],
          "video_page"=>$user['namePage'],
          "v"=>$id,
          "video" => $list_v,
          "channel"=>$list_c,
          "page"=>$list_p
      ));
    }
}