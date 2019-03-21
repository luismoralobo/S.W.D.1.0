<?php
  if (!(isset($_SESSION['lider_area']))) {
    header('Location:'.RUTA_URL.'index/index');
  }
?>

<div class="col-md-8">
 <div class="table td-th">  

<div class="col-lg-10 px-5">
<div class="container">
    <div class="card card-container">           
    <center><i class="fas fa-user-circle"><?php echo  $_SESSION['lider_area'][1]; ?></i></center> 
       <form class="form-signin" action="<?php echo RUTA_URL ?>Lider/AsignarInstructor" method="post">
  

  <div class="form-group">
    <label for="select">Asignar instructor</label>
    <select required autofocus name="asginar_instructor" class="form-control" id="select">
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
     <button type="submit" name="p" class="btn btn-primary"><i class="fas fa-user-plus"></i>Asignar Instructor</button>
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


   