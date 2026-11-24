<?php

use App\Produto;
require('../vendor/autoload.php');

$action = $_GET['action'];
$produto = new Produto();

switch($action){
    case 'cadastrar':
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->codigo = $_POST['codigo'];
        $produto->marca = $_POST['marca'];
        $produto->dtn_validade = $_POST['dtn_validade'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->valor = $_POST['valor'];
        $produto->cadastrar();
        header('location: /simulado/view/produto/listar.php');
        exit;
    break;    

    case 'alterar':
        $produto->id = $_GET['id'];
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->codigo = $_POST['codigo'];
        $produto->marca = $_POST['marca'];
        $produto->dtn_validade = $_POST['dtn_validade'];
        $produto->quantidade = $_POST['quantidade'];
        $produto->valor = $_POST['valor'];
        $produto->alterar();
        header('location: /simulado/view/produto/listar.php');
        exit;
    break;

    case 'excluir':
        $produto->id = $_GET['id'];
        $produto->excluir();
        header('location: /simulado/view/produto/listar.php');
        exit;
    break;
}