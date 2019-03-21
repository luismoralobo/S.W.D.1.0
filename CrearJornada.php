<?php
  if (!(isset($_SESSION['lider_area']))) {
    header('Location:'.RUTA_URL.'Lider/index');
  }
?>

<div class="col-md-8">
 <div class="table td-th">  

<div class="col-lg-10 px-5">
<div class="container">
    <div class="card card-container">           
     <center><h6 class="mt-3"><i class="fas fa-user-plus">
      Crear nueva ficha
     </i></h6>
     <h6>Para que esa ficha pueda iniciar su formacion</h6>
   </center> 
    <center><i class="fas fa-user-circle"><?php echo  $_SESSION['lider_area'][1]; ?></i></center> 
       <form class="form-signin" action="<?php echo RUTA_URL ?>Lider/crearJornada" method="post">
      <span id="reauth-email" class="reauth-email"></span>
      <label for="ficha">Ficha</label>
     <input type="text" id="num_ficha" name="num_ficha" class="form-control" placeholder="Ficha" required autofocus>
     <div class="form-group">
    <div class="form-group">
    <label for="jornada">Jornada</label>
    <select required name="jornada" class="form-control" id="jornada">
      <option value="" disabled selected>Jornada</option>
      <option >Mañana</option>
      <option >Tarde</option>
      <option >Noche</option>
      <option >Fin de Semana</option>
      <option >Noche</option>
     
    </select>
     <label>
     </div>
      <div class="form-group">
    <label for="select">Programa</label>
    <select required name="programa" class="form-control" id="select">
      <option disabled selected>Programa</option>
      <option>ADSI</option>
      <option>TPS</option>
      <option>TDM</option>
      <option>TSP</option>
      <option>TPM</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="select">Nivel</label>
    <select required name="nivel" class="form-control" id="select">
      <option disabled selected>Nivel</option>
      <option>Tecnico</option>
      <option>Tegnologo</option>
      <option>Especializacion</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="select">Competencia</label>
    <select required name="compentencia" class="form-control" id="select">
      <option disabled selected>Competencia</option>
      <option>Ingles</option>
      <option>Cempetencias ciudadana</option>
      <option></option>
      <option></option>
      <option></option>
    </select>
  </div>
  <div class="form-group">
    <label for="select">Asignar instructor</label>
    <select required name="asginar_instructor" class="form-control" id="select">
      <option disabled selected>Asignar instructor</option>
      <option>SANDRA MILENA PEÑARANDA</option>
      <option>FABIAN ORLANDO PARRA</option>
      <option>ROGER SMITH LONDOÑO BURITICÁ</option>
      <option>HERNANDO ENRIQUE MORENO MORENO</option>
      <option>LUIS MORA</option>
    </select>
  </div>
      <div class="form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Aceptar</label>
     <button type="submit" name="p" class="btn btn-primary"><i class="fas fa-user-plus"></i>Crear Ficha</button>
  </div>
 </label>
  </div>

  </div>
    </div>
 </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>

</div>
</div>


   