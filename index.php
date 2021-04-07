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


?>

<b>Número1</b>: <?php echo $numberOne; ?><br/>
<b>Número2</b>: $numberTwo <br/>
<b>Operação</b>: $operacao <br/>
<b>Resultado</b>: $resultado


<br/>
<br/>
<br/>

