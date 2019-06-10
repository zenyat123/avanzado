<?php

	class Perro
	{

		public $nombre;
		public $raza;
		public $edad;
		public $genero;
		public $foto;
		public $comida;
		public $adiestrado;
		private $pulgas;
		public static $mejor_amigo = "Hombre";
		const MEJOR_CUALIDAD = "Fidelidad";

		function __construct($name, $race, $age, $gender, $photo, $trained, $fleas)
		{

			$this -> nombre = $name;
			$this -> raza = $race;
			$this -> edad = $age . " años";
			$this -> genero = $gender;
			$this -> foto = $photo;
			$this -> adiestrado = ($trained) ? "Adiestrado(a)" : "No esta adiestrado(a)";
			$this -> pulgas = $fleas;

			echo "<p>Hola</p>";

		}

		public function aparecer()
		{

			echo "<img width = '200px' height = '300px' src = '" . $this -> foto . "'>";

		}

		public function revisar()
		{

			echo ($this -> pulgas) ? "<p>Tiene pulgas</p>" : "<p>No tiene pulgas</p>";

		}

		public function ladrar()
		{

			echo "<p>Guau!! Guau!! Guau!!</p>";

		}

		public function comer($eat)
		{

			$this -> comida = $eat;

			echo "<p>" . $this -> nombre . " come " . $this -> comida . "</p>";

		}

		public function realizar()
		{

			self::ladrar();

			Perro::comer("Jamón");

			echo "<p>Su mejor amigo es el " . self::$mejor_amigo . "</p>";

			echo "<p>La mejor cualidad de los perros es la " . Perro::MEJOR_CUALIDAD . "</p>";

		}

		function __destruct()
		{

			echo "<p>Chao</p>";

		}

	}

	$malu = new Perro("Malú", "Golden Retriever", 3, "Hembra", "img/Malu.jpg", true, false);

	echo "<h1>" . $malu -> nombre . "</h1>";
	echo "<h2>" . $malu -> raza . "</h2>";
	echo "<h3>" . $malu -> edad . "</h3>";
	echo "<h4>" . $malu -> genero . "</h4>";
	echo "<h5>" . $malu -> adiestrado . "</h5>";

	$malu -> aparecer();
	$malu -> revisar();
	$malu -> ladrar();
	$malu -> comer("Carne");
	$malu -> comer("Pepas");
	$malu -> comer("Pasabocas");
	$malu -> realizar();