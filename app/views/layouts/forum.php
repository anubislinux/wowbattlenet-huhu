<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title>中国魔兽论坛</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://eu.battle.net/forums/ru/wow/" />
    <meta property="og:title" content="中国魔兽论坛" />
    <meta property="og:image" content="/forums/static/images/social-thumbs/wow.png" />
    <meta property="og:description" content="欢迎来到中国魔兽论坛" />

    <link rel="shortcut icon" type="image/x-icon" href="/forums/static/images/icons/wow-favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="/forums/static/css/nav-client/nav-client.css?v=84" />
    <link rel="stylesheet" type="text/css" media="(max-width:800px)" href="/forums/static/css/nav-client/nav-client-responsive.css?v=84" />
    <link rel="stylesheet" type="text/css" media="all" href="/forums/static/css/main-7b91e19e68.css?v=58-84" />

    <script type="text/javascript" src="/forums/static/js/vendor/jquery/dist/jquery.min.js?v=84"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $('body').removeClass('no-js');

            // TODO: Remove the following code when fixing the white flash issue.
            // Its here to fix the deeplinking bug in Firefox
            if (location.href.indexOf('#') > -1) {
   			location.href+='';
            }
        })
    </script>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="/forums/static/js/vendor/jquery-compat/dist/jquery.min.js?v=84"></script>
    <![endif]-->

        <script type="text/javascript">
        //<![CDATA[
        var Core = Core || {},
            Login = Login || {};
        Core.staticUrl			= '/forums/static';
        Core.sharedStaticUrl 	= '/forums/static/local-common';
        Core.baseUrl			= '/forum';
        Core.projectUrl     	= '/forum';
        Core.cdnUrl         	= 'http://media.blizzard.com';
        Core.supportUrl			= '/support/';
        Core.secureSupportUrl 	= '/support/';
        Core.project			= 'forums';
        Core.locale				= 'ru-ru';
        Core.language			= 'ru';
        Core.region				= 'eu';
        Core.shortDateFormat 	= 'dd/MM/yyyy';
        Core.dateTimeFormat		= 'dd/MM/yyyy HH:mm';
        Core.loggedIn			= true;
        Core.userAgent			= 'web';
        Login.embeddedUrl 		= '/login/login.frag';
        Core.community = 'wow';
        //]]>
        </script>
        <script type="text/javascript" src="/forums/static/js/nav-client/navbar-tk.min.js?v=84"></script>
        <script type="text/javascript">
        //<![CDATA[
        window.nav.notifications.endpoint = "\/notification/list";
        //]]>
        </script>
        <script type="text/javascript">
        //<![CDATA[
        var LOCALIZATION = LOCALIZATION || {};
        LOCALIZATION.URL_PROMPT = "Ссылка на страницу:";
        //]]>
        </script>
</head>


<body class="ru-ru <?=$body;?>">
        <script type="text/javascript">
        //<![CDATA[
    var LOCALIZATION = LOCALIZATION || {};

 	LOCALIZATION.ERROR_EMPTY = "Warning! No topics were selected";
    LOCALIZATION.DELETE_SUCCESS = "удалено";
    LOCALIZATION.DELETE_CHANGES = "Success! the selected topic(s) have been deleted. Please wait up to 60 seconds for your changes to appear.";
    LOCALIZATION.ERROR_DELETE = "Ошибка при удалении";
    LOCALIZATION.ERROR_DELETE_DETAILED = "Error! the selected topic(s) were not deleted.";
    LOCALIZATION.UPDATE_SUCCESS_MOD = "Update successful";
    LOCALIZATION.ERROR_UPDATE_MOD = "Error Updating";
    LOCALIZATION.UNPOSTED_PROMPT = "Вы начали писать сообщение...";
        //]]>
        </script>

<?php require_once 'global_menu_forum.php'; ?>

<div class="Subnav">
    <div class="Container Container--content">
<div class="GameSite-link"> <a class="GameSite-link--heading" href="/"> <i class="Icon"></i>中国魔兽 </a> </div> <div class="Breadcrumbs"> <span class="Breadcrumb"> <a href="/forum/" class="Breadcrumb-content is-active"> <span class="Breadcrumb-divider Home"> <i class="Icon"></i> </span> 论坛 </a> </span> </div>

