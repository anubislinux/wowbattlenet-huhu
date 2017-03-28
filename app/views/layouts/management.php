<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" class="ru-ru eu">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php echo vendor\core\App::$app->lang->get('lng.account', '')?></title>
<link rel="shortcut icon" href="//bneteu-a.akamaihd.net/account/static/images/meta/favicon.2dy4z.ico" />
<script type="text/javascript" src="/account/static/js/polyfills.min.js?v=58-28"></script>
<script type="text/javascript" src="/account/static/js/core.min.js?v=58-28"></script>
<link rel="stylesheet" type="text/css" media="all" href="/account/static/css/nav-client/nav-client-desktop.css" />
<link rel="stylesheet" type="text/css" media="all" href="/account/static/local-common/css/common.css?v=58-28" />
<link rel="stylesheet" type="text/css" media="all" href="/account/static/css/bnet.css?v=58-28" />
<link rel="stylesheet" type="text/css" media="print" href="/account/static/css/bnet-print.css?v=58-28" />
<link rel="stylesheet" type="text/css" media="all" href="/account/static/css/legal/ratings.css?v=58-28" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="/account/static/css/bnet-ie.css?v=58-28" />
<![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="/account/static/css/bnet-ie6.css?v=58-28" />
<![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="/account/static/css/bnet-ie7.css?v=58-28" />
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="/account/static/css/inputs.css" />
<?php echo vendor\core\App::$app->css->printAccountCSS()?>
<link rel="stylesheet" type="text/css" media="all" href="/account/static/css/locale/ru-ru.css" />
<script type="text/javascript">
//<![CDATA[
var _gaq = _gaq || [];
//]]>
</script>
<og:image content="https:////bneteu-a.akamaihd.net/account/static/images/logos/bnet-logo.2IBt1.png" />
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/local-common/js/third-party/jquery-1.7.1.min.0vCiz.js?v=58-28"></script>
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/local-common/js/common/bootstrap.3Pnh6.js?v=58-28"></script>
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/local-common/js/third-party/class-inheritance.4V7WX.js?v=58-28"></script>
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/local-common/js/third-party/swfobject-2.2.1.min.0INo9.js?v=58-28"></script>
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/local-common/js/common.16hIS.js?v=58-28"></script>
<script type="text/javascript">
//<![CDATA[
var Core = Core || {},
Login = Login || {};
Core.staticUrl = '/account/static';
Core.sharedStaticUrl = '/account/static/local-common';
Core.baseUrl = '/account';
Core.projectUrl = '/account';
Core.cdnUrl = 'http://media.blizzard.com';
Core.supportUrl = '/support/';
Core.secureSupportUrl = '/support/';
Core.project = 'bam';
Core.locale = 'ru-ru';
Core.language = 'ru';
Core.region = 'eu';
Core.shortDateFormat = 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = true;
Core.userAgent = 'web';
Login.embeddedUrl = '/login/login.frag';
var Flash = Flash || {};
Flash.videoPlayer = 'http://media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://media.blizzard.com/bam/media/videos';
Flash.ratingImage = 'http://media.blizzard.com/global-video-player/ratings/bam/ru-ru.jpg';
Flash.expressInstall = 'http://media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
//]]>
</script>
<script type="text/javascript" src="/account/static/js/nav-client/navbar-tk.min.js?v=28"></script>
<script type="text/javascript">
//<![CDATA[
window.nav.notifications.endpoint = "\/notification/list";
//]]>
</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="//bneteu-a.akamaihd.net/account/static/js/third-party/jquery.placeholder-enhanced.min.2BSUS.js"></script>
<![endif]-->
</head>
<body class="ru web">
    <?php require_once 'header.php';?>
<div id="layout-top">
<div class="wrapper">
<div id="header">
<div id="search-bar">
<form action="/search" id="search-form" method="get">
<div>
<input accesskey="q" alt="Поиск по Battle.net" id="search-field" maxlength="35" name="q" tabindex="50" type="text" value="Поиск по Battle.net" />
<input id="search-button" title="Поиск по Battle.net" tabindex="50" type="submit" value="" />
</div>
</form>
</div>
<h1 id="logo"><a accesskey="h" href="/" tabindex="50"></a></h1>
<div id="navigation">
<div id="page-menu" class="large">
<h2><a href="/account/management/"><?php echo vendor\core\App::$app->lang->get('lng.accounts', '')?>
</a></h2>
<ul>
<li class="active">
<a href="/account/management/" class="border-3"><?php echo vendor\core\App::$app->lang->get('lng.account_info', '')?></a>
<span class="arrow"></span>
</li>
<li>
<a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'settings'); return false;"><?php echo vendor\core\App::$app->lang->get('lng.account_settings', '')?></a>
<span class="arrow"></span>
<div class="flyout-menu" id="settings-menu" style="display: none">
<ul>
<li><a href="/account/management/settings/change-email.html"><?php echo vendor\core\App::$app->lang->get('lng.account_email', '')?></a></li>
<li><a href="/account/management/settings/change-password.html"><?php echo vendor\core\App::$app->lang->get('lng.account_pass', '')?></a></li>
<li><a href="/account/management/wallet.html"><?php echo vendor\core\App::$app->lang->get('lng.account_payment', '')?></a></li>
</ul>
<!--[if IE 6]>&#160;
<iframe id="settings-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 0; width: 200px; height: 220px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('settings-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
</li>
<li>
<a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'games'); return false;"><?php echo vendor\core\App::$app->lang->get('lng.account_games', '')?></a>
<span class="arrow"></span>
<div class="flyout-menu" id="games-menu" style="display: none">
<ul>
<li><a href="/account/management/wow-account-conversion.html"><?php echo vendor\core\App::$app->lang->get('lng.account_conversion', '')?></a></li>
<li><a href="/account/management/download.html"><?php echo vendor\core\App::$app->lang->get('lng.download', '')?></a></li>
<li><a href="/account/management/beta-profile.html"><?php echo vendor\core\App::$app->lang->get('lng.beta_profile', '')?></a></li>
<li><a href="/account/management/claim-code.html"><?php echo vendor\core\App::$app->lang->get('lng.claim_code', '')?></a></li>
</ul>
</div>
</li>
<li>
<script type="text/javascript">
//<![CDATA[
var chargebackRegionNumbers = [];
chargebackRegionNumbers.push(98);
$(function() {
ChargebackCall.initialize(true);
})
//]]>
</script>
<a href="#" class="border-3 menu-arrow transaction" onclick="openAccountDropdown(this, 'activity'); return false;"><?php echo vendor\core\App::$app->lang->get('lng.activity', '')?>
<span id="chargebackCount" class="border-3" style="">0</span>
</a>
<span class="arrow"></span>
<div class="flyout-menu" id="activity-menu" style="display: none">
<ul>
<li><a href="/account/management/orders.html"><?php echo vendor\core\App::$app->lang->get('lng.orders', '')?></a></li>
<li><a href="/account/management/transaction-history.html"><?php echo vendor\core\App::$app->lang->get('lng.transaction_history', '')?></a></li>
</ul>
</div>
</li>
<li class="account-balance account-balance-rub" id="accountBalanceCenter" data-tooltip-options='{"location": "mouse"}'>
<a href="#" class="border-3 menu-arrow title" onclick="openAccountDropdown(this, 'accountBalance'); return false;">
<span class="sub-title"><?php echo vendor\core\App::$app->lang->get('lng.account_balance', '')?></span><br/>
<span class="balance" id="primary-balance"><?=$userBalance['balance']?> <?=$userBalance['selected_currency']?> </span>
</a>
<div class="flyout-menu" id="accountBalance-menu">
<ul>
<li id="<?=$userBalance['selected_currency']?>" class="switch-currency"><span><?=$userBalance['balance']?> <?=$userBalance['selected_currency']?> </span></li>
<li class=" first"><a href="/shop/checkout/add-balance"><?php echo vendor\core\App::$app->lang->get('lng.add_balance', '')?></a></li>
<li class=" "><a href="/account/management/claim-code.html"><?php echo vendor\core\App::$app->lang->get('lng.acc_claim_code', '')?></a></li>
<li class=" line "><a href="/account/management/transaction-history.html"><?php echo vendor\core\App::$app->lang->get('lng.transaction_history1', '')?></a></li>
<li class="line"><a href="#" onclick="$('#account-balance-dialog').dialog('open'); return false;"><?php echo vendor\core\App::$app->lang->get('lng.balance_dialog', '')?></a></li>
<li class="line"><a href="/article/battle-net-balance-faq"><?php echo vendor\core\App::$app->lang->get('lng.account_balance_help', '')?></a></li>
<li id="refreshBalance"><a href="#" onclick="accountBalance.refreshBalance(); return false;"><?php echo vendor\core\App::$app->lang->get('lng.refresh_balance', '')?></a></li>
<li class="refreshing" id="refreshingBalance"><a href="#" onclick="return false;"><img src="//bneteu-a.akamaihd.net/account/static/images/icons/loader.45RKv.gif" alt="" height="11" width="16" /><?php echo vendor\core\App::$app->lang->get('lng.refreshing_balance', '')?></a></li>
</ul>
</div>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<div class="account-balance-dialog" style="display: none" id="account-balance-dialog" >
<?php echo vendor\core\App::$app->lang->get('lng.balance_dialog1', '')?><br/>
<br/>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
accountBalance.accountBalanceCurrency = "<?=$userBalance['selected_currency']?>";
accountBalance.currencyMap = {
'EUR' : {
'format': '{0} EUR',
'groupSize': 3,
'delimiter': ' ',
'point': ','
},
'GBP' : {
'format': '{0} GBP',
'groupSize': 3,
'delimiter': ' ',
'point': ','
},
'RUB' : {
'format': '{0} РУБ',
'groupSize': 3,
'delimiter': ' ',
'point': ','
},
'BET' : {
'format': 'BZ${0}',
'groupSize': 3,
'delimiter': ' ',
'point': ','
}
};
accountBalance.initialize();
$('.account-balance-dialog').dialog({
autoOpen: false,
modal: true,
position: "center",
resizeable: false,
closeText: "Закрыть",
buttons: {
'Готово': function() {
$(this).dialog("close");
}
},
open: function() {
$(".ui-dialog-buttonpane").find("button").addClass("button1").find(":first").addClass("first");
if(Core.browser=="ie6" || Core.browser=="ie7" || Core.browser=="ie8"){
$(".ui-widget-overlay").css("opacity", 0.8);
}
}
});
});
//]]>
</script>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
</div>
<?=$content?>
<div id="nav-client-footer" class="nav-client">
<div class="footer-content footer-desktop grid-container"> <div class="nav-section support-feedback">
<div class="nav-left">
<div id="nav-feedback">
<a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support"><i class="nav-icon-24-blue nav-icon-question-circle"></i><?php echo vendor\core\App::$app->lang->get('lng.support', '')?></a>
</div>
</div>
<div class="nav-right">
</div>
</div>
<div class="nav-section">
<div class="nav-left nav-logo-group">
<div class="footer-logo nav-left">
<a class="nav-item logo-link" href="/" data-analytics="global-nav" data-analytics-placement="Footer - Blizzard Logo"><img class="blizzard-logo" src="/account/static/images/nav-client/blizzard.png?v=58-28" alt="" /></a>
</div>
<div class="footer-links nav-left">
<a class="nav-item nav-a" href="/" data-analytics="global-nav" data-analytics-placement="Footer - Careers"><?php echo vendor\core\App::$app->lang->get('lng.careers', '')?></a>
<span>|</span>
<a class="nav-item nav-a" href="/company/about/" data-analytics="global-nav" data-analytics-placement="Footer - About"><?php echo vendor\core\App::$app->lang->get('lng.about', '')?></a>
<span>|</span>
<a class="nav-item nav-a" href="/company/about/privacy.html" data-analytics="global-nav" data-analytics-placement="Footer - Privacy"><?php echo vendor\core\App::$app->lang->get('lng.privacy', '')?></a>
<span>|</span>
<a class="nav-item nav-a" href="/company/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Terms"><?php echo vendor\core\App::$app->lang->get('lng.terms', '')?></a>
<span>|</span>
<a class="nav-item nav-a" href="/" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>
<div class="copyright">© Blizzard Entertainment, 2017 г.</div>
<div class="nav-footer-icon-container">
<ul class="nav-footer-icon-list">
</ul>
</div>
</div>
</div>
<div class="nav-ratings">
<div class="legal-rating">
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
var csrftoken = "203bc8b9-117b-44b2-9d25-dd9a2a32d3fc";
$(function() {
Locale.dataPath = "/data/i18n.frag.xml";
});
var fullTimeDisplay = true;
//]]>
</script>
<script type="text/javascript" src="/account/static/js/bam.js?v=58-28"></script>
<script type="text/javascript" src="/account/static/local-common/js/common/menu.js?v=58-28"></script>
<script type="text/javascript" src="/account/static/local-common/js/third-party/jquery-ui-1.10.2.custom.min.js?v=58-28"></script>
<?php echo vendor\core\App::$app->css->printAccountJS()?>
<script>
//<![CDATA[
var xsToken = '';
var supportToken = '';
var jsonSearchHandlerUrl = '\//eu.battle.net';
var Msg = Msg || {};
Msg.support = {
ticketNew: 'Открыт запрос № {0}.',
ticketStatus: 'Запросу № {0} присвоен статус «{1}».',
ticketOpen: 'Открыт',
ticketAnswered: 'Дан ответ',
ticketResolved: 'Разрешен',
ticketCanceled: 'Отменен',
ticketArchived: 'Перемещен в архив',
ticketInfo: 'Уточнить',
ticketAll: 'Все запросы'
};
Msg.cms = {
requestError: 'Ваш запрос не может быть завершен.',
ignoreNot: 'Этот пользователь не в черном списке.',
ignoreAlready: 'Этот пользователь уже в черном списке.',
stickyRequested: 'Отправлена просьба прикрепить тему.',
stickyHasBeenRequested: 'Вы уже отправили просьбу прикрепить эту тему.',
postAdded: 'Сообщение отслеживается',
postRemoved: 'Сообщение больше не отслеживается',
userAdded: 'Сообщения пользователя отслеживаются',
userRemoved: 'Сообщения пользователя больше не отслеживается',
validationError: 'Обязательное поле не заполнено',
characterExceed: 'В сообщении превышено допустимое число символов.',
searchFor: "Поиск по",
searchTags: "Помеченные статьи:",
characterAjaxError: "Возможно, вы вышли из системы. Обновите страницу и повторите попытку.",
ilvl: "Уровень {0}",
shortQuery: "Запрос для поиска должен состоять не менее чем из двух букв.",
editSuccess: "Готово. Перезагрузить страницу?",
postDelete: "Вы точно хотите удалить это сообщение?",
throttleError: "Вы должны подождать некоторое время, прежде чем вы сможете опубликовать новое сообщение."
};
Msg.bml= {
bold: 'Полужирный',
italics: 'Курсив',
underline: 'Подчеркивание',
list: 'Несортированный список',
listItem: 'Список',
quote: 'Цитирование',
quoteBy: 'Размещено {0}',
unformat: 'Отменить форматирование',
cleanup: 'Исправить переносы строки',
code: 'Код',
item: 'Предмет WoW',
itemPrompt: 'Идентификатор предмета:',
url: 'Ссылка',
urlPrompt: 'Ссылка на страницу:'
};
Msg.ui= {
submit: 'Отправить',
cancel: 'Отмена',
reset: 'Сброс',
viewInGallery: 'Галерея',
loading: 'Подождите, пожалуйста.',
unexpectedError: 'Произошла ошибка.',
fansiteFind: 'Найти на…',
fansiteFindType: '{0}: поиск на…',
fansiteNone: 'Нет доступных сайтов.',
flashErrorHeader: 'Необходимо установить Adobe Flash Player.',
flashErrorText: 'Загрузить Adobe Flash Player',
flashErrorUrl: 'http://get.adobe.com/flashplayer/',
save: 'Сохранить'
};
Msg.grammar= {
colon: '{0}:',
first: 'Первая стр.',
last: 'Последняя стр.',
ellipsis: '…'
};
Msg.fansite= {
achievement: 'Достижение',
character: 'Персонаж',
faction: 'Фракция',
'class': 'Класс',
object: 'Объект',
talentcalc: 'Таланты',
skill: 'Профессия',
quest: 'Задание',
spell: 'Заклинания',
event: 'Событие',
title: 'Звание',
arena: 'Команда Арены',
guild: 'Гильдия',
zone: 'Территория',
item: 'Предмет',
race: 'Раса',
npc: 'НПС',
pet: 'Питомец'
};
Msg.search= {
noResults: 'Нет результатов для отображения',
kb: 'Поддержка',
post: 'Форумы',
article: 'Статьи',
static: 'Материалы',
wowcharacter: 'Персонаж',
wowitem: 'Предмет',
wowguild: 'Гильдии',
wowarenateam: 'Команды Арены',
url: 'Вам может быть интересно',
friend: 'Друзья',
product: 'Продукция',
other: 'Другое'
};
//]]>
</script>
</body>
</html>