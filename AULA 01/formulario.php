<?php
    /**
     * COMENTÁRIO
     */
    // COMENTÁRIO
    //echo(‘’); - Escreve um conteúdo na  tela
    //echo('Testando o PHP');
    


    //print_r(‘’); - Escreve um conteúdo na tela
    //print_r('Outra forma de escrever');

    // Validação para identificar se o botão foi clicado e disponibilizado na ação do GET.
    if(isset($_GET['btnSalvar'])){

    // Recuperando dados via GET do formulário
    $nome = $_GET['txtNome'];
    $cidade = $_GET['sltCidade'];
    $sexo = $_GET['rdoSexo'];
    $obs = $_GET['txtObs']; 

  
     
    //Foi criado essas variáveis para resolver o problema de variável indefinida na exibição de dados   
    $idiomaPortugues = null;
    $idiomaIngles = null;
    $idiomaEspanhol = null;
    // Tratamento para recuperar os checkbox que foram selecionados no formulário
    if(isset($_GET['chkPortugues']))
    {
        $idiomaPortugues = $_GET['chkPortugues'];
    }
    if(isset($_GET['chkIngles']))
    {
        $idiomaIngles = $_GET['chkIngles'];
    }
    if(isset($_GET['chkEspanhol']))
    {
        $idiomaEspanhol = $_GET['chkEspanhol'];
    }



    //Escrevendo o conteúdo das variaveis no navegador

    //Concatenação é representado pelo ponto(.)
    echo('<b>Nome:</b>' . $nome . '<br>');
    echo('<b>Cidade:</b>' . $cidade . '<br>');
    echo('<b>Sexo:</b>' . $sexo . '<br>');
    echo('<b>Observação:</b>' . $obs . '<br>');
    echo('<b>Idioma:</b>' . $idiomaPortugues . '-' . $idiomaIngles . '-' . $idiomaEspanhol);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Código para mudar os redimensionamentos da textarea*/
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <!--
          GET - permite retirar os dados dos formularios e disponibilizaer na URL da página.
        POST - permite retirar os dados dos formulários e disponibilizar em variáveis locais.

        action - é utilizado para especificar em qual arquivo ou página sera disponibilizado os dados do FORM.

        input type="text" - permite colovcar uma caixa do tipo texto.
              size="" permite especificar o tamanho da caixa.
              maxlength - permite configurar a quantidade de caracteres que será digitado na caixa.
     select - permite criar uma lista de opções.
              option - é através dela que podemos criar itens dentro da lista.
              value - a propriedade value é obrigatória para que o formulário consiga resgatar o valor do item selecionado pelo usuário
              e disponibilizar para o backend.
     input type = radio - permite criar opções de escolha.
        Obs: Para configurar o rádio fazendo com que permita apenas uma opção de escolha é obrigatório todas as inputs terem o mesmo nome.
    -->
    

    <form name="frmCadastro" method="GET" action="formulario.php">
       nome: <input type="text" name="txtNome" size="50" maxlength="50">
       <br>
       cidade: 
       <select name="sltCidade">
           <option value="" selected>Selecione um item</option>
           <option value="jandira">Jandira</option>
           <option value="itapevi">Itapevi</option>
           <option value="carapicuiba">Carapicuíba</option>
           <option value="osasco">Osasco</option>
           <option value="barueri">Barueri</option>
           

       </select>
       <br>
       Sexo: 
       <input type="radio" name="rdoSexo" value="F" checked> Feminino
       <input type="radio" name="rdoSexo" value="M"> Masculino 
       <input type="radio" name= "rdoSexo" value="O"> Outro
       <br>
       Idioma:
       <input type="checkbox" name="chkPortugues" value="PT" checked> Português 
       <input type="checkbox" name="chkIngles" value="EN"> Ingles
       <input type="checkbox" name="chkEspanhol" value="ES"> Espanhol 
       <br>
       Observação:
       <textarea name="txtObs" cols="20" rows="6"></textarea>
      

       <!--
           <input type="submit" - permite retirar dados do formuçário atarvés do próprio HTML, fazendo um submir nos dados.
           <input type="button" - somente será possível retirar os dados do formulário através do JavaScript
           <input type="reset" - permite limpar todos os elementos do formulário.
       -->

       <input type="submit" name="btnSalvar" value="Salvar">
       <input type="reset" name="btnLimpar" value="Limpar">


    </form>
    
</body>
</html>
