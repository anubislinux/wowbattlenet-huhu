<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div class="dashboard wowx6 eu">
<div class="primary">
<div class="header">
<h2 class="subcategory">管理游戏</h2>
<h3 class="headline">《魔兽世界®：军团再临™》</h3>
<a href="/account/management/dashboard?region=EU&amp;accountName=WoW1"><img src="/account/static/local-common/images/game-icons/wowx6.1S2j7.png" title="" width="48" height="48" /></a>
</div>
<div class="account-summary">
<div class="account-management">
<div class="section box-art" id="box-art">
<img src="/account/static/images/products/box-art/games/world-of-warcraft-legion/e88a0714-3c3f-11e5-a151-feff819cdc9f/default/3d.2mYed.png" alt="World of Warcraft" title="" width="242" height="288" id="box-img" />
<span class="upgrade-available" data-tooltip="可用的升级" data-tooltip-options='{"location": "mouse"}'></span>
</div>
<div class="section account-details">
<dl>
<dt class="subcategory">账号名称</dt>
<dd class="account-name">WoW1</dd>
<dt class="subcategory">账号状态</dt>
<dd class="account-status">
<?php if (!empty($userStatus)): ?>
<strong class="banned">锁定</strong>
<?php else: ?>
<strong class="active">您的《魔兽世界》账号内尚有可用的游戏时间</strong>
<?php endif; ?>
</dd>
<dt class="subcategory">产品级别</dt>
<dd class="account primary-account account-status">
<span class="account-history">军团再临
<em>畅玩包</em>
</span>
</dd>
<dd class="account secondary-account">德拉诺之王™
<em>畅玩包</em>
</dd>
<dd class="account secondary-account">熊猫人之谜™
<em>畅玩包</em>
</dd>
<dd class="account secondary-account">大灾变®
<em>畅玩包</em>
</dd>
<dd class="account secondary-account">巫妖王之怒™
<em>畅玩包</em>
</dd>
<dd class="account secondary-account">燃烧的远征™
<em>畅玩包</em>
</dd>
<dd class="account secondary-account">经典旧世
<em>畅玩包</em>
</dd>
<dt class="subcategory">地区</dt>
<dd class="account-region EU">中国(CN)</dd>
</dl>
</div>
<div class="section available-actions">
<ul class="game-time">
<a id="subs-game-time" class="subs-game-time glow-shadow-2 border-5 upgrade" href="#" onclick="DashboardForm.show($('#choose-sub-type')); return false;">
<strong>游戏充值</strong>
</a>
<li class="payment-history">
<a href="/account/management/subscription/payment-history?l=WoW1&amp;r=EU">付款历史记录</a>
</li>
<li class="download-guide">
<a href="/account/management/download/?show=wow">下载初学者指南</a>
</li>
<li class="download-client">
<a href="/account/management/download/?show=wow">安装或重新安装游戏</a>
</li>
<li class="cancel-subscription">
<a href="/account/management/cancel-account?accountName=WoW1&amp;region=EU&amp;updateSource=dashboard" id="wow-cancel-subscription">取消订阅</a>
</li>
</ul>
</div>
<div class="clear"></div>
</div>
<div class="dashboard-form" id="choose-sub-type">
<form action="/account/management/subscription/payment-method?l=WoW1&amp;r=EU" id="game-time" method="post">
<input type="hidden" id="csrftoken" name="csrftoken" value="73c8fdeb-6cea-4fad-a319-291a2521076c" />
<h4>魔兽账号的设置世界</h4>
<fieldset class="pay-options subscription">
<label class="recurring border-5" for="choose-sub">
<input type="radio" name="choose-sub" id="choose-sub" value="subscription" tabindex="1" checked="checked" />
<strong>可再生的订阅</strong>
<ul>
<li>无限的游戏时间</li>
<li>自动续期</li>
<li>灵活的资费计划</li>
</ul>
</label>
<label class="border-5" for="choose-prepaid">
<input type="radio" name="choose-sub" id="choose-prepaid" value="prepaid" tabindex="1" />
<strong class="gametime-align-middle">充值卡</strong>
</label>
</fieldset>
<fieldset class="ui-controls section-buttons" >
<a class="ui-button button1" href="#"
id="choose-sub-type-submit" onclick="DashboardForm.toggleSubType(); return false;" tabindex="1"><span class="button-left"><span class="button-right">更多</span></span></a>
<a class="ui-cancel "
href="#"
onclick="DashboardForm.hide($('#choose-sub-type')); return false;"
tabindex="2">
<span>
取消 </span>
</a>
</fieldset>
</form>
</div>
<div class="dashboard-form" id="enter-game-key">
<form action="/account/management/claim-code?style=upgrade-wow" method="post">
<input type="hidden" id="csrftoken" name="csrftoken" value="73c8fdeb-6cea-4fad-a319-291a2521076c" />
<div class="hiddenInputWrapper">
<input type="hidden" name="confirmed" value="true" />
<input type="hidden" name="codeType" value="WOW" />
<input type="hidden" name="wowAccountLabel" value="WoW1" />
<input type="hidden" name="legalAgreementAccepted" value="false" />
<input type="hidden" name="product" value="" />
<input type="hidden" name="region" value="EU" />
</div>
<h4>输入游戏密钥</h4>
<p></p>
<p class="simple-input">
<input type="text" name="key" value="" class="input border-5 glow-shadow-2" maxlength="320" tabindex="1" />
<button class="ui-button button1 disabled" type="submit" disabled="disabled" tabindex="1"><span class="button-left"><span class="button-right">转换纪录</span></span></button>
<a class="ui-cancel "
href="#"
onclick="DashboardForm.hide($('#enter-game-key')); return false;"
tabindex="1">
<span>
取消 </span>
</a>
</p>
<p>大写和小写字母不区分。没有空格或连字符.</p>
</form>
</div>
<div class="dashboard-form" id="add-game-time">
<form action="/account/management/claim-code?style=upgrade-wow" method="post">
<input type="hidden" id="csrftoken" name="csrftoken" value="73c8fdeb-6cea-4fad-a319-291a2521076c" />
<div class="hiddenInputWrapper">
<input type="hidden" name="confirmed" value="true" />
<input type="hidden" name="codeType" value="WOW" />
<input type="hidden" name="wowAccountLabel" value="WoW1" />
<input type="hidden" name="legalAgreementAccepted" value="false" />
<input type="hidden" name="product" value="" />
<input type="hidden" name="region" value="EU" />
</div>
<h4>充值卡</h4>
<p>如果使用预付费卡时，请注意：一旦你删除的保护层（灰色条），地图将被视为使用。待办事项与她的钱，你还是应该进入下一个字段PIN码。但该卡已被损毁了保护层不能到商店退货.</p>
<p>按“使用规范”，据我所知，使用预付卡支付游戏时间，魔兽世界，而这种卡的成本，我将不予退还。</p>
<p class="simple-input">
<label for="key" class="label-title">输入验证码支付魔兽的游戏时间世界:</label><br /><br />
<input type="text" id="key" name="key" value="" class="input border-5 glow-shadow-2" maxlength="320" tabindex="1" /><br /><br />
<button class="ui-button button1 disabled" type="submit" disabled="disabled" tabindex="1"><span class="button-left"><span class="button-right">使用代码</span></span></button>
<a class="ui-cancel "
href="#"
onclick="DashboardForm.swap($('#add-game-time'), $('#choose-sub-type')); return false;"
tabindex="1">
<span>
取消 </span>
</a>
</p>
</form>
</div>
<div class="upgrade-option">
<div class="game-upgrade current-5">
<div class="game-upgrade-context">
<h2 class="subcategory">你可以转换</h2>
<h3>军团™ - 电子版豪华</h3>
<ul class="upgrade-options">
<li>
<a id="digital-purchase" href="/shop/checkout/upgrade-selection/EU/WOW?gameAccountId=48480830" >
在线购买
</a>
</li>
<li>
<a href="/account/management/claim-code?style=upgrade-wow" onclick="DashboardForm.show($('#enter-game-key')); return false;">
输入游戏密钥
</a>
</li>
</ul>
</div>
<img src="/account/static/images/products/box-art/upgrades/world-of-warcraft-legion-digital-deluxe-edition/54548adf-dbcd-4ea3-88c0-ed6a3fec73ea/default/3d.3d66M.png" alt="World of Warcraft" width="104" height="144" />
</div>
</div>
</div>
</div>
<div class="subs-option-container">
<h4 class="section-title">订阅</h4>
<div class="subs-options">
<table class="dashboard-subs">
<thead>
<th class="sub-products" scope="col">订阅</th>
<th class="next-billing-dates" scope="col">订阅时间</th>
</thead>
<tbody>
<tr>
<td>
<p class="sub-details active-sub"><span >订阅1个月，自动续费</span></p>
</td>
<td class="next-billing-date">
<time datetime="2017-03-15T12:39+04:00">15.03.17 12:39:32 MSK</time>
</td>
</tr>
</tbody>
</table>
<div class="manage">
<a href="/account/management/wallet.html">订阅管理</a>
</div>
</div>
</div>
<div class="secondary">
<div class="service-selection character-services">
<ul class="wow-services">
<li class="category"><a href="#character-services" class="character-services">公会与角色服务</a></li>
<li class="category"><a href="#additional-services" class="additional-services">附加服务</a></li>
<li class="category"><a href="#referrals-rewards" class="referrals-rewards">邀请和奖项</a></li>
<li class="category"><a href="#game-time-subscriptions" class="game-time-subscriptions">比赛时间和订阅</a></li>
</ul>
<div class="service-links">
<div class="position"></div>
<div class="content character-services" id="character-services">
<ul>
<li class="wow-service pct">
<a href="/account/management/wow/services/character-services.html?l=WoW1&amp;r=EU&amp;s=PCT" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>角色转移</strong>
将您的游戏角色转移到不同的服务器或账号中（限同姓名同身份证账号可转移）
</a>
</li>
<li class="wow-service fcm">
<a href="/account/management/wow/services/character-services.html?l=WoW1&amp;r=EU&amp;s=FCM" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>免费转服</strong>
将您的游戏角色转移到人数较少的服务器
</a>
</li>
<li class="wow-service pfc">
<a href="/account/management/wow/services/character-services.html?l=WoW1&amp;r=EU&amp;s=PFC" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>阵营转换</strong>
转换角色的阵营（部落转联盟或联盟转部落）
</a>
</li>
<li class="wow-service prc">
<a href="/account/management/wow/services/character-services.html?l=WoW1&amp;r=EU&amp;s=PRC" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>种族变更</strong>
修改角色的种族（限阵营内）
</a>
</li>
<li class="wow-service pcc">
<a href="/account/management/wow/services/character-services.html?l=WoW1&amp;r=EU&amp;s=PCC" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>角色定制</strong>
更改您游戏角色的外貌（可选择改名服务）
</a>
</li>
<li class="wow-service pnc">
<a href="/account/management/wow/services/character-services.html?l=WoW1&amp;r=EU&amp;s=PNC" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>角色更名</strong>
更改您的游戏角色的名称
</a>
</li>
<li class="wow-service pgs">
<a href="/account/management/wow/services/pgs-select.html?l=WoW1&amp;r=EU&amp;s=PGS" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>公会服务</strong>
公会转服、公会阵营转换或公会改名
</a>
</li>
</ul>
</div>
<div class="content additional-services" id="additional-services">
<ul>
<li class="wow-service wow_ptr">
<span>
<span class="icon glow-shadow-3"></span>
<strong>测试服</strong>
有了这个，你可以进入测试游戏世界。
<a class="icon-set download-client" href="/account/management/download/?show=wow">安装或重新安装游戏</a>
</span>
</li>
<li class="wow-service wow_esl">
<a href="http://www.esl.tv/game/wow/" onclick="">
<span class="icon glow-shadow-3"></span>
<strong>暴雪电子竞技наESL TV</strong>
激动人心的战斗，生动显示：在一个通道上的暴雪娱乐游戏的所有kibersrazheniya！</a>
</li>
</ul>
</div>
<div class="content referrals-rewards" id="referrals-rewards">
<p class="no-subcategory-desc">您目前没有有效的邀请。了解更多关于服务“邀请朋友”看。<a href="http://eu.battle.net/wow/shop/recruit-a-friend/" target="_blank">这里</a>.</p>
</div>
<div class="content game-time-subscriptions" id="game-time-subscriptions">
<ul>
<li class="wow-service wow_agc">
<a href="/account/management/add-game.html?accountName=WoW1" onclick="DashboardForm.show($('#add-game-time')); return false;">
<span class="icon glow-shadow-3"></span>
<strong>地图的上场时间</strong>
你可以分阶段支付订阅随着持有预付卡魔兽世界的。</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var inputs = new Inputs('#game-time, #limited-game-time-purchase');
$('#game-time [checked]').parents('label').addClass('selected');
});
//]]>
</script>
</div>
</div>
</div>