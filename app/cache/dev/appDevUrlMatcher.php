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

        // admin_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_default_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
        }

        if (0 === strpos($pathinfo, '/email')) {
            // email_index
            if (rtrim($pathinfo, '/') === '/email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'email_index');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\EmailController::indexAction',  '_route' => 'email_index',);
            }
            not_email_index:

            // email_new
            if ($pathinfo === '/email/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_email_new;
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\EmailController::newAction',  '_route' => 'email_new',);
            }
            not_email_new:

            // email_show
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_show')), array (  '_controller' => 'AdminBundle\\Controller\\EmailController::showAction',));
            }
            not_email_show:

            // email_edit
            if (preg_match('#^/email/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_email_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_edit')), array (  '_controller' => 'AdminBundle\\Controller\\EmailController::editAction',));
            }
            not_email_edit:

            // email_delete
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_email_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_delete')), array (  '_controller' => 'AdminBundle\\Controller\\EmailController::deleteAction',));
            }
            not_email_delete:

        }

        if (0 === strpos($pathinfo, '/parties')) {
            // parties_index
            if (rtrim($pathinfo, '/') === '/parties') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_parties_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'parties_index');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\PartiesController::indexAction',  '_route' => 'parties_index',);
            }
            not_parties_index:

            // parties_new
            if ($pathinfo === '/parties/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_parties_new;
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\PartiesController::newAction',  '_route' => 'parties_new',);
            }
            not_parties_new:

            // parties_show
            if (preg_match('#^/parties/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_parties_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parties_show')), array (  '_controller' => 'AdminBundle\\Controller\\PartiesController::showAction',));
            }
            not_parties_show:

            // parties_edit
            if (preg_match('#^/parties/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_parties_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parties_edit')), array (  '_controller' => 'AdminBundle\\Controller\\PartiesController::editAction',));
            }
            not_parties_edit:

            // parties_delete
            if (preg_match('#^/parties/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_parties_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parties_delete')), array (  '_controller' => 'AdminBundle\\Controller\\PartiesController::deleteAction',));
            }
            not_parties_delete:

        }

        if (0 === strpos($pathinfo, '/reservations')) {
            // reservations_index
            if (rtrim($pathinfo, '/') === '/reservations') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservations_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservations_index');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\ReservationsController::indexAction',  '_route' => 'reservations_index',);
            }
            not_reservations_index:

            // reservations_new
            if ($pathinfo === '/reservations/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reservations_new;
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\ReservationsController::newAction',  '_route' => 'reservations_new',);
            }
            not_reservations_new:

            // reservations_show
            if (preg_match('#^/reservations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservations_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservations_show')), array (  '_controller' => 'AdminBundle\\Controller\\ReservationsController::showAction',));
            }
            not_reservations_show:

            // reservations_edit
            if (preg_match('#^/reservations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_reservations_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservations_edit')), array (  '_controller' => 'AdminBundle\\Controller\\ReservationsController::editAction',));
            }
            not_reservations_edit:

            // reservations_delete
            if (preg_match('#^/reservations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reservations_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservations_delete')), array (  '_controller' => 'AdminBundle\\Controller\\ReservationsController::deleteAction',));
            }
            not_reservations_delete:

        }

        // user_default_index
        if ($pathinfo === '/dissidance/home') {
            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
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
