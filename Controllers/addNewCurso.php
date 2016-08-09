<?php
	include_once "../Models/CursoClass.php";

	$idCurso = $_REQUEST['idcurso'];
	$idDocente = $_REQUEST['iddocente'];
	$idfrecuencia = $_REQUEST['idfrecuencia'];
	$idHorario = $_REQUEST['idhorario'];
	$fechaInicio = $_REQUEST['fechainicio'];
	$fechaFinal = $_REQUEST['fechafinal'];
	$numHoras = $_REQUEST['numhoras'];
	$laboratorio = $_REQUEST['laboratorio'];
	$observacion = $_REQUEST['obs'];
	$idpersonal = $_REQUEST['idpersonal'];

	$curso = new Curso();
	$curso->AddCargoCurso($idCurso,$idDocente,$idfrecuencia,$idHorario,$fechaInicio,$fechaFinal,$numHoras,$laboratorio,$observacion,$idpersonal);
	header("Location: ../Views/index.php");
?>