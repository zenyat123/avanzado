<?php  

	class Cuadrado extends Poligono
	{

		private $lado;

		function __construct($side)
		{

			$this -> lados = 4;
			$this -> lado = $side;

		}

		public function perimetro()
		{

			return $this -> lados * $this -> lado;

		}

		public function area()
		{

			return pow($this -> lado, 2);

		}

	}