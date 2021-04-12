<?php

$numberOne = $_REQUEST['number1'];

$numberTwo = $_REQUEST['number2'];

$operacao = $_REQUEST['operacao'];

$exito = false;

$resultado = 0;

if($operacao == 'soma'){
    $resultado = $numberOne+$numberTwo;
    $exito = true;
}
else if($operacao=='subtração'){
    $resultado = $numberOne-$numberTwo;
    $exito = true;
}
else if($operacao=='divisão'){
    $resultado = $numberOne/$numberTwo;
    $exito = true;
}
else if($operacao=='multiplicação'){
    $resultado = $numberOne*$numberTwo;
    $exito = true;
}
