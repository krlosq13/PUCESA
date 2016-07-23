<?php

	function devolverLista(){
		include_once "../Models/AlumnoClass.php";
		$alumno = new Alumno();

		$data = $alumno->ListaCompleta();
		return $data;
	}

	function listaAlumnos($codCurso){
		include_once "../Models/CursoClass.php";
		$curso = new Curso();
		$data = $curso->AlumnosMatriculados($codCurso);
		return $data;
	}

 ?>