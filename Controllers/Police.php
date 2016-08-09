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

			$this->nombres  =trim(ucwords($_POST['nombres']));
			$this->paterno  =trim(ucwords($_POST['paterno']));
			$this->materno  =trim(ucwords($_POST['materno']));
			$this->celular  =trim(ucwords($_POST['celular']));
			$this->dni   	=trim(ucwords($_POST['dni']));
			$this->email   	=trim(ucwords($_POST['email']));
			$this->dia 		=trim(ucwords($_POST['dia']));
			$this->mes 		=trim(ucwords($_POST['mes']));
			$this->year 	=trim(ucwords($_POST['year']));
			$this->direccion=trim(ucwords($_POST['direccion']));
			$this->genero  	=trim(ucwords($_POST['genero']));

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