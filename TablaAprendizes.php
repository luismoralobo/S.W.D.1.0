<div class="col-md-8">
 <div class="table td-th">
<div class="col-lg-10 px-5">
        <h1 class="mt-3">Usuarios </h1>
      <table class="table">
            <tr class="text-center">
                <td>Id_usuario</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>T idenfiticacion</td>
                <td>N idenfiticacion</td>
                <td>Num_ficha</td>
                
                
                
            </tr>

            <?php foreach ($data as $fila):?>
            <tr>
                <td><?php echo $fila->Id_usuario ?></td>
                <td><?php echo $fila->Nombre ?></td>
                <td><?php echo $fila->Apellido ?></td>
                <td><?php echo $fila->Direccion ?></td>
                <td><?php echo $fila->Correo ?></td>
                <td><?php echo $fila->Telefono ?></td>
                <td><?php echo $fila->T_identificacion ?></td>
                <td><?php echo $fila->N_identificacion ?></td>
                <td><?php echo $fila->num_ficha?></td>
                
                
            </tr>
            <?php endforeach;?>
            



    </table>
         
<?php 
    if ($c != null):
    
?>
<form action="<?php echo RUTA_URL ?>Index/mAprendiz/" method="post" class="form-group px-5">
 <h1 class="mt-3">Modificar Aprendices</h1>

 <hr class="bg-danger">
    <div class="row">
        <div class="col-lg-6">       
        <label for="" class="mt-3">Nombre: </label>
        <input type="text" name="nombre" value="<?= $c->Nombre ?>" required class="form-control">
        </div>
        
        <div class="col-lg-6">
            <label for="" class="mt-3">Apellido: </label>
            <input type="text" name="apellido" value="<?php echo $c->Apellido ?>"  required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Direccion:</label>
            <input type="text" name="direccion" value="<?php echo $c->Direccion ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Correo:</label>
            <input type="email" name="correo" value="<?php echo $c->Correo ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Telefono:</label>
            <input type="text" name="telefono" value="<?php echo $c->Telefono ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Tipo de identificacion:</label>
            <input type="text" name="tipo" value="<?php echo $c->T_identificacion ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">N_identificacion:</label>
            <input type="text" name="numero_documento" value="<?php echo $c->N_identificacion ?>" required class="form-control">
        </div>
       
        
        <div class="col-lg-12 tamano">
                <button class="btn btn-danger bg-red">Modificar Datos</button>
        </div>
      
        </div>  
       
    </form>
    <?php endif;?>
    </div>
</div>
</div>