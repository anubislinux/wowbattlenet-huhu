<?php if(!vendor\core\Session::get('email')) {?>
    <div class="comments-form-wrapper">
        <div class="comments-error-gate">
            <p><?php echo vendor\core\App::$app->lang->get('lng.login_authorization_needed', '')?></p>
            <button class="ui-button button1" onclick="Login.open();" type="button">
                <span class="button-left">
                    <span class="button-right">
                        <?php echo vendor\core\App::$app->lang->get('lng.log_in', '')?>
                    </span>
                </span>
            </button>
        </div>
    </div>
<?php } else {?>
    <?php if($charactersActive == 0) { ?>
        <div class="comments-form-wrapper">
            <div class="comments-error-gate">
                <p>{#Comments_No_Characters#}</p>
            </div>
        </div>
    <?php } else {?>
        <div class="comments-form-wrapper">
            <form id="comments-reply-form" class="comments-form" action="" method="post" style="display: none">
                <div class="bnet-avatar">
                    <div class="avatar-outer">
                        <a href="<?=$charactersActive['url']?>/simple">
                            <img height="64" width="64" src="/images/2d/avatar/<?=$charactersActive['race']?>-<?=$charactersActive['gender']?>.jpg" alt=""/>
                            <span class="avatar-inner"/></span>
                        </a>
                    </div>
                </div>
                <div class="character-info user ajax-update">
                    <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                        <div id="context-1" class="ui-context character-select">
                            <div class="context">
                                <a href="javascript:;" class="close" onclick="return CharSelect.close(this);">
                                <div class="context-user">
                                    <strong><?=$charactersActive['name']?></strong>
                                </div>
                                </a>
                                <div class="context-links">
                                    <a href="<?=$charactersActive['url']?>/simple" title="Profile" rel="np" class="icon-profile link-first">
                                        <span class="context-icon"/></span>
                                        Profile
                                    </a>
                                    <a href="/search?f=post&a=<?=$charactersActive['name']?>&sort=time" title="View my posts" rel="np" class="icon-posts">
                                        <span class="context-icon"></span>
                                    </a>
                                    <a href="/vault/character/auction" title="View auctions" rel="np" class="icon-auctions">
                                        <span class="context-icon"/></span>
                                    </a>
                                    <a href="/vault/character/event" title="View events" rel="np" class="icon-events link-last">
                                        <span class="context-icon"/></span>
                                    </a>
                                </div>
                            </div>
                            <div class="character-list">
                                <div class="primary chars-pane">
                                    <div class="char-wrapper">
                                        <a href="<?=$charactersActive['url']?>/simple" class="char pinned" rel="np">
                                            <span class="pin"/></span>
                                            <span class="name">{$CommentCharacter.name}</span>
                                            <span class="class wow-class-{$CommentCharacter.class}">{$CommentCharacter.level} {$CommentCharacter.race_name} {$CommentCharacter.class_name}</span>
                                        </a>
                                    </div>
                                    <a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
                                        <span class="plus"/></span>
                                        Manage Characters<br />
                                        <span>
                                            Customise characters that appear in this menu.
                                        </span>
                                    </a>
                                </div>
                                <div class="secondary chars-pane">
                                    <div class="char-wrapper scrollbar-wrapper" id="scroll">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb"/>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="overview">
                                                <a href="<?=$charactersActive['url']?>/simple" class="wow-class-<?=$charactersActive['class_key']?> pinned" rel="np" data-tooltip="<?=$charactersActive['race_text']?> – <?=$charactersActive['class_text']?>">
                                                <span class="icon icon-race">
                                                    <img src="/images/icons/small/race_<?=$charactersActive['race']?>_<?=$charactersActive['gender']?>.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                <span class="icon icon-class">
                                                    <img src="/images/icons/small/class_<?=$charactersActive['class']?>.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                    <?=$charactersActive['level']?> <?=$charactersActive['name']?>
                                                </a>
                                                <div class="no-results hide">No characters were found</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter">
                                        <input type="input" class="input character-filter" value="Filter..." alt="Filter..."/>
                                        <br />
                                        <a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">
                                            Return to characters
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?=$charactersActive['url']?>/simple" itemprop="url" class="context-link wow-class-<?=$charactersActive['class_key']?>">
                            <span itemprop="name" class="poster-name"><?=$charactersActive['name']?></span>
                        </a>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="input-wrapper">
                        <textarea name="detail" class="input textarea"/></textarea>
                    </div>
                    <ul class="comments-error-form">
                        <li class="error-required">Field required</li>
                        <li class="error-throttled">You cannot post at this time</li>
                        <li class="error-length">This field is too long</li>
                        <li class="error-title">Account Banned</li>
                        <li class="error-frozen">This game license has expired or been frozen.</li>
                        <li class="error-locked">
                            This account has had its communication ability disabled.
                        </li>
                        <li class="error-cancelled">This game license has expired or been cancelled.</li>
                        <li class="error-trial">
                            Starter Edition accounts do not have the ability to create posts or use the rating buttons. Please upgrade to a full account to enable these features.
                        </li>
                        <li class="error-unknown">
                            An error occurred. Please log out and back in, and try again.
                        </li>
                    </ul>
                    <div class="comments-action">
                        <button class="ui-button button1" type="button" onclick="return Comments.add(this, true);">
                            <span class="buton-left">
                                <span class="button-left">
                                    <span class="button-right">
                                        Post
                                    </span>
                                </span>
                            </span>
                        </button>
                        <a class="ui-cancel" href="#" onclick="return Comments.cancelReply(this);">
                            <span>
                                Cancel
                            </span>
                        </a>
                    </div>
                </div>
                </div>
            </form>
            <form id="comments-add-form" class="comments-form" action="" method="post">
                <div class="bnet-avatar">
                    <div class="avatar-outer">
                        <a href="<?=$charactersActive['url']?>/simple">
                            <img height="64" width="64" src="/images/2d/avatar/<?=$charactersActive['race']?>-<?=$charactersActive['gender']?>.jpg" alt=""/>
                            <span class="avatar-inner"/></span>
                        </a>
                    </div>
                </div>
                <div class="character-info user ajax-update">
                    <div class="bnet-username" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
                        <div id="context-1" class="ui-context character-select">
                            <div class="context">
                                <a href="javascript:;" class="close" onclick="return CharSelect.close(this);">
                                <div class="context-user">
                                    <strong><?=$charactersActive['name']?></strong>
                                </div>
                                </a>
                                <div class="context-links">
                                    <a href="<?=$charactersActive['url']?>/simple" title="Profile" rel="np" class="icon-profile link-first">
                                        <span class="context-icon"/></span>
                                        Profile
                                    </a>
                                    <a href="/search?f=post&a=<?=$charactersActive['name']?>&sort=time" title="View my posts" rel="np" class="icon-posts">
                                        <span class="context-icon"></span>
                                    </a>
                                    <a href="/vault/character/auction" title="View auctions" rel="np" class="icon-auctions">
                                        <span class="context-icon"/></span>
                                    </a>
                                    <a href="/vault/character/event" title="View events" rel="np" class="icon-events link-last">
                                        <span class="context-icon"/></span>
                                    </a>
                                </div>
                            </div>
                            <div class="character-list">
                                <div class="primary chars-pane">
                                    <div class="char-wrapper">
                                        <a href="<?=$charactersActive['url']?>/simple" class="char pinned" rel="np">
                                            <span class="pin"/></span>
                                            <span class="name"><?=$charactersActive['name']?></span>
                                            <span class="class wow-class-<?=$charactersActive['class_key']?>"><?=$charactersActive['level']?> <?=$charactersActive['race_text']?> – <?=$charactersActive['class_text']?></span>
                                        </a>
                                    </div>
                                    <a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
                                        <span class="plus"/></span>
                                        Manage Characters<br />
                                        <span>
                                            Customise characters that appear in this menu.
                                        </span>
                                    </a>
                                </div>
                                <div class="secondary chars-pane">
                                    <div class="char-wrapper scrollbar-wrapper" id="scroll">
                                        <div class="scrollbar">
                                            <div class="track">
                                                <div class="thumb"/>
                                            </div>
                                        </div>
                                        <div class="viewport">
                                            <div class="overview">
                                                <a href="<?=$charactersActive['url']?>/simple" class="wow-class-<?=$charactersActive['class_key']?> pinned" rel="np" data-tooltip="<?=$charactersActive['race_text']?> – <?=$charactersActive['class_text']?>">
                                                <span class="icon icon-race">
                                                    <img src="/images/icons/small/race_<?=$charactersActive['race']?>_<?=$charactersActive['gender']?>.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                <span class="icon icon-class">
                                                    <img src="/images/icons/small/class_<?=$charactersActive['class_text']?>.jpg" alt="" width="14" height="14"/>
                                                </span>
                                                    {$CommentCharacter.level} {$CommentCharacter.name}
                                                </a>
                                                <div class="no-results hide">No characters were found</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter">
                                        <input type="input" class="input character-filter" value="Filter..." alt="Filter..."/>
                                        <br />
                                        <a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">
                                            Return to characters
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?=$charactersActive['url']?>/simple" itemprop="url" class="context-link wow-class-<?=$charactersActive['class_key']?>">
                            <span itemprop="name" class="poster-name"><?=$charactersActive['name']?></span>
                        </a>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="input-wrapper">
                        <textarea name="detail" class="input textarea"></textarea>
                    </div>
                    <ul class="comments-error-form">
                        <li class="error-required">Field required</li>
                        <li class="error-throttled">You cannot post at this time</li>
                        <li class="error-length">This field is too long</li>
                        <li class="error-title">Account Banned</li>
                        <li class="error-frozen">This game license has expired or been frozen.</li>
                        <li class="error-locked">
                            This account has had its communication ability disabled.
                        </li>
                        <li class="error-cancelled">This game license has expired or been cancelled.</li>
                        <li class="error-trial">
                            Starter Edition accounts do not have the ability to create posts or use the rating buttons. Please upgrade to a full account to enable these features.
                        </li>
                        <li class="error-unknown">
                            An error occurred. Please log out and back in, and try again.
                        </li>
                    </ul>
                    <div class="comments-action">
                        <button class="ui-button button1 comment-submit" type="button" onclick="return Comments.add(this);">
                            <span class="button-left">
                                <span class="button-right">
                                    Post
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="comments-throttler">
                        Time till next post:
                        <span class="throttle-time">
                            60
                        </span>
                    </div>
                </div></div>
            </form>
        </div>
    <?php } ?>
<?php } ?>