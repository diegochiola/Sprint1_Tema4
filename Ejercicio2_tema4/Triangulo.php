<?php
// Incluye la clase shape
require_once('Shape.php');

class Rectangulo extends Shape{

//metodo Constructor
public function __construct(int $ancho, int $alto){
    //llamo al metodo de la clase padre a traves de parent
    parent::__construct($ancho, $alto);
}

public function calcularAreaTri(int $ancho, int $alto){
    $areaTriangulo = ($this->ancho * $this->alto) / 2;
    return $areaTriangulo;
}    

}


?>