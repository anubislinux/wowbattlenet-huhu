<html xml:lang="ru" class="ru">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
    <meta http-equiv="imagetoolbar" content="false" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Продукция World of Warcraft</title>
    <link rel="shortcut icon" href="/images/meta/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/common-game-site.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/nav-client-desktop.css" />
    <!--[if gt IE 8]><!--><link rel="stylesheet" type="text/css" media="all" href="/css/toolkit/freedomnet-web.min.css" /><!-- <![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="/css/global.css" />
        <?php echo vendor\core\App::$app->css->printShopCSS()?>
    <script src="/js/third-party/jquery-1.11.0.min.js"></script>
    <script src="/js/core.min.js"></script>

    <meta name="description" content="В магазине вы можете приобрести питомцев, средства передвижения, а также оплатить услуги и пополнить баланс кошелька. Покупайте нашу продукцию и играйте в свое удовольствие!" />
    <script type="text/javascript">
        //<![CDATA[
        var Core = Core || {},
        Login = Login || {};
        Core.staticUrl = '/';
        Core.sharedStaticUrl = '/';
        Core.baseUrl = 'http://wowbattlenet';
        Core.projectUrl = '/';
        Core.cdnUrl = '/';
        Core.supportUrl = '';
        Core.secureSupportUrl = '';
        Core.project = 'wow';
        Core.locale = 'ru';
        Core.language = 'ru';
        Core.region = 'eu';
        Core.shortDateFormat = 'dd/MM/yyyy';
        Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
        Core.loggedIn = false;
        Core.userAgent = 'web';
        Login.embeddedUrl = '/fragment/login.frag';
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '']);
        _gaq.push(['_setDomainName', '']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);
        //]]>
    </script>
</head>
<body class="ru <?=$body?>">
<?php require_once 'shop/js_part.php';?>
<div class="navbar-static">
<?php require_once 'header.php';?>
        <nav class="navbar">
            <div class="grid-container">
                <div class="grid-50">
                    <ul class="breadcrumb">
                        <li>
                            <a href="/shop/">
                            <span class="breadcrumb-home">
                                <i class="icon-home"></i>
                                <?php echo vendor\core\App::$app->lang->get('lng.shop', '')?>
                            </span>
                            </a>
                            <span class="divider"><i class="icon-chevron-right icon-white"></i></span>
                        </li>
                            <li class="active">魔兽世界</li>
                    </ul>
                </div>
                <?php if(vendor\core\Session::get('email')) {?>
                <div class="grid-50">
                    <ul class="nav">
                        <li class="dropdown pull-right battlenet-balance-status">
                            <a href="#" class="dropdown-toggle" id="battlenet-balance-select" role="button" data-toggle="dropdown">
                                <span class="balance-amount">USD <?=$userBalance['balance']?>.00</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="battlenet-balance-select">
                                <li><a tabindex="-1" href="/shop/add-balance">余额充值</a></li>
                                <li><a tabindex="-1" href="/account/management/claim-code" data-external="sso">Add Pre-paid Card<i class="icon-external-link"></i></a></li>
                                <li><a tabindex="-1" href="/account/management/orders" data-external="sso">Balance History<i class="icon-external-link"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </div>
        </nav>
</div>
<?=$content?>
<div id="nav-client-footer" class="nav-client">
    <div class="mobileFooterEnabled footer-content footer-desktop grid-container">
        <div class="nav-section support-feedback">
            <div class="nav-left">
                <div id="nav-feedback">
                    <a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support">
                        <i class="nav-icon-24-blue nav-icon-question-circle"></i>
                        <?php echo vendor\core\App::$app->lang->get('lng.support', '')?>
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-section">
            <div class="nav-left nav-logo-group">
                <div class="footer-logo nav-left">
                    <a class="nav-item logo-link" href="/" data-analytics="global-nav" data-analytics-placement="Footer - Logo"><img class="blizzard-logo" src="/images/nav-client/blizzard.png" alt="" /></a>
                </div>
                <div class="footer-links nav-left">
                    <a class="nav-item nav-a" href="/company/about/" data-analytics="global-nav" data-analytics-placement="Footer - About">关于</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/company/privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Privacy</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/company/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms">团队</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/api/doc" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>
                    <div class="copyright">© World of Warcraft, 2017 г.</div>
                    <div class="nav-footer-icon-container">
                        <ul class="nav-footer-icon-list">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-ratings">
            </div>
        </div>
    </div>
    <div class="mobileFooterEnabled footer-content footer-mobile grid-container"> <div class="nav-section support-feedback">
            <div id="nav-client-feedback">
                <a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support">
                    <i class="nav-icon-24-blue nav-icon-question-circle"></i>
                    <?php echo vendor\core\App::$app->lang->get('lng.support', '')?>
                </a>
            </div>
        </div>
        <div class="nav-logo-group">
            <div class="footer-logo">
                <a class="nav-item logo-link" href="/" data-analytics="global-nav" data-analytics-placement="Footer - Logo"><img class="blizzard-logo" src="/images/nav-client/blizzard.png" alt="" /></a>
            </div>
            <div class="footer-links">
                <a class="nav-item nav-a" href="/company/about/" data-analytics="global-nav" data-analytics-placement="Footer - About">关于</a>
                <span>|</span>
                <a class="nav-item nav-a" href="/company/privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy">Privacy</a>
                <span>|</span>
                <a class="nav-item nav-a" href="/company/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms">团队</a>
                <span>|</span>
                <a class="nav-item nav-a" href="/api/doc" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>
                <div class="copyright">© 中国魔兽, 2017 г.</div>
            <div class="nav-footer-icon-container">
                <ul class="nav-footer-icon-list">
                </ul>
            </div>
            <div class="nav-ratings">
            </div>
        </div>
    </div>
</div> </div>
    <script src="/js/toolkit.js"></script>
    <script type="text/javascript" src="/js/global.js"></script>
    <script type="text/javascript" src="/js/product.js"></script>
    <script type="text/javascript" src="/js/purchase.js"></script>
    <script src="/js/navbar.js"></script>
    <div id="ajax-indicator" class="ajax-indicator"></div>
</body>
</html>