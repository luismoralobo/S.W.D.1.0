
<div class="col-lg-10 px-5">
 <form action="<?php echo RUTA_URL ?>Index/mAprendiz/" method="post" class="form-group px-5">
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
       
        <div class="col-lg-6">
        <label for="" class="mt-3">Estado:</label>
        <select name="estado" id="" class="form-control">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>   
        </div>
        <div class="col-lg-12 tamano">
                <button class="btn btn-danger bg-red">Modificar Datos</button>
        </div>
      
        </div>  
       
    </form>
