<?php
include_once './model/api/categoriaAPI.php';
include_once './model/conn/Database.php';
include_once './model/dao/categoriaDAO.php';

function atualizarCategoria($nome, $id){
    $database = new Database();
    $db = $database->getConnection();

    $categoria = new Categoria($nome);
    $categoria->setId($id);
    $categoriaDao = new CategoriaDAO($db);

    try{
        if ($categoriaDao->update($categoria)){
            return "Categoria atualizado";
        }
    }catch(Exception $e){
        echo 'erro: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];    
    $id = $_POST['id'];    

    atualizarCategoria($nome, $id);

    header("location: /listaCategoria");
}
?>
