<?php
include_once './model/api/produtoAPI.php';
include_once './model/conn/Database.php';
include_once './model/dao/produtoDAO.php';

function atualizProduto($nome, $codigoBarras, $quantidade, $preco, $descricao, $codigoInterno, $categoria){
    $database = new Database();
    $db = $database->getConnection();

    $produto = new Produto($nome,$preco,null,$codigoInterno,$codigoBarras,null,true,$quantidade,$categoria,$descricao);
    $produtoDao = new ProdutoDAO($db);

    /*if($imagem){
        $imgData = file_get_contents($imagem);
        $imgData = pg_escape_bytea($db,$imgData);
        $produto->setImagem($imgData);
    }*/

    try{
        if ($produtoDao->update($produto, $codigoBarras)){
            return "Produto atualizado";
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
    $codigoBarras = $_POST['codigobarras'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $codigoInterno = $_SESSION['codigointerno'];
    //$imagem = $_FILES['imagem']['tmp_name'];

    atualizProduto($nome,$codigoBarras,$quantidade,$preco,$descricao, $codigoInterno, $categoria);

    if(isset($_POST['inativo'])){
        inativar($codigoBarras);
    }

    header("location: /listaProdutos");
}
?>
