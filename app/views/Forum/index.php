<div role="main">
    <section class="Community">
        <header class="Community-header">
            <div class="Community-wrapper">
            <div class="Welcome">
                <div class="Welcome-logo--container">
                    <img class="Welcome-logo" src="/forums/static/images/game-logos/game-logo-wow.png"/>
                    <p class="Welcome-text">欢迎来到 《中国魔兽》 官方论坛 <span class='CommunityName'></span></p>
                </div>
            </div>
        </div>
        </header>
                <?php foreach($forums as $element): ?>


                <div class="ForumCategory ">
                    <header class="ForumCategory-header">
                        <h1 class="ForumCategory-heading"><?=$element[0]['forum_type_name']?></h1><?php if($element[0]['id'] == 1):?>
<button class="Community-button--search" id="toggle-search-field" data-trigger="toggle.search.field" type="button"><span class="Button-content"><i class="Icon"></i></span></button>							<form action="/forum/search" class="Form Form--search" data-search-all="true" id="forum-search-form">
                                <div class="Form-group">
                                    <div class="Input Input--iconPrefix Input--search">
                                        <input name="q" placeholder="搜索所有论坛" type="search" autocomplete='off' />
                                        <i class="Icon Icon--prefix Icon--search"></i>
                                        <div class="Input-border"></div>
                                    </div>
                                </div>
                            </form><?php endif;?>
                    </header>
                    <div class="ForumCards ">








<?php foreach($element as $topic):?>
<a href="/forum/<?=$topic['forum_id']?>/" class="ForumCard ForumCard--content  ">
    <i class="ForumCard-icon" style="background-image: url('/cms/forum_icon/<?=$topic['forum_icon']?>')"></i>
    <div class="ForumCard-details">
        <h1 class="ForumCard-heading"><?=$topic['forum_name']?>
        </h1>
            <?php if($topic['forum_description']):?><span class="ForumCard-description"><?=$topic['forum_description']?></span><?php endif;?>
    </div>
</a>
<?php endforeach;?>

                    </div>
                </div>

                <?php endforeach;?>
</section>
<?php
require_once "select_char.php";
?>
</div>