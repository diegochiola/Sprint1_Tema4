<?php
class Shape{
    //Atributos
    public $ancho;
    public $alto;

    //metodo constructor
    function __construct(int $ancho, int $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
public function calcularArea();

}

?>