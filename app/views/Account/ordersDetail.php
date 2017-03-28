<div id="layout-middle">
    <div class="wrapper">
        <div id="content">
            <div id="page-header">
                <h2 class="subcategory"><?php echo vendor\core\App::$app->lang->get('lng.operations', '')?></h2>
                <h3 class="headline"><?php echo vendor\core\App::$app->lang->get('lng.payment_order', '')?> №<?=$userOrderDetail['id']?></h3>
            </div>
            <div id="page-content" class="page-content">
                <p>
                    <a href="/account/management/orders.html" class="float-right" style="margin-left:12px;"><?php echo vendor\core\App::$app->lang->get('lng.shop_cancel', '')?></a>
                    <a href="javascript:;" onclick="window.print()" class="float-right"><?php echo vendor\core\App::$app->lang->get('lng.payment_print', '')?></a>
                    <?php echo vendor\core\App::$app->lang->get('lng.payment_by', '')?> <?php if(isset($userTegName)) { echo $userTegName['tag_name']; } else { echo vendor\core\Session::get('email'); } ?> <span><time datetime="{$Payment.date|date_format:"<?=$userOrderDetail['date']?>"}"><?=$userOrderDetail['date']?></time></span>
                </p>
                <table class="invoice" style="font-size:13px;">
                    <thead>
                    <tr>
                        <th class="invoice-type"><span class="digital-goods"><?php echo vendor\core\App::$app->lang->get('lng.payment_digital_goods', '')?></span></th>
                        <th class="align-center"><?php echo vendor\core\App::$app->lang->get('lng.payment_payment_amount', '')?></th>
                        <th class="align-center"><?php echo vendor\core\App::$app->lang->get('lng.shop_price', '')?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="item-info">
                        <td class="item">
                            <? if(strlen($userOrderDetail['service']) == 3) {?>
                                <strong data-service-id="null">{#Account_Management_Service#}: {$smarty.config.$ServiceName}</strong>
                            <?php } else { ?>
                                <strong data-service-id="null"><?=$userOrderDetail['item_name']?></strong>
                            <?php } ?>
                        </td>
                        <td class="align-center">1</td>
                        <td class="align-right">
                            <?=$userOrderDetail['price']?> USD
                        </td>
                    </tr>
                    <tr class="item-info">
                        <? if($userOrderDetail['digital_key'] != null) {?>
                            <td class="align-left">
                                <strong>Key:</strong>
                            </td>
                            <td class="align-left">
                                <?=$userOrderDetail['digital_key']?>
                            </td>
                            <td class="align-right"></td>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
                <div class="invoice-box">
                    <h4><?php echo vendor\core\App::$app->lang->get('lng.payment_status_full', '')?>: </h4>
                    <?=$userOrderDetail['status']?>
                </div>
                <div class="invoice-box" style="width: 650px"></div>
                <span class="clear"><!-- --></span>
                <br /><br />
                <div id="invoice-meta">
                    <div class="invoice-box">
                        <h4><?php echo vendor\core\App::$app->lang->get('lng.shop_payment_options', '')?>:</h4>
                        <strong>
                            <?php echo vendor\core\App::$app->lang->get('lng.shop_current_wallet', '')?>
                        </strong>
                        <br /><?php echo vendor\core\Session::get('email'); ?>
                    </div>
                    <span class="clear"><!-- --></span>
                </div>
            </div>
        </div>
    </div>
</div>