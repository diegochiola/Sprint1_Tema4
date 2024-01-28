<?php
require_once('PokerDice.php');
//llamamos al archivo donde esta la clase pokerdice

//instanciamos los dados
/*$dado1 = new PokerDice();
$dado2= new PokerDice();
$dado3 = new PokerDice();
$dado4 = new PokerDice();
$dado5 = new PokerDice();*/

//menu de aplicacion
do{
    $opcion = readline("Bienvenido a la aplicacion PokerDice.". "\n".
                    "Seleccione la opcion deseada: ". "\n".
                    "1. Lanzar 1 dado.". "\n".
                    "2. Lanzar 5 dados.". "\n".
                    "0. Salir de la aplicacion.". "\n");

switch($opcion){
    case 1: 
        $dado = new PokerDice();
        $dado->throw();
        echo "El dado salió: " . $dado->shapeName() . "\n";
        break;
    case 2: 
        //defino un array vacio para que vayan ingresando las tiradas
        $dados_array=[];
        $cantDados = 5;

        for ($i = 0; $i<$cantDados; $i++){
            $dado = new PokerDice();
            $dado->throw();
            $dados_array[]= $dado;
        }
        //para que me muestre el contenido del array $dados_array
        foreach ($dados_array as $i => $dado){
            echo "El dado $i salio: " . $dado->shapeName(). "\n";
        }
        break;
    case 0:
        echo "Ha decidido salir del programa". "\n";
        break;
    default:
        echo "Opcion no valida, vuelva a intentarlo". "\n";           
}
}while ($opcion!=0);

//por ultimo mostrar la cantidad de tiradas:
$totalDeTiradas = PokerDice::getTotalTiradas(). "\n";
echo "El total de tiradas de dados fue: $totalDeTiradas veces. ". "\n";
?>