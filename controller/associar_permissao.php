<?php
include_once 'model/dao/CargoDAO.php';
include_once 'model/dao/PermissaoDAO.php';
include_once 'model/dao/CargoPermissaoDAO.php';
include_once 'model/conn/Database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cargo_id = $_POST['cargo_id'];
    $permissoes = $_POST['permissoes'] ?? [];
    
    try {
        $cargoDAO = new CargoPermissaoDAO();
        $cargoDAO->updatePermissions($cargo_id, $permissoes);
    } catch (Exception $e) {
        echo "Erro ao atualizar permissões: " . $e->getMessage();
    }
}

header('location: /perfilFuncionario');