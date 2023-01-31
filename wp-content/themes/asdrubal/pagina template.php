<?php // include 'header.php';
/*Template Name:template*/
get_header();
?>
<div> Página de template</div>
<h1><?php
the_title(); ?></h1> 
<?php 
echo the_content();
?>
<?php //include_once 'footer.php';
get_footer();?>