<?php

include_once './model/conn/Database.php';
include_once './model/api/categoriaAPI.php';
include_once './model/dao/categoriaDAO.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createCategoria($nome){
    $database = new Database();
    $db = $database->getConnection();

    $categoria = new Categoria($nome);
    $categoriaDao = new categoriaDAO($db);

    try{
        if ($categoriaDao->create($categoria)) {
            return "categoria Criado";
        } 
    }catch(Exception $e){
        echo 'Erro: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'];

    $resultado = createCategoria($nome);

    if($resultado){
        header("Location: /listaCategoria");
        exit();
    }
}