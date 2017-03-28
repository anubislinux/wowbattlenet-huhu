<style type="text/css">
#content .content-top { background: url("/images/character/summary/backgrounds/race/<?=$charInfo['race'];?>.jpg") left top no-repeat; }
.profile-wrapper { background-image: url("/images/2d/profilemain/race/<?=$charInfo['race'];?>-<?=$charInfo['gender'];?>.jpg"); }
</style>
<div id="content">
<div class="content-top body-top">
<div class="content-trail"></div>
<div class="content-bot clear">
    <div id="profile-wrapper" class="profile-wrapper profile-wrapper-alliance">

        <div class="profile-sidebar-anchor">
            <div class="profile-sidebar-outer">
                <div class="profile-sidebar-inner">
                    <div class="profile-sidebar-contents">
        <div class="profile-info-anchor">
            <div class="profile-info">
                <div class="name"><a href="<?=$charInfo['url'];?>/simple" rel="np"><?=$charInfo['name'];?></a></div>
                <div class="title-guild">
                    <div class="title"> <!--покоритель сумрака--></div>
                </div>
    <span class="clear"><!-- --></span>
                <div class="under-name color-c12">
                        <a href="/game/race/<?=$charInfo['race_key'];?>" class="race"><?=$charInfo['race_text'];?></a>-<a href="/game/class/<?=$charInfo['class_key'];?>" class="class"><?=$charInfo['class_text'];?></a> (<a id="profile-info-spec" href="#talents" class="spec tip">Месть</a>) <span class="level"><strong><?=$charInfo['level'];?></strong></span> ур.<span class="comma">,</span>
                    <span class="realm tip" id="profile-info-realm" data-battlegroup="Vindication">
                        <?=$charInfo['realmName'];?>
                    </span>
                </div>
                <div class="achievements"><a href="<?=$charInfo['url'];?>/achievement">4980</a></div>
            </div>
        </div>




    <ul class="profile-sidebar-menu" id="profile-sidebar-menu">





            <li class=" active">

        <a href="<?=$charInfo['url'];?>/simple" class="" rel="np">
            <span class="arrow"><span class="icon">
                Сводная информация
            </span></span>
        </a>

            </li>










            <li class="">

        <a href="/vault/character/auction/" class=" has-submenu vault" rel="np">
            <span class="arrow"><span class="icon">
                Лоты
            </span></span>
        </a>

            </li>





            <li class="">

        <a href="/vault/character/event" class=" vault" rel="np">
            <span class="arrow"><span class="icon">
                События
            </span></span>
        </a>

            </li>





            <li class="">

        <a href="<?=$charInfo['url'];?>/achievement" class=" has-submenu" rel="np">
            <span class="arrow"><span class="icon">
                Достижения
            </span></span>
        </a>

            </li>










            <li class="">

        <a href="<?=$charInfo['url'];?>/pet" class="" rel="np">
            <span class="arrow"><span class="icon">
                Спутники и транспорт
            </span></span>
        </a>

            </li>





            <li class="">

        <a href="<?=$charInfo['url'];?>/profession/" class=" has-submenu" rel="np">
            <span class="arrow"><span class="icon">
                Профессии
            </span></span>
        </a>

            </li>





            <li class="">

        <a href="<?=$charInfo['url'];?>/reputation/" class="" rel="np">
            <span class="arrow"><span class="icon">
                Репутация
            </span></span>
        </a>

            </li>





            <li class="">

        <a href="<?=$charInfo['url'];?>/pvp" class="" rel="np">
            <span class="arrow"><span class="icon">
                PvP
            </span></span>
        </a>

            </li>





            <li class="">

        <a href="<?=$charInfo['url'];?>/feed" class="" rel="np">
            <span class="arrow"><span class="icon">
                Лента новостей
            </span></span>
        </a>

            </li>
    </ul>
                            <div class="summary-sidebar-links">
                                <span class="summary-sidebar-button">
                                    <a href="javascript:;" id="summary-link-tools" class="summary-link-tools"></a>
                                </span>

                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-contents">

        <div class="summary-top">

            <div class="summary-top-right">


    <ul class="profile-view-options" id="profile-view-options-summary">
            <li<?php if($simple == 'advanced') {?> class="current"<?php }?>>
                <a href="<?=$charInfo['url'];?>/advanced" rel="np" class="advanced">
                    Развернутый
                </a>
            </li>
            <li<?php if($simple == 'simple') {?> class="current"<?php }?>>
                <a href="<?=$charInfo['url'];?>/simple" rel="np" class="simple">
                    Простой
                </a>
            </li>
    </ul>


                    <div class="summary-averageilvl">
    <div class="rest">
        Средний<br />
        (<span class="equipped">837</span> Экипирован)
    </div>
    <div id="summary-averageilvl-best" class="best tip" data-id="averageilvl">
        837
    </div>
                    </div>

            </div>

                <div class="summary-top-inventory">
                <?php if($simple == 'simple') {
                    require_once 'inventory_simple.php';
                } else {
                    require_once 'inventory_advanced.php';
                }
                ?>
                </div>

        </div>


            <div class="summary-bottom">

                <div class="summary-bottom-right">
                    <div class="summary-talents" id="summary-talents">
    <h3 class="category ">							<span class="title">Таланты</span>
                            <a name="talents" href="/wow/ru/tool/talent-calculator#gZ!1021200!" target="_blank" id="export-build" class="talent-export">Просмотреть в калькуляторе талантов<span class="arrow"></span></a>
