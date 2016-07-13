<?php
	session_start();
	include_once "header.php";
	include_once "../Controllers/ListadoController.php";
	$data = devolverLista();

	$_SESSION['cargocurso'] = $_REQUEST['idcargocurso'];
	$idcargocurso = $_SESSION['cargocurso'];


 ?>

 <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Curso: <?php  echo $idcargocurso;?></h2>
 			<form class="form-group" action="../Controllers/">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="apellidos" placeholder="Apellidos">
				<button type="submit" class="btn btn-primary">Buscar</button>
				<input type="hidden" name="idcargocurso" value="<?php  echo $idcargocurso;?>">
			</form>

			<form class="form-group" action="../Controllers/CursosController.php">
			<table class="table table-bordered table-striped">
				<em class="alert"> <?php echo @$msg = $_REQUEST['msg']; ?> </em>
			    <thead>
			        <tr>
			            <th>#</th>
			            <th>Nombre</th>
			            <th>Apellido Paterno</th>
			            <th>Apellido Materno</th>
			            <th>Fecha nacimiento</th>
			            <th>Genero</th>
			            <th>Num. Celular</th>
			            <th>Direccion</th>
			            <th></th>
			        </tr>
			    </thead>
			    <input type="hidden" name="idcargocurso" value="<?php  echo $idcargocurso;?>">
			    <tbody>
			    	<?php
						while ($row = $data->fetch_assoc()) {

					 ?>
			        <tr>

			            <td>
			            <input type="hidden" name="idalumno" value="<?php echo $row['idalumnos'];?>">
			            <?php echo $row['idalumnos'];?></td>
			            <td><?php echo $row['nombres'];?></td>
			            <td><?php echo $row['paterno'];?></td>
			            <td><?php echo $row['materno'];?></td>
			            <td><?php echo $row['fecNacimiento'];?></td>
			            <td><?php echo $row['genero'];?></td>
			            <td><?php echo $row['celular'];?></td>
			            <td><?php echo $row['direccion'];?></td>
			            <td><a href="../Controllers/CursosController.php?idalumno=<?php echo $row['idalumnos'];?>" class="btn btn-primary">Matricular</a></td>
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