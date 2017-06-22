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

class GestionChannelController extends Controller
{
    /**
     * Matches /gestion_channel/*
     *
     * @Route("/gestion_channel/{slug}")
     */
    public function indexAction($slug)
    { 
      if(isset($_COOKIE["pseudo"])) {
        $video = new Video();
        if(isset($_POST) && $_POST != null){
          if(isset($_POST['supprimer'])){
            $video->delete($_POST['supprimer']); 
          }
        }
        $list_v = $video->getListVideo();
        $list_c = $video->getListChannelByIdVideo();
        $list_p = $video->getListPageByIdVideo();
        $user = new Channel();
        $info_c = $user->getChannel($slug);
        $subs =  $user->getSubsChannel($info_c['idChannel']);
        $user = new Nostreamer();
        $user_id = $user->getId($_COOKIE["pseudo"]);
        $user_page = new Page();
        $current_user_page = $user_page->getMainPage($user_id['idNostreamer']);
        return $this->render('View/gestionchannel.html.php',array("video" => $list_v,"channel"=>$list_c,"page"=>$list_p,"name_channel"=>$info_c['nameChannel'],"subs_channel"=>$subs['COUNT(*)'],"user_page"=>$current_user_page[0]['namePage']));
      }
      redirectToRoute('home');
    }
}