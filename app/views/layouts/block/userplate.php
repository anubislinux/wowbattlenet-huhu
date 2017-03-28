<div class="user-plate">
<?php if(vendor\core\Session::get('email')) {?>
<?php if(isset($charactersActive) == 0) { ?>
<div class="card-character plate-default no-character"></div>
<div class="meta-wrapper meta-no-character ajax-update">
<div class="meta">
<div class="player-name"><?php if(isset($userTegName)) {
    echo $userTegName['tag_name'];
} else {
    echo vendor\core\Session::get('email');
} ?></div>
<?php echo vendor\core\App::$app->lang->get('lng.no_char', '')?>
</div>
</div>
<?php } else {?>
<?php require_once 'userplate_char.php';?>
<?php } ?>
<?php } else {?>
<a href="/account/login" class="card-character plate-logged-out">
<span class="card-portrait"></span>
<span class="wow-login-key"></span>
<span class="login-msg"><?php echo vendor\core\App::$app->lang->get('lng.log_in_new', '')?></span>
</a>
<?php } ?>
</div>