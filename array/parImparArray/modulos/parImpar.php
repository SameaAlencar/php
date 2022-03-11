<?php
/***************************************************
 * Objetivo: arquivo para criar funções de separação de par e impar;
 * Data:22/02/2022
 * Autor: Samea
 * Versão:1.0 
 ***************************************************/

 $resultado = numerosParesImpares(2, 15);
 echo("<pre>");
 var_dump($resultado);
 echo("</pre>");

 //função para separar uma sequencia de numeros pares
 function numerosPares($numeroInicial, $numeroFinal)
 {
     //recebe os dados de argumento da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $pares = array();
    $cont = (int) 0;
    
    while($numInicial <= $numFinal)
    {
        if($numInicial %2 == 0)
        {
            $pares[$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    } 
    return $pares;

 }
//função para separar uma sequencia de numeros impares
 function numerosImpares($numeroInicial, $numeroFinal)
 {
     //recebe os dados de argumento da função
    $numInicial = (int) $numeroInicial;
    $numFinal = (int) $numeroFinal;
    $impares = array();
    $cont = (int) 0;
    
    while($numInicial <= $numFinal)
    {
        if($numInicial %2 == 1)
        {
            $impares[$cont] = $numInicial;
            $cont++;
        }
        $numInicial++;
    } 
    return $impares;

 }

 function numerosParesImpares($numeroInicial, $numeroFinal)
 {
    //Repetição para validar uma sequência de pares e impares
     $numInicial = (int) $numeroInicial;
     $numFinal =   (int) $numeroFinal;

     // array de numeros pares e impares separados
     $pares = array();
     $impares = array();

     //chama as funções que separam numeros pares e impares
     $pares = numerosPares($numInicial, $numFinal);
     $impares = numerosImpares($numInicial, $numFinal);
    
     // Criamos um array para juntar dois arrays separados(pares e impares);
     // Criamos uma chave dentro do array chamada pares para identificar
     // a lista dos pares e impar para identificar a lista dos impares.
     $paresImpares = array(
         "Pares"   => $pares, 
         "Impares" =>   $impares
    );
     return $paresImpares;


 }




?>