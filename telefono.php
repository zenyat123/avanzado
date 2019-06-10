<?php   

	class Telefono
	{

		protected $marca;
		protected $modelo;
		protected $comunicacion;
		protected $via = true;

		function __construct($mark, $model)
		{

			$this -> marca = $mark;
			$this -> modelo = $model;
			$this -> comunicacion = ($this -> via) ? "Alámbrica" : "Inalámbrica";

		}

		public function detalles()
		{

			return print

			("<ul>

				<li>Marca: <b>" . $this -> marca . "</b></li>
				<li>Modelo: <b>" . $this -> modelo . "</b></li>
				<li>Comunicación: <b>" . $this -> comunicacion . "</b></li>

			</ul>");

		}

		public function llamar()
		{

			return print("<p>Riiiiing Riiiiing!!!</p>");

		}

	}

	class Celular extends Telefono
	{

		protected $via = false;

		function __construct($mark, $model)
		{

			parent::__construct($mark, $model);

		}

	}

	final class SmartPhone extends Celular 
	{

		protected $coneccion;
		protected $internet = true;

		function __construct($mark, $model)
		{

			$this -> coneccion = ($this -> internet) ? "Internet" : "Sin Internet"; 

			parent::__construct($mark, $model);

		}

		public function detalles()
		{

			return print

			("<ul>

				<li>Marca: <b>" . $this -> marca . "</b></li>
				<li>Modelo: <b>" . $this -> modelo . "</b></li>
				<li>Comunicación: <b>" . $this -> comunicacion . "</b></li>
				<li>Dispositivo con: <b>" . $this -> coneccion . "</b></li>

			</ul>");

		}

	}

	echo "<h1>Evolución de los Teléfonos</h1>";

	echo "<h2>Teléfono</h2>";

	$telefono_casa = new Telefono("Panasonic", "T122");
	$telefono_casa -> detalles();
	$telefono_casa -> llamar();

	echo "<h2>Celular</h2>";

	$mi_celular = new Celular("Sony", "Ericson C125");
	$mi_celular -> detalles();
	$mi_celular -> llamar();

	echo "<h2>SmartPhone</h2>";

	$mi_smart_phone = new SmartPhone("Alcatel", "Pop C7+");
	$mi_smart_phone -> detalles();
	$mi_smart_phone -> llamar();