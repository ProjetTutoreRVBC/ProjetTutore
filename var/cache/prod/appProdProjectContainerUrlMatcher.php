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

        // channel_index
        if (0 === strpos($pathinfo, '/channel') && preg_match('#^/channel/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'channel_index')), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::showAction',));
        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/gestion')) {
            // app_gestionchannel_index
            if (0 === strpos($pathinfo, '/gestion_channel') && preg_match('#^/gestion_channel/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_gestionchannel_index')), array (  '_controller' => 'AppBundle\\Controller\\GestionChannelController::indexAction',));
            }

            // app_gestion_index
            if (rtrim($pathinfo, '/') === '/gestion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_gestion_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GestionController::indexAction',  '_route' => 'app_gestion_index',);
            }

        }

        // profile_index
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_index')), array (  '_controller' => 'AppBundle\\Controller\\ProfileController::showAction',));
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

        // channel
        if (0 === strpos($pathinfo, '/channel') && preg_match('#^/channel/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'channel')), array (  '_controller' => 'AppBundle\\Controller\\ChannelController::showAction',));
        }

        // profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'AppBundle\\Controller\\ProfileController::showAction',));
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

        // gestion
        if (rtrim($pathinfo, '/') === '/gestion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestion');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\GestionController::indexAction',  '_route' => 'gestion',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
