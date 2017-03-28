<a id="user-plate" class="card-character plate-<?=$charactersActive['faction_text']?> ajax-update" rel="np" href="<?=$charactersActive['url']?>/simple"></a>
<div class="meta-wrapper meta-<?=$charactersActive['faction_text']?> ajax-update">
<div class="character-card card-game-char ajax-update">
<div class="message">
<span class="player-name">
<?php if($userTegName) {
    echo $userTegName['tag_name'];
} else {
    echo vendor\core\Session::get('email');
} ?>
</span>
<div class="character">
<a class="character-name context-link serif name-small" href="<?=$charactersActive['url']?>/simple" rel="np">
<?=$charactersActive['name']?>
</a>
<span class="avatar-frame">
<img src="/images/2d/avatar/<?=$charactersActive['race']?>-<?=$charactersActive['gender']?>.jpg" class="avatar avatar-wow" />
<span class="border"></span>
<span class="icon icon-wow"></span>
</span>
<div id="context-1" class="ui-context character-select">
<div class="context">
<a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
<div class="context-user">
<strong><?=$charactersActive['name']?></strong>
</div>
<div class="context-links">
<a href="<?=$charactersActive['url']?>/simple" title="Профиль" rel="np"
class="icon-profile link-first"
>
<span class="context-icon"></span>Профиль
</a>
<a href="/search?f=post&amp;a=<?=$charactersActive['name']?>&amp;sort=time" title="Мои сообщения" rel="np"
class="icon-posts"
>
<span class="context-icon"></span>
</a>
<a href="/vault/character/auction/" title="Просмотреть аукцион" rel="np"
class="icon-auctions"
>
<span class="context-icon"></span>
</a>
<a href="/vault/character/event" title="Просмотреть события" rel="np"
class="icon-events link-last"
>
<span class="context-icon"></span>
</a>
</div>
</div>
<div class="character-list">
<div class="primary chars-pane">
<div class="char-wrapper">
<?php foreach ($characters as $character): ?>
<a href="<?=$character['url']?>/simple"
class="char pinned" rel="np">
<span class="pin"></span>
<span class="name"><?=$character['name']?></span>
<span class="class wow-class-<?=$character['class_key']?>"><?=$character['race_text']?> – <?=$character['class_text']?>, <?=$character['level']?> ур.</span>
<span class="realm up"><?=$character['realmName']?></span>
</a>
<?php endforeach; ?>
</div>
<a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
<span class="plus"></span>
Управление персонажами<br />
<span>Настройте выпадающее меню персонажа.</span>
</a>
</div>
<div class="secondary chars-pane" style="display: none">
<div class="char-wrapper scrollbar-wrapper" id="scroll">
<div class="scrollbar">
<div class="track"><div class="thumb"></div></div>
</div>
<div class="viewport">
<div class="overview">
<?php foreach ($characters as $character): ?>
<a href="<?=$character['url']?>/simple" class="wow-class-<?=$character['class_key']?> pinned" rel="np" data-tooltip="<?=$character['race_text']?> <?=$character['class_text']?> (<?=$character['realmName']?>)">
<span class="icon icon-race">
<img src="/images/icons/small/race_<?=$character['race']?>_<?=$character['gender']?>.jpg" alt="" width="14" height="14" />
</span>
<span class="icon icon-class">
<img src="/images/icons/small/class_<?=$character['class']?>.jpg" alt="" width="14" height="14" />
</span>
<?=$character['level']?> <?=$character['name']?>
</a>
<?php endforeach; ?>
<div class="no-results hide">Персонажей не найдено</div>
</div>
</div>
</div>
<div class="filter">
<input type="input" class="input character-filter" value="Фильтр" alt="Фильтр" /><br />
<a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">К списку персонажей</a>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</div>