<div class="User-menu"> <span class="User-menu-label">帖子类型:</span> <div class="Dropdown"> <span class="User-menu-heading" data-trigger="toggle.dropdown.menu"><div class="Author-avatar" ><img src="/forums/static/images/avatars/wow/4-0.jpg" alt="" /></div> <i class="Icon"></i> </span> <div class="Dropdown-menu Dropdown-menu--userMenu"> <span class="Dropdown-arrow Dropdown-arrow--up" data-attachment="top right" data-target-attachment="bottom center"></span> <div class="Dropdown-items"> <a href="/forums/search?a=" class="Dropdown-item Dropdown-item--postHistory">查看发帖记录</a> <a href="/character/" class="Dropdown-item Dropdown-item--profileLink"> 资料<i class="Icon-profileLink"></i></a><div class="Dropdown-divider"></div> <span class="Dropdown-item" data-select-character="true"> 更换角色</span> </div> </div> </div> </div>
    </div>
</div>

<?=$content?>

<footer class="Forums-footer">
    感谢访问 <a href='/forums/ru/'>中国魔兽论坛</a> (2.16.0) · <a href='http://us.battle.net/forums/en/patch-notes/'>补丁说明</a>
</footer>
    <div id="nav-client-footer" class="nav-client">

    <div class="mobileFooterEnabled footer-content footer-desktop grid-container">	<div class="nav-section support-feedback">
            <div class="nav-left">
                <div id="nav-feedback">




<a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="http://eu.battle.net/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support"><i class="nav-icon-24-blue nav-icon-question-circle"></i>支持</a>


                </div>
            </div>
                <div class="nav-right">
    <div id="nav-client-region-select">
        <div class="dropdown dropup pull-right">
            <a class="dropdown-toggle nav-item" data-toggle="dropdown">
                <i class="nav-icon-24-blue nav-icon-globe"></i>中国 - 简体中文<b class="caret"></b>
            </a>
            <div class="dropdown-menu" data-placement="top">
                <div class="arrow bottom"></div>
                <div id="nav-client-international-desktop">
    <div class="nav-international-container">
        <div class="dropdown-section nav-column-container">
            <div class="nav-column-50">
                <div id="select-regions" class="nav-box regions">
                    <h3>Регион</h3>
                    <ul class="region-ul">
                            <li class="region "><a class="nav-item select-region" href="javascript:;" data-target="us">Америка</a></li>
                            <li class="region active current"><a class="nav-item select-region" href="javascript:;" data-target="eu">Европа</a></li>
                            <li class="region "><a class="nav-item select-region" href="javascript:;" data-target="kr">Азия</a></li>
                            <li class="region "><a class="nav-item select-region" href="javascript:;" data-target="cn">Китай</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-column-50">
                <div id="select-language" class="nav-box languages">
                    <h3>Язык</h3>
                        <div class="region region-languages " data-region="us">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://us.battle.net/forums/en-us/wow/" data-target="us" data-language="en-us">English (US)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://us.battle.net/forums/es-mx/wow/" data-target="us" data-language="es-mx">Español (AL)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://us.battle.net/forums/pt-br/wow/" data-target="us" data-language="pt-br">Português (AL)</a>
                                    </li>
                            </ul>
                        </div>
                        <div class="region region-languages active current" data-region="eu">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/de-de/wow/" data-target="eu" data-language="de-de">Deutsch</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/en-gb/wow/" data-target="eu" data-language="en-gb">English (EU)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/es-es/wow/" data-target="eu" data-language="es-es">Español (EU)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/fr-fr/wow/" data-target="eu" data-language="fr-fr">Français</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/it-it/wow/" data-target="eu" data-language="it-it">Italiano</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/pl-pl/wow/" data-target="eu" data-language="pl-pl">Polski</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/pt-br/wow/" data-target="eu" data-language="pt-br">Português (AL)</a>
                                    </li>
                                    <li class="active current">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/ru-ru/wow/" data-target="eu" data-language="ru-ru">Русский</a>
                                    </li>
                            </ul>
                        </div>
                        <div class="region region-languages " data-region="kr">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://kr.battle.net/forums/ko-kr/wow/" data-target="kr" data-language="ko-kr">한국어</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://tw.battle.net/forums/zh-tw/wow/" data-target="kr" data-language="zh-tw">繁體中文</a>
                                    </li>
                            </ul>
                        </div>
                        <div class="region region-languages " data-region="cn">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://www.battlenet.com.cn/forums/wow/" data-target="cn" data-language="zh-cn">简体中文</a>
                                    </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
                    <div class="dropdown-section dropdown-well nav-box localeChange">
                        <a id="nav-client-change-language-desktop" href="javascript:;" class="nav-lang-change nav-btn">Изменить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
    </div>
    <div class="nav-section">
            <div class="nav-left nav-logo-group">
                    <div class="footer-logo nav-left">




<a class="nav-item logo-link" href="http://eu.blizzard.com/" data-analytics="global-nav" data-analytics-placement="Footer - Blizzard Logo"><img class="blizzard-logo" src="/forums/static/images/nav-client/blizzard.png?v=58-84" alt="" /></a>

                    </div>
                <div class="footer-links nav-left">






