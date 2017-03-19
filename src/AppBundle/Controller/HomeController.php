<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Page;
use AppBundle\Model\Channel;
use AppBundle\Model\Video;
use AppBundle\Model\Nostreamer;
use AppBundle\Entity\User;

//Others
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Form components
use AppBundle\Form\UserType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;

class HomeController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function indexAction(Request $request)
    {       
      $video = new Video(); 
      $list_v = $video->getListVideo();
      $list_c = $video->getListChannelByIdVideo();
      $list_p = $video->getListPageByIdVideo();
      $current_user_page = array(0=>array("namePage" => ""));
      $list_channel = [];
      $abonnement = [];
      if(isset($_COOKIE['pseudo'])){
      $user = new Nostreamer();
      $user_id = $user->getId($_COOKIE["pseudo"]);
      $abonnement = $user->getAbonnementsVideos($user_id['idNostreamer']);
      $user_page = new Page();
      $current_user_page = $user_page->getMainPage($user_id['idNostreamer']);
      $list_channel = $user->getChannels($_COOKIE["pseudo"]);
      }
      return $this->render('View/homepageTest.html.php',array("abonnement" => $abonnement,"listChannel" => $list_channel, "video" => $list_v,"channel"=>$list_c,"page"=>$list_p,"user_page"=>$current_user_page[0]['namePage']));
    }
}