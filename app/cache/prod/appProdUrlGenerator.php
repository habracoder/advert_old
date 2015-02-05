<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'advert_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert' => array (  0 =>   array (    0 => 'alias',  ),  1 =>   array (    'alias' => NULL,    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::listAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'alias',    ),    1 =>     array (      0 => 'text',      1 => '/advert/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::createAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/advert/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_image_apload' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::uploadImageAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload/image',    ),    1 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/advertadvert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\AdvertController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/advert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::listAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'toggle_bookmark' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\ComponentController::toggleBookmarkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/advert/toggle_bookmark',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inside/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category.create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inside/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category.new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inside/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category.show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inside/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category.edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/inside/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category.update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inside/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.category.delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\AdvertBundle\\Controller\\Inside\\CategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inside/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\PageBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inside.dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\PageBundle\\Controller\\Inside\\DashboardController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inside/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_component_bookmarks' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\ComponentController::bookmarksAdvertsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/advert/bookmarks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'advert_component_filters' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\ComponentController::viewedAdvertsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/advert/filters',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile.show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pk',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile.edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'profile_upload_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\ProfileController::uploadImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile_upload_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sample_sitemaps_sitemap' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'App\\CoreBundle\\Controller\\ComponentController::searchPanelAction',  ),  2 =>   array (    '_format' => 'js',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/assets/js/translations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'widget_autocomplete_panel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\CoreBundle\\Controller\\WidgetController::searchPanelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/autocompetePanel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'widget_login_modal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\CoreBundle\\Controller\\WidgetController::loginModalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginModal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liip_imagine_filter_runtime' => array (  0 =>   array (    0 => 'filter',    1 => 'hash',    2 => 'path',  ),  1 =>   array (    '_controller' => 'liip_imagine.controller:filterRuntimeAction',  ),  2 =>   array (    'filter' => '[A-z0-9_\\-]*',    'path' => '.+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'hash',    ),    2 =>     array (      0 => 'text',      1 => '/rc',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-z0-9_\\-]*',      3 => 'filter',    ),    4 =>     array (      0 => 'text',      1 => '/media/cache/resolve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liip_imagine_filter' => array (  0 =>   array (    0 => 'filter',    1 => 'path',  ),  1 =>   array (    '_controller' => 'liip_imagine.controller:filterAction',  ),  2 =>   array (    'filter' => '[A-z0-9_\\-]*',    'path' => '.+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'path',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[A-z0-9_\\-]*',      3 => 'filter',    ),    2 =>     array (      0 => 'text',      1 => '/media/cache/resolve',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bazinga_jstranslation_js' => array (  0 =>   array (    0 => 'domain',    1 => '_format',  ),  1 =>   array (    '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',    'domain' => 'messages',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',    'domain' => '[\\w]+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[\\w]+',      3 => 'domain',    ),    2 =>     array (      0 => 'text',      1 => '/translations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
