<?php

	include_once "header.php";

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Crear nuevo curso</h2>
			<form class="form-group">
				<table class="table">
					<tr>
						<th>Nombre Curso: </th>
						<td>
							<input type="text" name="Curso" class="form-control">
							<select name="curso" id="" class="form-control">
								<option value="0">SELECCIONE</option>
							</select>
							<button type="button" class="btn btn-primary">Nuevo Curso</button>
						</td>

					</tr>
					<tr>
						<th>Docente: </th>
						<td>
							<select name="docente" id="" class="form-control">
								<option value="1000">Edgar Apaza</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Frecuencia: </th>
						<td>
							<select name="frecuencia" id="" class="form-control">
								<option value="0">SELECCIONE</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Horario: </th>
						<td>
							<select name="horario" id="" class="form-control">
								<option value="0">SELECCIONE</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Fecha Inicio: </th>
						<td>
							<input type="date" name="fecinicio" class="form-control" value="" placeholder="">
						</td>
					</tr>
					<tr>
						<th>Fecha Final: </th>
						<td><input type="date" name="fecfinal" class="form-control" value="" placeholder=""></td>
					</tr>
					<tr>
						<th>Num Horas: </th>
						<td><input type="number" name="numhoras" class="form-control" value="20" placeholder=""></td>
					</tr>
					<tr>
						<th>Laboratorio: </th>
						<td>
							<select name="laboratorio" id="" class="form-control">
								<option value="Lab1">Laboratorio 1</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Obs: </th>
						<td><textarea name="obs" class="form-control"></textarea></td>
					</tr>
					<tr>
						<th>Personal: </th>
						<td>
							<select name="personal" id="" class="form-control">
								<option value="1">Secretaria</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit" class="btn btn-primary"> Guardar</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>