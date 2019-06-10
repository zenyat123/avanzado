<?php   

	require "poligono.php";
	require "cuadrado.php";
	require "rectangulo.php";
	require "triangulo.php";
	require "hexagono.php";

	echo "

		<h1>Polígonos</h1>

		<p>Figura geométrica plana que está limitada por tres o más rectas y tiene tres o más ángulos y vértices.</p>

		<h2>Perímetro</h2>

		<p>El perímetro de un polígono es igual a la suma de las longitudes de sus lados.</p>

		<h2>Área</h2>

		<p>El área de un polígono es la medida de la región o superficie encerrada por un polígono.</p>

		<hr>

	";

	echo "

		<h3>Cuadrado</h3>

		<img src = 'img/cuadrado.png'>

	";

	$cuadrado = new Cuadrado(7);

	echo "<p>" . $cuadrado -> lados() . "</p>";
	echo "<p>El perímetro del " . get_class($cuadrado) . " es: " . $cuadrado -> perimetro() . "</p>"; 
	echo "<p>El área del " . get_class($cuadrado) . " es " . $cuadrado -> area() . "</p>";
	echo "<hr>";

	echo "

		<h3>Rectángulo</h3>

		<img src = 'img/rectangulo.png'>

	";

	$rectangulo = new Rectangulo(5, 6);

	echo "<p>" . $rectangulo -> lados() . "</p>";
	echo "<p>El perímetro del " . get_class($rectangulo) . " es: " . $rectangulo -> perimetro() . "</p>";
	echo "<p>El área del " . get_class($rectangulo) . " es: " . $rectangulo -> area() . "</p>";
	echo "<hr>";

	echo "

		<h3>Triángulo</h3>

		<img src = 'img/triangulo.png'>

	";

	$triangulo = new Triangulo(3, 6, 9, 10);

	echo "<p>" . $triangulo -> lados() . "</p>";
	echo "<p>El perímetro del " . get_class($triangulo) . " es: " . $triangulo -> perimetro() . "</p>"; 
	echo "<p>El área del " . get_class($triangulo) . " es " . $triangulo -> area() . "</p>";
	echo "<hr>";

	echo "

		<h3>Hexágono</h3>

		<img src = 'img/hexagono.png'>

	";

	$hexagono = new Hexagono(8, 9);

	echo "<p>" . $hexagono -> lados() . "</p>";
	echo "<p>El perímetro del " . get_class($hexagono) . " es: " . $hexagono -> perimetro() . "</p>"; 
	echo "<p>El área del " . get_class($hexagono) . " es " . $hexagono -> area() . "</p>";
	echo "<hr>";