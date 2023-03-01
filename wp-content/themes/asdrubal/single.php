<?php include 'header.php';?>
<style>
#precio::after { 
    content: "€";
  }
  .festi
  {
height: 400px;
aspect-ratio: 5/4;
object-fit: cover;
background-image: url("/imagenes/imagenclase.jpg");
  }
  .back
  {
background-image: url("https://master-cristinam-pablog-sandras.test/wp-content/uploads/chucho2.jpg");
background-repeat:no-repeat;
height:500px;
  }
  .tabla
  {
border: 1px solid #ddd;
padding: 8px;
text-align: left;
background-color: #f2f2f2;
color: #444; 
  }
  .agrupa
  {
display: flex;
justify-content: center;
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
<div class="back"></div>
<div class="agrupa">
<img class="festi" src="<?php the_field( 'imagenfesti' ); ?>" />
<?php if (in_category('productos')){    }?>
<table class="tabla">
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
</div>
<!--?php
    else {;}
    echo the_content();
    ?>

<?php include_once 'footer.php';?>