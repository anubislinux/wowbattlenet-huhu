<!DOCTYPE HTML>
<html xml:lang="ru" class="ru">
<head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
    <meta http-equiv="imagetoolbar" content="false" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php vendor\core\base\View::getMeta()?>

    <link rel="shortcut icon" href="/images/meta/favicon.ico" />
    <?php echo vendor\core\App::$app->css->printCSS()?>
    <link rel="stylesheet" type="text/css" media="all" href="/css/locale/ru.css" />

    <script type="text/javascript" src="/js/third-party.js"></script>
    <script type="text/javascript" src="/js/common-game-site.js"></script>
    <script type="text/javascript">
    //<![CDATA[
        var Core = Core || {},
        Login = Login || {};
        Core.staticUrl = '';
        Core.sharedStaticUrl = '';
        Core.baseUrl = 'http://wowbattlenet';
        Core.projectUrl = '/';
        Core.cdnUrl = '/';
        Core.supportUrl = '';
        Core.secureSupportUrl = '';
        Core.project = 'wow';
        Core.locale = 'ru';
        Core.language = 'ru';
        Core.region = 'eu';
        Core.shortDateFormat = 'dd/MM/yyyy';
        Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
        Core.loggedIn = false;
        Core.userAgent = 'web';
        Login.embeddedUrl = '/fragment/login.frag';
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '']);
        _gaq.push(['_setDomainName', '']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);
        //]]>
    </script>
    </head>
<body class="ru <?=$body?>">
        <?php require_once 'header.php';?>
    <div id="wrapper">
        <div id="header">
            <div class="search-bar">
                <form action="/search" method="get" autocomplete="off">
                    <div>
                        <div class="ui-typeahead-ghost">
                            <input type="text" value="" autocomplete="off" readonly="readonly" class="search-field input input-ghost" />
                            <input type="search" class="search-field input" name="q" id="search-field" maxlength="200" tabindex="40" alt="<?php echo vendor\core\App::$app->lang->get('lng.search_wow', '')?>" value="<?php echo vendor\core\App::$app->lang->get('lng.search_wow', '')?>" />
                        </div>
                        <input type="submit" class="search-button" value="" tabindex="41" />
                    </div>
                </form>
            </div>
            <h1 id="logo">
                <a href="/">World of Warcraft</a>
            </h1>
            <div class="header-plate">
            <?php echo vendor\core\App::$app->css->printMainMenu()?>
            <?php require_once __DIR__ . '/block/userplate.php';?>

            </div>
        </div>
<?=$content?>
<div id="nav-client-footer" class="nav-client">
    <div class="footer-content footer-desktop grid-container"> <div class="nav-section support-feedback">
            <div class="nav-left">
                <div id="nav-feedback">
                    <a id="nav-client-news" class="nav-item nav-a nav-item-btn" href="/support/" data-analytics="global-nav" data-analytics-placement="Footer - Support">
                        <i class="nav-icon-24-blue nav-icon-question-circle"></i>
                        <?php echo vendor\core\App::$app->lang->get('lng.support', '')?>
                    </a>
                </div>
            </div>
