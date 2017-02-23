<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Channel;
use AppBundle\Model\Page;
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

class GestionController extends Controller
{
    /**
     * @Route("/gestion/")
     */
    public function indexAction(Request $request)
    { 
      if(isset($_COOKIE["pseudo"])) {
        $user = new Nostreamer();
        $channel = new Channel();
        $list_p = $user->getPages($_COOKIE["pseudo"]);
        $list_c = $user->getChannels($_COOKIE["pseudo"]);
        $user_id = $user->getId($_COOKIE["pseudo"]);
        $subs = array();
        $page = "";
        foreach($list_c as $value){
          $result =  $channel->getSubsChannel($value['idChannel']);
          $subs[$value['idChannel']] = $result['COUNT(*)'];
        }
        if(!$subs) 
          $subs = 0;
        if(!$list_p)
          $list_p = 0;
        else
          $page = $list_p[0]['namePage'];
          
        if(!$list_c)
          $list_c = 0;
        
        return $this->render('View/gestion.html.php',array("subs"=>$subs,"pages" => $list_p,"channels"=>$list_c,"user_page"=>$page,"pseudo"=>$_COOKIE["pseudo"]));
      }
      $this->redirectToRoute('home');
    }
}