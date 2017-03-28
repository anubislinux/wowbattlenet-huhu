<!-- maincontent beginn -->
<div class="box">
  <div class="box-header">
    <div id="newstitlelist" class="title">Список статей на сайте</div>
  </div>
  <div class="box-content table-responsive">
        <table class="table table-normal table-hover">
        <thead>
        <tr>
        <td>Заголовок</td>
        <td style="width: 60px"> Статус </td>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($blogall)): ?>
        <?php foreach ($blogall as $post): ?>
        <tr><td><a title='Редактировать данную новость' href="/dashboard/news/edit-<?=$post['id']?>"><?=$post['title']?></a></td>
        <td style="text-align: center"><span class="status-success"><b><i class="icon-ok-sign"></i></b></span></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
        </table>
   </div>
<div class="box-footer padded">
    <div class="pull-left">
</div>
</div>
</div>