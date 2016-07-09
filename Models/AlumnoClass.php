mysq<?php

	class Alumno
	{
		private $mysqli;

		function __construct()
		{
			require_once "../Core/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		function Add($dni,$nombres,$paterno,$materno,$fecNacimiento,$genero,$celular,$email,$direccion){
			$sql = "INSERT INTO alumnos (idalumnos,dni,nombres,paterno,materno,fecNacimiento,genero,celular,email,direccion) VALUES (NULL,'$dni','$nombres','$paterno','$materno','$fecNacimiento','$genero','$celular','$email','$direccion')";
			$this->mysqli->query($sql) or die("Error: ".mysql_error());
		}

		public function Duplicado($dni,$nombres,$paterno,$materno,$fecNacimiento){
			$sql = "SELECT idalumnos FROM alumnos WHERE dni = '$dni' AND nombres = '$nombres' AND paterno = '$paterno' AND materno = '$materno' AND fecNacimiento = '$fecNacimiento'";
			$dato = $this->mysqli->query($sql);
			$numero = $dato->num_rows;
			return $numero;
		}

		public function ListaCompleta(){
			$sql = "SELECT idalumnos,dni,nombres,paterno,materno,fecNacimiento,genero,celular,email,direccion FROM alumnos";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function busquedaAlumnos($nom, $ape){
			$sql = "SELECT idalumnos,dni,nombres,apellidos,fecNacimiento,genero,celular,email,direccion FROM alumnosBusqueda WHERE nombres LIKE '%$nom%' AND apellidos LIKE '%$ape%'";
			$data = $this->mysqli->query($sql);
			return $data;
		}

	}


 ?>
