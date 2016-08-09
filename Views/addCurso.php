<?php

	include_once "header.php";
	include_once "../Controllers/AddCursoControllers.php";

	$vCurso = new CursosController();

	$frec = $vCurso->ListaFrecuencia();
	$hora = $vCurso->ListaHorario();
	$doce = $vCurso->ListaDocentes();
	$cur  = $vCurso->ListaCursos();

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Crear nuevo curso</h2>
			<form class="form-group" action="../Controllers/addNewCurso.php">
				<table class="table">
					<tr>
						<th>Nombre Curso: </th>
						<td>
							<select name="idcurso" class="form-control">
								<?php
									while ($filac = $cur->fetch_array()) {
								?>
									<option value="<?php echo $filac[0];?>"><?php echo $filac[1];?></option>

								<?php
									}
								 ?>
							</select>
						</td>
						<td>
							<button type="button" class="btn btn-primary">Agregar Nuevo Curso</button>
						</td>

					</tr>
					<tr>
						<th>Docente: </th>
						<td>
							<select name="iddocente" id="" class="form-control">
								<?php
									while ($filad = $doce->fetch_array()) {
								?>
									<option value="<?php echo $filad[0];?>"><?php echo $filad[1];?></option>

								<?php
									}
								 ?>
							</select>
						</td>
						<td>
							<button type="button" class="btn btn-primary">Agregar Nuevo Docente</button>
						</td>
					</tr>
					<tr>
						<th>Frecuencia: </th>
						<td>
							<select name="idfrecuencia" id="" class="form-control">
								<option value="0">SELECCIONE</option>
								<?php
									while ($filaf = $frec->fetch_array()) {
								?>
								<option value="<?php echo $filaf[0];?>"><?php echo $filaf[1];?></option>
								<?php
									}
								 ?>
							</select>
						</td>
						<td>
							<button type="button" class="btn btn-primary">Agregar Nueva Frecuencia</button>
						</td>
					</tr>
					<tr>
						<th>Horario: </th>
						<td>
							<select name="idhorario" id="" class="form-control">
								<option value="0">SELECCIONE</option>
								<?php
									while ($filah = $hora->fetch_array()) {
								?>
								<option value="<?php echo $filah[0];?>"><?php echo $filah[1];?></option>
								<?php
									}
								 ?>
							</select>
						</td>
						<td>
							<button type="button" class="btn btn-primary">Agregar Nuevo Horario</button>
						</td>
					</tr>
					<tr>
						<th>Fecha Inicio: </th>
						<td>
							<input type="date" name="fechainicio" class="form-control" value="" placeholder="">
						</td>
					</tr>
					<tr>
						<th>Fecha Final: </th>
						<td><input type="date" name="fechafinal" class="form-control" value="" placeholder=""></td>
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
							<select name="idpersonal" id="" class="form-control">
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