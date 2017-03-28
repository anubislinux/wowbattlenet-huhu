<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div class="alert caution closeable border-4 glow-shadow">
                <div class="alert-inner">
                    <div class="alert-message">
                        <p class="title"><strong><?php echo vendor\core\App::$app->lang->get('lng.teg_name_warning_title', '')?></strong></p>
                        <p><?php echo vendor\core\App::$app->lang->get('lng.teg_name_warning_sub_title', '')?></p>
                    </div>
                </div>
                <a class="alert-close" href="#" onclick="$(this).parent().fadeOut(250, function() { $(this).css({opacity:0}).animate({height: 0}, 100, function() { $(this).remove(); }); }); return false;">
                    <?php echo vendor\core\App::$app->lang->get('lng.warning_close', '')?>
                </a>
                <span class="clear"><!-- --></span>
            </div>
            <div id="page-header">
                <h3 class="headline"><?php echo vendor\core\App::$app->lang->get('lng.teg_name', '')?></h3>
            </div>
            <div id="page-content" class="page-content">
                <form method="POST" action="/account/management/battle-tag-name-verify/" id="freedomcoreIdForm" novalidate="novalidate">
                    <div class="freedomtag-field">
                        <span class="randomize-freedomTag">
                            <span class="input-text input-text-medium">
                            <input type="text" name="freedomTag" value="" id="freedomTag" class="medium border-5 glow-shadow-2" autocomplete="off" maxlength="12" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.enter_name', '')?>" />
                                <span class="inline-message " id="freedomTag-message"> </span>
                            </span>
                            <a class="dice" href="javascript:void(0)" id="generate-random-freedomtag"><?php echo vendor\core\App::$app->lang->get('lng.generate_rand', '')?></a>
                        </span>
                        <input type="hidden" id="skip" name="skip" value="false" />
                        <input type="hidden" id="ret" name="ret" value="" />
                        <input type="hidden" id="type" name="type" value="FREE" />
                        <div id="freedomTag-Alert" class="alert error border-4">
                            <div class="alert-inner">
                                <div class="alert-message">
                                    <p class="error-desc" id="latinbasic"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_length', '')?></strong></p>
                                    <p class="error-desc" id="latin"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_length', '')?></strong></p>
                                    <p class="error-desc" id="cyrillic"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_length', '')?></strong></p>
                                    <p class="error-desc" id="korean"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_length', '')?></strong></p>
                                    <p class="error-desc" id="chinese"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_length', '')?></strong></p>
                                    <p class="error-desc" id="result2"><strong><?php echo vendor\core\App::$app->lang->get('lng.numb_first', '')?></strong></p>
                                    <p class="error-desc" id="result3"><strong><?php echo vendor\core\App::$app->lang->get('lng.spec_symb', '')?></strong></p>
                                    <p class="error-desc" id="result4"><strong><?php echo vendor\core\App::$app->lang->get('lng.s_n_d', '')?></strong></p>
                                    <p class="error-desc" id="result5"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_restricted', '')?></strong></p>
                                    <p class="error-desc" id="result6"><strong><?php echo vendor\core\App::$app->lang->get('lng.error_same', '')?></strong></p>
                                </div>
                            </div>
                            <span class="clear"><!-- --></span>
                        </div>
                    </div>
                    <div class="submit-field">
                        <div class="submit-field">
                            <a class="ui-button button1 disabled" href="#" id="button-submit" tabindex="2">
                                <span class="button-left">
                                    <span class="button-right">
                                        <?php echo vendor\core\App::$app->lang->get('lng.create_teg_name', '')?>
                                    </span>
                                </span>
                            </a>
                            <div class="submit-cancel">
                                <a id="skipFtag" href="/account/management" tabindex="1">
                                    <?php echo vendor\core\App::$app->lang->get('lng.another_time', '')?>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <span class="clear"></span>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                $(function() {
                    var inputs = new Inputs('#freedomcoreIdForm');
                    FreedomTagValidator.accountRegion = "EU";
                    FreedomTagValidator.characterLength = {
                        "latinbasic" : {
                            "min" : 3,
                            "max" : 12
                        },
                        "latin" : {
                            "min" : 3,
                            "max" : 12
                        },
                        "cyrillic" : {
                            "min" : 3,
                            "max" : 12
                        },
                        "korean" : {
                            "min" : 2,
                            "max" : 8
                        },
                        "chinese" : {
                            "min" : 2,
                            "max" : 8
                        }
                    };

                });

                //]]>
            </script>
        </div>
    </div>
</div>
<div id="layout-bottom-divider"></div>