<?php #namespace Controllers;

	class Police
	{
		private $alumno;

		private $nombres;
		private $paterno;
		private $materno;
		private $celular;
		private $dni;
		private $email;
		private $dia;
		private $mes;
		private $year;
		private $direccion;
		private $fecNacimiento;
		private $genero;

		function __construct()
		{
			include "../Models/AlumnoClass.php";
			$this->alumno = new Alumno();

			$this->nombres  =trim($_POST['nombres']);
			$this->paterno  =trim($_POST['paterno']);
			$this->materno  =trim($_POST['materno']);
			$this->celular  =trim($_POST['celular']);
			$this->dni   	=trim($_POST['dni']);
			$this->email   	=trim($_POST['email']);
			$this->dia 		=trim($_POST['dia']);
			$this->mes 		=trim($_POST['mes']);
			$this->year 	=trim($_POST['year']);
			$this->direccion=trim($_POST['direccion']);
			$this->genero  	=trim($_POST['genero']);
			$this->fecNacimiento = $this->year."-".$this->mes."-".$this->dia;

			$this::CheckDuplicado();
		}

		function Agregar(){
			$this->alumno->Add($this->dni,$this->nombres,$this->paterno,$this->materno,$this->fecNacimiento,$this->genero,$this->celular,$this->email,$this->direccion);
			header("Location: ../Views/addalumno.php?confirm=Registrado con exito");
		}

		function CheckDuplicado(){

			$data = $this->alumno->Duplicado($this->dni,$this->nombres,$this->paterno,$this->materno,$this->fecNacimiento);

			if($data >0){
				header("Location: ../Views/addalumno.php?error=El alumno ya esta registrado");
			}else
			{
				$this::Agregar();

			}
		}
	}


	$police = new Police();

 ?>