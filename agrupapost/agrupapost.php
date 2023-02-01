<section id="agrupapost">
<?php
$args = array(
    'post_per_page' => '-1',
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'desc'
);
$the_query = new WP_Query($args);
while ($the_query->have_post()){
    $the_query->the_post();
    //include
}
wp_reset_postdata();
include $agrupapost .'../display-post/card-post.php';
?>

</section>