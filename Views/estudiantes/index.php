<h3>Vista del estudiante Principal</h3>
<?php
	//$datos = $estudiantes->index();
	while ($row = mysqli_fetch_array($datos)) {
		echo $row['id'];
		echo $row['nombre'];
	}

?>