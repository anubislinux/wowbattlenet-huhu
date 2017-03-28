<!-- maincontent beginn -->
<script language="javascript" type="text/javascript">
<!--
function dle_activation ( code ){

    document.getElementById( 'result_info' ).innerHTML = 'отправка ...';

    if (code == 'key') {

        var dle_key = document.getElementById('sitekey').value ;
        var varsString = "dle_key=" + dle_key;

    } else {

        var site_code = document.getElementById('sitecode').value;
        var varsString = "site_code=" + site_code;
    }
    $.post('?' + varsString, { activation: "yes" }, function(data){

        $('#dle-activation').html(data);

    });

    return false;
}
//-->
</script><!--div id="dle-activation" class="alert alert-info text-left"><h4>Внимание!</h4>Вы используете неактивированную версию скрипта. Для снятия установленных ограничений вам необходимо ввести ключ активации. Активировать скрипт нужно только на том домене, где вы будете использовать постоянно свою лицензию, поэтому, если вы используете скрипт на тестовом сайте, то не активируйте свою копию скрипта. Активация скрипта проходит на нашем сервере http://dle-news.ru/, поэтому убедитесь, что имеется интернет соединение.<br /><br /><b>Введите ключ для активации лицензии:</b><span class="sitecodefield"><input type="text" size="45" name="sitekey" id="sitekey" style="max-width:99%"> <button onclick="dle_activation( 'key' ); return false;" class="btn btn-sm btn-green">Активировать</button></span><div id="result_info"><br />Лицензионный ключ имеет формат: <b>XXXXX-XXXXX-XXXXX-XXXXX-XXXXX</b></div></div-->
    <div class="box">
  <div class="box-header">
    <div class="title">Быстрый доступ к разделам сайта</div>
  </div>
  <div class="box-content">

    <div class="row box-section">
      <div class="col-md-6">
        <div class="news with-icons">
          <div class="avatar"><img src="/skins/images/uset.png"></div>
          <div class="news-content">
            <div class="news-title"><a href="?mod=editusers&action=list">Редактирование пользователей</a></div>
            <div class="news-text">
              <a href="?mod=editusers&action=list">Управление зарегистрированными на сайте пользователями, редактирование их профилей и блокировка аккаунта</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="news with-icons">
          <div class="avatar"><img src="/skins/images/spset.png"></div>
          <div class="news-content">
            <div class="news-title"><a href="?mod=static">Статические страницы</a></div>
            <div class="news-text">
              <a href="?mod=static">Создание и редактирование страниц, которые как правило редко изменяются и имеют постоянный адрес</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row box-section">
      <div class="col-md-6">
        <div class="news with-icons">
          <div class="avatar"><img src="/skins/images/tools.png"></div>
          <div class="news-content">
            <div class="news-title"><a href="?mod=options&action=syscon">Настройка системы</a></div>
            <div class="news-text">
              <a href="?mod=options&action=syscon">Настройка общих параметров скрипта, а также настройка вывода новостей и комментариев, настройка системы безопасности скрипта</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="news with-icons">
          <div class="avatar"><img src="/skins/images/nset.png"></div>
          <div class="news-content">
            <div class="news-title"><a href="?mod=newsletter">Рассылка сообщений</a></div>
            <div class="news-text">
              <a href="?mod=newsletter">Создание и массовая отправка E-Mail или персональных сообщений, для зарегистрированных пользователей</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<script language="javascript" type="text/javascript">
<!--
        $(function(){

            $.ajaxSetup({
                cache: false
            });

            $('#clearbutton').click(function() {

                $.get("/ajax/adminfunction.html?action=clearcache", function( data ){

                    $('#cachesize').html('0 b');
                    Growl.info({
                        title: 'Информация',
                        text: data
                    });

                });
                return false;
            });

            $('#check_updates').click(function() {

                $('#main_box').html('Подождите идет подключение к удаленному серверу ...');
                $.get("/ajax/updates.html?versionid=<?=vendor\core\App::$app->config->setConfig('version')?>", function( data ){
                    $('#main_box').html(data);
                });
                return false;
            });

            $('#send_notice').click(function() {

                $('#send_result').html('Подождите идет подключение к удаленному серверу ...');
                var notice = $('#notice').val();
                $.post("/ajax/adminfunction.html?action=sendnotice", { notice: notice } , function( data ){
                    $('#send_result').append('&nbsp;' + data);
                });
                return false;
            });

        });
//-->
</script>

<div class="row">
    <div class="col-md-12">

        <div class="box">

            <div class="box-header">
                <ul class="nav nav-tabs nav-tabs-left">
                    <li class="active"><a href="#statall" data-toggle="tab"><i class="icon-bar-chart"></i> Общая статистика сайта</a></li>
                    <li><a href="#notinfo" data-toggle="tab"><i class="icon-edit"></i> Блокнот</a></li>
                    <li id="dlestats"><a href="#statauto" data-toggle="tab"><i class="icon-cog"></i> Автопроверка системы</a></li>
                </ul>
            </div>

            <div class="box-content">
                 <div class="tab-content">
                     <div class="tab-pane active" id="statall">
                        <div class="row box-section">
                            <div class="col-md-3">Режим работы сайта:</div>
                            <div class="col-md-9"><font color="red">Выключен</font></div>
                        </div>
                        <div class="row box-section">
                            <div class="col-md-3">Общее количество новостей:</div>
                            <div class="col-md-9">1</div>
                        </div>
                        <div class="row box-section">
                            <div class="col-md-3">Поступившие жалобы:</div>
                            <div class="col-md-9">0</div>
                        </div>
                        <div class="row box-section">
                            <div class="col-md-3">Зарегистрировано пользователей:</div>
                            <div class="col-md-9">5</div>
                        </div>
                        <div class="row box-section">
                            <div class="col-md-3">Из них было забанено:</div>
                            <div class="col-md-9"><font color="red">0</font></div>
                        </div>
                        <div class="row box-section">
                            <div class="col-md-12"><button id="check_updates" name="check_updates" class="btn btn-gray"><i class="icon-exclamation-sign"></i> Проверить наличие обновлений</button>&nbsp;<button id="clearbutton" name="clearbutton" class="btn btn-red"><i class="icon-trash"></i> Очистить кеш</button><br /><br /><div id="main_box"></div>                        </div>
                        </div>
                    </div>
                     <div class="tab-pane" id="notinfo" >
                        <div class="row box-section">
                            <textarea id="notice" name="notice" style="width:100%;height:200px;background-color:lightyellow;">Здесь вы можете сохранять собственные заметки и памятки.</textarea>
                        </div>
                        <div class="row box-section"><button id="send_notice" name="send_notice" class="btn btn-green"><i class="icon-ok"></i> Отправить</button>&nbsp;&nbsp;<span id="send_result"></span></div>
                     </div>
                     <div class="tab-pane" id="statauto" >
<table class="table table-normal">
    <tr>
        <td class="col-md-3 white-line">Версия:</td>
        <td class="col-md-9 white-line">11.1</td>
    </tr>
    <tr>
        <td>Тип лицензии скрипта:</td>
        <td>Неактивированная копия</td>
    </tr>
    <tr>
        <td>Операционная система:</td>
        <td>Linux 4.1.35-timeweb</td>
    </tr>
    <tr>
        <td>Версия PHP:</td>
        <td>7.0.15</td>
    </tr>
    <tr>
        <td>Версия MySQL:</td>
        <td>5.5.52-38.3 <b>MySQLi</b></td>
    </tr>
</table>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>
<!-- maincontent end -->