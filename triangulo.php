<?php  

	class Triangulo extends Poligono
	{

		private $lado_a;
		private $lado_b;
		private $lado_c;
		private $altura;

		function __construct($a, $b, $c, $height)
		{

			$this -> lados = 3;
			$this -> lado_a = $a;
			$this -> lado_b = $b;
			$this -> lado_c = $c;
			$this -> altura = $height;

		}

		public function perimetro()
		{

			return $this -> lado_a + $this -> lado_b + $this -> lado_c;

		}

		public function area()
		{

			return ($this -> lado_b * $this -> altura) / 2;
			
		}

	}