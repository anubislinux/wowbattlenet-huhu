<div id="layout-middle">
<div class="wrapper">
<div id="content">
<!--div class="alert caution border-4 glow-shadow">
<div class="alert-inner">
<div class="alert-message">
<p class="title"><strong>Защитите свою запись от взлома с помощью бесплатного <a data-context="wasShownAuthWarning" href="/account/management/authenticator.html">Battle.net® Authenticator для мобильных устройств</a>
.</strong></p>
Battle.net Authenticator для мобильных устройств — бесплатный способ защитить вашу учетную запись от взлома.
</div>
</div>
<span class="clear"></span>
</div-->
<div id="lobby">
<div id="page-content" class="page-content">
<div id="lobby-account">
<h3 class="section-title"><?php echo vendor\core\App::$app->lang->get('lng.account_info', '')?></h3>
<div class="lobby-box">
<h4 class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.account_name', '')?></h4>
<p class="account-name"><?php echo vendor\core\Session::get('email') ?>
<span class="edit">[<a href="/account/management/settings/change-email.html"><?php echo vendor\core\App::$app->lang->get('lng.account_edit', '')?></a>]</span>
</p>
<h4 class="subcategory help-link-right" data-tooltip="<?php echo vendor\core\App::$app->lang->get('lng.account_data', '')?>" data-tooltip-options='{"location": "mouse"}'>暴雪游戏昵称®</h4>
<p>
<?php if (!empty($userTegName['tag_name'])): ?>
<?=$userTegName['tag_name']?>#<?=$userTegName['tag_id']?>
<span class="edit">[<a href="/account/management/battle-tag-name-change" id="battletag-purchase"><?php echo vendor\core\App::$app->lang->get('lng.battletag_purchase', '')?>编辑</a>]</span>
<?php else: ?>
<a href="/account/management/battle-tag-name-create"><?php echo vendor\core\App::$app->lang->get('lng.tag_name_create', '')?></a>
<?php endif; ?>
</p>
</div>
<h3 class="section-title"><?php echo vendor\core\App::$app->lang->get('lng.account_security', '')?></h3>
<div class="lobby-box security-box">
<h4 class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.account_email_verified', '')?></h4>
<p class="has-authenticator-has-active">
<?php echo vendor\core\App::$app->lang->get('lng.account_verified', '')?>
</p>
</div>
</div>
<div id="lobby-games">
<h3 class="section-title"><?php echo vendor\core\App::$app->lang->get('lng.lobby_games', '')?></h3>
<div id="games-list">
<a href="#wow" class="border-2 games-title opened" rel="game-list-wow">WoW</a>
<ul id="game-list-wow">
<?php if (!empty($userGame)): ?><?php foreach ($userGame as $game): ?>
<li class="border-4" id="WoW<?=$game['id']?>::EU">
<span class="game-icon">
<span class="png-fix"><img src="/account/static/local-common/images/game-icons/wow-32.0ifiC.png" alt="" width="32" height="32" /></span>
<span class="flag upgrade" data-tooltip="<?php echo vendor\core\App::$app->lang->get('lng.flag_upgrade', '')?>" data-tooltip-options='{"location": "mouse"}'></span>
</span>
<span class="account-info">
<span class="account-link">
<strong><a class="EU-WOW-legion-se" href="/account/management/dashboard?accountName=WoW<?=$game['id']?>"> 魔兽世界®: <?=$game['expansion_name']?>™
</a></strong>
<span class="account-id">
[WoW<?=$game['id']?>]
<span class="account-edition"><?php echo vendor\core\App::$app->lang->get('lng.account_edition', '')?></span>
<?php if (!empty($game['status_account'])): ?>
<span class="account-status BANNED"><?php echo vendor\core\App::$app->lang->get('lng.status_banned', '')?></span>
<?php else: ?>
<span class="account-status GOOD"><?php echo vendor\core\App::$app->lang->get('lng.status_good', '')?></span>
<?php endif; ?>
</span>
<span class="account-region">地区 (CN)</span>
</span>
</span>
</li>
<?php endforeach; ?><?php endif; ?>
</ul>
</div>
<div id="games-tools">
<a href="/account/management/claim-code.html" id="add-game" class="border-5"><?php echo vendor\core\App::$app->lang->get('lng.claim_code', '')?></a>
<p>
<a href="/account/management/wow-account-conversion.html" class="" onclick="">
<span class="icon-16 icon-account-merge"></span>
<span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get('lng.account_conversion', '')?></span>
</a>
</p>
<p>
<a href="/account/management/download.html" class="" onclick="">
<span class="icon-16 icon-account-download"></span>
<span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get('lng.download', '')?></span>
</a>
</p>
<p>
<a href="/account/management/beta-profile.html" class="" onclick="">
<span class="icon-16 icon-account-beta"></span>
<span class="icon-16-label"><?php echo vendor\core\App::$app->lang->get('lng.beta_profile', '')?></span>
</a>
</p>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
var SecurityStrings = {
'PENDING' : {
'part1': 'Позвоните по номеру',
'part2': '— вам будет назначен PIN-код.'
},
'ERROR': {
'title': 'Error Battle.net Dial-in Authenticator Details',
'desc': 'We were unable to retrieve your Battle.net Dial-in Authenticator details.'
},
'EDIT': {
'cancel': 'Отказаться от использования Battle.net Dial-in Authenticator',
'remove': 'Удалить'
}
};
var PaymentStrings = {
'NONE': {
'desc': 'За вашей учетной записью не закреплено других способов оплаты.',
'button': 'Указать основной способ оплаты'
},
'GOOD': {
'desc': 'Обратите внимание: возможно, обычно вы оплачиваете подписку на WoW с помощью другого способа оплаты.',
'CREDIT_CARD': {
'title': 'Способ оплаты по умолчанию',
'label': 'Кредитная карта',
'details': 'PAYMENTSUBTYPE оканчивается на XXX',
'button': 'Редактировать'
},
'DIRECT_DEBIT': {
'title': 'Способ оплаты по умолчанию',
'label': 'Прямое перечисление со счета',
'details': '',
'button': 'Редактировать'
}
},
'ERROR': {
'title': 'Сбой при загрузке платежной информации',
'desc': 'К сожалению, найти вашу платежную информацию не удалось.'
}
};
var GameId = {
'WOWT': ['World of Warcraft®', '\/account/management/wow/dashboard.html'],
'WOWC': ['World of Warcraft®', '\/account/management/wow/dashboard.html'],
'WOWB1': ['World of Warcraft®', '\/account/management/wow/dashboard.html'],
'WOWX1': ['World of Warcraft®', '\/account/management/wow/dashboard.html'],
'WOWX2': ['World of Warcraft®', '\/account/management/wow/dashboard.html'],
'WOWX3': ['World of Warcraft®', '\/account/management/wow/dashboard.html'],
'WOWX4': ['World of Warcraft®: Mists of Pandaria™', '\/account/management/wow/dashboard.html']
};
var IconTag = {
'starter': 'Стартовая версия',
'trial': 'Пробная версия',
'trialSingular': 'остался 1 день',
'trialPlural': 'осталось XXX дн.',
'trialExpired': 'пробный период истек',
'starterUpgrade': 'Стартовая версия (можно конвертировать)',
'upgrade': 'Можно конвертировать'
};
var chargebackTooltip = {
'chargeback': 'Вам следует возместить платеж, произведенный с этой записи и отвергнутый банком.'
};
var MaxBoxLevel = {
'WOWT': 6,
'WOWC': 6,
'WOWB1': 6,
'WOWX1': 6,
'WOWX2': 6,
'WOWX3': 6,
'WOWX4': 6
};
var Maintenance = {
'ERROR': 'Временно недоступно'
};
var Turbo = {
'enabled': false
};
var GameRegions = {
'CN': 'Китай (CN)',
'EU': 'Европа (EU)',
'KR': 'Корея (KR)',
'LA': 'Ю. Америка, Бразилия (LA)',
'NA': 'США и Канада (NA)',
'PTR': 'Тестовый игровой мир (PTR)',
'RU': 'Россия (RU)',
'SE': 'Ю.-В. Азия, Австралия и Океания (SEA)',
'SEA': 'Ю.-В. Азия, Австралия и Океания (SEA)',
'TW': 'Тайвань (TW)',
'US': 'США (US)',
'GLOBAL': 'США (US)'
};
//]]>
</script>
<!--[if IE 6]> <script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/local-common/js/third-party/DD_belatedPNG.4JzIy.js"></script>
<script type="text/javascript">
//<![CDATA[
DD_belatedPNG.fix('.icon-16');
//]]>
</script>
<![endif]-->
</div>
</div>
</div>