<div class="nav-right">
<div id="nav-client-region-select">
<div class="dropdown dropup pull-right">
<a class="dropdown-toggle nav-item" data-toggle="dropdown">
<i class="nav-icon-24-blue nav-icon-globe"></i>
Europe -
<?php if($_COOKIE['locale'] == 'de') { ?> Deutsch
<?php } elseif($_COOKIE['locale'] == 'en') { ?> English (EU)
<?php } elseif($_COOKIE['locale'] == 'es') { ?> Español (EU)
<?php } elseif($_COOKIE['locale'] == 'fr') { ?> Français
<?php } elseif($_COOKIE['locale'] == 'it') { ?> Italiano
<?php } elseif($_COOKIE['locale'] == 'pl') { ?> Polski
<?php } elseif($_COOKIE['locale'] == 'pt') { ?> Português (AL)
<?php } elseif($_COOKIE['locale'] == 'ru') { ?> Русский
<?php } elseif($_COOKIE['locale'] == 'cn') { ?> 简体中文
<?php }  ?>
<b class="caret"></b>
</a>
<div class="dropdown-menu" data-placement="top">
<div class="arrow bottom"></div>
<div id="nav-client-international-desktop">
<div class="nav-international-container">
<div class="dropdown-section nav-column-container">
<div class="nav-column-50">
<div id="select-regions" class="nav-box regions">
<h3>Регион</h3>
<ul class="region-ul">
<li class="region active current"><a class="nav-item select-region" href="javascript:;" data-target="eu">Europe</a></li>
</ul>
</div>
</div>
<div class="nav-column-50">
<div id="select-language" class="nav-box languages">
<h3>Язык</h3>
<div class="region region-languages active current" data-region="eu">
<ul class="region-ul">
<li class="<?php if($_COOKIE['locale'] == 'de') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/de" data-target="eu" data-language="de-de">Deutsch</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'en') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/en" data-target="eu" data-language="en-gb">English (EU)</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'es') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/es" data-target="eu" data-language="es-es">Español (EU)</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'fr') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/fr" data-target="eu" data-language="fr-fr">Français</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'it') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/it" data-target="eu" data-language="it-it">Italiano</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'pl') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/pl" data-target="eu" data-language="pl-pl">Polski</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'pt') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/pt" data-target="eu" data-language="pt-br">Português (AL)</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'ru') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/ru" data-target="eu" data-language="ru-ru">Русский</a>
</li>
<li class="<?php if($_COOKIE['locale'] == 'cn') { ?>active current<?php } ?>">
<a class="nav-item select-language" href="/language/cn" data-target="eu" data-language="cn-cn">简体中文</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="dropdown-section dropdown-well nav-box localeChange">
<a id="nav-client-change-language-desktop" href="javascript:;" class="nav-lang-change nav-btn">Изменить</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

        <div class="nav-section">
            <div class="nav-left nav-logo-group">
                <div class="footer-logo nav-left">
                    <a class="nav-item logo-link" href="/" data-analytics="global-nav" data-analytics-placement="Footer">
                        <img class="blizzard-logo" src="/images/logos/blizzard.png" alt="" />
                    </a>
                </div>
                <div class="footer-links nav-left">
                    <a class="nav-item nav-a" href="/about/legal/" data-analytics="global-nav" data-analytics-placement="Footer - Legal">Соглашения</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/about/privacy" data-analytics="global-nav" data-analytics-placement="Footer - Privacy Policy">Политика конфиденциальности</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/about/infringementnotice" data-analytics="global-nav" data-analytics-placement="Footer - Copyright Infringement">Авторское право</a>
                    <span>|</span>
                    <a class="nav-item nav-a" href="/api" data-analytics="global-nav" data-analytics-placement="Footer - API">API</a>
                    <div class="copyright">© World of Warcraft, 2017 г.</div>
                    <div class="nav-footer-icon-container">
                        <ul class="nav-footer-icon-list">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="nav-ratings">
                <div class="legal-rating">
                    <div class="product-rating mkrf-rating clearfix">
                        <a href="http://mkrf.ru/" tabindex="1" rel="external" target="_blank"><img class="mkrf-logo" src="/images/legal/ratings/mkrf/12.png" alt="12+" width="65" height="72" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <script>
    //<![CDATA[
    var xsToken = '';
    var supportToken = '';
    var jsonSearchHandlerUrl = '/';
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
        searchFor: 'Поиск по',
        searchTags: 'Помеченные статьи:',
        characterAjaxError: 'Возможно, вы вышли из системы. Обновите страницу и повторите попытку.',
        ilvl: "Уровень {0}",
        shortQuery: 'Запрос для поиска должен состоять не менее чем из двух букв.',
        editSuccess: 'Success. Reload?',
        postDelete: 'Вы точно хотите удалить это сообщение?',
        throttleError: 'Вы должны подождать некоторое время, прежде чем вы сможете опубликовать новое сообщение.',
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
        ellipsis: '...'
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

    <script type="text/javascript" src="/js/menu.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(function() {
            Menu.initialize('/data/menu.json');
        });
        //]]>
    </script>
    <script type="text/javascript" src="/js/wow.js"></script>
    <script type="text/javascript" src="/js/navbar-tk.min.js"></script>
    <?php echo vendor\core\App::$app->css->printJS()?>

    <script type="text/javascript" src="/js/cms.min.js"></script>
    <script type="text/javascript" src="/js/freedomcore.js"></script>
    </body>
</html>