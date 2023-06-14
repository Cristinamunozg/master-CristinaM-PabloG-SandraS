<?php
// Cosas SEO del Footer
function wp_seofooter() {
    //Esto se llama desde header.php
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
//$protocol = 'https://';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
$term = get_queried_object();
$proyectoname = "Mastering Money";

 the_field( 'custom_meta_footer', $term );

if ( is_home() || ( is_front_page() && is_page() ) ) {
    // hacer algo si es la página principal
    // No funciona por algún motivo extraño

?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "EMPRESANOMBRE",
  "url": "<?php echo $url_sin_string;?>",
  "logo": "<?php echo get_template_directory_uri(); ?>/images/logo.png"

}
</script>
<?php
 ; }
 elseif ( is_singular()){
    // hacer algo si es una publicación o categoría
?>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Event",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo $url_sin_string;?>"
    },
    "name": "<?php the_title(); ?>",
    "image": [
        "<?php the_field('imagenfesti', $term ); ?>"
    ],
    "StartDate": "<?php the_field("fechas"); ?>",
    "dateModified": "<?php echo get_the_modified_date('c'); ?>",
    "description": "<?php the_field("metadescription", $term ); ?>"
    "offer": "<?php the_field("precio");?>"
    "location": "<?php the_field("ciudad");?>"
}
</script>
<?php
;}
}
//do something just on a category archive page }
add_action('wp_footer', 'wp_seofooter'); //hook que lanza la funcion y carga el contenido en el head

?>
