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
					<th>Notas Practica1</th>
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

					 <td>
					 <form action="../Controllers/parcial1Controller.php" method="post">

					 	<input type="text" name="idalumno" value="<?php echo $fila[0];?>" />
					 	<input type="number" name="practica1" placeholder="Nota" />
					 </form>
					 </td>
				</tr>
					 <?php $i++; }?>
				<tr>
					<td></td>
					<td><button type="submit" class="btn btn-success">Guardar</button></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>
