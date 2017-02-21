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
        $banniere = "";
        $f = array("file"=>$_FILES['file']);
        if($f['file']['type'] == "image/png")
          $banniere = $_POST['nom'].".png";
        if($f['file']['type'] == "image/jpeg")
          $banniere = $_POST['nom'].".jpeg";
        $file->add($f,$_POST['nom'],"banniere");
        $c->add($_POST['nom'],$user_id['idNostreamer'],$_POST['description'],$banniere);       
        return $this->render("View/gestion.html.php");
      }
      
      return $this->render("View/AjoutChaine.html.php");
    }
}