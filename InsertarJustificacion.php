
<div class="col-lg-10 px-5">
    <form action="<?php echo RUTA_URL ?>Index/iInstructor" method="post" class="px-5">
    <h1 class="mt-3">Justificacion Aprendiz</h1>
    <hr class="bg-danger">
    <div class="row">


        <label for="" class="mt-3">Numero de documento: </label>
        <input type="text" name="nombre" required class="form-control" placeholder="Numero de documento">

        <label for="" class="mt-3">Nombres: </label>
        <input type="text" name="nombre" required class="form-control" placeholder="Nombres">
        
        <label for="" class="mt-3">Fecha De Registro</label>
        <input type="date" name="direccion" required class="form-control" >

        <label for="" class="mt-3">Asunto:</label>
        <textarea class="form-control" rows="5" name="motivo" id="texto"></textarea>

       <div class="input-group">
  
  
     <label for="" class="mt-3">Archivo</label>
    <input type="file" name="archivo">

  
</div>
        

      
        
    </div>
        
        <div class="col-lg-12 tamano">
            <button type="submit" class="btn btn-danger bg-red">Enviar Justificacion</button>
        </div>
        
    </form>
    </div>
    </div>



    


