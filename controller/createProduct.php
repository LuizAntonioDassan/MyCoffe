<?php

include_once './model/api/produtoAPI.php';
include_once './model/conn/Database.php';
include_once './model/dao/produtoDAO.php';


function cadastroProduto($nome, $codigoBarras, $quantidade, $preco, $descricao, $imagem){
    $database = new Database();
    $db = $database->getConnection();

    $produto = new Produto($nome,$preco,null,null,$codigoBarras,null,true,$quantidade,null,$descricao);
    $produtoDao = new ProdutoDAO($db);

    if($imagem){
        $imgData = file_get_contents($imagem);
        $imgData = pg_escape_bytea($db,$imgData);
        $produto->setImagem($imgData);
    }

    try{
        if ($produtoDao->create($produto)){
            return "Produto Criado";
        }
    }catch(Exception $e){
        echo 'erro: ' . $e->getMessage();
    }
}
function cadastroProdutoSemImagem($nome, $codigoBarras, $quantidade, $preco, $descricao){
    $database = new Database();
    $db = $database->getConnection();

    $produto = new Produto($nome,$preco,null,null,$codigoBarras,null,true,$quantidade,null,$descricao);
    $produtoDao = new ProdutoDAO($db);

    try{
        if ($produtoDao->create($produto)){
            return "Produto Criado";
        }
    }catch(Exception $e){
        echo 'erro: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome-produto'];
    $codigoBarras = $_POST['codigo-barras'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $imagem = $_FILES['imagem-produto']['tmp_name'];
    if($imagem){
        $imgData = file_get_contents($imagem);
        $resultado = cadastroProduto($nome, $codigoBarras, $quantidade, $preco, $descricao, $imagem);
        if($resultado){
            header("Location: /produtos");
            exit();
        }
    }
    $resultado = cadastroProdutoSemImagem($nome, $codigoBarras, $quantidade, $preco, $descricao);

    if($resultado){
        header("Location: /produtos");
        exit();
    }
}