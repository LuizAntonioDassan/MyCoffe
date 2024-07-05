<?php
include_once './model/dao/CargoDAO.php';
include_once './model/db/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    try {
        $database = new Database();
        $db = $database->getConnection();
        $cargoDAO = new CargoDAO($db);
        $cargoDAO->create($nome, $descricao);
        echo "Cargo adicionado com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao adicionar cargo: " . $e->getMessage();
    }
}

header('location: /perfilFuncionario');

