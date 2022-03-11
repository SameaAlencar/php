<?php
    //declaração de variáveis
    $tabuada =(int) 0;
    $contador = (int) 0;
    $resultado = (int) 0;

    if(isset($_POST['btnCalc'])){

        //recebendo dados do formulário
        $tabuada = $_POST['txtv1'];
        $contador = $_POST['txtv2'];

    // processamento
    for($i = 0; $i=< 10; $i++){

            $resultado = $txtv1 * $txtv2;

    }

     $resultado = ($resultado);
 }


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css"href="css/style.css">
    <title>Tabuada</title>
</head>
<body>
    <div id="conteudo">
        <div id="titulo">
            Tabuada
        </div>

        <div id="form">
            <form name= "frmTabuada" method="POST" action="tabuada.html">
            
                Tabuada: <input type="text" name="txtv1" value="<?=$tabuada;?>" > <br>
                Contador: <input type="text" name="txtv2" value="<?=$contador;?>" > <br>

                <div id="resultado">
                </div>
                <div id="botao">
                    <input type="submit" name="btnCalc" value="Calcular">
                </div>


               
            </form>
        </div>

    </div>
    
</body>
</html>