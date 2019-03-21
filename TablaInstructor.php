
    <div class="col-lg-10 px-5">
        <h6 class="mt-3"> </h6>
      <table class="table">
            <tr class="text-center">
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>T idenfiticacion</td>
                <td>N idenfiticacion</td>
                <td>Config</td>
            </tr>
    
             <tr>
                <td><?php echo $data->Id_usuario ?></td>
                <td><?php echo $data->Nombre ?></td>
                <td><?php echo $data->Apellido ?></td>
                <td><?php echo $data->Direccion ?></td>
                <td><?php echo $data->Correo ?></td>
                <td><?php echo $data->Telefono ?></td>
                <td><?php echo $data->T_identificacion ?></td>
                <td><?php echo $data->N_identificacion ?></td>
                <td>


                    <!-- <a class="btn btn-success" href="<?php //echo RUTA_URL ?>Index/modificarEmpleado/<?php //echo $data->N_identificacion ?>"><i class="fas fa-pencil-alt"></i></a> -->
                 <!-- Large modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-user-edit"></i></button>

   </td>
            </tr>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
<div class="col-lg-10 px-5">
 <form action="<?php echo RUTA_URL ?>Enfermera/UpdateEnfermera" method="post" class="form-group px-5">
 <h1 class="mt-3">Modificar Usuario</h1>

 <hr class="bg-danger">
    <div class="row">
        <div class="col-lg-6">       
        <label for="" class="mt-3">Nombre: </label>
        <input type="text" name="nombre" value="<?= $data->Nombre ?>" required class="form-control">
        </div>
        
        <div class="col-lg-6">
            <label for="" class="mt-3">Apellido: </label>
            <input type="text" name="apellido" value="<?php echo $data->Apellido ?>"  required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Direccion:</label>
            <input type="text" name="direccion" value="<?php echo $data->Direccion ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Correo:</label>
            <input type="email" name="correo" value="<?php echo $data->Correo ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Telefono:</label>
            <input type="text" name="telefono" value="<?php echo $data->Telefono ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Tipo de identificacion:</label>
            <input type="text" name="tipo" value="<?php echo $data->T_identificacion ?>" required class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">N_identificacion:</label>
            <input type="text" name="numero_documento" value="<?php echo $data->N_identificacion ?>" required class="form-control">
        </div>
       
        
        <div class="col-lg-12 tamano">
                <button class="btn btn-danger bg-red">Modificar Datos</button>
        </div>
      
        </div>  
       
    </form>

    </div>
  </div>
</div>
             

    </table>
    </div>