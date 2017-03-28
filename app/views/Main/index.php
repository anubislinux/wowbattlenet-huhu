<div id="content">
    <div class="content-top body-top">
        <div  class="content-trail">
            <ol class="ui-breadcrumb">
                <li class="last children" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <a href="" rel="np" itemprop="url">
                        <span class="breadcrumb-text" itemprop="name">World of Warcraft</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="content-bot clear">

             <div id="slideshow" class="ui-slideshow">
                <div class="slideshow">
                    <?php for($i = 0; $i < count($slideshow); $i++):?>
                    <div class="slide" id="slide-<?=$i?>" style="background-image: url('/uploads/slider/<?=$slideshow[$i]['image']?>'); <?php if($i != 0) {?>display: none;<?php } ?>"></div>
                    <?php endfor;?>
                </div>
                <div class="paging">
                <a href="javascript:;" class="prev" onclick="Slideshow.prev();"></a>
                <a href="javascript:;" class="next" onclick="Slideshow.next();"></a>
            </div>

        <div class="caption">
            <h3><a href="javascript:;" class="link">test</a></h3>
        </div>
                <div class="preview"></div>
                <div class="mask"></div>
            </div>

            <script type="text/javascript">
                //<![CDATA[
                $(function() {
                    Slideshow.initialize('#slideshow', [
                        <?php for($i = 0; $i < count($slideshow); $i++):?> {
                        image: "/uploads/slider/<?=$slideshow[$i]['image']?>",
                        desc: "<?=$slideshow[$i]['description']?>",
                        title: "<?=$slideshow[$i]['title']?>",
                        url: "<?=$slideshow[$i]['url']?>",
                        id: "<?=$slideshow[$i]['id']?>",
                        duration: <?=$slideshow[$i]['duration']?>
                        },<?php endfor;?>
                    ]);

                });
                //]]>
            </script>

            <div class="right-sidebar" >
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-top">
                        <div class="sidebar-bot">
                            <div class="sidebar-loading" id="sidebar-loading">
                                <?php echo vendor\core\App::$app->lang->get('lng.loading', '')?>
                            </div>
                            <div id="dynamic-sidebar-target"></div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    //<![CDATA[
                    $(function() {
                        Sidebar.sidebar([
                            { "type": "client", "query": "" },
                            { "type": "realm-status", "query": "" },
                            { "type": "events", "query": "" },
                            { "type": "blizzard-posts", "query": "" },
                        ]);
                    });
                    //]]>
                </script>
            </div>
            <div class="left-content" itemscope="itemscope" itemtype="http://schema.org/WebPageElement">
                <div class="left-container-inner">
                    <div class="featured-news-container">
                        <ul class="featured-news">
                            <?php if (!empty($newsFeatured)): ?>
                            <?php foreach ($newsFeatured as $post): ?>
                            <li>
                                <div class="article-wrapper">
                                    <a href="/blog/<?=$post['id']?>/<?=$post['url']?>" class="featured-news-link" data-category="wow" data-action="Blog_Click-Throughs" data-label="home ">
                                        <div class="article-image" style="background-image:url(/uploads/news/<?=$post['post_miniature']?>)">
                                            <div class="article-image-frame"></div>
                                        </div>
                                        <div class="article-content">
                                            <span class="article-title" title="<?=$post['title']?>"><?=$post['title']?></span>
                                            <span class="article-summary"><?=$post['title']?></span>
                                        </div>
                                    </a>
                                    <div class="article-meta">
                                        <a href="/blog/<?=$post['id']?>/<?=$post['url']?>#comments" class="comments-link">0</a>
                                        <span class="publish-date" title="<?=$post['post_date']?>"><?=vendor\core\App::$app->text->rusDate($post['post_date'])?></span>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div id="blog-articles" class="blog-articles" itemscope="itemscope" itemtype="http://schema.org/Blog">
                        <?php if (!empty($news)): ?>
                        <?php foreach ($news as $post): ?>
                        <div class="article-wrapper" >
                                    <a href="/blog/<?=$post['id']?>/<?=$post['url']?>">
                                        <div class="article-image" style="background-image:url(/uploads/news/<?=$post['post_miniature']?>)">
                                            <div class="article-image-frame"></div>
                                        </div>

                                        <div class="article-content">
                                            <h2 class="header-2"><span class="article-title"><?=$post['title']?></span></h2><span class="clear"><!-- --></span>

                                            <div class="article-summary">
                                                <?=$post['short_description']?>
                                            </div><span class="clear"><!-- --></span>
                                            <meta content="<?=$post['post_date']?>">
                                            <meta content="ru">
                                            <meta content="UserComments:0">
                                            <meta content="/uploads/news/<?=$post['post_miniature']?>">
                                        </div></a>

                                    <div class="article-meta">
                                        <span class="publish-date" title="<?=$post['post_date']?>"><?=vendor\core\App::$app->text->rusDate($post['post_date'])?></span>
                                        <a class="comments-link" href="/blog/<?=$post['id']?>/<?=$post['url']?>#comments">0</a>
                                    </div><span class="clear"><!-- --></span>
                                </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        </div>
                    <span class="clear"></span>
                </div>
            </div>
        </div>
    </div>
 </div>