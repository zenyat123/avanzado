<?php  

	class Rectangulo extends Poligono
	{

		private $base;
		private $altura;

		function __construct($basis, $height)
		{

			$this -> lados = 4;
			$this -> base = $basis;
			$this -> altura = $height;

		}

		public function perimetro()
		{

			return ($this -> base + $this -> altura) * 2;

		}

		public function area()
		{

			return $this -> base * $this -> altura;
			
		}

	}