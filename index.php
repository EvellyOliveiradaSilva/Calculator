<?php

$numberOne = 2;

$numberTwo = 25;

$operacao = 'multiplicacao';

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