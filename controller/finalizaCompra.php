<?php
include_once './model/conn/Database.php';
include_once './model/api/compraAPI.php';
include_once './model/DAO/CompraDAO.php';

if(!isset($_SESSION['$cpf']))
{
    header('location: /conta');
}

$identificador = $_POST['identificador'];
$data = date('Y-m-d');

$compra = new Compra($data, $cliente_rg, $identificador);
$compraDAO = new CompraDAO();


?>
