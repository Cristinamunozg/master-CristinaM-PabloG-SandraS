<?php
//include_once __DIR__ . ('/../header.php');
get_header ();
/*Template name: sobre mi */
?>

<div class ="generico">

<h1>
    <?php the_title();?>
</h1>

<section id="contenido">
<?php
echo the_content ();
?>
<?php
include 'agrupapost/agrupapost.php';
//include $agrupapost.'agrupapost.php';
?>
</section>
<?php
get_footer();
?>