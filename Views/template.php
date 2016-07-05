<?php namespace Views;

	$template = new Template();

	class Template{

		public function __construct()
		{
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Administracion de estudiantes</title>
		<link rel="stylesheet" href="<?php URL; ?>Views/templates/css/bootstrap.css">
	</head>
	<body>

<?php
		}

		public function __destruct(){
 ?>
  </body>
  </html>
 <?php


		}
	}


 ?>