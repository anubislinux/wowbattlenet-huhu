<?php
if($charInfo == 0) {
    $body = "server-error logged-in without-nav";
    require_once 'NotFoundCharacters.php';
}   elseif($charInfo['level'] < 10) {
    $body = "server-error logged-in without-nav";
    require_once 'LowLevelCharacters.php';
}   else {
    require_once 'infoCharacters.php';
}
?>