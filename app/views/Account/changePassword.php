<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="page-header">
<span class="required-legend"><span class="form-required">*</span> <span class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.subcategoryy', '')?></span></span>
<h2 class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.subcategory', '')?></h2>
<h3 class="headline"><?php echo vendor\core\App::$app->lang->get('lng.headline_pass', '')?></h3>
</div>
<div id="page-content" class="page-content">
<div class="columns-2-1 settings-content">
<div class="column column-left">
<div class="password-entry">
<span class="clear"><!-- --></span>
<form method="post" action="/account/management/settings/change-password.html" id="change-settings">
<div class="input-hidden">
<input type="hidden" id="csrftoken" name="csrftoken" value="3fa23e15-e1a7-49f5-b5d1-dd29a7b48e58" />
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="oldPassword">
<span class="label-text">
<?php echo vendor\core\App::$app->lang->get('lng.old_password', '')?>:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="oldPassword" name="oldPassword" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.old_password_desc', '')?>" />
<span class="inline-message " id="oldPassword-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="newPassword">
<span class="label-text">
<?php echo vendor\core\App::$app->lang->get('lng.new_password', '')?>:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="newPassword" name="newPassword" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.new_password_desc', '')?>" />
<span class="inline-message " id="newPassword-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-note" id="password-strength" style="display: none">
<div class="input-note input-text-small border-5 glow-shadow">
<div class="input-note-content">
<div class="password-strength">
<span class="password-result">
<?php echo vendor\core\App::$app->lang->get('lng.password_result', '')?>:
<strong id="password-result"></strong>
</span>
<span class="password-rating"><span class="rating rating-default" id="password-rating"></span></span>
</div>
</div>
<div class="input-note-arrow"></div>
</div>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="newPasswordVerify">
<span class="label-text">
<?php echo vendor\core\App::$app->lang->get('lng.new_password_verify', '')?>:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="newPasswordVerify" name="newPasswordVerify" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.new_password_verify', '')?>" />
<span class="inline-message " id="newPasswordVerify-message"> </span>
</span>
</span>
</div>
<div class="submit-row" id="submit-row">
<div class="input-left"></div><!--
--><div class="input-right">
<button class="ui-button button1" type="submit" id="password-submit" tabindex="1"><span class="button-left"><span class="button-right"><?php echo vendor\core\App::$app->lang->get('lng.change', '')?></span></span></button>
<a class="ui-cancel "
href="/account/management/"
tabindex="1">
<span>
<?php echo vendor\core\App::$app->lang->get('lng.shop_cancel', '')?> </span>
</a>
</div>
</div>
</form>
<script type="text/javascript">
//<![CDATA[
var FormMsg = {
'headerSingular': '<?php echo vendor\core\App::$app->lang->get("lng.header_singular", "")?>',
'headerMultiple': '<?php echo vendor\core\App::$app->lang->get("lng.header_singular", "")?>',
'fieldMissing': '<?php echo vendor\core\App::$app->lang->get("lng.field_missing", "")?>',
'fieldsMissing': '<?php echo vendor\core\App::$app->lang->get("lng.fields_missing", "")?>',
'emailInfo': '<?php echo vendor\core\App::$app->lang->get("lng.email_info", "")?>',
'emailMissing': '<?php echo vendor\core\App::$app->lang->get("lng.email_missing", "")?>',
'emailInvalid': '<?php echo vendor\core\App::$app->lang->get("lng.email_invalid", "")?>',
'emailMismatch': '<?php echo vendor\core\App::$app->lang->get("lng.email_mismatch", "")?>',
'passwordInvalid': '<?php echo vendor\core\App::$app->lang->get("lng.password_invalid", "")?>',
'passwordMismatch': '<?php echo vendor\core\App::$app->lang->get("lng.password_mismatch", "")?>',
'tosDisagree': '<?php echo vendor\core\App::$app->lang->get("lng.tos_disagree", "")?>',
'taxInvoiceSelect': 'Please select a tax invoice option'
, 'passwordError1': '<?php echo vendor\core\App::$app->lang->get("lng.password_invalid", "")?>'
, 'passwordError2': '<?php echo vendor\core\App::$app->lang->get("lng.password_mismatch", "")?>'
, 'passwordStrength0': '<?php echo vendor\core\App::$app->lang->get("lng.password_mismatch", "")?>'
, 'passwordStrength1': '<?php echo vendor\core\App::$app->lang->get("lng.password_strength_one", "")?>'
, 'passwordStrength2': '<?php echo vendor\core\App::$app->lang->get("lng.password_strength_two", "")?>'
, 'passwordStrength3': '<?php echo vendor\core\App::$app->lang->get("lng.password_strength_tree", "")?>'
};
//]]>
</script>
</div>
</div>
<div class="column column-right">
<div class="password-requirements">
<ul class="password-level" id="password-level">
<li id="password-level-0"><!--
--><span class="icon-16"></span><!--
--><span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get("lng.headline_pass_one", "")?></span><!--
--></li>
<li id="password-level-1"><!--
--><span class="icon-16"></span><!--
--><span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get("lng.headline_pass_two", "")?></span><!--
--></li>
<li id="password-level-2"><!--
--><span class="icon-16"></span><!--
--><span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get("lng.headline_pass_tree", "")?></span><!--
--></li>
<li id="password-level-3"><!--
--><span class="icon-16"></span><!--
--><span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get("lng.headline_pass_vo", "")?></span><!--
--></li>
<li id="password-level-4"><!--
--><span class="icon-16"></span><!--
--><span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get("lng.headline_pass_five", "")?></span><!--
--></li>
</ul>
<p class="caption"><?php echo vendor\core\App::$app->lang->get("lng.headline_pass_six", "")?></p>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var inputs = new Inputs('#change-settings');
var settings = new ChangePassword('#change-settings', {
passwordFields: [
'#newPassword',
'#newPasswordVerify'
],
emailAddress: '<?=$email?>'
});
});
//]]>
</script>
</div>
</div>
</div>