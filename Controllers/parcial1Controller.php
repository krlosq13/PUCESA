<?php
	echo "Recibiendo";
	$idalumno = array();
	$notas    = array();

	echo $idalumno;
	echo "<br>";
	echo $notas;

	$idalumno[] = $_REQUEST['idalumno'];
	$notas[] = $_REQUEST['practica1'];

	foreach ($idalumno as $key) {
		echo $key."<br>";
	}

	foreach ($notas as $key) {
		echo $key."<br>";
	}
?>