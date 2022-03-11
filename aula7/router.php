<?php

/********************************************
 * Objetivo: Arquivo de rota, para segmentar as ações encaminhadas pela View
 *    (dados de um form, listagem de dados, ação de excluir ou atualizar).
 *    Esse arquivo será responsável por encaminhar as solicitações para 
 *    encaminhar a Controller
 * Autor: Samea
 * Data:  04/03/2022
 * Versão:1.0
 ********************************************/

    $action = (string) null;
    $componente = (string) null;

    //Validação para verificar se a requisição é um
    //POST de um formulário
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //recebendo dados via URL para saber quem tá solicitando e qual ação
        // será realizada

        $componente = strtoupper($_GET['componente']);
        $action = strtoupper($_GET['action']);

        //Estrutura condicional para validar quem esta solicitando algo para o Rout
        switch($componente)
        {
            case 'CONTATOS':
                
                //import da controller Contatos
                require_once('controller/controllerContatos.php');

               if($action == 'INSERIR'){
                   inserirContato($_POST);
               }
            break;
            

        }

    }





?>