<?php
	function buscarPersona(){
		include_once "../Models/AlumnoClass.php";
		$alumno = new Alumno();
		echo $nom = trim(ucwords($_REQUEST['nombre']));
		echo $ape = trim(ucwords($_REQUEST['apellidos']));
		echo $idcargocurso = $_REQUEST['idcargocurso'];

		$data = $alumno->busquedaAlumnos($nom, $ape);
		return $data;
	}
?>