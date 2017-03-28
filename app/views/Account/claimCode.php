<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div class="add-game">
<div id="page-header">
<h2 class="subcategory">管理游戏</h2>
<h3 class="headline">输入兑换码</h3>
</div>
<div class="introduction">
<p>使用此页面可进行游戏产品激活和游戏内物品兑换。</p>
</div>
<div class="section-box border-5 code-claim">
<form method="post" action="/account/management/claim-code.html" id="add-game" onsubmit="return checkEntry(this);">
<p class="caption"><label for="key">输入兑换代码</label></p>
<p class="simple-input required">
<input type="text" id="key" name="key" value="" class="input border-5 glow-shadow-2 inline-input" maxlength="320" tabindex="1"    /> </p>
<fieldset class="ui-controls " >
<button class="ui-button button1" type="submit" id="add-game-submit"><span class="button-left"><span class="button-right">兑换</span></span></button>
</fieldset>
</form>
</div>

<script type="text/javascript">
//<![CDATA[
function checkEntry(form) {
if (!form.key.value) {
$('#add-game p.caption, #key').addClass('form-error');
$('#content').prepend(makeErrorBox(['Заполните, пожалуйста, все обязательные поля.']));
UI.enableButton($('#add-game-submit'));
return false;
}
return true;
}

function makeErrorBox(errorMsgs) {
$('#content .alert').remove();
var errorCount = errorMsgs.length;
var errorHtml = ''
+ '<div class="alert error closeable border-4 glow-shadow">'
+ '<div class="alert-inner">'
+ '<div class="alert-message">'
+ '<p class="title"><strong>Произошла ошибка.</strong></p>';
if (errorCount>1) {
errorHtml += '<ul>';
for (var i=0;i<errorCount;i++) {
errorHtml += '<li>' + errorMsgs[i] + '</li>';
}
errorHtml += '</ul>';
} else {
errorHtml += '<p>' +errorMsgs[0]+ '</p>';
}
errorHtml += ''
+ '</div>'
+ '</div>'
+ '</div>';
return errorHtml;
}
//]]>
</script>

<div class="code-claim-information">
<h4 class="headline">兑换过程需要帮助？</h4>
<p class="">选择兑换码类别以了解更多信息.</p>

<ul class="form-titles">
<li>
<a href="#form-gameItem" class="form-anchor">
<span class="icon-32 closed"></span>
<span class="icon-32-label form-name">物品兑换码在哪</span>
</a>

<div class="sub-form hide-element" id="form-gameItem">
<ul>
<li>如果您收到了一份好友赠送的游戏内物品，您可以在赠礼电子邮件内找到物品兑换码。另外，您也可以通过点击电子邮件内的链接兑换该物品。
</li>
</ul>

<p>物品将会被发送至您选定的暴雪游戏通行证，或《魔兽世界》账号中所有符合资格的游戏角色的邮箱内（查看物品描述以了解更多信息）。在领取物品前请先确保您的游戏角色背包尚有足够的存放空间。</p>
</div>

</li>
<li>
<a href="#form-balance" class="form-anchor">
<span class="icon-32 closed"></span>
<span class="icon-32-label form-name">代码钱包的补充</span>
</a>

<div class="sub-form hide-element" id="form-balance">
<div class="prepaid-card-image"></div>
<ul>
<li>如果您已经购买了预付费卡，以补足你的钱包，擦除保护层（在地图上银片）：设置它下面的代码。请记住，当你删除的保护层，地图会被认为是使用过，你就无法将其退回商店。</li>
</ul>

</div>

</li>
</ul>
<span class="clear"><!-- --></span>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
FormAnchor.initialize();
});
//]]>
</script>
</div>
</div>

<script type="text/javascript">
//<![CDATA[
Cookie.create('DIABLOIIISIGNUP', '1', {
expires: 2160,
path: '/account'
});
//]]>
</script>


</div>
</div>
</div>
        <div id="layout-bottom-divider"></div>
