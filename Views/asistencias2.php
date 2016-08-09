<script type="text/javascript">
function Activos(){
	var i;
	var lista = new Array(40);
	var total = document.forms[0]
	for(i=1;i<total.length;i++){
		var chk = document.getElementById(""+i+"").checked;
		alert(chk);
		lista[i]=chk;
	}

	for(i=1;i<total.length;i++){
		document.write(lista[i]);
	}
}
</script>

<?php
include_once "header.php";
include_once "../Controllers/ListadoController.php";
include_once "../Models/AlumnoClass.php";

$alumno = new Alumno();

$curso = $_REQUEST['idcargocurso'];

$data = listaAlumnos($curso);
$numero = $data->num_rows;
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<input type="text" id="numero" value="<?php echo $numero;?>">
			<h3>Lista de Alumnos Matriculados</h3>
			<p>Fecha hoy: <?php $fecha = date('d-m-Y'); echo $fecha?></p>
		</div>
		<div class="col-md-12">
		<form name="f1" action="" enctype="text/plain">
			<table class="table">
				<tr>
					<th>#</th>
					<th>Alumnos</th>
					<th>Asistencia</th>
				</tr>
				<?php
				$i =1;
				while ($fila = $data->fetch_array())
				{
				?>
				<tr>
					<td><?php echo $i;?></td>
					 <td>
					 	<input type="text" name="idalumno" value="<?php echo $fila[0];?>" />
					 <?php
					 	$dato = $alumno->DevolverNombre($fila[0]);
					 	echo $dato['alumno'];
					 ?>
					 </td>
					 <td>
					 	<input type="checkbox" id="<?php echo $i?>"></input>
					 </td>
				</tr>

				<?php
				$i++;
				}
				?>

			</table>
			<button type="button" onclick="Activos()">Activar</button>
		</form>
		</div>
	</div>
</div>
