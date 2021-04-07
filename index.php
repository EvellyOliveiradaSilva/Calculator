<?php

$numberOne = $_REQUEST['number1'];

$numberTwo = $_REQUEST['number2'];

$operacao = $_REQUEST['operacao'];


$resultado = 0;

if($operacao == 'soma'){
    $resultado = $numberOne+$numberTwo;
}
else if($operacao=='subtração'){
    $resultado = $numberOne-$numberTwo;
}
else if($operacao=='divisão'){
    $resultado = $numberOne/$numberTwo;
}
else if($operacao=='multiplicação'){
    $resultado = $numberOne*$numberTwo;
}


?>

<b>Número1</b>: <?php echo $numberOne; ?> <br/>
<b>Número2</b>: <?php echo $numberTwo; ?> <br/>
<b>Operação</b>: <?php echo $operacao; ?> <br/>
<b>Resultado</b>: <?php echo $resultado; ?>  <br/>

<form action='http://localhost/Calculator/'>

    <label for="numberOne">1° Número:</label>
    <input type="number" id="numberOne" name="number1" value="<?php echo $numberOne; ?>" ><br/>
    <label for="numberTwo">2° Número:</label>
    <input type="number" id="numberTwo" name="number2" value="<?php echo $numberTwo; ?>" ><br/>
    <br/>

    <input type="submit" value="soma" name="operacao"/><br/>
    <input type="submit" value="subtração" name="operacao" /><br/>
    <input type="submit" value="divisão" name="operacao" /><br/>
    <input type="submit" value="multiplicação" name="operacao" /><br/>

</form>