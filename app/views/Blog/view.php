<div id="content">
    <div class="content-top body-top">
        <div class="content-trail">
            <ol  class="ui-breadcrumb">
                <li itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/" rel="np" class="breadcrumb-arrow" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">魔兽世界</span>
                    </a>
                </li>
                <li class="last" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="/blog/<?=$news['id']?>/<?=$news['url']?>" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name"><?=$news['title']?></span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">
            <div class="right-sidebar" >
                <div id="sidebar-marketing" class="sidebar-module">
    <div class="bnet-offer">
        <div class="bnet-offer-bg">
            <a href="#" target="_blank" id="World of Warcraft-client" class="bnet-offer-image">
                <img src="/images/client/app-screen-ru.png" width="300" height="250" alt="" />
            </a>
        </div>
    </div>
</div>
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-top">
                        <div class="sidebar-bot">
                            <div id="dynamic-sidebar-target">
                                <div class="sidebar-module " id="sidebar-recent-articles">
                                    <div class="sidebar-title">
                                        <h3 class="header-3 title-recent-articles">
                                            最新文章
                                        </h3>
                                    </div>
                                    <div class="sidebar-content">
                                        <ul id="recent-articles" class="articles-list-plain">
                                                                                            <li>
                                                    <a class="article-block on-view" href="/blog/1">
                                                        <span class="image" style="background-image: url('/uploads/news/499ZA6N4RQOC1438877403945.jpg');"></span>
                                                        <span class="title">Новость 1</span>
                                                        <span class="date">1 week ago</span>
                                                        <span class="clear"><!-- --></span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a class="article-block on-view" href="/blog/2">
                                                        <span class="image" style="background-image: url('/uploads/news/499ZA6N4RQOC1438877403945.jpg');"></span>
                                                        <span class="title">news test 2</span>
                                                        <span class="date">1 week ago</span>
                                                        <span class="clear"><!-- --></span>
                                                    </a>
                                                </li>
                                                                                            <li>
                                                    <a class="article-block on-view" href="/blog/3">
                                                        <span class="image" style="background-image: url('/uploads/news/499ZA6N4RQOC1438877403945.jpg');"></span>
                                                        <span class="title">news test 3</span>
                                                        <span class="date">1 week ago</span>
                                                        <span class="clear"><!-- --></span>
                                                    </a>
                                                </li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-content">
                <div id="blog" class="article-wrapper" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
                    <h2 class="header-2">
                        <span itemprop="headline"><?=$news['title']?></span>
                    </h2>
                    <div class="article-meta">
                        <a class="article-author" href="/search?a=<?=$news['posted_by']?>&amp;f=article">
                            <span class="author-icon"></span>
                            <span itemprop="author"><?=$news['posted_by']?></span>
                        </a>
                        <span class="publish-date" title="<?=$news['post_date']?>">
                        <?=$news['post_date']?>
                        </span>
                        <a href="#comments" class="comments-link">0</a>
                        <div class="article-content">
						
<!--                        <div class="header-image">
                                <img itemprop="image" alt="<?=$news['title']?>" src="/uploads/news/<?=$news['post_miniature']?>" />
                            </div>
-->
                            <div class="detail" itemprop="articleBody">
                                <p>
                                    <?=$news['full_description']?>
                                </p>
                            </div>
                        </div>
                        <div class="keyword-list"></div>
                    </div>
                </div>
                <div id="comments" class="bnet-comments ">
                    <h2 class="subheader-2" >留言…</h2>
                    <h2 class="hide" >Сбой при загрузке комментариев.</h2>
                    <div class="comments-loading"></div>
                    <script type="text/javascript">
                        //<![CDATA[
                        $(function() {
                            Comments.initialize('<?=$news["id"]?>', '<?=$news["comments_key"]?>', '0');
                        });
                        //]]>
                    </script>
                </div>
            </div>
            <span class="clear"><!-- --></span>
            <script type="text/javascript">
                //<![CDATA[
                $(function() {
                    Blog.init();
                });
                //]]>
            </script>
        </div>
    </div>
 </div>