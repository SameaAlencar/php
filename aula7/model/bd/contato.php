<?php
/**************************************
 * Objetivo: arquivo responsável por manipular os dados dentro do BD
 *    (insert, update, select e delete)
 * Autor: Samea
 * Data: 04/03/2022
 * Versão: 1.0
************************************/
//import do arquivo estabelece a conexão com o banco de dados
require_once('conexao.php');

//função para realizar o insert no BD
function insertContato($dadosContato){

    $conexao = conexaoMysql();

//Monta o script para enviar para o BD
    $sql = "insert into tblcontatos
                (nome,
                telefone,
                celular,
                email,
                obs)
         values
               ('".$dadosContato['nome']."',
               '".$dadosContato['telefone']."',
               '".$dadosContato['celular']."',
               '".$dadosContato['email']."',
               '".$dadosContato['obs']."');";

//executa o script no BD
        mysqli_query($conexao, $sql);

}

//função para realizar o update do BD
function updateContato(){

}

//função para excluir no BD
function deleteContato(){

}

//função para listar todos os contatos do BD
function selectAllContato(){

}

    

?>