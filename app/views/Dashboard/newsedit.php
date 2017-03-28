<!-- maincontent beginn -->
<script type="text/javascript">
function ShowOrHideEx(id, show) {
var item = null;

if (document.getElementById) {
item = document.getElementById(id);
} else if (document.all) {
item = document.all[id];
} else if (document.layers){
item = document.layers[id];
}
if (item && item.style) {
item.style.display = show ? "" : "none";
}
}

function onCategoryChange(obj) {

var value = $(obj).val();

if ($.isArray(value)) {
ShowOrHideEx("xfield_holder_poster", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_original_title", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_status", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_strana", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_year", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_kanal", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_time", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_copyright", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_kp_id", jQuery.inArray('1', value) != -1 );
ShowOrHideEx("xfield_holder_poster_news", jQuery.inArray('5', value) != -1 );
ShowOrHideEx("xfield_holder_poster_news_big", jQuery.inArray('5', value) != -1 );
} else {
ShowOrHideEx("xfield_holder_poster", value == 1);
ShowOrHideEx("xfield_holder_original_title", value == 1);
ShowOrHideEx("xfield_holder_status", value == 1);
ShowOrHideEx("xfield_holder_strana", value == 1);
ShowOrHideEx("xfield_holder_year", value == 1);
ShowOrHideEx("xfield_holder_kanal", value == 1);
ShowOrHideEx("xfield_holder_time", value == 1);
ShowOrHideEx("xfield_holder_copyright", value == 1);
ShowOrHideEx("xfield_holder_kp_id", value == 1);
ShowOrHideEx("xfield_holder_poster_news", value == 5);
ShowOrHideEx("xfield_holder_poster_news_big", value == 5);
}

try {
$(".iButton-icons-tab").each(function() {
if ($(this).is(":visible")) {
return $(this).iButton({
labelOn: "<i class='icon-ok'></i>",
labelOff: "<i class='icon-remove'></i>",
handleWidth: 30
});
}
});
} catch (error) {}

}
</script><script type="text/javascript">
<!--
function popupedit( name ){

var rndval = new Date().getTime();

$('body').append('<div id="modal-overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #666666; opacity: .40;filter:Alpha(Opacity=40); z-index: 999; display:none;"></div>');
$('#modal-overlay').css({'filter' : 'alpha(opacity=40)'}).fadeIn('slow');

$("#dleuserpopup").remove();
$("body").append("<div id='dleuserpopup' title='Редактирование пользователя' style='display:none'></div>");

$('#dleuserpopup').dialog({
autoOpen: true,
width: 570,
height: 510,
resizable: false,
dialogClass: "modalfixed",
buttons: {
"Отмена": function() {
$(this).dialog("close");
$("#dleuserpopup").remove();
},
"Сохранить": function() {
document.getElementById('edituserframe').contentWindow.document.getElementById('saveuserform').submit();
}
},
open: function(event, ui) {
$("#dleuserpopup").html("<iframe name='edituserframe' id='edituserframe' width='100%' height='389' src='?mod=editusers&action=edituser&user=" + name + "&rndval=" + rndval + "' frameborder='0' marginwidth='0' marginheight='0' allowtransparency='true'></iframe>");
},
beforeClose: function(event, ui) {
$("#dleuserpopup").html("");
},
close: function(event, ui) {
$('#modal-overlay').fadeOut('slow', function() {
$('#modal-overlay').remove();
});
}
});

if ($(window).width() > 830 && $(window).height() > 530 ) {
$('.modalfixed.ui-dialog').css({position:"fixed"});
$('#dleuserpopup').dialog( "option", "position", ['0','0'] );
}

$('#dleuserpopup').css("-webkit-overflow-scrolling","touch");

return false;

}

// -->
</script>
<script type="text/javascript">
function preview(){if(document.addnews.title.value == ''){ Growl.info({
title: 'Информация',
text: 'Заголовок является обязательным при написании статьи'
}); return false; }
else{
dd=window.open('','prv','height=400,width=750,left=0,top=0,resizable=1,scrollbars=1')
document.addnews.mod.value='preview';document.addnews.target='prv'
document.addnews.submit();dd.focus()
setTimeout("document.addnews.mod.value='editnews';document.addnews.target='_self'",500)
}
}
function sendNotice( id ){
var b = {};

b[dle_act_lang[3]] = function() {
$(this).dialog('close');
};

b['Отправить'] = function() {
if ( $('#dle-promt-text').val().length < 1) {
$('#dle-promt-text').addClass('ui-state-error');
} else {
var response = $('#dle-promt-text').val()
$(this).dialog('close');
$('#dlepopup').remove();
$.post('engine/ajax/message.php', { id: id,  text: response, allowdelete: "no" },
function(data){
if (data == 'ok') { DLEalert('Уведомление успешно отправлено', 'Информация'); }
});

}
};

$('#dlepopup').remove();

$('body').append("<div id='dlepopup' class='dle-promt' title='Уведомление' style='display:none'>Введите текст уведомления автору статьи, которое он получит персональным сообщением:<br /><br /><textarea name='dle-promt-text' id='dle-promt-text' class='ui-widget-content ui-corner-all' style='width:97%;height:100px; padding: .4em;'></textarea></div>");

$('#dlepopup').dialog({
autoOpen: true,
width: 500,
resizable: false,
buttons: b
});

}

