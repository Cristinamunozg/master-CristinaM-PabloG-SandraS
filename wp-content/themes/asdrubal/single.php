<?php include 'header.php';?>
<h1><?php
the_title(); ?></h1> 
<?php
if (get_field('descripcion-corta')){
    ?>
<div class="descripcion-corta"><?php the_field( 'descripcion-corta' ); ?> es la descripción</div>
<?php
}
else{;}
?>
<?php echo the_content();
?>
<?php include_once 'footer.php';?>