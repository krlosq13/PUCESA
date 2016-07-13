<?php 

	class Matricula{

		private $mysqli;

		function __construct()
		{
			require_once "../Core/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public function ListaMatricula($codCurso){
			$sql = "SELECT idalumnos FROM matriculas WHERE idcargocurso = $codCurso";
			$data = $this->mysqli->query($sql);
			return $data;
		}
	}

?>