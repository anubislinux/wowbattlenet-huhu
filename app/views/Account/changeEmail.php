<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="page-header">
<span class="required-legend"><span class="form-required">*</span> <span class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.subcategoryy', '')?></span></span>
<h2 class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.subcategory', '')?></h2>
<h3 class="headline"><?php echo vendor\core\App::$app->lang->get('lng.headline', '')?></h3>
</div>
<div id="page-content" class="page-content">
<div class="columns-2-1 settings-content">
<div class="column column-left">
<div class="email-entry">
<span class="clear"><!-- --></span>
<form method="post" action="/account/management/settings/change-email.html" id="change-settings">
<div class="input-row input-row-text">
<span class="input-left">
<label for="newEmail">
<span class="label-text">
<?php echo vendor\core\App::$app->lang->get('lng.new_emails', '')?>
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="email" name="newEmail" value="" id="newEmail" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="319" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.new_email', '')?>" />
<span class="inline-message " id="newEmail-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="newEmailVerify">
<span class="label-text">
<?php echo vendor\core\App::$app->lang->get('lng.new_email_verifyy', '')?>
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="email" name="newEmailVerify" value="" id="newEmailVerify" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="319" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.new_email_verify', '')?>" />
<span class="inline-message " id="newEmailVerify-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="password">
<span class="label-text">
<?php echo vendor\core\App::$app->lang->get('lng.password_login', '')?>:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="password" name="password" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="<?php echo vendor\core\App::$app->lang->get('lng.password', '')?>" />
<span class="inline-message " id="password-message"> </span>
</span>
</span>
</div>
<div class="submit-row" id="submit-row">
<div class="input-left"></div><!--
--><div class="input-right">
<button class="ui-button button1" type="submit" id="email-submit" tabindex="1"><span class="button-left"><span class="button-right"><?php echo vendor\core\App::$app->lang->get('lng.change', '')?></span></span></button>
<a class="ui-cancel "
href="/account/management/"
tabindex="1">
<span>
<?php echo vendor\core\App::$app->lang->get('lng.shop_cancel', '')?></span>
</a>
</div>
</div>
</form>
<script type="text/javascript">
//<![CDATA[
var FormMsg = {
'headerSingular': '<?php echo vendor\core\App::$app->lang->get("lng.header_singular", "")?>',
'headerMultiple': '<?php echo vendor\core\App::$app->lang->get("lng.header_multiple", "")?>',
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
, 'emailError1': '<?php echo vendor\core\App::$app->lang->get("lng.email_error_one", "")?>'
, 'emailError2': '<?php echo vendor\core\App::$app->lang->get("lng.email_error_two", "")?>'
};
//]]>
</script>
</div>
</div>
<div class="column column-right">
<div class="email-information">
<p class="caption"><?php echo vendor\core\App::$app->lang->get("lng.caption_desc", "")?></p>
<p><?php echo vendor\core\App::$app->lang->get("lng.caption", "")?></p>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var inputs = new Inputs('#change-settings');
var settings = new ChangeEmail('#change-settings', {
emailFields: [
'#newEmail',
'#newEmailVerify'
],
domains: [
]
});
});
//]]>
</script>
</div>
</div>
</div>