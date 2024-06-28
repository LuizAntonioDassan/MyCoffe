<?php
include_once './model/conn/Database.php';
include_once './model/api/compraAPI.php';
include_once './model/DAO/CompraDAO.php';


function finalizaCompra(){
    $identificador = $_POST['identificador'];
    $data = date('Y-m-d');

    $compra = new Compra($data, $_SESSION['rg'], $identificador);
    $compraDAO = new CompraDAO();

    try{
        if($compraDAO->create($compra)){
            return "Compra Criada: ID -" . $identificador;
        }
    }catch(Exception $e){
        echo 'erro: '. $e->getMessage();
    }
    
}


if(!isset($_SESSION['cpf']))
{
    header('location: /conta');
}

finalizaCompra();
session_regenerate_id();


header('location: /produtos');
?>
