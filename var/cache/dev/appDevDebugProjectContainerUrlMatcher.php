<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/category')) {
                    // admin_category_reset_filter
                    if (0 === strpos($pathinfo, '/admin/category/reset-filter') && preg_match('#^/admin/category/reset\\-filter/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_reset_filter;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_category_reset_filter');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_reset_filter')), array (  'slug' => NULL,  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',));
                    }
                    not_admin_category_reset_filter:

                    // admin_category_index
                    if (preg_match('#^/admin/category/(?P<page>[1-9]\\d*)/?$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_category_index');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_index')), array (  'page' => '1',  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',));
                    }
                    not_admin_category_index:

                    // admin_category_add
                    if ('/admin/category/add' === $trimmedPathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_add;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_category_add');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addAction',  '_route' => 'admin_category_add',);
                    }
                    not_admin_category_add:

                    // admin_category_activeSetter
                    if (0 === strpos($pathinfo, '/admin/category/active') && preg_match('#^/admin/category/active(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_activeSetter;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_activeSetter')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\CategoryController::isActiveSetter',));
                    }
                    not_admin_category_activeSetter:

                    // admin_category_detail
                    if (0 === strpos($pathinfo, '/admin/category/detail') && preg_match('#^/admin/category/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_category_detail;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_detail')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::detailAction',));
                    }
                    not_admin_category_detail:

                    // admin_category_delete
                    if (0 === strpos($pathinfo, '/admin/category/delete') && preg_match('#^/admin/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
                    }
                    not_admin_category_delete:

                    // admin_category_edit
                    if (0 === strpos($pathinfo, '/admin/category/edit') && preg_match('#^/admin/category/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
                    }
                    not_admin_category_edit:

                    // admin_category_bulkDelete
                    if ('/admin/category/bulkDelete' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_category_bulkDelete;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::bulkDeleteAction',  '_route' => 'admin_category_bulkDelete',);
                    }
                    not_admin_category_bulkDelete:

                }

                elseif (0 === strpos($pathinfo, '/admin/contact')) {
                    // admin_contact_index
                    if (preg_match('#^/admin/contact(?:/(?P<page>[1-9]\\d*))?$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contact_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_index')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\ContactController::indexAction',));
                    }
                    not_admin_contact_index:

                    // admin_contact_reset_filter
                    if (0 === strpos($pathinfo, '/admin/contact/reset-filter') && preg_match('#^/admin/contact/reset\\-filter/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contact_reset_filter;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_contact_reset_filter');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_reset_filter')), array (  'slug' => NULL,  '_controller' => 'AppBundle\\Controller\\ContactController::indexAction',));
                    }
                    not_admin_contact_reset_filter:

                    // admin_contactaddress_add
                    if ('/admin/contact/add' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contactaddress_add;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ContactController::addAction',  '_route' => 'admin_contactaddress_add',);
                    }
                    not_admin_contactaddress_add:

                    // admin_contactaddress_activeSetter
                    if (0 === strpos($pathinfo, '/admin/contact/active') && preg_match('#^/admin/contact/active(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contactaddress_activeSetter;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactaddress_activeSetter')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\ContactController::isActiveSetter',));
                    }
                    not_admin_contactaddress_activeSetter:

                    // admin_contactaddress_detail
                    if (0 === strpos($pathinfo, '/admin/contact/detail') && preg_match('#^/admin/contact/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_contactaddress_detail;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactaddress_detail')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::detailAction',));
                    }
                    not_admin_contactaddress_detail:

                    // admin_contactaddress_delete
                    if (0 === strpos($pathinfo, '/admin/contact/delete') && preg_match('#^/admin/contact/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contactaddress_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactaddress_delete')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::deleteAction',));
                    }
                    not_admin_contactaddress_delete:

                    // admin_contactaddress_edit
                    if (0 === strpos($pathinfo, '/admin/contact/edit') && preg_match('#^/admin/contact/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contactaddress_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactaddress_edit')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::editAction',));
                    }
                    not_admin_contactaddress_edit:

                    // admin_contactaddress_bulkDelete
                    if ('/admin/contact/bulkDelete' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_contactaddress_bulkDelete;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ContactController::bulkDeleteAction',  '_route' => 'admin_contactaddress_bulkDelete',);
                    }
                    not_admin_contactaddress_bulkDelete:

                    if (0 === strpos($pathinfo, '/admin/contactmessage')) {
                        // admin_contactmessage_index
                        if (preg_match('#^/admin/contactmessage(?:/(?P<page>[1-9]\\d*))?$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_admin_contactmessage_index;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactmessage_index')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\ContactMessageController::indexAction',));
                        }
                        not_admin_contactmessage_index:

                        // admin_contactmessage_reset_filter
                        if (0 === strpos($pathinfo, '/admin/contactmessage/reset-filter') && preg_match('#^/admin/contactmessage/reset\\-filter/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_admin_contactmessage_reset_filter;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_contactmessage_reset_filter');
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactmessage_reset_filter')), array (  'slug' => NULL,  '_controller' => 'AppBundle\\Controller\\ContactMessageController::indexAction',));
                        }
                        not_admin_contactmessage_reset_filter:

                        // admin_contactmessage_add
                        if ('/admin/contactmessage/add' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_admin_contactmessage_add;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ContactMessageController::addAction',  '_route' => 'admin_contactmessage_add',);
                        }
                        not_admin_contactmessage_add:

                        // admin_contactmessage_detail
                        if (0 === strpos($pathinfo, '/admin/contactmessage/detail') && preg_match('#^/admin/contactmessage/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_admin_contactmessage_detail;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactmessage_detail')), array (  '_controller' => 'AppBundle\\Controller\\ContactMessageController::detailAction',));
                        }
                        not_admin_contactmessage_detail:

                        // admin_contactmessage_delete
                        if (0 === strpos($pathinfo, '/admin/contactmessage/delete') && preg_match('#^/admin/contactmessage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_admin_contactmessage_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactmessage_delete')), array (  '_controller' => 'AppBundle\\Controller\\ContactMessageController::deleteAction',));
                        }
                        not_admin_contactmessage_delete:

                        // admin_contactmessage_bulkDelete
                        if ('/admin/contactmessage/bulkDelete' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_admin_contactmessage_bulkDelete;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\ContactMessageController::bulkDeleteAction',  '_route' => 'admin_contactmessage_bulkDelete',);
                        }
                        not_admin_contactmessage_bulkDelete:

                        // admin_contactmessage_importantSetter
                        if (0 === strpos($pathinfo, '/admin/contactmessage/important') && preg_match('#^/admin/contactmessage/important(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_admin_contactmessage_importantSetter;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactmessage_importantSetter')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\ContactMessageController::isImportantSetter',));
                        }
                        not_admin_contactmessage_importantSetter:

                        // admin_show_important
                        if (0 === strpos($pathinfo, '/admin/contactmessage/show-important') && preg_match('#^/admin/contactmessage/show\\-important/(?P<reference>[^/]++)/(?P<page>[1-9]\\d*)/?$#s', $pathinfo, $matches)) {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_show_important');
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_important')), array (  'page' => 1,  'reference' => NULL,  '_controller' => 'AppBundle\\Controller\\ContactMessageController::showImportantAction',));
                        }

                    }

                }

                // admin_contactmessage_backpost
                if (0 === strpos($pathinfo, '/admin/contantmessage/back-post') && preg_match('#^/admin/contantmessage/back\\-post/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_contactmessage_backpost;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_contactmessage_backpost');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contactmessage_backpost')), array (  '_controller' => 'AppBundle\\Controller\\ContactMessageController::backPostAction',));
                }
                not_admin_contactmessage_backpost:

            }

            // admin_banned
            if ('/admin/banned' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ContactMessageController::bannedAction',  '_route' => 'admin_banned',);
            }

            if (0 === strpos($pathinfo, '/admin/news')) {
                // admin_news_index
                if ('/admin/news' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NewsController::indexAction',  '_route' => 'admin_news_index',);
                }
                not_admin_news_index:

                // admin_news_reset_filter
                if (0 === strpos($pathinfo, '/admin/news/reset-filter') && preg_match('#^/admin/news/reset\\-filter/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_reset_filter;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_news_reset_filter');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_reset_filter')), array (  'slug' => NULL,  '_controller' => 'AppBundle\\Controller\\NewsController::indexAction',));
                }
                not_admin_news_reset_filter:

                // admin_news_add
                if ('/admin/news/add' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_add;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NewsController::addAction',  '_route' => 'admin_news_add',);
                }
                not_admin_news_add:

                // admin_news_activeSetter
                if (0 === strpos($pathinfo, '/admin/news/active') && preg_match('#^/admin/news/active(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_activeSetter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_activeSetter')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\NewsController::isActiveSetter',));
                }
                not_admin_news_activeSetter:

                // admin_news_detail
                if (0 === strpos($pathinfo, '/admin/news/detail') && preg_match('#^/admin/news/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_news_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_detail')), array (  '_controller' => 'AppBundle\\Controller\\NewsController::detailAction',));
                }
                not_admin_news_detail:

                // admin_news_delete
                if (0 === strpos($pathinfo, '/admin/news/delete') && preg_match('#^/admin/news/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_delete')), array (  '_controller' => 'AppBundle\\Controller\\NewsController::deleteAction',));
                }
                not_admin_news_delete:

                // admin_news_edit
                if (0 === strpos($pathinfo, '/admin/news/edit') && preg_match('#^/admin/news/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_edit')), array (  '_controller' => 'AppBundle\\Controller\\NewsController::editAction',));
                }
                not_admin_news_edit:

                // admin_news_bulkDelete
                if ('/admin/news/bulkDelete' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_news_bulkDelete;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\NewsController::bulkDeleteAction',  '_route' => 'admin_news_bulkDelete',);
                }
                not_admin_news_bulkDelete:

            }

        }

        // defaultpage
        if ('/default' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'defaultpage',);
        }

        // root
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'FrameBundle:Redirect:urlRedirect',  'path' => '/',  'permanent' => true,  '_route' => 'root',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
