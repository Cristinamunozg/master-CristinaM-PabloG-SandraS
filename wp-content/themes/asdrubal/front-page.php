<?php
//<?php include 'header.php';
get_header();?>
<h1>Front-page (que es esta página) se ha convertido en la página de inicio<?php
the_title(); ?></h1> 
<?php 
echo the_content();
?>
<?php
include 'agrupapost/agrupapost.php';
//include $agrupapost.'agrupapost.php';
?>
<?php //include_once 'footer.php';
get_footer();
?>