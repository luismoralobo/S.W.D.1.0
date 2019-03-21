<?php 

/**
 * 
 */
class IndexController extends Path
{
	private $model;
	function __construct(){
		$this->model=parent::model('usuario');
	
	}	
	public function index(){
		parent::view('usuario/index');
        

	}
	function validar(){
		$data = $this->model->consultaUsuario($_POST['n_identificacion']);	
		if ($data != null) {
			if ($data->Password == $_POST['password']) {
				$_SESSION[$data->Rol] = [$data->N_identificacion, $data->Nombre, $data->Id_usuario];
				header('Location:'.RUTA_URL.'index/'.$data->Rol);
			}
			else{
				header('Location:'.RUTA_URL);
			}
		}else{
			header('Location:'.RUTA_URL);
		}
	}
	function cerrar(){
		session_start();
		session_destroy();
		header("Location:".RUTA_URL);
	}
	function aprendiz(){
		parent::view('usuario/MostrarJustificacion');
	}
	function instructor(){
		parent::view('usuario/instructor');
	}
	function lider_area(){
		parent::view('usuario/lider_area');
	}
	function coordinador(){
		parent::view('usuario/coordinador');
	}
	function enfermera(){
		parent::view('usuario/enfermera');
	}
 public	function tablaPelicula(){
		$d = $this->model->aprendiz();
		parent::viewM('instructor','Administrador/tablaAprendizes',$d);

	}
	
	public function tablaAprendiz(){
		$d =$this->model->consultaAprendiz($_SESSION['aprendiz'][0]);
		parent::viewM('aprendiz','Administrador/tablaAprendizes',$d);
	}
	public function tablaEmpleado(){
		$d = $this->model->consultaUsuario($_SESSION['aprendiz'][0]);
		parent::viewM('aprendiz','Administrador/TablaAprendiz',$d);
	}

	public function tablaAprendizLider(){
		$d =$this->model->consultaAprendiz();
		parent::viewM('lider_area','Administrador/TablaAprendizes',$d);

	}

	public function listadoAprendiz(){
		 $d=$this->model->consultaAprendiz();
		 if (isset($_SESSION['p'])) {
			$aprendiz = $this->model->consultaAprendizUnico($_SESSION['p']);
		 }
		 parent::viewM('instructor','Administrador/TablaAprendizes',$d, (isset($aprendiz))?$aprendiz:'');
	
	}

	public function registroJustificacion(){
		
		parent::viewM('aprendiz','Administrador/InsertarJustificacion',$d);
	}

	 
	

   public function tablaInstructor(){
		$d = $this->model->consultaUsuario($_SESSION['instructor'][0]);
		parent::viewM('instructor','Administrador/TablaInstructor',$d);
	}

	

	public function procesoEstudiante(){
		$d=$this->model->consultaProcesos();
		parent::viewM('instructor','Administrador/ProcesoEstudiante',$d);
   
   }

	public function Justificacion(){
		$data = $this->model->verJustificacion($_SESSION['instructor'][0]);
		parent::viewM('instructor',$data); 
	}

	
	
	function modificarEmpleado(){
		$data = $this->model->consultaUsuario($_SESSION['p']);
		parent::viewM('aprendiz','Administrador/ModificarEmpleado',$data);
		
	}	
	    function registroAprendiz(){
			$data = $this->model->InsertarAprendiz($_POST);
			parent::viewM('instructor','Administrador/RegistroAprendiz',$data);
		}

		

		public function cargarAprendiz(){
			try{
				if (isset($_POST["enviar"])) {//nos permite recepcionar una variable que si exista y que no sea null

	$archivo = $_FILES["archivo"]["name"];
	$archivo_copiado= $_FILES["archivo"]["tmp_name"];
	$archivo_guardado = "copia_".$archivo;

	//echo $archivo."esta en la ruta temporal: " .$archivo_copiado;

	if (copy($archivo_copiado ,$archivo_guardado )) {
		//echo "El archivo existe en nuestra carpeta de trabajo <br/>";
	}else{
		echo "<div class='alert alert-success' role='alert'>Hubo un error</div> <br/>";
	}
    
    if (file_exists($archivo_guardado)) {
    	 
    	 $fp = fopen($archivo_guardado,"r");//abrir un archivo
         $rows = 0;
         while ($datos = fgetcsv($fp , 5000 , ";")) {
         	    $rows ++;
         	   // echo $datos[0] ." ".$datos[1] ." ".$datos[2]." ".$datos[3] ."<br/>";
         	if ($rows > 1) {
         		//$resultado = insertar_datos($datos[0],$datos[1],$datos[2],$datos[3]);
         		$resultado = $this->model->cargarAprendiz(var_dump($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8],$datos[9],$datos[10],$datos[11],$datos[12]));
         	if($resultado){
         		// echo ' <script language="javascript">alert("Usuarios registrados con éxito");</script> ';
                  header("Refresh:0.1; url=".RUTA_URL."Index/tablaAprendizLider/");
         	}else{
         		 echo ' <script language="javascript">alert("No se inserto ningun dato");</script> ';
         	}
         	}
         }



    }else{
    	echo "no existe el archivo copiado <br/>";
    }

}
            $data = $this->model->cargarAprendiz($_POST);
			parent::viewM('lider_area','Administrador/CargarAprendiz');
			}catch(Excepcion $e){
				die($e->getMessage());
			}
		 
	}
		
		

		function vistaregistroAprendiz(){
			parent::viewM('instructor','Administrador/RegistroAprendiz',$data);
		}

		function asistencia(){
			$d=$this->model->consultaJustificacion();
			parent::viewM('instructor','Administrador/TablaAsistencia',$d);
		}

        public function Desertar(){
			$this->model->Desertarestudiante($_SESSION['p']);
			header('Location:'.RUTA_URL.'Administrador/ProcesoEstudiante');
			echo'Se ha registrado con exito';
			
		}
	

	function mAprendiz(){
		$f = $this->model->modificarAprendiz($_POST);
		if ($f) {
			echo "<script>alert('Modificado!');</script>";			
		}
		else{
			echo "<script>alert('No modificado!');</script>";			
		}
		echo $f;
		header("Refresh:1; url=".RUTA_URL."Index/modificarEmpleado/".$_SESSION['aprendiz'][0]);
	}

	function mInstructor(){
		$f = $this->model->modificarInstructor($_POST);
		if ($f) {
			echo "<script>alert('Modificado!');</script>";
		}
		else{
			echo "<script>alert('No modificado!');</script>";
		}
		echo $f;
		header("Refresh:1; url=".RUTA_URL."Index/modificarEmpleado/".$_SESSION['instructor'][0]);
	}
	function iInstructor(){
		$b = $this->model->insertarInstructor($_POST);
		if ($b) {
			echo "<script>alert('Usuario registrado!');</script>";
		}
		else {
			echo "<script>alert('Usuario no registrado!');</script>";
		}
		echo $b;
		header("Refresh:1; url=".RUTA_URL."Index/RegistroEmpleado");
	}



}
 ?>