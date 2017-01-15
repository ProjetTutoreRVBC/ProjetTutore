<?php

namespace AppBundle\Controller;

use AppBundle\Model\Video;
use AppBundle\Model\Nostreamer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{
    /**
     * @Route("register")
     */
    public function registerAction()
    { 
      if(isset($_POST) && $_POST != null){
        if(isset($_POST['register'])){
          $user = new Nostreamer();
          $pseudo = $_POST['name'];
          $password = $_POST['passwd'];
          $email = $_POST['email'];
          $avatar = $_FILES['avatar'];
          $birth = $_POST['birth'];
          $user->register($email,$pseudo,$password,$avatar,$birth);
          return $this->redirectToRoute('home');
        }
        
      }       
      return $this->render('View/inscription.html.php');
    }
    /**
     * @Route("login")
     */
    public function loginAction()
    { 
      $error = "";
      $pseudo="";
      if(isset($_POST) && $_POST != null){
        if(isset($_POST['login'])){
          $user = new Nostreamer();
          $pseudo = $_POST['_pseudo'];
          $password = $_POST['_password'];
          $user->signIn($pseudo,$password);
          if($user->signIn($pseudo,$password) == true)
          {
            return $this->redirectToRoute('home');
          }
          else
            $error = "Wrong username or password. Try again.";
            
        }
        
      }       
      return $this->render('View/formulaire.html.php',array("error"=>$error, "lastusername"=>$pseudo));
    }
  
    /**
     * @Route("logout")
     */
    public function logoutAction()
    {
      setcookie("pseudo","");
      return $this->redirectToRoute('home');
    }
}