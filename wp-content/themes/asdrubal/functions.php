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
<?php
// Borrar Sitemap por defecto
add_filter( 'wp_sitemaps_enabled', '__return_false' );
if (has_action('init', 'wp_sitemaps_get_server')){
remove_action('init', 'wp_sitemaps_get_server');
}
?>