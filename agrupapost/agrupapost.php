<section id="agrupapost">
<?php
$args = array(
    'post_per_page' => '3',
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'desc'
);
$the_query = new WP_Query($args);
while ($the_query->have_posts()){
    $the_query->the_post();
}
wp_reset_postdata();
$agrupapost = 'agrupapost/';
include $agrupapost .'display-post/card-post.php';
?>

</section>