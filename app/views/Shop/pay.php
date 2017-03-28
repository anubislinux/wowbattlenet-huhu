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
                    <?php echo vendor\core\App::$app->lang->get('lng.shop_payment', '')?>
                    <i class="icon-32-secure icon-32-white"></i>
                </h1>
                <div class="grid-70 suffix-30">
                    <?php if($userBalance['balance'] < $itemData['price']) { ?>
                        <div class="alert alert-error alert-icon">
                            <p>
                                <?php echo vendor\core\App::$app->lang->get('lng.shop_not_enough_funds', '')?>
                            </p>
                            <p>
                                <?php echo vendor\core\App::$app->lang->get('lng.shop_top_up_first', '')?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
                <div class="grid-60 prefix-5 push-35 app-grid-100 app-prefix-0 app-push-0" id="checkout-payment-icons">
                    <span class="control-label"><?php echo vendor\core\App::$app->lang->get('lng.shop_we_accept', '')?></span>
                    <div class="controls">
                        <div class="accepted-payment-icons">
                            <span class="icon-24-payment-battlenet-balance">battlenet-balance</span>
                        </div>
                    </div>
                </div>
                <div class="grid-35 pull-65 app-grid-70 app-pull-0" id="checkout-pay-with">
                    <fieldset class="pay-with">
                        <div class="control-group">
                            <label class="control-label" for="payment-option"><?php echo vendor\core\App::$app->lang->get('lng.shop_payment_options', '')?></label>
                            <div class="controls">
                                <div tabindex="1" class="select-box input-block" id="select-box-payment-option" data-select="select" data-original-id="payment-option" data-select-id="select-box-payment-option">
                                    <span class="current">
                                        <i class="icon-payment-battlenet-balance"></i>
                                        <span class="text">
                                            <?php echo vendor\core\App::$app->lang->get('lng.shop_current_wallet', '')?>
                                        </span>
                                    </span>
                                    <span class="arrow"></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-35 suffix-65 app-grid-100 app-suffix-0">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label"><?php echo vendor\core\App::$app->lang->get('lng.shop_more_info', '')?></label>
                            <span class="uneditable-input input-block saved-payment-info">
                                <?php echo vendor\core\App::$app->lang->get('lng.shop_balance', '')?> <?=$userBalance['balance']?>.00
                            </span>
                        </div>
                    </fieldset>
                </div>
                <div class="grid-70 suffix-30 app-grid-100 app-suffix-0">
                    <div class="checkout-total" id="checkout-total">
                        <div class="total">
                            <h2 class="heading-6 total-heading">
                                <span id="total-heading">
                                    <span data-tooltips="tap" class="tooltipstered">
                                        <?php echo vendor\core\App::$app->lang->get('lng.shop_total', '')?>
                                        <span>(<?php echo vendor\core\App::$app->lang->get('lng.shop_inc_tax', '')?>)</span>
                                        <i class="icon-question-circle icon-blue"></i>
                                    </span>
                                </span>
                            </h2>
                            <h3 class="heading-1 total-cost" id="total-cost" data-base-cost="{$ItemData.price}">
                               <span class="currency-code">USD</span> <?=$itemData['price']?>.00 </h3>
                        </div>
                    </div>
                    <?php if($userBalance['balance'] >= $itemData['price']) { ?>
                        <form action="/shop/complete-<?=$itemData['short_code']?>" method="post">
                            <div class="form-actions purchase-form-actions">
                                <input type="hidden" value="<?=$userAcc?>" name="gameAccountIds">
                                <input type="hidden" value="<?=$itemData['item_name']?>" name="itemName">
                                <button type="submit" class="btn btn-primary btn-wide" id="payment-submit" data-gtm-id="payment-submit" tabindex="1">
                                    <?php echo vendor\core\App::$app->lang->get('lng.shop_complete_payment', '')?>
                                </button>
                                <a id="payment-cancel" class="cancel purchase-cancel btn" onclick="history.go(-2);" tabindex="1">
                                    <?php echo vendor\core\App::$app->lang->get('lng.shop_cancel', '')?>
                                </a>
                            </div>
                        </form>
                    <?php } else {?>
                        <a id="payment-cancel" class="cancel purchase-cancel btn" onclick="history.go(-2);" tabindex="1">
                            <?php echo vendor\core\App::$app->lang->get('lng.shop_cancel', '')?>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>