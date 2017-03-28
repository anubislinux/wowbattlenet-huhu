<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>Панель управления</title>
    <link href="/skins/stylesheets/application.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/skins/javascripts/application.js"></script>
</head>
<body>
<script type="text/javascript">
<!--
var dle_act_lang   = ["Да", "Нет", "Ввод", "Отмена", "Загрузка изображений и файлов на сервер"];
var cal_language   = {en:{months:['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],dayOfWeek:["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"]}};
//-->
</script>
<div id="loading-layer">Пожалуйста, подождите...</div>
<div id="maincontainer">
<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="/dashboard">Панель управления</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-primary">
                    <span class="sr-only">Side Navigation</span>
                    <i class="icon-th-list"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                    <span class="sr-only">Top Navigation</span>
                    <i class="icon-align-justify"></i>
                </button>
    </div>
            <div class="collapse navbar-collapse navbar-collapse-top">
                <div class="navbar-right">

                    <ul class="nav navbar-nav navbar-left">
                        <li class="cdrop mobilehidden"><a href="#" onclick="toggleleftpanel();return false;"><i class="icon-exchange"></i></a></li>
            <li class="cdrop boxedhidden"><a href="?mod=options&action=options">Все разделы панели</a></li>
                        <li class="cdrop"><a href="/" target="_blank">Просмотр сайта</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-avatar" data-toggle="dropdown">
                            <span>
                                <img class="menu-avatar" src="/skins/images/noavatar.png" /> <span><?php if(isset($userTegName)) { echo $userTegName['tag_name']; } else { echo vendor\core\Session::get('email'); } ?> <i class="icon-caret-down"></i></span>

                            </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="with-image">
                                    <div class="avatar">
                                        <img src="/skins/images/noavatar.png" />
                                    </div>
                                    <span><?php if(isset($userTegName)) { echo $userTegName['tag_name']; } else { echo vendor\core\Session::get('email'); } ?><br />(Администраторы)</span>
                                </li>
                                <li class="divider"></li>
                                <li><a href="?action=logout"><i class="icon-off"></i> <span>Выход</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
</nav>
<div id="sidebarbackground" class="sidebar-background">
    <div class="primary-sidebar-background"></div>
</div>
<div class="primary-sidebar">
<ul class="nav navbar-collapse collapse navbar-collapse-primary"><li><span class="glow"></span><a href="?mod=options&action=options"><i class="icon-globe icon-2x"></i><span>Все разделы панели</span></a></li><li class="dark-nav"><span class="glow"></span><a class="accordion-toggle" data-toggle="collapse" href="#submenu1"><i class="icon-wrench icon-2x"></i><span>Настройки скрипта <i class="icon-caret-down"></i></span></a><ul id="submenu1" class="collapse"><li class=""><a href="?mod=options&action=syscon">Настройка системы</a></li></ul></li><li class="dark-nav"><span class="glow"></span><a class="accordion-toggle" data-toggle="collapse" href="#submenu2"><i class="icon-user icon-2x"></i><span>Пользователи <i class="icon-caret-down"></i></span></a><ul id="submenu2" class="collapse"><li class=""><a href="?mod=editusers&action=list">Редактирование пользователей</a></li></ul></li></ul>
</div>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="area-top clearfix">
                <div class="pull-left header">
                    <h3 class="title"><i class="icon-home"></i>Главная страница</h3>
                    <h5><span>Главная страница панели управления</span></h5>
                </div>
                <div class="pull-right padding-right newsbutton">
            <div class="action-nav-normal action-nav-line" style="display: inline-block;">
                <div id="addnewsbutton" class="action-nav-button nav-small" style="width:180px;">
                  <a href="/dashboard/news/add" title="Добавить новость">
                    <i class="icon-file-alt"></i>
                    <span>Добавить новость</span>
                  </a>
                  <span class="triangle-button red"><i class="icon-plus"></i></span>
                </div>
            </div>
            <div class="action-nav-normal action-nav-line" style="display: inline-block;">
                <div id="editnewsbutton" class="action-nav-button nav-small" style="width:180px;">
                  <a href="/dashboard/news/list" title="Редактировать новости">
                    <i class="icon-edit"></i>
                    <span>Редактировать новости</span>
                  </a>
                  <span class="triangle-button blue"><i class="icon-pencil"></i></span>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container padded-right">
        <?=$content?>
    </div>
</div>
</div>
</body>
</html>