<?php
    require_once(RUTA_APP."/view/inc/header.php");
    require_once(RUTA_APP."/view/inc/navbarAdministrador.php");
    foreach ($datos as $pelicula ) {
        # code...
    
?>
<div class="col-lg-10 px-5">
    <form action="<?php echo RUTA_URL?>Administrador/ModificarPeliculas/<?php echo $pelicula->Id_pelicula?>" method="post" class="form-group px-5">
        <h1 class="mt-3">Modificar Pelicula</h1> 
        <hr class="bg-danger">   
        <div class="row">
            <div class="col-lg-6">
            <label for="" class="mt-3">Nombre de la Pelicula :</label>
            <input type="text" name="Nombre" value="<?php echo $pelicula->Nombre ?>" class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Actor: </label>
            <input type="text" name="Actor" value="<?php echo $pelicula->Actor ?>" class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Duracion</label>
            <input type="text" name="Duracion" value="<?php echo $pelicula->Duracion ?>" class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="" class="mt-3">Estado</label>
            <select name="Estado" value="<?php echo $pelicula->Duracion ?>" class="form-control">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
        </div>
        <div class="col-lg-6">
        <label for="" class="mt-3">Genero</label>
        <select name="Id_genero" id="" value="<?php echo $pelicula->Id_genero ?>" class="form-control">
            <option value="">Seleccione ..</option>
            <option value="1">Accion</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
    </div>
    <div class="col-lg-12 tamano">
        <button class="btn btn-danger bg-red">Modificar Pelicula</button> 
        </div>  
    </div>
    </form>
    </div>
<?php
    }
?>
<?php
    require_once(RUTA_APP."/view/inc/footer.php");
?>