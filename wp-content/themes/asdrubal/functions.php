<?php
$agrupapost = __DIR__ .'/agrupapost/';

$plantillas = __DIR__ . '/plantillas/';

function agrupapost(){
    $agrupapost = __DIR__ .'/agrupapost/';

include 'agrupapost/agrupapost.php';  
//include $agrupapost . 'agrupapost.php';
}
    add_shortcode('lastest_post', 'agrupapost');
    
?>