</h3>


    <div class="profile-box-simple">
        <div class="talent-specs" data-class-name="demon-hunter">


    <a data-spec-id="0" class="spec-button spec-0 selected active" href="javascript:;" data-spec-name="vengeance" data-tooltip="Использует силу внутреннего демона, чтобы испепелять противников и защищать союзников."><span class="inner">
        <span class="checkmark"></span>
            <span class="frame">
                <span class="icon"><img src="http://media.blizzard.com/wow/icons/36/ability_demonhunter_spectank.jpg" alt="" /></span>
            </span>
        <span class="roles">
                <span class="icon-tank"></span>
        </span>
        <span class="name-build">
            <span class="name ">Месть</span>
        </span>
    </span></a>


    <a data-spec-id="1" class="spec-button spec-1" href="javascript:;" data-spec-name="havoc" data-tooltip="Мрачный мастер боевых клинков и разрушительной магии Скверны."><span class="inner">

            <span class="frame">
                <span class="icon"><img src="http://media.blizzard.com/wow/icons/36/ability_demonhunter_specdps.jpg" alt="" /></span>
            </span>
        <span class="roles">
                <span class="icon-dps"></span>
        </span>
        <span class="name-build">
            <span class="name ">Истребление</span>
        </span>
    </span></a>




    <span class="clear"><!-- --></span>
        </div>



    <div class="talent-build selected" id="talent-build-0">
            <div class="talents">
                <ul>
                                    <li class="talent" data-tooltip="#tooltip-207548" data-tier="0" data-column="1">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/achievment_raid_houroftwilight.jpg");'>
        </span>
<span class="spell-name">Пламенная боль</span></li>



    <div id="tooltip-207548" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/achievment_raid_houroftwilight.jpg");'>
        </span>

            <h3>Пламенная боль</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
"Жар преисподней" позволяет вам перемещаться на 30% быстрее и наносит на 20% больше урона.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-207697" data-tier="1" data-column="0">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/spell_shadow_soulleech.jpg");'>
        </span>
<span class="spell-name">Пиршество душ</span></li>



    <div id="tooltip-207697" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/spell_shadow_soulleech.jpg");'>
        </span>

            <h3>Пиршество душ</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
"Раскалывание душ" дополнительно восполняет вам 77212 ед. здоровья в течение 6 сек.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-211881" data-tier="2" data-column="2">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_bossfellord_felspike.jpg");'>
        </span>
<span class="spell-name">Извержение Скверны</span></li>



    <div id="tooltip-211881" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_bossfellord_felspike.jpg");'>
        </span>

            <h3>Извержение Скверны</h3>
                <h4></h4>


                <div>
                            <span class="float-right">20 м</span>
                        10 ед. боли
    <span class="clear"><!-- --></span>
                </div>

                <div>
                        <span class="float-right">Время восстановления: 30 сек.</span>
                        Мгновенно
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Наносит цели 270242 ед. урона от магии Хаоса и оглушает ее на 2 сек. Способность наносит на 100% больше урона целям, постоянно невосприимчивым к оглушению.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-209795" data-tier="3" data-column="1">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_creature_felsunder.jpg");'>
        </span>
<span class="spell-name">Трещина</span></li>



    <div id="tooltip-209795" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_creature_felsunder.jpg");'>
        </span>

            <h3>Трещина</h3>
                <h4></h4>


                <div>
                            <span class="float-right">Ближний бой</span>
                        20 ед. боли
    <span class="clear"><!-- --></span>
                </div>

                <div>
                        Мгновенно
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Жестокий удар, наносящий вашей цели 119132 ед. физического урона и откалывающий от нее два малых фрагмента души.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-209281" data-tier="4" data-column="2">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_demonhunter_concentratedsigils.jpg");'>
        </span>
