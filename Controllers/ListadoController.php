<?php

	function devolverLista(){
		include_once "../Models/AlumnoClass.php";
		$alumno = new Alumno();

		$data = $alumno->ListaCompleta();
		return $data;
	}

 ?>