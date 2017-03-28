<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="page-content" class="page-content">
                <h3 class="headline subpage"><?php echo sprintf(vendor\core\App::$app->lang->get('lng.teg_name_created_greetings', ''), vendor\core\Session::get('email'))?></h3>
                <div  class="full-freedomtag">
                    <span class="freedomtag-name"><?=$tag['tag']?></span><span class="freedomtag-number">#<?=$tag['id']?></span>
                </div>
                <div  class="black-line-note">
                    <div class="black-line-note-arrow"></div>
                    <div class="black-line-note-content border-3">
                        <p class="desc"><?php echo vendor\core\App::$app->lang->get('lng.teg_name_code_desc', '')?></p>
                    </div>
                </div>
                <span class="clear"></span>
                <a class="ui-button button1" href="/account/management/">
                    <span class="button-left">
                        <span class="button-right">
                            <?php echo vendor\core\App::$app->lang->get('lng.teg_name_return', '')?>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="layout-bottom-divider"></div>