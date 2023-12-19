<?php
 class Empleado{
    //Atributos
    private $nombre;
    private $sueldo;

    //metodo constructor
    public function inicializacion(string $nombre, int $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    //metodo propio
    public function imprimir(){
        $respuesta = "El nombre del empleado es: ". $this->nombre .".<br>";
        if ($this->sueldo > 6000){
            $impuestos = "En base al salario, ". $this->nombre . " debe pagar impuestos.";
        }else{
            $impuestos = "En base al salario, ". $this->nombre . " no debe pagar impuestos";
        }
        echo $respuesta . $impuestos;
    }
 }

 //Creo un empleado y lo inicio
 $empleadoNuevo = new Empleado();
 $empleadoNuevo->inicializacion("Roberto", 8500);
 //llamo a la funcion print
 $empleadoNuevo->imprimir();

?>