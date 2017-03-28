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
        background: #0f2a48 url("/images/backgrounds/bnet-background-1920.jpg") no-repeat center -200px !important;
    }
    .body-content {
        background: none !important;
    }
    .navbar-static {
        background: #0f2a48 url("/images/backgrounds/bnet-background-1920.jpg") no-repeat center 0 !important;
    }
    @media (max-width: 1280px) {
        html,
        body {
            background: #0f2a48 url("/images/backgrounds/bnet-background-1280.jpg") no-repeat center -200px !important;
        }
        .body-content {
            background: none !important;
        }
        .navbar-static {
            background: #0f2a48 url("/images/backgrounds/bnet-background-1280.jpg") no-repeat center 0 !important;
        }
    }
    @media (max-width: 1024px) {
        html,
        body {
            background: #0f2a48 url("/images/backgrounds/bnet-background-1024.jpg") no-repeat center -200px !important;
        }
        .body-content {
            background: none !important;
        }
        .navbar-static {
            background: #0f2a48 url("/images/backgrounds/bnet-background-1024.jpg") no-repeat center 0 !important;
        }
    }
</style>
<div class="body-content">
    <div class="grid-container purchase-content">
        <div class="purchase-container">
            <div class="purchase-column grid-25 grid-parent">
                <div class="purchase-sidebar">
                    <div class="product-summary clearfix">
                        <div class="product-image thumbnail">
                            <img src="/images/shop/<?=$itemData['category']?>/<?=$itemData['item_shop_icon']?>_home.jpg" alt="World of Warcraft® In-Game Mount: <?=$itemData['item_name']?>" title="" />
                        </div>
                        <div class="product-name-group">
                            <h6 class="product-desc-label"><?php echo vendor\core\App::$app->lang->get('lng.shop_you_are_purchasing', '')?></h6>
                            <p class="product-name">
                                <?=$itemData['category_desc']?> <?=$itemData['item_name']?>
                            </p>
                        </div>
                        <div class="product-summary-information" id="product-summary-information">
                            <div class="product-price-group">
                                <h6 class="product-desc-label"><?php echo vendor\core\App::$app->lang->get('lng.shop_price', '')?></h6>
                                <p class="mp-product-price">
                                    <span class="currency-code">USD</span> <?=$itemData['price']?>.00 </p>
                            </div>
                            <div class="product-details-group">
                                <h6 class="product-desc-label"><?php echo vendor\core\App::$app->lang->get('lng.shop_details', '')?></h6>
                                <ul class="product-features">
                                    <li>
                                        <i class="icon-shopping-cart icon-gray"></i>
                                        <?php echo vendor\core\App::$app->lang->get('lng.shop_digital_purchase', '')?>
                                    </li>
                                    <li>
                                        <i class="icon-globe-alt icon-gray"></i>
                                        <?php echo vendor\core\App::$app->lang->get('lng.shop_worldwide', '')?>
                                    </li>
                                    <li>
                                        <i class="icon-wow icon-gray"></i>
                                        <?php echo vendor\core\App::$app->lang->get('lng.shop_account_selected', '') . $userAcc?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="purchase-column grid-75 grid-parent">
                <h1 class="heading-1 purchase-heading">
                    <?php echo vendor\core\App::$app->lang->get('lng.shop_congrats', '')?>
                </h1>
                <div class="grid-75 suffix-25 app-grid-100 app-suffix-0">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label"><?php echo vendor\core\App::$app->lang->get('lng.shop_activation_code', '')?></label>
                            <span class="uneditable-input input-block saved-payment-info">
                                <?=$ActivationCode?>
                            </span>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-70 suffix-30 app-grid-100 app-suffix-0">
                    <p class="purchase-help-text"><?php echo sprintf(vendor\core\App::$app->lang->get('lng.shop_activation_help', ''), $itemData['item_name'])?></p>
                </div>
            </div>
        </div>
    </div>
</div>