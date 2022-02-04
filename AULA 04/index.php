<?php

    $valor = (int) 0;
    $contador = (int) 0;
    $resultado = (string) null;

    if(isset($_POST['btnCalc']))
    {
        $valor = $_POST['txtNumero'];
        //Exemplo utilizando while

        // while($contador <= $valor)
        // {
        //     echo($contador. '<br>');
        //     //$contador = $contador + 1;
        //     $contador++;
        // }

        for($contador = 0; $contador <= $valor; $contador++)
        {
        //    echo($contador.'<br>'); 
           $resultado .= $contador .'<br>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmRepeticao" method = "post" action="index.php">
        Digite um número: <input type="text" name = "txtNumero">
        <input type="submit" name ="btnCalc" value= "Calcular">
    </form>

    <div>
    <?=$resultado?>
    </div>
</body>
</html>