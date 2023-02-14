<?php include 'header.php';?>
<style>
#precio::after { 
    content: "€";
  }
</style>
<h1><?php
the_title(); ?></h1> 
<?php
if (get_field('descripcion-corta')){
    ?>
<div class="descripcion-corta"><?php the_field( 'descripcion-corta' ); ?> . Esta es la descripción</div>
<?php
}
else{;}
?>
<?php echo the_content();
?>
<?php if (in_category('productos')){    }?>

<table>
    <tr>
        <th></th>
        <th>fechas</th>
        <td><?php the_field( 'fechas' ); ?></td>
</tr>
<tr>
        <th></th>
        <th>Número de días</th>
        <td><?php the_field( 'numero_dias' ); ?></td>
</tr>
<tr>
        <th></th>
        <th>Ciudad</th>
        <td><?php the_field( 'ciudad' ); ?></td>
</tr>
<tr>
        <th></th>
        <th>País</th>
        <td><?php the_field( 'pais' ); ?></td>
</tr>
<tr>
        <th></th>
        <th>Tipo de música</th>
        <td><?php the_field( 'tipo_de_musica' ); ?></td>
</tr>
<tr>
        <th></th>
        <th>Precio</th>
        <td id="precio"><?php the_field( 'precio'); ?></td>
</tr>

<!--?php
    else {;}
    echo the_content();
    ?>

<?php include_once 'footer.php';?>