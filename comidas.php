<?php  

	interface Ingredientes
	{

		public function establecer_ingredientes($lista);
		public function obtener_ingredientes();

	}

	interface Receta
	{

		public function establecer_receta($pasos);
		public function obtener_receta();

	}

	class Comidas implements Ingredientes, Receta
	{

		private $ingredientes;
		private $receta;

		public function establecer_ingredientes($lista)
		{

			$this -> ingredientes = explode(",", $lista);

		}

		public function obtener_ingredientes()
		{

			$numero_ingredientes = count($this -> ingredientes);

			$html = "<ul>";

			for($i = 0; $i < $numero_ingredientes; $i++)
			{

				$html .= "<li>" . $this -> ingredientes[$i] . "</li>";

			}

			$html .= "</ul>";

			return print($html);

		}

		public function establecer_receta($pasos)
		{

			$this -> receta = explode("|", $pasos);

		}

		public function obtener_receta()
		{

			$numero_pasos = count($this -> receta);

			$html = "<ol>";

			for($i = 0; $i < $numero_pasos; $i++)
			{

				$html .= "<li>" . $this -> receta[$i] . "</li>";

			}

			$html .= "</ol>";

			return print($html);

		}

	}

	echo "<h1>Comidas</h1>";

	echo "<h2>Bandeja Paisa</h2>";

	$bandeja_paisa = new Comidas();

	echo "<h3>Ingredientes:</h3>";

	$bandeja_paisa -> establecer_ingredientes("  

		2 posillos de Arroz,

		2 posillos de Frijoles,

		1/2 libra de Carne Molida,

		1/4 de Chicharron,

		6 tajadas de platano,
		
		2 aguacates 

	");

	$bandeja_paisa -> obtener_ingredientes();

	echo "<h3>Receta:</h3>";

	$bandeja_paisa -> establecer_receta("   

		Poner a hervir 4 posillos de agua, al estar hervida poner a cocinar el arroz |

		Cocinar en la olla de presión los frijoles |

		Fritar la Carne Molida y las tajadas de platano |

		Servir la bandeja junto con una porción de aguacate

	"); 

	$bandeja_paisa -> obtener_receta();

	echo "<h2>Changua</h2>";

	$changua = new Comidas();

	echo "<h3>Ingredientes:</h3>";

	$changua -> establecer_ingredientes("   

		2 tazas de agua,

		2 tazas de leche,

		4 huevos,

		4 hojas de cilantro fresco,

		2 cebollas largas,

		sal al gusto,

		1/8 c pimienta (opcional)

	");

	$changua -> obtener_ingredientes();

	echo "<h3>Receta:</h3>";

	$changua -> establecer_receta("   

		Se pican finamente el cilantro y la cebolla |

		En una olla grande se pone a calentar la leche con el agua, la sal y la cebolla |

		Cuando hierva, se le agregan los huevos crudos sin dejar romper las yemas y se dejan hervir por un minuto |

		En el fondo de los platos de sopa (o tazones) se pone una cucharadita de cebolla y una de cilantro |

		Se sacan cuidadosamente los huevos de la olla y se coloca un huevo en cada plato |

		Luego se les vierte el líquido muy caliente |

		La changua puede acompañarse con tajadas de pan con mantequilla

	");

	$changua -> obtener_receta();