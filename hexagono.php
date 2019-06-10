<?php  

	class Hexagono extends Poligono
	{

		private $lado;
		private $apotema;

		function __construct($side, $apothem)
		{

			$this -> lados = 6;
			$this -> lado = $side;
			$this -> apotema = $apothem;

		}

		public function perimetro()
		{

			return $this -> lados * $this -> lado;

		}

		public function area()
		{

			return (self::perimetro() * $this -> apotema) / 2;
			
		}

	}