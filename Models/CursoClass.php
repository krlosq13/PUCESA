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

		public function mostrarCurso($idcurso){
			$sql = "SELECT cursos, idmodulo FROM curso where idcurso = $idcurso";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			$fila = $datos->fetch_assoc();
			return $fila;
		}

		public function mostrarDocente($idDocente){
			$sql = "SELECT CONCAT(nombres,' ', apellidos) as docente FROM docentes WHERE idDocentes = $idDocente";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			$fila = $datos->fetch_assoc();
			return $fila;
		}

		public function mostrarFrecuencia($idfrecuencia){
			$sql = "SELECT frecuencia FROM frecuencia WHERE idfrecuencia = $idfrecuencia";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			$fila = $datos->fetch_assoc();
			return $fila;
		}

		public function mostrarHorario($idHorario){
			$sql = "SELECT horas FROM horario WHERE idhorario = $idHorario";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			$fila = $datos->fetch_assoc();
			return $fila;
		}
	}

	$curso = new Curso();
	$data = $curso->CursosActivos();

	while ($row = $data->fetch_assoc()) {
		echo $row['idcargocurso']."<br>";

		$cur = $curso->mostrarCurso($row['idCurso']);
		echo $cur['cursos'];

		$doc = $curso->mostrarDocente($row['idDocente']);
		echo $doc['docente'];

		$frec = $curso->mostrarFrecuencia($row['idfrecuencia']);
		echo $frec['frecuencia'];

		$hor = $curso->mostrarHorario($row['idHorario']);
		echo $hor['horas'];
		echo $row['fechaInicio']."<br>";
		echo $row['fechaFinal']."<br>";
	}


?>
