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

class GestionController extends Controller
{
    /**
     * @Route("/gestion")
     */
    public function indexAction(Request $request)
    { 
      if(isset($_COOKIE["pseudo"])) {
        $user = new Nostreamer();
        $list_p = $user->getPages($_COOKIE["pseudo"]);
        $list_c = $user->getChannels($_COOKIE["pseudo"]);
        return $this->render('View/gestion.html.php',array("pages" => $list_p,"channels"=>$list_c));
      }
      redirectToRoute('home');
    }
}