<style>
    html {
        height: auto;
        min-width: 480px;
    }
    body {
        height: 100%;
    }
    html,
    body {
        background: <?=$itemData['item_background_color']?> url("/images/shop/mounts/<?=$itemData['item_background']?>_1920.jpg") no-repeat center -200px !important;
    }
    .body-content {
        background: none !important;
    }
    .navbar-static {
        background: <?=$itemData['item_background_color']?> url("/images/shop/mounts/<?=$itemData['item_background']?>_1920.jpg") no-repeat center 0 !important;
    }
    @media (max-width: 1280px) {
        html,
        body {
            background: <?=$itemData['item_background_color']?> url("/images/shop/mounts/<?=$itemData['item_background']?>_1280.jpg") no-repeat center -200px !important;
        }
        .body-content {
            background: none !important;
        }
        .navbar-static {
            background: <?=$itemData['item_background_color']?> url("/images/shop/mounts/<?=$itemData['item_background']?>_1280.jpg") no-repeat center 0 !important;
        }
    }
    @media (max-width: 1024px) {
        html,
        body {
            background: <?=$itemData['item_background_color']?> url("/images/shop/mounts/<?=$itemData['item_background']?>_1024.jpg") no-repeat center -200px !important;
        }
        .body-content {
            background: none !important;
        }
        .navbar-static {
            background: <?=$itemData['item_background_color']?> url("/images/shop/mounts/<?=$itemData['item_background']?>_1024.jpg") no-repeat center 0 !important;
        }
    }
</style>
<div class="body-content">
    <div class="product-container" id="pageTop">
        <div class="grid-container">
            <div class="grid-50 app-grid-100 buybox no-logo">
                <div  class="product-badge-and-title">
                    <div class="product-badge-container">
                        <i class="product-badge wow-product-badge"></i>
                    </div>
                    <div class="product-title-and-type">
                        <h1 class="product-title"><?=$itemData['item_name']?></h1>
                        <h2 class="heading-6 product-type"><?=str_replace(':', '', $itemData['category_desc'])?></h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-single">
                        <span class="heading-1 product-priceline">
                            <span class="product-price ">
                                <span class="currency-code">
                                    USD
                                </span>
                                <?=$itemData['price']?>.00
                            </span>
                        </span>
                    <div class="product-actions" data-bnet-shop="product-action-holder">
                        <a class="btn btn-large btn-primary" href="/shop/buy-<?=$itemData['short_code']?>" tabindex="1" data-gtm-product-name="EU World of Warcraft® In-Game Mount:<?=$itemData['item_name']?>">
                            <?php echo vendor\core\App::$app->lang->get('lng.buy_now', '')?>
                        </a>
                    </div>
                </div>
                <div class="product-requirements" id="product-requirements">
                    <ul>
                        <li>
                            <?php echo vendor\core\App::$app->lang->get('lng.shop_requires', '')?>
                        </li>
                        <li>
                            <a href="/account/management/redeem-code" data-external="sso">
                               <?php echo vendor\core\App::$app->lang->get('lng.redeem_code', '')?>
                                <i class="icon-blue icon-external-link"></i>
                            </a>
                        </li>
                        <li><?php echo vendor\core\App::$app->lang->get('lng.all_tax_included', '')?></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script>
        //<![CDATA[
        var Msg = Msg || {},
        disablePurchaseAndMedia = false;
        Msg.productSlug = "mount-<?=$itemData['item_name']?>";
        $(function() {
            $("#featureMediaLightbox").mediaLightbox();
        });
        (function() {
            var tag = document.createElement("script");
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName("script")[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        })();
        //]]>
    </script>
</div>