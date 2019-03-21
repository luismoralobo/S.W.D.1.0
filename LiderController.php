<?php

/**
 * 
 */
class LiderController extends Path{
	
	private $model;
	private $datos;
	function __construct(){
		$this->model=parent::model('usuario');
	
	}	

	public function index(){
		parent::view('usuario/index');


	}

	 public	function lider_area(){
		parent::view('usuario/lider_area');
	}

	public function crearJornada(){
		parent::viewM('lider_area','Administrador/CrearJornada');
		try{
	
if($_SERVER['REQUEST_METHOD']=="POST"){
                $datos=[
                    "num_ficha"=>rtrim($_POST['num_ficha']),
                    "jornada"=>rtrim($_POST['jornada']),
                     "programa"=>rtrim($_POST['programa']),
                      "nivel"=>rtrim($_POST['nivel']),
                       "usuario_Id_usuario"=>rtrim(1),
                       "usuario_rol_Id_rol"=>rtrim(1),
                       "usuario_estado_idestado"=>rtrim(1),
                       "compentencia"=>rtrim($_POST['compentencia']),
                       "asginar_instructor"=>rtrim($_POST['asginar_instructor'])
                     ];
                    

   if($this->model->CrearJornada($datos)){
   	
     echo '<script language="javascript">alert("Ficha creada con exito");</script>'; 
         
      }
    }
		}catch(Excepcion $e){

			die($e->getMessage());
		 }
			
		}



public function mostrarCompetencias(){
	$d =$this->model->consultaCompetencia();
	parent::viewM('lider_area','LiderDeArea/MostrarCompetencias');
	//$this->model->MostrarCompetencias($);
}

public function AsignarInstructor(){
	parent::viewM('lider_area','LiderDeArea/AsignarInstructor');
}

public function tablaLider(){
		$d =$this->model->consultaUsuario($_SESSION['lider_area'][0]);
		parent::viewM('lider_area','Administrador/TablaLider',$d);
	}


	
}// fin clase









?>