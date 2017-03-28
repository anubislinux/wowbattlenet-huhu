<div class="sidebar-module" id="sidebar-gear-store">
    <div class="sidebar-title">
        <h3 class="header-3 title-forums"><a href="/community/status">服务器状态</a></h3>
    </div>
    <?php if (!empty($servers)): ?><?php foreach ($servers as $server): ?>
    <div class="sts a-realm sidebar-container box-shadow">
        <div id="head" class="clearfix text-shadow">
            <p id="name"><?=$server['name']?></p>
            <p id="info"><?php if($server['status'] == 'down'):?><font color="red">离线</font><?php else:?><font color="green">在线</font><?php endif;?></p>
        </div>
        <div id="containerbody" class="clearfix text-shadow">
            <p id="online"><font color="#5b5851"></font></p>
            <p id="uptime"><font color="#d28010"><?=$server['online']?></font>  <?php echo vendor\core\App::$app->lang->get('lng.online_players', '')?></p>
        </div>
    </div>
    <?php endforeach; ?><?php endif; ?>
    <div class="realmlist realm_cont_show">
        <p>客服QQ： <font color="#817464">2818902006</font></p>
    </div>
</div>