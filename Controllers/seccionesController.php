<?php namespace Controllers;

	class seccionesController{

		public function index(){
			print "Hola soy el index de las secciones";
		}

		public function ver($num){
			echo "Eres el numero: " . $num;
		}
	}

?>