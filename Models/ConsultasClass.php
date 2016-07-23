<?php

	class Consultas{

		private $mysqli;

		function __construct()
		{
			require_once "../Core/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public function getFrecuencia(){
			$sql = "SELECT idfrecuencia, frecuencia FROM frecuencia";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function getHorario(){
			$sql = "SELECT idHorario, horas FROM horario";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function getDocente(){
			$sql = "SELECT iddocentes, CONCAT(nombres, ' ',apellidos) as docente FROM docentes";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function getPersonal(){
			$sql = "SELECT idpersonal, CONCAT(nombres,' ',paterno,' ',materno) as personal FROM personal";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		/*public function getLaboratorio(){
			$sql = "";
			$data = $this->mysqli->query($sql);
			return $data;
		}*/
	}

?>