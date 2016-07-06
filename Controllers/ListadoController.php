<?php

	function devolverLista(){
		include "../Models/AlumnoClass.php";
		$alumno = new Alumno();

		$data = $alumno->ListaCompleta();
		return $data;
	}

 ?>