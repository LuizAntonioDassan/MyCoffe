<?php
include_once 'model/dao/PermissaoDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    try {
        $permissaoDAO = new PermissaoDAO();
        $permissaoDAO->create($nome, $descricao);
        echo "Permissão adicionada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao adicionar permissão: " . $e->getMessage();
    }
}

header('location: /perfilFuncionario');