function confirmDelete(url, id){

var b = {};

b[dle_act_lang[1]] = function() {
$(this).dialog("close");
};

b['Да, и отправить уведомление'] = function() {
$(this).dialog("close");

var bt = {};

bt[dle_act_lang[3]] = function() {
$(this).dialog('close');
};

bt['Отправить'] = function() {
if ( $('#dle-promt-text').val().length < 1) {
$('#dle-promt-text').addClass('ui-state-error');
} else {
var response = $('#dle-promt-text').val()
$(this).dialog('close');
$('#dlepopup').remove();
$.post('engine/ajax/message.php', { id: id,  text: response },
function(data){
if (data == 'ok') { document.location=url; } else { DLEalert('Уведомление не было отправлено', 'Информация'); }
});

}
};

$('#dlepopup').remove();

$('body').append("<div id='dlepopup' title='Уведомление' class='dle-promt' style='display:none'>Введите текст уведомления автору статьи, которое он получит персональным сообщением:<br /><br /><textarea name='dle-promt-text' id='dle-promt-text' class='ui-widget-content ui-corner-all' style='width:97%;height:100px; padding: .4em;'></textarea></div>");

$('#dlepopup').dialog({
autoOpen: true,
width: 500,
resizable: false,
buttons: bt
});

};

b[dle_act_lang[0]] = function() {
$(this).dialog("close");
document.location=url;
};

$("#dlepopup").remove();

$("body").append("<div id='dlepopup' title='Подтверждение' class='dle-promt' style='display:none'><div id='dlepopupmessage'>Вы действительно хотите удалить эту статью?</div></div>");

$('#dlepopup').dialog({
autoOpen: true,
width: 500,
resizable: false,
buttons: b
});


}

function CheckStatus(Form){
if(Form.allow_date.checked) {
Form.allow_now.disabled = true;
Form.allow_now.checked = false;
} else {
Form.allow_now.disabled = false;
}
}

function auto_keywords ( key )
{
var wysiwyg = '1';

if (wysiwyg == "2") {
tinyMCE.triggerSave();
}

var short_txt = document.getElementById('short_story').value;
var full_txt = document.getElementById('full_story').value;

ShowLoading('');

$.post("engine/ajax/keywords.php", { short_txt: short_txt, full_txt: full_txt, key: key }, function(data){

HideLoading('');

if (key == 1) { $('#autodescr').val(data); }
else { $('#keywords').tokenfield('setTokens', data);}

});

return false;
}

function checkxf ( )
{
var wysiwyg = '1';
var status = '';

if (wysiwyg == "2") {
tinyMCE.triggerSave();
}

$('[uid="essential"]:visible').each(function(indx) {

if($.trim($(this).find('[rel="essential"]').val()).length < 1) {

Growl.info({
title: 'Информация',
text: 'Не заполнены необходимые дополнительные поля'
});

status = 'fail';

}

});

if(document.addnews.title.value == ''){

Growl.info({
title: 'Информация',
text: 'Заголовок является обязательным при написании статьи'
});

status = 'fail';

}

return status;

};
</script>
<div class="box">

<div class="box-header">
<ul class="nav nav-tabs nav-tabs-left">
<li class="active"><a href="#tabhome" data-toggle="tab"><i class="icon-home"></i> Новость</a></li>
</ul>
</div>

<div class="box-content">
<form method="post" class="form-horizontal" name="addnews" id="addnews" onsubmit="if(checkxf()=='fail') return false;" action="">
<div class="tab-content">
<div class="tab-pane active" id="tabhome">
<div class="row box-section">

<div class="form-group">
<label class="control-label col-md-2">Информация:</label>
<div class="col-md-10">
ID=<b><?=$blog['id']?></b>, автор&nbsp;публикации: <input type="text" name="new_author" size="20" value="<?=$blog['posted_by']?>"><input type="hidden" name="old_author" value="<?=$blog['posted_by']?>" />&nbsp;<a class="status-info" onclick="javascript:popupedit('<?=$blog['posted_by']?>'); return(false)" href="#"><i class="icon-user"></i></a>
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2">Заголовок:</label>
<div class="col-md-10">
<input type="text" style="width:99%;max-width:437px;" name="title" id="title" value="<?=$blog['title']?>">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-2">Дата:</label>
<div class="col-md-10">
<input type="text" name="newdate" data-rel="calendar" size="20" value="<?=$blog['post_date']?>">
</div>
</div>

<div class="form-group editor-group">
<label class="control-label col-lg-2">Краткое описание:</label>
<div class="col-lg-10">
<div class="editor-panel">
    <textarea id="short_story" name="short_story" class="wysiwygeditor" style="width:98%;height:300px;"><?=$blog['short_description']?></textarea>
</div>
</div>
</div>

<div class="form-group editor-group">
<label class="control-label col-lg-2">Полное описание:</label>
<div class="col-lg-10"><div class="editor-panel">
    <textarea id="full_story" name="full_story" class="wysiwygeditor" style="width:98%;height:300px;"><?=$blog['full_description']?></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="padded">
<input type="submit" class="btn btn-green" value="Сохранить">&nbsp;
<button onclick="confirmDelete('?mod=editnews&action=doeditnews&ifdelete=yes&id=71&user_hash=e68c778e5fe0c26ac3c9552cd0680a41', '71'); return false;" class="btn btn-red"><i class="icon-trash"></i> Удалить</button>
<input type="hidden" name="id" value="71" />
</div>
</form>
</div>
</div>
<!-- maincontent end -->