<?php
include_once "header.php";
include_once "../Controllers/ListadoController.php";
include_once "../Models/AlumnoClass.php";

	$alumno = new Alumno();

$curso = $_REQUEST['idcargocurso'];

$data = listaAlumnos($curso);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Lista de Alumnos Matriculados</h3>
			<p>Fecha hoy: <?php $fecha = date('d-m-Y'); echo $fecha?></p>
		</div>
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>#</th>
					<th>Alumnos</th>
					<th>Otros</th>
				</tr>
					<?php
						$i =1;
						while ($fila = $data->fetch_array()) {
					 ?>
				<tr>
					<td><?php echo $i;?></td>
					 <td>
					 <?php
					 	$dato = $alumno->DevolverNombre($fila[0]);
					 	echo $dato['alumno']; ?>
					 </td>
				</tr>
					 <?php $i++; }?>
			</table>
		</div>
	</div>
</div>
