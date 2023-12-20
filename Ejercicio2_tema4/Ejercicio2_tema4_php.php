<?php
//Llamar a las clases
require ('Shape.php');
require ('Rectangulo.php');
require ('Triangulo.php');

//instanciar e inicializar

$nuevoRectangulo = new Rectangulo(8,5);
echo $nuevoRectangulo->calcularAreaRec(8,5);
$nuevoTriangulo = new Triangulo(10,6);
echo $nuevoTriangulo->calcularAreaTri(10,6);

?>