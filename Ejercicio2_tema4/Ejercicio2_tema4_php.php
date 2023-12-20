<?php
//Llamar a las clases
require ('Shape.php');
require ('Rectangulo.php');
require ('Triangulo.php');

//instanciar e inicializar

$nuevoRectangulo = new Rectangulo(8,5);
echo "El Area del rectangulo es: " . $nuevoRectangulo->calcularAreaRec(8,5) ." cm.<br>";
$nuevoTriangulo = new Triangulo(10,6);
echo "El Area del triangulo es: " .$nuevoTriangulo->calcularAreaTri(10,6) ." cm.<br>";

?>