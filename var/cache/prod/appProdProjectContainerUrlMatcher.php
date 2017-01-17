<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app_channel_index
        if ($pathinfo === '/channel') {
            return array (  '_controller' => 'AppBundle\\Controller\\ChannelController::indexAction',  '_route' => 'app_channel_index',);
        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_profile_index
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::indexAction',  '_route' => 'app_profile_index',);
        }

        // app_security_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::registerAction',  '_route' => 'app_security_register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // app_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'app_security_login',);
            }

            // app_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'app_security_logout',);
            }

        }

        // app_upload_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'AppBundle\\Controller\\UploadController::uploadAction',  '_route' => 'app_upload_upload',);
        }

        // app_video_show
        if ($pathinfo === '/watch') {
            return array (  '_controller' => 'AppBundle\\Controller\\VideoController::showAction',  '_route' => 'app_video_show',);
        }

        // video_show
        if (0 === strpos($pathinfo, '/video') && preg_match('#^/video/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'video_show')), array (  '_controller' => 'AppBundle\\Controller\\VideoController::showAction',));
        }

        // login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'home',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
