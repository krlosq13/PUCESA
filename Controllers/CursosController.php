<?php
	session_start();

	//header("Location: ../Views/index.php");

	class CursosController{

		private $idcargocurso;
		private $idalumnos;
		private $link;

		public function __construct(){
			require_once "../Models/CursoClass.php";
			$this->link = new Curso();
			$this->idcargocurso = $_SESSION['cargocurso'];
			$this->idalumnos = $_REQUEST['idalumno'];

			$this::inscritoCurso();
		}

		public function inscritoCurso(){
			$rpta = $this->link->checkMatricula($this->idcargocurso, $this->idalumnos);

			if($rpta[0] > 0){
				header("Location: ../Views/matriculas2.php?idcargocurso=".$this->idcargocurso."&msg=Ya fue Matriculado");
			}else{
				$this::insertarMatricula();
			}
			return $rpta[0];
			#rtpa Si = 1   y NO = 0
		}

		public function insertarMatricula(){
			echo "insetar si no esta <br>";
			echo $idcargocurso = $_SESSION['cargocurso'];
			echo $idalumnos = $_REQUEST['idalumno'];

			$this->link->agregarCurso($idcargocurso,$idalumnos,1);
			header("Location: ../Views/matriculas2.php?idcargocurso=".$this->idcargocurso."&msg=Guardado");
		}
	}

	$vCurso = new CursosController();
?>