<span class="spell-name">Ускоренные печати</span></li>



    <div id="tooltip-209281" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_demonhunter_concentratedsigils.jpg");'>
        </span>

            <h3>Ускоренные печати</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Все печати активируются на 1 сек. быстрее, а время их восстановления сокращается на 20%.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-212084" data-tier="5" data-column="0">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_demonhunter_feldevastation.jpg");'>
        </span>
<span class="spell-name">Опустошение Скверны</span></li>



    <div id="tooltip-212084" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_demonhunter_feldevastation.jpg");'>
        </span>

            <h3>Опустошение Скверны</h3>
                <h4></h4>


                <div>
                            <span class="float-right">20 м</span>
                        30 ед. боли
    <span class="clear"><!-- --></span>
                </div>

                <div>
                        <span class="float-right">Время восстановления: 1 мин.</span>
                        Потоковое
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Вы высвобождаете заключенную в вас энергию Скверны, нанося 178190 ед. урона от огня противникам, находящимся непосредственно перед вами, в течение 1,9 сек.. При нанесении урона вы также восстанавливаете до 494950 ед. здоровья.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-209258" data-tier="6" data-column="0">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/inv_glaive_1h_artifactaldorchi_d_06.jpg");'>
        </span>
<span class="spell-name">Последнее прибежище</span></li>



    <div id="tooltip-209258" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/inv_glaive_1h_artifactaldorchi_d_06.jpg");'>
        </span>

            <h3>Последнее прибежище</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Получив смертельный удар, вы получаете эффект "Метаморфоза" и восполняете уровень здоровья до 30%.<br/><br/>Этот эффект может срабатывать не чаще раза в 8 мин.				</div>
        </div>
    </div>



                </ul>
            </div>
        </div>


    <div class="talent-build " id="talent-build-1">
            <div class="talents">
                <ul>
                                    <li class="talent" data-tooltip="#tooltip-192939" data-tier="0" data-column="0">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_skyreach_piercing_rush.jpg");'>
        </span>
<span class="spell-name">Искусность Скверны</span></li>



    <div id="tooltip-192939" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_skyreach_piercing_rush.jpg");'>
        </span>

            <h3>Искусность Скверны</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Увеличивает урон от "Рывка Скверны" на 30% и позволяет накопить 25 ед. гнева, если "Рывок Скверны" наносит урон хотя бы одной цели.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-206478" data-tier="1" data-column="2">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/spell_misc_zandalari_council_soulswap.jpg");'>
        </span>
<span class="spell-name">Демонический аппетит</span></li>



    <div id="tooltip-206478" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/spell_misc_zandalari_council_soulswap.jpg");'>
        </span>

            <h3>Демонический аппетит</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
"Удар Хаоса" с вероятностью 25% может создать малый фрагмент души. Поглотив любой фрагмент души, вы накопите 35 ед. гнева.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-232893" data-tier="2" data-column="0">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_demonhunter_felblade.jpg");'>
        </span>
<span class="spell-name">Клинок Скверны</span></li>



    <div id="tooltip-232893" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_demonhunter_felblade.jpg");'>
        </span>

            <h3>Клинок Скверны</h3>
                <h4></h4>


                <div>
                            15 м
    <span class="clear"><!-- --></span>
                </div>

                <div>
                        <span class="float-right">Время восстановления: 15 сек.</span>
                        Мгновенно
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Вы совершаете рывок к цели, нанося ей 113179 ед. урона от огня.<br/><br/>"Укус демона" с некоторой вероятностью может завершить время восстановления "Клинка Скверны".<br/><br/><span style="color: #ffffff;">Вы накапливаете 30 ед. гнева.</span>				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-205411" data-tier="3" data-column="1">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/spell_shadow_manafeed.jpg");'>
        </span>
<span class="spell-name">Инстинкт самосохранения</span></li>



    <div id="tooltip-205411" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/spell_shadow_manafeed.jpg");'>
        </span>

            <h3>Инстинкт самосохранения</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
"Затуманивание" теперь уменьшает получаемый урон дополнительно на 15%.<br/><br/>"Затуманивание" также срабатывает автоматически, если ваш запас здоровья падает ниже 35%, но только в том случае, если не находится в процессе восстановления.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-211881" data-tier="4" data-column="1">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_bossfellord_felspike.jpg");'>
        </span>
