<?php 
/**
 * 
 */
class UsuarioModel
{
	private $conexion;
	function __construct(){
		$this->conexion= new CDB();
	}
	public function consulta(){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `aprendiz`");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
	public function instructor(){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `instructor`");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	

	public function consultaAprendiz(){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` WHERE rol_Id_rol=1");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function consultaCompetencia(){
		$stm=$this->conexion->conectar()->prepare("SELECT `compentencia` FROM ficha");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
	public function consultaAprendizUnico($id){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` WHERE N_identificacion=?");
		$stm->execute([$id]);
		return $stm->fetch(PDO::FETCH_OBJ);
	}

	public function verJustificacion($id){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` WHERE N_identificacion=?");
		$stm->execute([$id]);
		return $stm->fetch(PDO::FETCH_OBJ);
	}

	public function consultaJustificaiones(){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `justificacion`");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function registrarJustificaciones($d){
		$stm=$this->conexion->conectar()->prepare("INSERT INTO `justificacion` VALUES (?)");
		$stm->execute([$d]);
	}

	public function Procesoestudiante($data){
		$stm=$this->conexion->conectar()->prepare("UPDATE `usuario` SET `proceso_id`=? WHERE `N_identificacion`=?");
		$stm->execute([$data['proceso_id'], $data['num_documento']]);
		return $stm->fetch(PDO::FETCH_OBJ);
	}
	
	public function Cambiarproceso($data){
		$stm=$this->conexion->conectar()->prepare("UPDATE `usuario` SET `proceso_id`=? WHERE `N_identificacion`=?");
		$stm->execute([$data['proceso_id'], $data['num_documento']]);
		return $stm->fetch(PDO::FETCH_OBJ);
	}

	public function validarExcusa(){
		echo ' <script language="javascript">alert("Has editado la justificacion");</script> ';
	}
	

	public function validarJustificacion($id){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` WHERE Id_usuario=?");
		$stm->execute([$id]);
		return $stm->fecth(PDO::fetch_obj);
	}

	public function CrearJornada($data){
		try{
$stm=$this->conexion->conectar()->prepare("INSERT INTO `ficha` (`num_ficha`,`jornada`,`programa`,`nivel`,`usuario_Id_usuario`,`usuario_rol_Id_rol`,`usuario_estado_idestado`,`compentencia`,`asginar_instructor`) VALUES(?,?,?,?,?,?,?,?,?)");
		$exe = $stm->execute([
			     $data['num_ficha'],
			     $data['jornada'],
			     $data['programa'],
			     $data['nivel'],
			     $data['usuario_Id_usuario'],
			     $data['usuario_rol_Id_rol'],
			     $data['usuario_estado_idestado'],
			     $data['compentencia'],
			     $data['asginar_instructor']

				 
				 ]);

				 if ($exe){
					 return true;
				 } else {
					 return false;
				 }
		}catch(Excepcion $e){
			die($e->getMessage());
			echo $e;
		}
		
	}

	public function InsertarAprendiz($data){
		$stm=$this->conexion->conectar()->prepare("INSERT INTO `usuario` (`Nombre`,`Apellido`,`Direccion`,`Correo`,`Telefono`,`T_identificacion`,`N_identificacion`,`estado_idestado`,`rol_Id_rol`) VALUES(?,?,?,?,?,?,?,1,1)");
		$exe = $stm->execute([
			     $data['nombre'],
				 $data['apellido'],
				 $data['direccion'],
				 $data['correo'],
				 $data['telefono'],
				 $data['tipo'],
				 $data['numero_documento']
				 ]);

				 if ($exe){
					 return true;
				 } else {
					 return false;
				 }
	}

	


	public function consultaUsuario($id){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` INNER JOIN rol ON rol_Id_rol=Id_rol WHERE `N_identificacion`=?");
		$stm->execute([$id]);
		return $stm->fetch(PDO::FETCH_OBJ);
	}

	public function consultaProcesos(){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` INNER JOIN proceso on proceso.id=usuario.proceso_id");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function consultaJustificacion(){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` INNER JOIN proceso on proceso.id=usuario.proceso_id INNER JOIN justificacion on justificacion.idjustificacion=proceso.justificacion_idjustificacion");
		$stm->execute();
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function modificarAprendiz($data){
		$stm=$this->conexion->conectar()->prepare("UPDATE `usuario` SET `Nombre`=?,`Apellido`=?,`Direccion`=?,`Correo`=?,`Telefono`=?,`T_identificacion`=?,`N_identificacion`=?,`Estado`=? WHERE `N_identificacion`=?");
		$exe = $stm->execute([$data['nombre'],
						$data['apellido'],
						$data['direccion'],
						$data['correo'],
						$data['telefono'],
						$data['t_identificacion'],
						$data['n_identificacion'],
						$_SESSION['aprendiz'][0]
					]);
					
		if ($exe) {
			return true;
		} else {
			return false;
		}
		

	}

	public function modificarInstructor($data){
		$stm=$this->conexion->conectar()->prepare("UPDATE `usuario` SET `Nombre`=?, `Apellido`=?, `Direccion`=?, `Correo`=?, `Telefono`=?, `T_identificacion`=?, `N_identificacion`=?, `Estado`=? WHERE `N_identificacion`=?");
		$exe = $stm->execute([$data['nombre'],
						$data['apellido'],
						$data['direccion'],
						$data['correo'],
						$data['telefono'],
						$data['tipo'],
						$data['numero_documento'],
						$data['estado'],
						$_SESSION['instructor'][0]
						]);
				if ($exe){
					return true;
				} else{
					return false;
				}

						
	
	}


	public function insertarInstructor($data){
		$stm=$this->conexion->conectar()->prepare("INSERT INTO `usuario` SET `Nombre`=?,`Apellido`=?,`Direccion`=?,`Correo`=?,`Telefono`=?,`T_identificacion`=?,`N_identificacion`=?,`Estado`=?, Password = ?");
		$exe = $stm->execute([$data['nombre'],
						$data['apellido'],
						$data['direccion'],
						$data['correo'],
						$data['telefono'],
						$data['tipo'],
						$data['numero_documento'],
						'activo',
						$data['pass']
					]);
		if ($exe) {
			return true;
		} else {
			return false;
		}
		
		
	}

	public function insertarJustificacion($data){
		$stm=$this->conexion->conectar()->prepare("INSERT INTO `justificacion` SET `id`, `fecha_envio`=?, `usuario_Id_usuario`=?, `estado_idestado`=?");
		$exe = $stm->execute([$data['fecha'],
						$data['documento'],
						$data['estado']
					]);

		if ($exe) {
			return true;
		} else {
			return false;
		}

					
	}

	public function modificarUsuario($id){
		$stm=$this->conexion->conectar()->prepare("SELECT * FROM `usuario` WHERE `N_identificacion`=?");

	}

	public function cargarAprendiz($data){
		try{
$stm=$this->conexion->conectar()->prepare("INSERT INTO `usuario`(`Id_usuario`, `Nombre`, `Apellido`, `Direccion`, `Correo`, `Telefono`, `T_identificacion`, `N_identificacion`, `num_ficha`, `Password`, `rol_Id_rol`, `estado_idestado`, `proceso_id`) VALUES (NULL,?,?,?,?,?,?,?,?,?,?,1,1)");
 		

		if ($stm) {
			return true;
		} else {
			return false;
		}
		}catch(Excepcion $e){
			die($e->getMessage());
		}
 	
 }
}


 ?>