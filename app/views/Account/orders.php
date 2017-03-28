<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="page-header">
<h2 class="subcategory">操作</h2>
<h3 class="headline">订单历史记录</h3>
</div>
<div id="page-content" class="page-content">
<span class="clear"><!-- --></span>
<div id="order-history">
<div class="data-container">
<table>
<thead>
<tr>
<th align="left" width="9%"><a href="#" class="sort-link numeric"><span class="arrow">订单号</span></a></th>
<th align="left" width="8%"><a href="#" class="sort-link numeric"><span class="arrow down">日期</span></a></th>
<th align="center" width="42%">产品</th>
<th align="center" width="14%">价格</th>
<th align="center" width="9%"><a href="#" class="sort-link"><span class="arrow">状态</span></a></th>
<th align="center" width="13%"><a href="#" class="sort-link numeric"><span class="arrow">总计</span></a></th>
</tr>
</thead>
<tbody>
<?php foreach($userOrderHistory as $hostory): ?>
<tr class="parent-row " data-click="order-detail.html?oId=<?=$hostory['id']?>">
<td valign="top"><a href="order-detail.html?oId=<?=$hostory['id']?>"><?=$hostory['id']?></a></td>
<td valign="top">
<span><time datetime="<?=$hostory['date']?>"></time></span>
</td>
<td valign="top">
<strong data-service-id="FLEXIBLE_LICENSE"><?=$hostory['item_name']?></strong>
</td>
<td valign="top" class="align-right item-price">
<?=$hostory['price']?> USD
</td>
<td valign="top" class="align-center status-success">
<?=$hostory['status']?>
</td>
<td valign="top" class="align-right" data-raw="<?=$hostory['price']?>"><?=$hostory['price']?> USD</td>
</tr>
<?php endforeach;?>
</tbody>
<script>
$(function() {
$('[data-click]').on('mousedown', 'td', function(e) {
$(this).data('clickstart', e.timeStamp);
});
$('[data-click]').on('mouseup', 'td', function(e) {
// bail on right click or modified click
if(e.which != 1 || e.metaKey || e.ctrlKey || e.altKey) {
return false;
}
// Speed of click... this way selection can happen
if(e.timeStamp - $(this).data('clickstart') > 500) {
return false;
}
document.location.href = $(this).closest('[data-click]').data('click');
});
});
</script>
</table>
</div>
</div>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
$('#region-dropdown2').dropdown({
callback: function(dropdown, selected) {
var test = $("#view-dropdown2").find("select option:selected").val();
location.href = 'orders.html?rId='+ selected;
},
updateText: false
});
$('#view-dropdown2').dropdown({
callback: function(dropdown, selected) {
switch (selected) {
case "1":
selected = "";
break;
case "2":
selected = "chargeback";
break;
}
orderTable.filter('class', 'class', selected);
},
updateText: true
});
var orderTable = DataSet.factory('#order-history');
$('#order-history tr').hover(function() {
var activeRow = $(this);
activeRow.addClass('row-hover');
activeRow.nextUntil('.parent-row').addClass('row-hover');
if (activeRow.hasClass('child-row')) {
activeRow.prevUntil('.parent-row').addClass('row-hover');
activeRow.prevAll('.parent-row').eq(0).addClass('row-hover');
}
},function() {
$('#order-history tr').removeClass('row-hover');
});
});
//]]>
</script>
</div>
</div>
</div>