<?php
include_once './model/conn/Database.php';
include_once './model/api/carrinhoAPI.php';
include_once './model/dao/carrinhoDAO.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function adicionaCarrinho($id,$codigoProduto,$preco,$quantidade){
    $database = new Database();
    $db = $database->getConnection();

    $carrinho = new Carrinho($id, $codigoProduto, $preco,$quantidade);
    $carrinhoDao = new CarrinhoDAO();

    try{
        if ($carrinhoDao->create($carrinho)) {
            return "Produto adicionado ao carrinho com sucesso.";
        } else {
            return "Erro ao adicionar o produto ao carrinho.";
        }
    }catch(Exception $e){
        echo "Erro: " . $e->getMessage();
    }
}

$carrinho_id = session_id();
$produto_codigo = $_GET['produto_codigo'];
$preco = $_GET['preco'];
$quantidade = $_GET['quantidade'];

adicionaCarrinho($carrinho_id,$produto_codigo,$preco,$quantidade);

$_SESSION['produto_adicionado'] = true;
header("location: /produtos");
?>
