<div class="body-content">
    <div class="grid-container browse game wow">
        <div  class="logo-banner">
            <img class="family-logo" src="/images/logos/logo-family-wow.png" alt="" />
        </div>
        <div class="browse-container">
            <div class="browse-column sidebar">
                <div class="sidebar-content">
                    <h3 class="heading-6 filter-by-type">
                        <?php echo vendor\core\App::$app->lang->get('lng.shop_filters', '')?>
                    </h3>
                    <ul class="filter-list nav nav-list">
                        <?php foreach($items as $item => $i): ?>
                                <li>
                                    <a href="/shop/?categories=<?=$item?>" class="checkbox-label">
                                            <span class="input-checkbox "></span>
                                            <span class="">
                                                <span class="filter-text">
                                                    <?=$item?>
                                                </span>
                                                <span class="count">
                                                    (<?=count($item)?>)
                                                </span>
                                            </span>
                                    </a>
                                </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="browse-column main">
            <?php if (!empty($items)): ?>
                <?php if (!empty($items['mounts'])): ?>
                    <h2 class="filter-title">Mounts</h2>
                    <ul class="product-card-container thumbnails">
                        <?php foreach ($items['mounts'] as $item): ?>
                            <li>
                                <a class="product-link" href="/shop/mount-<?=$item['short_code']?>" tabindex="1" data-gtm-click="productCardClick" data-gtm-product-name="In-Game Mount: <?=$item['item_name']?>">
                                    <div class="cover"></div>
                                    <div class="thumbnail">
                                        <img src="/images/shop/mounts/<?=$item['item_shop_icon']?>_home.jpg" alt="<?=$item['item_name']?>" />
                                        <div class="product-card-info">
                                            <h3 class="product-name"><?=$item['item_name']?></h3>
                                            <p class="product-price ">
                                                USD <?=$item['price']?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if (!empty($items['items'])): ?>
                    <h2 class="filter-title">Items</h2>
                    <ul class="product-card-container thumbnails">
                        <?php foreach ($items['items'] as $item): ?>
                            <li>
                                <a class="product-link" href="/shop/item-<?=$item['short_code']?>" tabindex="1" data-gtm-click="productCardClick" data-gtm-product-name="In-Game Item: <?=$item['item_name']?>">
                                    <div class="cover"></div>
                                    <div class="thumbnail">
                                        <img src="/images/shop/items/<?=$item['item_shop_icon']?>_home.jpg" alt="<?=$item['item_name']?>" />
                                        <div class="product-card-info">
                                            <h3 class="product-name"><?=$item['item_name']?></h3>
                                            <p class="product-price ">
                                                USD <?=$item['price']?>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            <?php else: ?>

            <?php endif; ?>
            </div>
        </div>
        <div class="grid-100 banner-spacer"></div>
    </div>
</div>