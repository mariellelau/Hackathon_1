<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/environnement')) {
            // environnement_index
            if (rtrim($pathinfo, '/') === '/environnement') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_environnement_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'environnement_index');
                }

                return array (  '_controller' => 'LicoBundle\\Controller\\EnvironnementController::indexAction',  '_route' => 'environnement_index',);
            }
            not_environnement_index:

            // environnement_show
            if (preg_match('#^/environnement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_environnement_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'environnement_show')), array (  '_controller' => 'LicoBundle\\Controller\\EnvironnementController::showAction',));
            }
            not_environnement_show:

            // environnement_new
            if ($pathinfo === '/environnement/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_environnement_new;
                }

                return array (  '_controller' => 'LicoBundle\\Controller\\EnvironnementController::newAction',  '_route' => 'environnement_new',);
            }
            not_environnement_new:

            // environnement_edit
            if (preg_match('#^/environnement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_environnement_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'environnement_edit')), array (  '_controller' => 'LicoBundle\\Controller\\EnvironnementController::editAction',));
            }
            not_environnement_edit:

            // environnement_delete
            if (preg_match('#^/environnement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_environnement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'environnement_delete')), array (  '_controller' => 'LicoBundle\\Controller\\EnvironnementController::deleteAction',));
            }
            not_environnement_delete:

        }

        if (0 === strpos($pathinfo, '/licorne')) {
            // licorne_index
            if (rtrim($pathinfo, '/') === '/licorne') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licorne_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'licorne_index');
                }

                return array (  '_controller' => 'LicoBundle\\Controller\\LicorneController::indexAction',  '_route' => 'licorne_index',);
            }
            not_licorne_index:

            // licorne_show
            if (preg_match('#^/licorne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_licorne_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licorne_show')), array (  '_controller' => 'LicoBundle\\Controller\\LicorneController::showAction',));
            }
            not_licorne_show:

            // licorne_new
            if ($pathinfo === '/licorne/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_licorne_new;
                }

                return array (  '_controller' => 'LicoBundle\\Controller\\LicorneController::newAction',  '_route' => 'licorne_new',);
            }
            not_licorne_new:

            // licorne_edit
            if (preg_match('#^/licorne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_licorne_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licorne_edit')), array (  '_controller' => 'LicoBundle\\Controller\\LicorneController::editAction',));
            }
            not_licorne_edit:

            // licorne_delete
            if (preg_match('#^/licorne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_licorne_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licorne_delete')), array (  '_controller' => 'LicoBundle\\Controller\\LicorneController::deleteAction',));
            }
            not_licorne_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_index
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur_index');
                }

                return array (  '_controller' => 'LicoBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur_index',);
            }
            not_utilisateur_index:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'LicoBundle\\Controller\\UtilisateurController::showAction',));
            }
            not_utilisateur_show:

        }

        // lico_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lico_homepage');
            }

            return array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'lico_homepage',);
        }

        if (0 === strpos($pathinfo, '/page')) {
            // page_1
            if ($pathinfo === '/page1') {
                return array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::pageAction',  '_route' => 'page_1',);
            }

            // page_2
            if ($pathinfo === '/page2') {
                return array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::page2Action',  '_route' => 'page_2',);
            }

            // page_3
            if ($pathinfo === '/page3') {
                return array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::page3Action',  '_route' => 'page_3',);
            }

        }

        // page_4
        if (preg_match('#^/(?P<id>[^/]++)/page4$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_4')), array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::page4Action',));
        }

        if (0 === strpos($pathinfo, '/page')) {
            // page_5
            if ($pathinfo === '/page5') {
                return array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::page5Action',  '_route' => 'page_5',);
            }

            // page_6
            if ($pathinfo === '/page6') {
                return array (  '_controller' => 'LicoBundle\\Controller\\DefaultController::page6Action',  '_route' => 'page_6',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
