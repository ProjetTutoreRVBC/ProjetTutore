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
      if(isset($_POST) && $_POST != null){
        if(isset($_POST['register'])){
          $user = new Nostreamer();
          $pseudo = $_POST['name'];
          $password = $_POST['passwd'];
          $email = $_POST['email'];
          $avatar = $_POST['avatar'];
          $user->register($email,$pseudo,$password,$avatar);
        }
        if(isset($_POST['login'])){
          $_SESSION['pseudoNostreamer'] = null;
          $user = new Nostreamer();
          $email = $_POST['_email'];
          $password = $_POST['_password'];
          echo $user->signIn($email,$password);
          if($user->signIn($email,$password) == true)
            return $this->render('home/register.html.php');
        }
        
      }
      return $this->render('View/homepageTest.html.php',array("video" => $list_v,"channel"=>$list_c,"page"=>$list_p));
    }
}