<?php
// Incluye la clase shape
require_once('Shape.php');

class Rectangulo extends Shape{

//metodo Constructor
public function __construct(int $ancho, int $alto){
    //llamo al metodo de la clase padre a traves de parent
    parent::__construct($ancho, $alto);
}


public function calcularAreaRec(int $ancho, int $alto){
    $areaRectangulo = $this->ancho * $this->alto;
    return $areaRectangulo;
}    

}


?>