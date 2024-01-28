<?php
class PokerDice{

//atributos
public $carasDado = ['As','K','Q','J','7','8'];
public $caraSeleccionada;
public static $totalTiradas;
//metodo throw
//genera un valor aleatorio para el objeto al que se le aplica el método.
public function throw(){
    $caraRand= array_rand ($this->carasDado);
    $this->caraSeleccionada = $this->carasDado[$caraRand];
    self::$totalTiradas++;
}
public function shapeName(){
    return $this->caraSeleccionada;
}
public static function getTotalTiradas(){
return self::$totalTiradas;
}

}

?>