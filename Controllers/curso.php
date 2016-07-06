<?php
	echo "ya";
	require_once "../Models/CursoClass.php";

	$curso1    = $_REQUEST['curso'];
	$idmodulo = $_REQUEST['idmodulo'];

	$curso = new Curso();
	$curso->Add($curso1, $idmodulo);

	//header("Location: ../Views/index.php");

?>