<a class="nav-item nav-a" href="http://jobs.blizzard.com/" data-analytics="global-nav" data-analytics-placement="Footer - Careers">Вакансии</a>

            <span>|</span>





<a class="nav-item nav-a" href="http://eu.blizzard.com/company/about/" data-analytics="global-nav" data-analytics-placement="Footer - About">О компании</a>

            <span>|</span>





<a class="nav-item nav-a" href="http://eu.blizzard.com/company/about/privacy.html" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Политика конфиденциальности</a>

            <span>|</span>





<a class="nav-item nav-a" href="http://eu.blizzard.com/company/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms">Соглашения</a>

            <span>|</span>





<a class="nav-item nav-a" href="//dev.battle.net" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>

    <div class="copyright">© Blizzard Entertainment, 2017 г.</div>
    <div class="nav-footer-icon-container">
        <ul class="nav-footer-icon-list">
        </ul>
    </div>
                </div>
            </div>
            <div class="nav-ratings">
            <div class="legal-rating">



    <div class="product-rating mkrf-rating clearfix">
        <a href="http://mkrf.ru/" tabindex="1" rel="external" target="_blank"><img class="mkrf-logo" src="/forums/static/images/legal/ratings/mkrf/12.png?v=58-84" alt="12+" width="65" height="72" /></a>
    </div>
            </div>


            </div>
    </div>
</div>


    <div class="mobileFooterEnabled footer-content footer-mobile grid-container">	<div class="nav-section support-feedback">
                <div class="nav-client-feedback" id="nav-client-feedback">




<a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="http://eu.battle.net/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support"><i class="nav-icon-24-blue nav-icon-question-circle"></i>Поддержка</a>


                </div>
    </div>
    <div class="nav-section locale-selector">
    <div id="nav-client-region-select">
        <a href="javascript:;" data-toggle="nav-collapse" data-target="#nav-client-collapsible-languages" class="nav-item dropdown dropdown-toggle collapsible-btn-mobile">
            <i class="nav-icon-24-blue nav-icon-globe"></i>Европа - Русский<b class="caret"></b>
        </a>
        <div class="nav-collapse dropdown-well" id="nav-client-collapsible-languages">
            <div id="nav-client-international-mobile" class="nav-container region-container-mobile">
    <div class="nav-international-container">
        <div class="dropdown-section nav-column-container">
            <div class="nav-column-50">
                <div id="select-regions" class="nav-box regions">
                    <h3>Регион</h3>
                    <ul class="region-ul">
                            <li class="region "><a class="nav-item select-region" href="javascript:;" data-target="us">Америка</a></li>
                            <li class="region active current"><a class="nav-item select-region" href="javascript:;" data-target="eu">Европа</a></li>
                            <li class="region "><a class="nav-item select-region" href="javascript:;" data-target="kr">Азия</a></li>
                            <li class="region "><a class="nav-item select-region" href="javascript:;" data-target="cn">Китай</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-column-50">
                <div id="select-language" class="nav-box languages">
                    <h3>Язык</h3>
                        <div class="region region-languages " data-region="us">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://us.battle.net/forums/en-us/wow/" data-target="us" data-language="en-us">English (US)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://us.battle.net/forums/es-mx/wow/" data-target="us" data-language="es-mx">Español (AL)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://us.battle.net/forums/pt-br/wow/" data-target="us" data-language="pt-br">Português (AL)</a>
                                    </li>
                            </ul>
                        </div>
                        <div class="region region-languages active current" data-region="eu">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/de-de/wow/" data-target="eu" data-language="de-de">Deutsch</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/en-gb/wow/" data-target="eu" data-language="en-gb">English (EU)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/es-es/wow/" data-target="eu" data-language="es-es">Español (EU)</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/fr-fr/wow/" data-target="eu" data-language="fr-fr">Français</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/it-it/wow/" data-target="eu" data-language="it-it">Italiano</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/pl-pl/wow/" data-target="eu" data-language="pl-pl">Polski</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/pt-br/wow/" data-target="eu" data-language="pt-br">Português (AL)</a>
                                    </li>
                                    <li class="active current">
                                        <a class="nav-item select-language" href="http://eu.battle.net/forums/ru-ru/wow/" data-target="eu" data-language="ru-ru">Русский</a>
                                    </li>
                            </ul>
                        </div>
                        <div class="region region-languages " data-region="kr">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://kr.battle.net/forums/ko-kr/wow/" data-target="kr" data-language="ko-kr">한국어</a>
                                    </li>
                                    <li class="">
                                        <a class="nav-item select-language" href="http://tw.battle.net/forums/zh-tw/wow/" data-target="kr" data-language="zh-tw">繁體中文</a>
                                    </li>
                            </ul>
                        </div>
                        <div class="region region-languages " data-region="cn">
                            <ul class="region-ul">
                                    <li class="">
                                        <a class="nav-item select-language" href="http://www.battlenet.com.cn/forums/wow/" data-target="cn" data-language="zh-cn">简体中文</a>
                                    </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
                <div class="dropdown-section nav-box">
                    <a id="nav-client-change-language-mobile" href="javascript:;" class="nav-a nav-lang-change nav-btn">Изменить</a>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="nav-logo-group">
                <div class="footer-logo">