<span class="spell-name">Извержение Скверны</span></li>



    <div id="tooltip-211881" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_bossfellord_felspike.jpg");'>
        </span>

            <h3>Извержение Скверны</h3>
                <h4></h4>


                <div>
                            <span class="float-right">20 м</span>
                        10 ед. боли
    <span class="clear"><!-- --></span>
                </div>

                <div>
                        <span class="float-right">Время восстановления: 30 сек.</span>
                        Мгновенно
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Наносит цели 270242 ед. урона от магии Хаоса и оглушает ее на 2 сек. Способность наносит на 100% больше урона целям, постоянно невосприимчивым к оглушению.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-203556" data-tier="5" data-column="0">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/inv_glaive_1h_demonhunter_a_01.jpg");'>
        </span>
<span class="spell-name">Мастер боевого клинка</span></li>



    <div id="tooltip-203556" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/inv_glaive_1h_demonhunter_a_01.jpg");'>
        </span>

            <h3>Мастер боевого клинка</h3>
                <h4></h4>



                <div>
                        Пассивная
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
"Бросок боевого клинка" теперь имеет 2 заряда и замедляет всех пораженных противников на 50% на 6 сек.				</div>
        </div>
    </div>



                                    <li class="talent" data-tooltip="#tooltip-211053" data-tier="6" data-column="1">




        <span  class="icon-frame frame-18 " style='background-image: url("http://media.blizzard.com/wow/icons/18/ability_felarakkoa_feldetonation_green.jpg");'>
        </span>
<span class="spell-name">Обстрел Скверны</span></li>



    <div id="tooltip-211053" style="display: none">
        <div class="tc-tooltip">





        <span  class="icon-frame frame-56 " style='background-image: url("http://media.blizzard.com/wow/icons/56/ability_felarakkoa_feldetonation_green.jpg");'>
        </span>

            <h3>Обстрел Скверны</h3>
                <h4></h4>


                <div>
                            30 м
    <span class="clear"><!-- --></span>
                </div>

                <div>
                        Потоковое
    <span class="clear"><!-- --></span>
                </div>


                <div class="color-tooltip-yellow">
Высвобождает энергию Скверны, нанося вашей цели и находящимся рядом с ней противникам 59394 ед. урона от магии Хаоса за каждый заряд. Максимум 5 зарядов.<br/><br/>Ваши способности, наносящие урон, с некоторой вероятностью создают заряд этой способности.				</div>
        </div>
    </div>



                </ul>
            </div>
        </div>


    <div class="talent-build " id="talent-build-2">
            <div class="talents">
                <ul>

                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>


                </ul>
            </div>
        </div>


    <div class="talent-build " id="talent-build-3">
            <div class="talents">
                <ul>

                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>



                            <li class="talent empty"><span class="icon-frame frame-18"></span><span class="spell-name">Пусто</span></li>


                </ul>
            </div>
        </div>

    </div>

        <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {

            var specLinks = {};

                specLinks[0] = "/wow/ru/tool/talent-calculator#gZ!1021200!";
                specLinks[1] = "/wow/ru/tool/talent-calculator#ga!0201101!";
                specLinks[2] = "/wow/ru/tool/talent-calculator#g!!";
                specLinks[3] = "/wow/ru/tool/talent-calculator#g!!";

            Summary.Talents(specLinks);
        });
        //]]>
        </script>


                    </div>
                </div>
                <?php require_once 'summary_bottom_left.php'; ?>

    <span class="clear"><!-- --></span>
                <div class="summary-bottom-sub-content">
                <?php require_once 'summary_bottom_right.php'; ?>
                <?php require_once 'summary_battlegrounds.php'; ?>
                </div>

    <span class="clear"><!-- --></span>
                    <?php require_once 'summary_raid.php'; ?>
    <span class="clear"><!-- --></span>

                <div class="summary-lastupdate">
                    Последнее обновление: 15/12/2016
                </div>

            </div>


        </div>

    <span class="clear"><!-- --></span>
    </div>

        <script type="text/javascript">
        //<![CDATA[
        $(function() {
            Profile.url = '/wow/ru/character/%D1%81%D1%82%D1%80%D0%B0%D0%B6-%D1%81%D0%BC%D0%B5%D1%80%D1%82%D0%B8/%D0%9F%D1%80%D0%BE%D0%BA%D0%BB%D1%8F%D1%82%D1%8B%D0%B9%D1%8F/summary';
        });

            var MsgProfile = {
                tooltip: {
                    feature: {
                        notYetAvailable: "Эта функция пока недоступна."
                    },
                    vault: {
                        character: "Этот раздел доступен только для авторизованных пользователей.",
                        guild: "Этот раздел доступен, только если вы авторизовались с персонажа — члена данной гильдии."
                    }
                }
            };
        //]]>
        </script>

        <?php require_once 'js_messages.php'; ?> 

</div>
</div>
</div>