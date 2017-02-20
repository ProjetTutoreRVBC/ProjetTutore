<?php
// src/AppBundle/Controller/HomeController.php
namespace AppBundle\Controller;

//...
use AppBundle\Model\Upload;
use AppBundle\Model\Video;
use AppBundle\Model\Channel;
use AppBundle\Model\Nostreamer;
use AppBundle\Entity\User;

//Others
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AjoutChaineController extends Controller
{
    /**
     * @Route("ajout_chaine/")
     */
    public function indexAction()
    { 
      $c = new Channel();
      $user = new Nostreamer();
      $user_id = $user->getId($_COOKIE['pseudo']);
      if(isset($_POST) && $_POST != null && isset($_FILES['file'])){
        $file = new Upload();
        //$file->add($_FILES['profile'],$_POST['nom'],"profile");
        $f = array("file"=>$_FILES['file']);
        var_dump($f);
        $file->add($f,$_POST['nom'],"banniere");
        $c->add($_POST['nom'],$user_id['idNostreamer'],$_POST['description']);        
      }
      
      return $this->render("View/AjoutChaine.html.php");
    }
}