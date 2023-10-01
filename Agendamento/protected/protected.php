<?php

    // se a sessão retornar nada não executa logo coloquei o simbolo de negação para 
    // se caso retornar false execute
    if(!isset($_SESSION)){
        session_start();
    };

    // o mesmo serve para o id, se retornar false quer dizer que não tem ninguem 
    //logado, e dou a negacao para executar o codigo
    
    if(!isset($_SESSION['id'])){
        die(" você não pode acessar sem estar logado");
    }

?>