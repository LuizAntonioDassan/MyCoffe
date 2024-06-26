<?php
include_once './model/api/clienteAPI.php';
include_once './model/conn/Database.php';
include_once './model/dao/clienteDAO.php';

function atualizarCliente($nome, $email, $rg, $cpf, $id, $dataNasc){
    $database = new Database();
    $db = $database->getConnection();

    $cliente = new Cliente($id, $email);
    $cliente->cadastroCompleto($dataNasc, $rg, $cpf, $id, $email, $nome);
  
    $ClienteDao = new clienteDAO($db);

    /*if($imagem){
        $imgData = file_get_contents($imagem);
        $imgData = pg_escape_bytea($db,$imgData);
        $produto->setImagem($imgData);
    }*/

    try{
        if ($ClienteDao->update($cliente)){
            $_SESSION['rg'] = $cliente->getRG();
            $_SESSION['cpf'] = $cliente->getCPF();
            $_SESSION['dataNasc'] = $cliente->getDt_Nascimento();
            return "Cliente Atualizado";
        }
    }catch(Exception $e){
        echo 'erro: ' . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $id = $_SESSION['idUsuario'];
    $RG = $_POST['RG'];
    $CPF = $_POST['CPF'];
    $dataNasc = $_POST['dataNasc'];

    atualizarCliente($nome,$email,$RG,$CPF,$id,$dataNasc);

    header("location: /conta");
}
?>
