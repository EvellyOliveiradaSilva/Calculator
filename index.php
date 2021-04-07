<?php

$numberOne = $_REQUEST['number1'];

$numberTwo = $_REQUEST['number2'];

$operacao = $_REQUEST['operacao'];


$resultado = 0;

if($operacao == 'soma'){
    $resultado = $numberOne+$numberTwo;
}
else if($operacao=='subtracao'){
    $resultado = $numberOne-$numberTwo;
}
else if($operacao=='divisao'){
    $resultado = $numberOne/$numberTwo;
}
else if($operacao=='multiplicacao'){
    $resultado = $numberOne*$numberTwo;
}

echo "número: $numberOne<br>";
echo "número: $numberTwo <br>";
echo "Tipo de operação: $operacao<br>";
echo "Resultado: $resultado";
