<?php include_once "header.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form class="form-horizontal" action="../Controllers/Police.php" method="post">
					<span class="alert alert-info"><?php echo @$_REQUEST['confirm']; ?></span>
					<span class="alert alert-info"><?php echo @$_REQUEST['error']; ?></span>
					<br><hr>
				    <div class="form-group">
				        <label class="control-label col-xs-3">Nombre Curso:</label>
				        <div class="col-xs-9">
				            <input type="text" name="nombres" class="form-control" placeholder="Nombre">
				        </div>
				    </div>

				    <div class="form-group">
				        <label class="control-label col-xs-3">Modulo:</label>
				        <div class="col-xs-3">
				            <select class="form-control" name="modulo">
				                <option>Modulo</option>
				                <option value="1">1</option>
				            </select>
				        </div>
				    </div>
				    <div class="form-group">
				        <div class="col-xs-offset-3 col-xs-9">
				            <input type="submit" class="btn btn-primary" value="Enviar">
				            <input type="reset" class="btn btn-default" value="Limpiar">
				        </div>
				    </div>
				</form>
		</div>
	</div>
</div>