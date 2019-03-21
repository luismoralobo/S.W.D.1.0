<?php

/**
 * 
 */
class EnfermeraController extends Path{
	private $model;
	public function __construct(){
		$this->model=parent::model('usuario');
	}
	public function enfermera(){
		parent::view('usuario/enfermera');
	}

	public function tablaJustificaciones(){
		try{
        $d =$this->model->consultaJustificaiones();
		parent::viewM('enfermera','Enfermera/TablaJustificaciones',$d);
		}catch(Excepcion $e){
			die($e->getMessage());
		}

		
	}

	public function tablaEnfermera(){
		$d = $this->model->consultaUsuario($_SESSION['enfermera'][0]);
		parent::viewM('enfermera','Administrador/TablaInstructor',$d);
	}

	public function ValidarExcusa(){
		$d=$this->model->validarExcusa();
		//parent::viewM('enfermera','Enfermera/TablaJustificaciones',$d);
			
		
	}
}


?>