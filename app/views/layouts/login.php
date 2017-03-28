<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" class="ru">
    <head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
        <meta http-equiv="imagetoolbar" content="false" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo vendor\core\App::$app->lang->get('lng.account_login', '')?> -  World of Warcraft</title>
        <link rel="shortcut icon" href="/images/meta/favicon.ico" />
        <link rel="stylesheet" type="text/css" media="all" href="/css/toolkit/freedomnet-web.min.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/css/login/global.min.css" />
        <script type="text/javascript" src="/js/third-party/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="/js/core.min.js"></script>
        <meta name="viewport" content="width=device-width" />

    </head>
    <body class="ru login-template web wow WoD" data-embedded-state="STATE_LOGIN">
        <div class="grid-container wrapper">
            <h1 class="logo" style="height:125px;"><?php echo vendor\core\App::$app->lang->get('lng.account_login', '')?></h1>

            <div class="hide" id="info-wrapper">
                <h2><strong class="info-title"></strong></h2>

                <p class="info-body"></p><button class="btn btn-block hide visible-phone" id="info-phone-close">Close</button>
            </div>

            <div class="input-container" id="login-wrapper">
                <form action="/account/login" class=" username-required input-focus" id= "password-form" method="post" name="password-form">
                        <?php if(vendor\libs\Session::hasFlash() ): ?>
                        <div xmlns="http://www.w3.org/1999/xhtml" id="display-errors" class="alert alert-error alert-icon">
                        <?php echo vendor\libs\Session::flash();?>
                        </div>
                        <?php endif; ?>
                        <div class="control-group">
                        <label class="control-label" for="accountName" id= "accountName-label">Email</label>

                        <div class="controls">
                            <input class="input-block input-large" id="accountName" maxlength="320" name="email" placeholder="Email" spellcheck="false" tabindex="1" title="Email" type= "text" value="">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="password" id= "password-label"><?php echo vendor\core\App::$app->lang->get('lng.password_login', '')?></label>

                        <div class="controls">
                            <input autocomplete="off" class="input-block input-large" id="password" maxlength="16" name="password" placeholder= "<?php echo vendor\core\App::$app->lang->get('lng.password_login', '')?>" spellcheck="false" tabindex="1" title= "<?php echo vendor\core\App::$app->lang->get('lng.password_login', '')?>" type="password">
                        </div>
                    </div>

                    <div class="persistWrapper">
                        <label class="checkbox-label css-label" for="persistLogin" id= "persistLogin-label">
                            <input checked="checked" id="persistLogin" name="persistLogin" tabindex="1" type="checkbox">
                            <span class= "input-checkbox"></span><?php echo vendor\core\App::$app->lang->get('lng.checkbox', '')?></label>
                    </div>

                    <div class="control-group submit">
                        <button class="btn btn-primary btn-large btn-block"
                        data-loading-text="" id="submit" tabindex="1" type= "submit"><?php echo vendor\core\App::$app->lang->get('lng.log_in', '')?> <i class="spinner-battlenet"></i></button>
                    </div>
                    <ul id="help-links">
                        <li>
                            <a class="btn btn-block btn-large" href= "/account/register" rel="external" tabindex="1"><?php echo vendor\core\App::$app->lang->get('lng.creation', '')?>
                            <i class="icon-external-link"></i></a>
                        </li>

                        <li>
                            <a class="" href= "/account/restore" rel="external" tabindex="1"><?php echo vendor\core\App::$app->lang->get('lng.login_support', '')?> <i class= "icon-external-link"></i></a>
                        </li>
                    </ul>
                </form>
            </div>

            <footer class="footer footer-eu">
                <div class="lower-footer-wrapper">
                    <div class="lower-footer">
                        <div id="copyright">
                            © World of Warcraft, 2017 г.
                        </div>

                        <div id="legal">
                            <div class="png-fix" id="legal-ratings"></div><span class="clear"><!-- --></span>
                        </div>
                    </div>

                    <div id="marketing-trackers">
                        <div class="marketing-cover"></div>
                    </div>
                </div>
            </footer>
        </div>
    <script type="text/javascript" src="/js/embed-0.1.5.min.js"></script>
    <script type="text/javascript" src="/js/login/toolkit.min.js"></script>
    <script type="text/javascript" src="/js/login/global.min.js"></script>
    <script type="text/javascript" src="/js/login/login.min.js"></script>
    <script type="text/javascript" src="/js/freedomcore.js"></script>
    </body>
</html>