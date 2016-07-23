<?php
	include_once "header.php";
	include_once "../Controllers/busquedaController.php";

	$_SESSION['cargocurso'] = $_REQUEST['idcargocurso'];

	$nombre = $_REQUEST['nombre'];
	$apellidos = $_REQUEST['apellidos'];

	$data = buscarPersona($nombre, $apellidos);

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<form method="post">
						<td><input type="text" name="nombre" class="form-control" value="<?php ?>" placeholder="Nombre"></td>
						<td><input type="text" name="apellidos" class="form-control" value="<?php ?>" placeholder="Apellidos"></td>
						<td><button type="submit" name="btnBuscar" class="btn btn-primary">Buscar</button></td>
					</form>
				</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form class="form-group" action="../Controllers/CursosController.php">
			<table class="table table-bordered table-striped">
				<em class="alert"> <?php echo @$msg = $_REQUEST['msg']; ?> </em>
			    <thead>
			        <tr>
			            <th>#</th>
			            <th>Nombre</th>
			            <th>Apellidos</th>
			            <th>Genero</th>
			            <th>Num. Celular</th>
			            <th></th>
			        </tr>
			    </thead>
			    <input type="hidden" name="idcargocurso" value="<?php  echo $_SESSION['cargocurso'];?>">
			    <tbody>
					<?php
					while ($fila = $data->fetch_array()) {
					 ?>
					<tr>

						<td>
						<input type="hidden" name="idalumno" value="<?php echo $fila['idalumnos'];?>"><?php echo $fila[0];?></td>
						<td><?php echo $fila[2];?></td>
						<td><?php echo $fila[3];?></td>
						<td><?php echo $fila[5];?></td>
						<td><?php echo $fila[6];?></td>
						<td><a href="../Controllers/CursosController.php?idalumno=<?php echo $fila[0];?>" class="btn btn-primary">Matricular</a></td>
					</tr>
					<?php
					}
					?>

				</tbody>
			</table>
			</form>
		</div>
	</div>
</div>
<?php echo "final"; ?>