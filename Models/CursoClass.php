<?php

	class Curso {

		private $mysqli;

		function __construct() {
			require_once "../Core/Conexion.php";
			$conn         = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public static function Add($cursos, $idmodulo) {

			$sql = "INSERT INTO curso (idcurso,cursos,idmodulo) VALUES (NULL, '$cursos', '$idmodulo')";
			$this->mysqli->query($sql) or die("Error: ".mysql_error());
		}

		public function Edit() {
			//$sql = "";
			#$this->mysqli->query($sql) or die("Error: ".mysql_error());
		}

		public function CursosActivos(){
			$sql = "SELECT idcargocurso,idCurso,idDocente,idfrecuencia,idHorario,fechaInicio,fechaFinal FROM cargocurso";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			return $datos;
		}

		public function mostrarCurso(){
			$sql = "SELECT cursos, idmodulo FROM educacion.curso where idcurso = 1";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			return $datos;
		}

	}

	$curso = new Curso();
	$data = $curso->CursosActivos();
	while ($row = $data->fetch_assoc()) {
		echo $row['idcargocurso']."<br>";
		echo $row['idCurso']."<br>";
		echo $row['idDocente']."<br>";
		echo $row['idfrecuencua']."<br>";
		echo $row['idHorario']."<br>";
		echo $row['fechaInicio']."<br>";
		echo $row['fechaFinal']."<br>";
	}
?>