<a class="nav-item logo-link" href="http://eu.blizzard.com/" data-analytics="global-nav" data-analytics-placement="Footer - Blizzard Logo"><img class="blizzard-logo" src="/forums/static/images/nav-client/blizzard.png?v=58-84" alt="" /></a>

                </div>
            <div class="footer-links">






<a class="nav-item nav-a" href="http://jobs.blizzard.com/" data-analytics="global-nav" data-analytics-placement="Footer - Careers">Вакансии</a>

            <span>|</span>





<a class="nav-item nav-a" href="http://eu.blizzard.com/company/about/" data-analytics="global-nav" data-analytics-placement="Footer - About">О компании</a>

            <span>|</span>





<a class="nav-item nav-a" href="http://eu.blizzard.com/company/about/privacy.html" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Политика конфиденциальности</a>

            <span>|</span>





<a class="nav-item nav-a" href="http://eu.blizzard.com/company/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms">Соглашения</a>

            <span>|</span>





<a class="nav-item nav-a" href="//dev.battle.net" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>

            </div>

    <div class="copyright">© Blizzard Entertainment, 2017 г.</div>
    <div class="nav-footer-icon-container">
        <ul class="nav-footer-icon-list">
        </ul>
    </div>
            <div class="nav-ratings">
            <div class="legal-rating">



    <div class="product-rating mkrf-rating clearfix">
        <a href="http://mkrf.ru/" tabindex="1" rel="external" target="_blank"><img class="mkrf-logo" src="/forums/static/images/legal/ratings/mkrf/12.png?v=58-84" alt="12+" width="65" height="72" /></a>
    </div>
            </div>


            </div>
        </div>
</div>
    </div>

    <div class="modal eu-cookie-compliance desktop hide" id="eu-cookie-compliance">
            <div class="modal-header">
                <a class="close" data-dismiss="modal" id="cookie-compliance-close"><i class="icon-remove icon-white"></i></a>
                <h1>Cookie-файлы</h1>
            </div>
        <div class="modal-body">
            <p>На сайтах Blizzard Entertainment используются cookie-файлы и другие аналогичные технологии. Если, прочитав это сообщение, вы остаетесь на нашем сайте, это означает, что вы не возражаете против использования этих технологий.</p>
        </div>
        <button class="btn btn-primary" id="cookie-compliance-agree">Хорошо</button>
        <a class="btn" id="cookie-compliance-learn" href="http://eu.blizzard.com/company/about/privacy.html" target="_blank">Подробнее</a>
    </div>

    <div class="modal eu-cookie-compliance mobile hide" id="eu-cookie-compliance">
        <div class="modal-body">
                <a class="close" data-dismiss="modal" id="cookie-compliance-close"><i class="icon-remove icon-white"></i></a>
            <p>На этом сайте используются cookie-файлы. Если вы сейчас остаетесь на сайте, это означает, что вы не возражаете против использования этих технологий.</p>
        </div>
        <button class="btn btn-primary" id="cookie-compliance-agree">Хорошо</button>
        <a class="btn" id="cookie-compliance-learn" href="http://eu.blizzard.com/company/about/privacy.html" target="_blank">Подробнее</a>
    </div>
<script type="text/javascript" src="/forums/static/js/vendor/tether/dist/js/tether.js"></script>
<script type="text/javascript" src="/forums/static/js/vendor/waypoints/lib/jquery.waypoints.js"></script>
<script type="text/javascript" src="/forums/static/js/vendor/waypoints/lib/shortcuts/sticky.js"></script>
<script type="text/javascript" src="/forums/static/js/vendor/instanttouch.min.js"></script>
<script type="text/javascript" src="/forums/static/js/vendor/clipboard.min.js"></script>
<script type="text/javascript" src="/forums/static/js/vendor/d3/tooltips.js"></script>

    <script type="text/javascript" src="/forums/static/js/main-5adfc9ead6.js"></script>

</body>
</html>