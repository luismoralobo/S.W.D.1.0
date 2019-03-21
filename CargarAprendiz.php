<?php 
if (isset($_SESSION['lider_area'])) {
    $usuario =  $_SESSION['lider_area'];
}else{
    header("Location: index.php");
}


 ?>



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
    </table>

<div class="col-lg-13 px-12">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Cargar Aprendiz
</button>
</div>
<!-- Modal -->
<div class="modal fade modal-color" data-backdrop="static" data-keyboard="false" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cargar Aprendiz CSV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
	 	<form action="<?php echo RUTA_URL ?>Index/cargarAprendiz" class="formulariocompleto" method="post" enctype="multipart/form-data">
	 		 <input class="input" type="file" name="archivo" class="form-control"/>
	 		<input type="submit" value="SUBIR ARCHIVO" class="form-control btn-success" name="enviar">
	 	</form>
	 </div>

      </div>
     
    </div>
  </div>
</div>
</div>