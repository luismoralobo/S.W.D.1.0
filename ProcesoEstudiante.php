<div class="col-lg-10 px-5">
        <h1 class="mt-3">Usuarios </h1>
<table class="table">

<tr>
<td>Id</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Direccion</td>
<td>Correo</td>
<td>Telefono</td>
<td>N_Identificacion</td>
<td>T_Identificacion</td>
<td>N_identificacion</td>
<td>Num_ficha</td>
<td>Fecha 1</td>
<td>Fecha 2</td>
<td>Fecha 3</td>
<td>Opciones</td>

</tr>

<?php foreach ($data as $fila): ?>
<tr>

<td><?php echo $fila->Id_usuario ?></td>
<td><?php echo $fila->Nombre ?></td>
<td><?php echo $fila->Apellido ?></td>
<td><?php echo $fila->Apellido ?></td>
<td><?php echo $fila->Direccion ?></td>
<td><?php echo $fila->Correo ?></td>
<td><?php echo $fila->Telefono ?></td>
<td><?php echo $fila->T_identificacion ?></td>
<td><?php echo $fila->N_identificacion ?></td>
<td><?php echo $fila->num_ficha ?></td>
<td><?php echo $fila->fecha_inasistencia1 ?></td>
<td><?php echo $fila->fecha_inasistencia2 ?></td>
<td><?php echo $fila->fecha_inasistencia3 ?></td>

<td><a href="<?=RUTA_URL?>Index/Desertar" class="btn btn-danger"><i class="fas fa-user-times"></i></a></td>

</td>




</tr>
<?php endforeach;?>

</table>


</div>