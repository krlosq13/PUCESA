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
		}

		public function ListaFrecuencia(){
			$frec = $this->link->mostrarFrecuenciaLista();
			return $frec;

		}

		public function ListaHorario(){
			$hora = $this->link->mostrarHorarioLista();
			return $hora;

		}

		public function ListaDocentes(){
			$doce = $this->link->mostrarDocenteLista();
			return $doce;

		}

		public function ListaCursos(){
			$cur = $this->link->mostrarCursosLista();
			return $cur;
		}

	}

?>