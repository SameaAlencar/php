<?php
/**************************************
 * Objetivo: arquivo responsável pela manipulação de dados de contatos
 *  obs(este arquivo fará a ponte entre a View e a model)
 * Autor: Samea
 * Data: 04/03/2022
 * Versão: 1.0
************************************/
//função para receber dados da View e encaminhar para a model(inserir)
function inserirContato($dadosContato){

    // validação para verficar se o objeto está vazio
    if(!empty($dadosContato)){

        //Validação de caixa vazia dos elementos nome, celular e email, pois são obrigatórios no banco de dados
        if(!empty($dadosContato['txtNome']) && !empty($dadosContato['txtCelular']) && !empty($dadosContato['txtEmail'])){
           
            //Criação do array de dados que será encaminhado a model para inserir no BD,
            //é importante criar este array conforme as necessidades de manipulação do BD.
            //   OBS: Criar as chaves do array conforme os nomes dos atributos do BD.
            $arrayDados = array(
                "nome"      => $dadosContato['txtNome'], 
                "telefone"  => $dadosContato['txtTelefone'],
                "celular"   => $dadosContato['txtCelular'],
                "email"     => $dadosContato['txtEmail'],
                "obs"       => $dadosContato['txtObs']
            );
            require_once('model/bd/contato.php');
            insertContato($arrayDados);

        }else{
            echo('Dados incompletos');
        }
    } 

}

//função para receber dados da View e encaminhar para a model(atualizar)
function atualizarContato(){


}
//função para realizar a exclusão de um contato
function excluirContato(){


}
//função para solicitar os dados da model e encaminhar a lista de contatos para a View
function listarContato(){


}










?>