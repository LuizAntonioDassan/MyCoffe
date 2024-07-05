<?php

include_once './model/conn/Database.php';
include_once './model/api/cargoAPI.php';
include_once './model/dao/cargoDAO.php';



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createCargo($nome){
    $database = new Database();
    $db = $database->getConnection();

    $cargo = new cargo($nome);
    $cargoDao = new cargoDAO($db);

    try{
        if ($cargoDao->create($cargo)) {
            return "Usuario Criado";
        } 
    }catch(Exception $e){
        echo 'Erro: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'];
    $resultado = createCargo($nome);

    if($resultado){
        header("Location: /perfilFuncionario");
        exit();
    }
}