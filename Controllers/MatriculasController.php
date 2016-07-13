<?php 

	include_once "../Models/MatriculaClass.php";
	$matricula = new Matricula();
	$valor = $matricula->ListaMatricula(4);
	while ($fila = $valor->fetch_array()) {
		echo "Alumno: " . $fila[0];
		echo "<br>";
	}

?>