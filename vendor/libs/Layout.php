<?php

namespace vendor\libs;

use vendor\core\Router;
use app\models\Cms;

class Layout extends Router{

    public static function printJS() {
        $route = Router::getRoute();
        switch($route['action'] ?? "Eror") {

            case 'status':
                $js_data_page = array(
                    array(
                        'path' => '/js/dataset.js',
                        'version' => 58,
                        'skip_path' => true
                    ),
                    array(
                        'path' => '/js/realm-status.js',
                        'version' => 58,
                        'skip_path' => true
                    )
                );
            break;

            case 'viewCharacters':
                $js_data_page = array(
                    array(
                        'path' => '/js/character/profile.js',
                        'version' => 121,
                        'skip_path' => true
                    ),
                    array(
                        'path' => '/js/character/collectible-popup.js',
                        'version' => 121,
                        'skip_path' => true
                    ),
                    array(
                        'path' => '/js/character/summary.js',
                        'version' => 121,
                        'skip_path' => true
                    ),
                    array(
                        'path' => '/js/utility/model-rotator.js',
                        'version' => 58,
                        'skip_path' => true
                    ) 
                );
            break;

            default:
            $js_data_page = array(

            );
            break;
        }

        $js_str = '';
        foreach($js_data_page as &$js) {
            if($js['skip_path']) {
                $js_str .= self::printJSPage($js['path'], $js['version']);
            }
            else {
                $js_str .= self::printJSPage($root_path . $js['path'], $js['version']);
            }
        }
        return $js_str;
    }

