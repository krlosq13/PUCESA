<?php
	session_start();
	include_once "header.php";
	require_once "../Models/CursoClass.php";
	$curso = new Curso();
	$data = $curso->CursosActivos();

?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-12">
			<table class="table">
				<tr>
					<th>#</th>
					<th>Nombre Curso</th>
					<th>Nombre Docente</th>
					<th>Frecuencia</th>
					<th>Horario</th>
					<th>Fecha Inicio</th>
					<th>Fecha Final</th>
					<th></th>
				</tr>
				<?php
				while ($row = $data->fetch_array()) {

				$cur = $curso->mostrarCurso($row[1]);
				$doc = $curso->mostrarDocente($row[2]);
				$frec = $curso->mostrarFrecuencia($row[3]);
				$hor = $curso->mostrarHorario($row[4]);

				 ?>
				<tr>
					<td><?php echo $row[0];?></td>
					<td><?php echo $cur['cursos'];?></td>
					<td><?php echo $doc['docente'];?></td>
					<td><?php echo $frec['frecuencia'];?></td>
					<td><?php echo $hor['horas'];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
					<td><a class="btn btn-primary" href="buscar1.php?idcargocurso=<?php echo $row[0];
					$_SESSION['cargocurso'] = $row[0];
					?>">Add Alumnos</a></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>