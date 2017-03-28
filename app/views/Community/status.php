<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">World of Warcraft</span>
                    </a>
                </li>
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/community" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">Сообщество</span>
                    </a>
                </li>
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/community/status" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">Состояние игровых миров</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="content-header">
                <h2 class="header ">Состояние игровых миров</h2>
                <div class="desc">На этой странице отображается состояние игровых миров. Для каждого игрового мира указано, «открыт» он или «закрыт». Особые сообщения о состоянии того или иного мира, о проведении технического обслуживания и т.п. размещаются на форуме «Состояние игровых миров». Заранее приносим вам свои извинения за неудобство, если ваш игровой мир в какой-то момент будет отмечен как «закрытый». Мы постараемся вернуть его в строй как можно скорее.</div>
                <span class="clear"><!-- --></span>
            </div>
            <div id="realm-status">
                <ul class="tab-menu ">
                    <li>
                        <a href="javascript:;" class="tab-active">
                            Все игровые миры
                        </a>
                    </li>
                </ul>
                <div class="filter-toggle">
                    <a href="javascript:;" class="selected" onclick="RealmStatus.filterToggle(this)">
                        <span style="display: none">Показать фильтры</span>
                        <span>Скрыть фильтры</span>
                    </a>
                </div>
                <span class="clear"><!-- --></span>
                <div id="realm-filters" class="table-filters">
                    <form action="">
                        <div class="filter">
                            <label for="filter-status">Состояние</label>
                            <select id="filter-status" class="input select" data-filter="column" data-column="0">
                                <option value="">Все</option>
                                <option value="up">Включен</option>
                                <option value="down">Отключен</option>
                            </select>
                        </div>
                        <div class="filter">
                            <label for="filter-name">Название игрового мира</label>
                            <input type="text" class="input" id="filter-name" data-filter="column" data-column="1" />
                        </div>
                        <div class="filter">
                            <label for="filter-type">Тип</label>

                            <select id="filter-type" class="input select" data-filter="column" data-column="2">
                                <option value="">Все</option>
                                <option value="rp">
                                    Ролевой
                                </option>
                                <option value="rppvp">
                                    Ролевой PVP
                                </option>
                                <option value="pve">
                                    PvE
                                </option>
                                <option value="pvp">
                                    PvP
                                </option>
                            </select>
                        </div>
                        <div class="filter">
                            <label for="filter-population">Заселенность</label>
                            <select id="filter-population" class="input select" data-filter="column" data-column="3">
                                <option value="">Все</option>
                                <option value="high">Высокая</option>
                                <option value="low">Низкая</option>
                                <option value="medium">Средняя</option>
                            </select>
                        </div>
                        <div class="filter" id="locale-filter">
                            <label for="filter-locale">Язык</label>
                            <select id="filter-locale" class="input select" data-column="4" data-filter="column">
                                <option value="">Все</option>
                                <option value="Русский">Русский</option>
                                <option value="English">English</option>
                                <option value="German">German</option>
                                <option value="Espanol">Espanol</option>
                                <option value="Development">Development</option>
                            </select>
                        </div>
                        <div class="filter">
                            <label for="filter-queue">Очередь</label>
                            <input type="checkbox" id="filter-queue" class="input" value="true" data-column="5" data-filter="column" />
                        </div>
                        <div class="filter" style="margin: 5px 0 5px 15px">
                            <button class="ui-button button1" type="button" id="filter-button" onclick="RealmStatus.reset();"><span class="button-left"><span class="button-right">Сброс</span></span></button>
                        </div>
                        <span class="clear"><!-- --></span>
                    </form>
                </div>
            </div>
            <span class="clear"><!-- --></span>
            <div id="all-realms">
                <div class="table full-width data-container type-table">
                    <table>
                        <thead>
                        <tr>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow">Состояние</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow up">Название игрового мира</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow">Тип</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow">Заселенность</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow">Язык</span></a></th>
                            <th><a href="javascript:;" class="sort-link"><span class="arrow">Очередь</span></a></th>
                        </tr>
                        </thead>
                        <tbody><?php foreach ($servers as $server): ?>
                            <tr class="row1">
                                <td class="status" data-raw="<?=$server['status']?>">
                                    <div class="status-icon <?=$server['status']?>" <?php if($server['status'] == 'down'):?>data-tooltip="Offline"<?php else:?>data-tooltip="Online"<?php endif;?>>
                                    </div>
                                </td>
                                <td class="name">
                                    <?=$server['name']?>
                                </td>
                                <td data-raw="<?=$server['type']?>" class="type">
                                    <span class="<?=$server['type']?>">
                                            (<?=$server['type']?>)
                                    </span>
                                </td>
                                <td class="population" data-raw="<?php if($server['population'] <= 0.5):?>low<?php elseif($server['population'] > 0.5 && $server['population'] <= 1.0):?>medium<?php elseif($server['population'] > 1.0 && $server['population'] <= 2.0):?>high<?php endif;?>">
                                    <?php if($server['population'] <= 0.5):?>
                                    <span class="low">
                                        Низкая
                                    </span>
                                    <?php elseif($server['population'] > 0.5 && $server['population'] <= 1.0):?>
                                    <span class="medium">
                                        Средняя
                                    </span>
                                    <?php elseif($server['population'] > 1.0 && $server['population'] <= 2.0):?>
                                    <span class="high">
                                        Высокая
                                    </span>
                                    <?php endif;?>
                                </td>
                                <td class="locale">
                                   <?=$server['language']?>
                                </td>
                                <td data-raw="false" class="queue">
                                </td>
                            </tr><?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <span class="clear"><!-- --></span>
        </div>
    </div>
</div>