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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/search')) {
            // ijvr_search_homepage
            if ($pathinfo === '/search/index') {
                return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ijvr_search_homepage',);
            }

            // ijvr_minimal_search
            if ($pathinfo === '/search/minimal_search') {
                return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::minimalSearchAction',  '_route' => 'ijvr_minimal_search',);
            }

            // ijvr_search_single_article
            if (0 === strpos($pathinfo, '/search/singleArticle') && preg_match('#^/search/singleArticle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ijvr_search_single_article')), array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::singleArticleAction',));
            }

            // ijvr_search_issue
            if ($pathinfo === '/search/issue_search') {
                return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::searchForIssueFromAContainingArticleAction',  '_route' => 'ijvr_search_issue',);
            }

            // ijvr_search_criteria
            if ($pathinfo === '/search/criteria_search') {
                return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::findArticlesByCriteriaAction',  '_route' => 'ijvr_search_criteria',);
            }

            if (0 === strpos($pathinfo, '/search/advancedsearch')) {
                // ijvr_go_to_advanced_search
                if ($pathinfo === '/search/advancedsearchview') {
                    return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::advancedSearchViewAction',  '_route' => 'ijvr_go_to_advanced_search',);
                }

                // ijvr_advanced_search
                if ($pathinfo === '/search/advancedsearch') {
                    return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::advancedSearchAction',  '_route' => 'ijvr_advanced_search',);
                }

            }

            // ijvr_issue_content
            if (0 === strpos($pathinfo, '/search/issuecontent') && preg_match('#^/search/issuecontent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ijvr_issue_content')), array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::searchForIssueFromAContainingArticleAction',));
            }

            // ijvr_profile_authors
            if (0 === strpos($pathinfo, '/search/profile') && preg_match('#^/search/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ijvr_profile_authors')), array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::profileAuthorsAction',));
            }

            // ijvr_all_issues
            if ($pathinfo === '/search/issue/all') {
                return array (  '_controller' => 'IJVR\\SearchBundle\\Controller\\DefaultController::AllIssuesAction',  '_route' => 'ijvr_all_issues',);
            }

        }

        if (0 === strpos($pathinfo, '/publish')) {
            // ijvr_publish_homepage
            if (0 === strpos($pathinfo, '/publish/hello') && preg_match('#^/publish/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ijvr_publish_homepage')), array (  '_controller' => 'IJVR\\PublishBundle\\Controller\\DefaultController::indexAction',));
            }

            // ijvr_publish_index
            if ($pathinfo === '/publish/index') {
                return array (  '_controller' => 'IJVR\\PublishBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ijvr_publish_index',);
            }

            // ijvr_publish_guide
            if ($pathinfo === '/publish/guide') {
                return array (  '_controller' => 'IJVR\\PublishBundle\\Controller\\DefaultController::guideAction',  '_route' => 'ijvr_publish_guide',);
            }

            // ijvr_publish_submit
            if ($pathinfo === '/publish/submit') {
                return array (  '_controller' => 'IJVR\\PublishBundle\\Controller\\DefaultController::submitAction',  '_route' => 'ijvr_publish_submit',);
            }

            // ijvr_publish_validation
            if ($pathinfo === '/publish/validation') {
                return array (  '_controller' => 'IJVR\\PublishBundle\\Controller\\DefaultController::validationAction',  '_route' => 'ijvr_publish_validation',);
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // moderation
                if ($pathinfo === '/admin/moderation') {
                    return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::moderationAction',  '_route' => 'moderation',);
                }

                // issue_publish
                if ($pathinfo === '/admin/publish_issue') {
                    return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::publish_issueAction',  '_route' => 'issue_publish',);
                }

                // dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::dashboardAction',  '_route' => 'dashboard',);
                }

                // gestion
                if ($pathinfo === '/admin/gestion') {
                    return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::gestionAction',  '_route' => 'gestion',);
                }

                // donne_admin
                if (0 === strpos($pathinfo, '/admin/donne_droits_admin') && preg_match('#^/admin/donne_droits_admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'donne_admin')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::donneadminAction',));
                }

                // retire_admin
                if (0 === strpos($pathinfo, '/admin/retire_droits_admin') && preg_match('#^/admin/retire_droits_admin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retire_admin')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::retireadminAction',));
                }

                // being_read
                if (0 === strpos($pathinfo, '/admin/being_read') && preg_match('#^/admin/being_read/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'being_read')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::beingReadAction',));
                }

                // correction_to_make
                if (0 === strpos($pathinfo, '/admin/correction_to_make') && preg_match('#^/admin/correction_to_make/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'correction_to_make')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::correction_to_makeAction',));
                }

                // waiting_to_publish
                if (0 === strpos($pathinfo, '/admin/waiting') && preg_match('#^/admin/waiting/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'waiting_to_publish')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::waitingAction',));
                }

                // rejected
                if (0 === strpos($pathinfo, '/admin/rejected') && preg_match('#^/admin/rejected/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rejected')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::rejectedAction',));
                }

                // published
                if (0 === strpos($pathinfo, '/admin/published') && preg_match('#^/admin/published/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'published')), array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::publishedAction',));
                }

            }

            // approuvercommentaire
            if (0 === strpos($pathinfo, '/approuver/commentaire') && preg_match('#^/approuver/commentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_approuvercommentaire;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'approuvercommentaire')), array (  '_controller' => 'YWPPlatformBundle:Post:approuvercommentaire',));
            }
            not_approuvercommentaire:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            if (0 === strpos($pathinfo, '/platform')) {
                // ijvr_platform_view
                if (0 === strpos($pathinfo, '/platform/article') && preg_match('#^/platform/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ijvr_platform_view')), array (  '_controller' => 'IJVR\\PlatformBundle\\Controller\\DefaultController::viewAction',));
                }

                // oc_platform_view_slug
                if (preg_match('#^/platform/(?P<year>[^/]++)/(?P<slug>[^/\\.]++)\\.(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oc_platform_view_slug')), array (  '_controller' => 'IJVR\\PlatformBundle\\Controller\\DefaultController::viewSlugAction',));
                }

                // ijvr_platform_home
                if ($pathinfo === '/platform/home') {
                    return array (  '_controller' => 'IJVR\\PlatformBundle\\Controller\\DefaultController::homeAction',  '_route' => 'ijvr_platform_home',);
                }

                // ijvr_platform_contact
                if ($pathinfo === '/platform/contact') {
                    return array (  '_controller' => 'IJVR\\PlatformBundle\\Controller\\DefaultController::contactAction',  '_route' => 'ijvr_platform_contact',);
                }

                // ijvr_platform_sendMail
                if ($pathinfo === '/platform/sendMail') {
                    return array (  '_controller' => 'IJVR\\PlatformBundle\\Controller\\DefaultController::sendMailAction',  '_route' => 'ijvr_platform_sendMail',);
                }

                // ijvr_platform_about
                if ($pathinfo === '/platform/about') {
                    return array (  '_controller' => 'IJVR\\PlatformBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'ijvr_platform_about',);
                }

            }

        }

        // base
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'base');
            }

            return array (  '_controller' => 'IJVR\\UserBundle\\Controller\\LienLoginController::redirectAction',  '_route' => 'base',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
