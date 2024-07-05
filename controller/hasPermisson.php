<?php
include_once 'model/dao/CargoPermissaoDAO.php';

function hasPermission($userId, $requiredPermission) {
    $cargoPermissaoDAO = new CargoPermissaoDAO();
    $userPermissions = $cargoPermissaoDAO->getPermissoesByUser($userId);

    foreach ($userPermissions as $permission) {
        if ($permission['nome'] === $requiredPermission) {
            return true;
        }
    }

    return false;
}
?>
