<?php include 'header.php';?>
<h1><?php
the_title(); ?></h1> 
<?php
if(get_field('descripcion_corta')){


?>
<div class="descripcion"><?php the_field( 'descripcion_corta' ); ?> </div>
<?php
}
else{;}
?>
<?php echo the_content();
?>
<?php include_once 'footer.php';?>