    public static function printAccountJS() {
        $route = Router::getRoute();
        switch($route['action'] ?? "Eror") {

            case 'orders':
            $js_data_page = array(
                array(
                    'path' => '/account/static/local-common/js/utility/dropdown.28tgo.js?v=58-28',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/local-common/js/utility/dataset.4NBTd.js?v=58-28',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'claimCode':
            $js_data_page = array(
                array(
                    'path' => '/account/static/js/management/add-game.0t7VS.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'download':
            $js_data_page = array(
                array(
                    'path' => '/account/static/js/download/download.4HqHW.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'management':
            $js_data_page = array(
                array(
                    'path' => '/account/static/js/management/lobby.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'changePassword':
            $js_data_page = array(
                array(
                    'path' => '/account/static/js/inputs.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/js/settings/password.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'createtag':
            $js_data_page = array(
                array(
                    'path' => '/js/inputs.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/js/freedomtag/freedomtag-validator.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/js/freedomtag/freedomtag-randomize.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'verifytag':
            $js_data_page = array(
                array(
                    'path' => '/js/inputs.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/js/freedomtag/freedomtag-validator.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/js/freedomtag/freedomtag-randomize.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'changeEmail':
            $js_data_page = array(
                array(
                    'path' => '/account/static/js/settings/email.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/js/inputs.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;

            case 'dashboard':
            $js_data_page = array(
                array(
                    'path' => '/account/static/js/management/dashboard.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/js/management/wow/dashboard.js',
                    'version' => 58,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/js/inputs.js',
                    'version' => 58,
                    'skip_path' => true
                )
            );
            break;
            default:
            $js_data_page = array(

            );
            break;
        }

        $js_str = '';
        foreach($js_data_page as &$js) {
            if($js['skip_path']) {
                $js_str .= self::printJSPage($js['path'], $js['version']);
            }
            else {
                $js_str .= self::printJSPage($root_path . $js['path'], $js['version']);
            }
        }
        return $js_str;
    }

    public static function printAccountCSS() {
        $route = Router::getRoute();
        switch($route['action'] ?? "Eror") {

            case 'ordersDetail':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/management/order-history.4FKW0.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/services.3Z4I7.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/services-ie6.1lRdS.css',
                    'version' => 58,
                    'browser' => 'IE 6',
                    'skip_path' => true
                )
            );
            break;

            case 'orders':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/management/order-history.4FKW0.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/services.3Z4I7.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/services-ie6.1lRdS.css',
                    'version' => 58,
                    'browser' => 'IE 6',
                    'skip_path' => true
                )
            );
            break;

            case 'download':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/download/download.0Py8K.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/download/download-ie6.2u4DO.css',
                    'version' => 58,
                    'browser' => 'IE 6',
                    'skip_path' => true
                )
            );
            break;

            case 'claimCode':
            $css_data_page = array(
                array(
                    'path' => '/css/account/add-game.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'changePassword':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/management/settings.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'changeEmail':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/management/settings.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'createtag':
            $css_data_page = array(
                array(
                    'path' => '/css/account/freedomnet.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/account/freedomnet-print.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/account/freedomtag.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'verifytag':
            $css_data_page = array(
                array(
                    'path' => '/css/account/freedomnet.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/account/freedomnet-print.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/account/freedomtag.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'management':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/management/lobby.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/lobby-ie.css',
                    'version' => 55,
                    'browser' => 'IE',
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/lobby-ie6.css',
                    'version' => 55,
                    'browser' => 'IE 6',
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/inputs-ie.css',
                    'version' => 55,
                    'browser' => 'IE',
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/inputs-ie6.css',
                    'version' => 55,
                    'browser' => 'IE 6',
                    'skip_path' => true
                )
            );
            break;

            case 'dashboard':
            $css_data_page = array(
                array(
                    'path' => '/account/static/css/management/dashboard.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/wow/dashboard.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/wow/dashboard-ie.css',
                    'version' => 55,
                    'browser' => 'IE',
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/management/dashboard-ie6.css',
                    'version' => 55,
                    'browser' => 'IE 6',
                    'skip_path' => true
                ),
                array(
                    'path' => '/account/static/css/compiled/wow/full-page-upsell.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
            );
            break;
            default:
            $css_data_page = array(

            );
            break;
        }

        $css_str = '';
        foreach($css_data_page as &$sheet) {
            if($sheet['skip_path']) {
                $css_str .= self::printCSSPage($sheet['path'], $sheet['version'], $sheet['browser'], isset($sheet['media']) ? $sheet['media'] : false);
            }
            else {
                $css_str .= self::printCSSPage($root_path . $sheet['path'], $sheet['version'], $sheet['browser'], isset($sheet['media']) ? $sheet['media'] : false);
            }
        }
        return $css_str;
    }

    public static function printShopCSS() {
        $route = Router::getRoute();
        switch($route['action'] ?? "Eror") {

            case 'index':
            $css_data_page = array(
                array(
                    'path' => '/css/browse.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/shop/index.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'mount':
            $css_data_page = array(
                array(
                    'path' => '/css/product.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'item':
            $css_data_page = array(
                array(
                    'path' => '/css/product.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'buy':
            $css_data_page = array(
                array(
                    'path' => '/css/purchase.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'pay':
            $css_data_page = array(
                array(
                    'path' => '/css/purchase.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'complete':
            $css_data_page = array(
                array(
                    'path' => '/css/purchase.css',
                    'version' => 58,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            default:
            $css_data_page = array(

            );
            break;
        }

        $css_str = '';
        foreach($css_data_page as &$sheet) {
            if($sheet['skip_path']) {
                $css_str .= self::printCSSPage($sheet['path'], $sheet['version'], $sheet['browser'], isset($sheet['media']) ? $sheet['media'] : false);
            }
            else {
                $css_str .= self::printCSSPage($root_path . $sheet['path'], $sheet['version'], $sheet['browser'], isset($sheet['media']) ? $sheet['media'] : false);
            }
        }
        return $css_str;
    }

    public static function printCSS() {
        $route = Router::getRoute();
        switch($route['controller'] ?? 'Main') {
            case 'Main':
            $css_data_page = array(
                array(
                    'path' => '/css/common-game-site.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/expansion-Legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wow-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/nav-client-desktop-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/lightbox.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/build/cms.min.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/cms.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/sidebar.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'Community':
            $css_data_page = array(
                array(
                    'path' => '/css/common-game-site.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/expansion-Legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wow-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/nav-client-desktop-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/community.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/lightbox.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/build/cms.min.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/cms.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/sidebar.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/realmstatus.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'Character':
            $css_data_page = array(
                array(
                    'path' => '/css/common-game-site.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/expansion-Legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wow-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/nav-client-desktop-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/lightbox.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/profile.css',
                    'version' => 121,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/profile-ie.css',
                    'version' => 121,
                    'browser' => 'IE',
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/profile-ie6.css',
                    'version' => 121,
                    'browser' => 'IE 6',
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wiki/zone.css',
                    'version' => 121,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/character/summary.css',
                    'version' => 121,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/character/summary-ie.css',
                    'version' => 121,
                    'browser' => 'IE',
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/character/summary-ie6.css',
                    'version' => 121,
                    'browser' => 'IE 6',
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/character/summary-ie8.css',
                    'version' => 121,
                    'browser' => 'IE 8',
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/character/pet.css',
                    'version' => 121,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/character/pet-ie6.css',
                    'version' => 121,
                    'browser' => 'IE 6',
                    'skip_path' => true
                )

            );
            break;

            case 'Blog':
            $css_data_page = array(
                array(
                    'path' => '/css/common-game-site.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/expansion-Legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wow-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/nav-client-desktop-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/lightbox.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/build/cms.min.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/cms.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/sidebar.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;

            case 'Forum':
            $css_data_page = array(
                array(
                    'path' => '/css/common-game-site.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/expansion-Legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wow-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/nav-client-desktop-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/lightbox.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/build/cms.min.css"',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/forums/forums-index.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/forums/view-forum.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/forums/view-topic.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/forums/freedom-tracker.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
            );
            break;
            default:
            $css_data_page = array(
                array(
                    'path' => '/css/common-game-site.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/expansion-Legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/wow-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/nav-client-desktop-legion.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                ),
                array(
                    'path' => '/css/lightbox.css',
                    'version' => 55,
                    'browser' => false,
                    'skip_path' => true
                )
            );
            break;
        }

        $css_str = '';
        foreach($css_data_page as &$sheet) {
            if($sheet['skip_path']) {
                $css_str .= self::printCSSPage($sheet['path'], $sheet['version'], $sheet['browser'], isset($sheet['media']) ? $sheet['media'] : false);
            }
            else {
                $css_str .= self::printCSSPage($root_path . $sheet['path'], $sheet['version'], $sheet['browser'], isset($sheet['media']) ? $sheet['media'] : false);
            }
        }
        return $css_str;
    }

    private static function printJSPage($path, $version = 0) {
            return sprintf("<script type=\"text/javascript\" src=\"%s?v%d\"></script>\n", $path, $version);
    }

    private static function printCSSPage($path, $version = 0, $browser = false, $media = false) {
        if(!$browser) {
            return sprintf("<link rel=\"stylesheet\" type=\"text/css\" media=\"%s\" href=\"%s?v%d\" />\n", $media ? $media : 'all', $path, $version);
        }
        else {
            return sprintf("<!--[if %s]><link rel=\"stylesheet\" type=\"text/css\" media=\"%s\" href=\"%s?v%d\" /><![endif]-->\n", $browser, $media ? $media : 'all', $path, $version);
        }
    }

    public static function printMainMenu() {
        $route = Router::getRoute();
        $main_menu = "<ul class=\"menu\" id=\"menu\">\n%s\n</ul>";
        $menu_item = '<li class="%s"><a href="%s"%s><span>%s</span></a></li>';
        $full_menu = null;
        $menu_site = new Cms();
        $global_menu = $menu_site->GetMainMenu();
        foreach($global_menu as &$menu) {
            $full_menu .= sprintf($menu_item, $menu['key'], $menu['href'], ($route['controller'] == $menu['active']) ? ' class="menu-active"' : null, $menu['title']);
            $full_menu .= "\n";
        }
        return sprintf($main_menu, $full_menu);
    }
}