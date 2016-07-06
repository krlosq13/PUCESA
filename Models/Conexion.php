<?php namespace Models;

	class Conexion{

		private $con;

		function __construct(){
			$this->con = new \mysqli("localhost","root", "admin", "educacion");
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos = $this->con->query($sql);
			return $datos;
		}
	}

 ?>
