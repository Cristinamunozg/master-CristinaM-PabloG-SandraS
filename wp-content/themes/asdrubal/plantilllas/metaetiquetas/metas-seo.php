<?php
$term = get_queried_object();
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
?>

<!--Metaetiquetas comentadas-->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta charset="UTF-8"/>
<?php $meta_robots_checked_values = get_field( 'meta_robots', $term );
if ( $meta_robots_checked_values ) : ?>
<meta name="robots" content="<?php the_field( 'meta_robots' , $term ); ?>">
<?php endif; ?>
<meta name="robots" content="">
<?php the_field('custom_meta', $term);?>

<title><?php the_field( 'titulo', $term ); ?></title>
<meta property="og:title" content="<?php if ( get_field('og_title' , $term)){the_field('og_title' , $term);} else{the_field( 'titulo', $term );}?>">
<meta property="twitter:title" content="<?php if ( get_field('twitter_title' , $term)){the_field('twitter_title' , $term);} 
elseif(get_field('og_title' , $term)){the_field( 'og_title', $term );}
else{the_field( 'titulo', $term );}?>">


<?php if (in_category('productos')){   
$metadesc_festivales = 'Hoy tendremos con nosotros en ' . get_field( 'ciudad' ) . ' un festival que flipas de ' . get_field( 'tipo_de_musica' );?>
<meta name="description" content="<?php echo $metadesc_festivales; ?>">
<meta property="og:description" content="<?php echo $metadesc_festivales; ?>">
<meta property="twitter:description" content="<?php echo $metadesc_festivales; ?>">
<?php
}
else{
?>
<meta name="description" content="<?php the_field( 'metadescription', $term); ?>">
<meta property="og:description" content="<?php if ( get_field('og_description' , $term)){the_field('og_description' , $term);} else{the_field( 'metadescription', $term );}?>">
<meta property="twitter:description" content="<?php if ( get_field('twitter_description' , $term)){the_field('twitter_description' , $term);} 
elseif(get_field('og_description' , $term)){the_field( 'og_description', $term );}
elseif(get_field('metadescription' , $term)){the_field( 'metadescription', $term );}?>">
<?php ;}?>

<link rel="canonical" href="<?php if (get_field('canonical', $term)){the_field('canonical', $term );} else {echo $url_sin_string;}?>">
<meta property="og:url" content="<?php if (get_field('canonical', $term)){the_field('canonical', $term );} else {echo $url_sin_string;}?>">
<meta property="twitter:url" content="<?php if (get_field('canonical', $term)){the_field('canonical', $term );} else {echo $url_sin_string;}?>">

<meta property="og:image" content="<?php if (get_field('og_image', $term)); ?>">
<meta property="og:image:secure_url" content="<?php the_field( 'og_image' ); ?>">
<meta property="twitter:image" content="<?php the_field( 'og_image' ); ?>">
<meta property="og:image:alt" content="<?php the_field( 'titulo', $term ); ?>">

<meta property="og:type" content="">
<meta property="twitter:card" content="">

<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">

<!--
Fechas
Número de días
Ciudad
País
Tipo de música
Precio
Genera una meta descripción que valga automáticamente para todos los festivales que se publiquen. Puedes no utilizar todos los elementos.
-->

<!--<meta name="rating" content="">-->
