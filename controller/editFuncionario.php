<?php
include_once './model/api/funcionarioAPI.php';
include_once './model/conn/Database.php';
include_once './model/dao/funcionarioDAO.php';

function atualizarFuncionario($nome, $email, $cargo, $id){
    $database = new Database();
    $db = $database->getConnection();

    $funcionario = new funcionario($nome, $email, $cargo);
    $funcionario->setId($id);
    $funcionarioDao = new funcionarioDAO($db);

    /*if($imagem){
        $imgData = file_get_contents($imagem);
        $imgData = pg_escape_bytea($db,$imgData);
        $produto->setImagem($imgData);
    }*/

    try{
        if ($funcionarioDao->update($funcionario)){
            return "Cliente Atualizado";
        }
    }catch(Exception $e){
        echo 'erro: ' . $e->getMessage();
    }
}

function inativar($codigoBarras){
    $database = new Database();
    $db = $database->getConnection();

    $produtoDao = new ProdutoDAO($db);
    $produtoDao->delete($codigoBarras);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $id = $_POST['id'];

    atualizarFuncionario($nome,$email,$funcao,$id);

    header("location: /listaFuncionario");
}
?>
