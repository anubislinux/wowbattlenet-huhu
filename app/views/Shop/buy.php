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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="purchase-column grid-75 grid-parent">
                <h1 class="heading-2">
                    <?php echo vendor\core\App::$app->lang->get('lng.shop_available_accounts', '')?>
                </h1>
                <span id="NoAccountSelected" style="color: red"></span>
                <form action="/shop/pay-<?=$itemData['short_code']?>" method="post">
                    <div class="purchase-selection">
                        <br />
                        <ul class="account-list unstyled" id="eligible-account-list">
                            <?php foreach($userData as $account):?>
                                <li class="account">
                                    <label class="radio-label">
                                        <input type="radio" name="gameAccountIds" value="<?=$account['id']?>"/>
                                        <div class="summary">
                                            <div class="heading heading-4">
                                                <span class="game-label">WoW<?=$account['id']?></span>: <span class="game-box-level"><?=$account['expansion_name']?></span>
                                            </div>
                                            <div class="description">
                                        <span class="last-played">
                                        <?php echo vendor\core\App::$app->lang->get('lng.shop_last_login', '')?>
                                            <time datetime="<?=$account['last_login']?>" title="<?=$account['last_login']?>"><?=$account['last_login']?></time>
                                        </span>
                                            </div>
                                        </div>
                                        <div class="message"></div>
                                    </label>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="purchase-actions account-selection-actions">
                        <div class="grid-100 buttons">
                            <button type="submit" class="btn btn-primary btn-wide" onclick="return CheckIfAccountSelected();" ><?php echo vendor\core\App::$app->lang->get('lng.shop_continue', '')?></button>
                            <a class="cancel purchase-cancel btn" onclick="history.go(-1);" tabindex="1">
                                <?php echo vendor\core\App::$app->lang->get('lng.shop_cancel', '')?>
                            </a>
                        </div>
                    </div>
                    <script>
                        function CheckIfAccountSelected()
                        {
                            if (!$("input[name='gameAccountIds']:checked").val())
                            {
                                $("#NoAccountSelected").empty();
                                $("#NoAccountSelected").html('<?php echo vendor\core\App::$app->lang->get('lng.shop_no_account_selected', '')?>');
                                return false;
                            }
                            else
                                return true;
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>
</div>