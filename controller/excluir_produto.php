<?php

require_once('model/dao/carrinhoDAO.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['codigo'];

    $carrinho = new CarrinhoDAO();
       
    try {
        $carrinho->deleteByProduto($produto);
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }

    header('location: /carrinho');
}
