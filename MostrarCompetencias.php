<?php
  if (!(isset($_SESSION['lider_area']))) {
    header('Location:'.RUTA_URL.'index/index');
  }
?>
<div class="col-lg-10 px-5">
        <h1 class="mt-3">Usuarios </h1>
<table class="table">

<tr>
<td>Id</td>
<td>Competencia</td>
</tr>

<?php foreach ($data as $fila): ?>
<tr>

<td><?php echo $fila->Id_ficha ?></td>
<td><?php echo $fila->competencia ?></td>

<a href="<?=RUTA_URL?>Lider/mostrarCompetencia/<?=$fila->Id_ficha?>"></a>
</td>




</tr>
<?php endforeach;?>

</table>


</div>





    