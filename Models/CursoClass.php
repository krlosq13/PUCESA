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
			$sql = "SELECT idcargocurso, idCurso, idDocente, idfrecuencia, idHorario,fechaInicio,fechaFinal FROM cargocurso";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			return $datos;
		}

		public function mostrarCurso($idcurso){
			$sql = "SELECT cursos, idmodulo FROM cursos WHERE idcursos = $idcurso";
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

		public function agregarCurso($idcargocurso,$idalumnos,$idpersonal=1){
			$fecha = date('Y-m-d');
			$sql = "INSERT INTO matriculas (fecMatricula, idcargocurso, idalumnos, idpersonal) VALUES ('$fecha',$idcargocurso,$idalumnos,$idpersonal)";
			$this->mysqli->query($sql);
		}

		public function checkMatricula($id, $idalu){
			$sql = "SELECT idmatriculas FROM matriculas WHERE idcargocurso = '$id' AND idalumnos = '$idalu'";
			$datos = $this->mysqli->query($sql) or die("Error: ".mysql_error());
			$numero = $datos->fetch_array();
			echo $numero[0];
			return $numero[0];
		}
	}

?>
