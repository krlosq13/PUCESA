<?php include_once "header.php";
	  include_once "../Controllers/ListadoController.php";
	  $data = devolverLista();
?>

<div class="container">
	<div class="row">
		<form action="" method="get" accept-charset="utf-8">
			<label>Buscar<input type="text" name="nombre"></label>
			<button type="submit">Buscar</button>
		</form>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-striped">
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
			    <tbody>
			    	<?php
						while ($row = $data->fetch_assoc()) {
					 ?>
			        <tr>
			            <td><?php echo $row['idalumnos'];?></td>
			            <td><?php echo $row['nombres'];?></td>
			            <td><?php echo $row['paterno'];?></td>
			            <td><?php echo $row['materno'];?></td>
			            <td><?php echo $row['fecNacimiento'];?></td>
			            <td><?php echo $row['genero'];?></td>
			            <td><?php echo $row['celular'];?></td>
			            <td><?php echo $row['direccion'];?></td>
			            <td><a href="#" class="btn btn-primary">Editar</a></td>
			            <td><a href="#" class="btn btn-danger">Borrar</a></td>
			        </tr>
			        <?php
			        	}
			        ?>
			    </tbody>
			</table>
		</div>
	</div>
</div>