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
      if(isset($_POST) && $_POST != null && isset($_FILES['file']) && isset($_FILES['file2'])){
        $file = new Upload();
        //$file->add($_FILES['profile'],$_POST['nom'],"profile");
        $banniere = "";
        $profile = "";
        
        $f = array("file"=>$_FILES['file']);
        $f2 =  array("file"=>$_FILES['file2']);
        if($f['file']['type'] == "image/png")
          $banniere = $_POST['nom'].".png";
        if($f['file']['type'] == "image/jpeg")
          $banniere = $_POST['nom'].".jpeg";
        
        if($f2['file']['type'] == "image/png")
          $profile = $_POST['nom'].".png";
        if($f2['file']['type'] == "image/jpeg")
          $profile = $_POST['nom'].".jpeg";
        
        $file->add($f,$_POST['nom'],"banniere");
        $file->add($f2,$_POST['nom'],"profile");
        
        $c->add($_POST['nom'],$user_id['idNostreamer'],$_POST['description'],$banniere,$profile);       
        $this->redirectToRoute('gestion');
      }
      
      return $this->render("View/AjoutChaine.html.php");
    }
}