<?php

include "action.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"/>
    <title>Calculator</title>
</head>
<body>
    <?php
        if($exito==true){
            echo "<h3>  :-) Operação com exito!!!!!!!!!! </h3>";
        }
        else{
            echo " <h3> :-( Que horror, deu um erro. </h3>";
        }
    ?>

    <b>Número1</b>: <?php echo $numberOne; ?> <br/>
    <b>Número2</b>: <?php echo $numberTwo; ?> <br/>
    <b>Operação</b>: <?php echo $operacao; ?> <br/>
    <b>Resultado</b>: <?php echo $resultado; ?>  <br/>

    <form action='http://localhost/Calculator/'>

        <label for="numberOne">1° Número:</label>
        <input type="number" id="numberOne" name="number1" value="<?php echo $numberOne; ?>"/><br/>
        <label for="numberTwo">2° Número:</label>
        <input type="number" id="numberTwo" name="number2" value="<?php echo $numberTwo; ?>" /><br/>
        <br/>

        <input class="btn-soma" type="submit" value="soma" name="operacao"/><br/>
        <input class="btn-subtracao" type="submit" value="subtração" name="operacao" /><br/>
        <input class="btn-divisao" type="submit" value="divisão" name="operacao" /><br/>
        <input class="btn-multiplicacao" type="submit" value="multiplicação" name="operacao" /><br/>

    </form>
</body>
</html>
