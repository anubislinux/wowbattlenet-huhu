<div id="nav-client-header" class="nav-client compact"> <!-- default -->
        <div id="nav-client-bar">
            <div class="grid-container nav-header-content">
                <ul class="nav-list nav-left" id="nav-client-main-menu">
                    <li>
                        <a id="nav-client-home" class="nav-item nav-home" href="/" data-analytics="global-nav" data-analytics-placement="Nav - World of Warcraft Icon"></a>
                    </li>
                    <li>
                        <a id="nav-client-shop" class="nav-item nav-link" href="/shop" data-analytics="global-nav" data-analytics-placement="Nav - <?php echo vendor\core\App::$app->lang->get('lng.shop', '')?>"><?php echo vendor\core\App::$app->lang->get('lng.shop', '')?></a>
                    </li>
                    <li>
                        <a id="nav-client-api" class="nav-item nav-link" href="/api" data-analytics="global-nav" data-analytics-placement="Nav - API">API</a>
                    </li>
                </ul>      
                <?php if(vendor\core\Session::get('email')) {?>
                    <ul class="nav-list nav-right" id="nav-client-account-menu">
                        <li>
                            <div id="username">
                                <div class="dropdown pull-right">
                                    <a class="nav-link username dropdown-toggle" data-toggle="dropdown" rel="navbar">
                                        <?php if(isset($userTegName)) {
                                            echo $userTegName['tag_name'];
                                        } else {
                                            echo vendor\core\Session::get('email');
                                        } ?>
                                        <b class="caret"></b>
                                    </a>
                                    <div class="dropdown-menu pull-right">
                                        <div class="arrow top"></div>
                                        <div class="user-profile">
                                            <div class="dropdown-section">
                                                <div class="nav-box selectable">
                                                        <?php if(isset($userTegName)) {?><div class="label">
                                                            <span class="battletag"><?=$userTegName['tag_name']?></span>
                                                            <span class="code">#<?=$userTegName['tag_id']?></span>
                                                        </div><?php } ?>
                                                    <div class="email"><?php echo vendor\core\Session::get('email') ?></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-section">
                                                <ul class="nav-list">
                                                    <li>
                                                        <a class="nav-item nav-a nav-item-box" href="/account/management/" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                            <i class="nav-icon-24-blue nav-icon-character-cog"></i><?php echo vendor\core\App::$app->lang->get('lng.account_settings', '')?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-section">
                                                <a class="nav-item nav-item-box" href="/account/signout" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log Out"><i class="nav-icon-24-blue nav-icon-logout"></i><?php echo vendor\core\App::$app->lang->get('lng.logout', '')?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a id="nav-client-support-link" class="nav-item nav-link" href="/support/" data-analytics="global-nav" data-analytics-placement="Nav - Support"><?php echo vendor\core\App::$app->lang->get('lng.support', '')?></a>
                        </li>
                    </ul>
                <?php } else {?>
                <ul class="nav-list nav-right" id="nav-client-account-menu">
                    <li>
                        <div id="username">
                            <div class="dropdown pull-right">
                                <a class="nav-link username dropdown-toggle" data-toggle="dropdown" rel="navbar">
                                    <?php echo vendor\core\App::$app->lang->get('lng.your_account', '')?>
                                    <b class="caret"></b>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="arrow top"></div>
                                    <div class="user-profile">
                                        <div class="dropdown-section">
                                            <div class="nav-box">
                                                <a class="nav-item nav-btn nav-btn-block nav-login-btn" href="/account/login" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log In"><?php echo vendor\core\App::$app->lang->get('lng.log_in', '')?></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-section">
                                            <ul class="nav-list">
                                                <li>
                                                    <a class="nav-item nav-a nav-item-box" href="/account/management/" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                                        <i class="nav-icon-24-blue nav-icon-character-cog"></i>
                                                        <?php echo vendor\core\App::$app->lang->get('lng.account_settings', '')?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a id="nav-client-support-link" class="nav-item nav-link" href="/support/" data-analytics="global-nav" data-analytics-placement="Nav - Support"><?php echo vendor\core\App::$app->lang->get('lng.support', '')?> </a>
                    </li>
                </ul><?php } ?>
            </div>
        </div>
    </div>