<?php
include_once './model/api/clienteAPI.php';
include_once './model/conn/Database.php';
include_once './model/dao/clienteDAO.php';
include_once './model/dao/usuarioDAO.php';

function atualizarCliente($nome, $email, $rg, $cpf, $id, $dataNasc, $imagem){
    $database = new Database();
    $db = $database->getConnection();

    $cliente = new Cliente($id, $email);
    $cliente->cadastroCompleto($dataNasc, $rg, $cpf, $id, $email, $nome);

    $ClienteDao = new clienteDAO($db);

    $Usuario = new UsuarioDAO($db);

    if($imagem){
        $imgData = file_get_contents($imagem);
        $imgData = pg_escape_bytea($db,$imgData);
        $cliente->setImagem($imgData);
    }

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
    $imagem = $_POST['imagem'];

    atualizarCliente($nome,$email,$RG,$CPF,$id,$dataNasc, $imagem);

    header("location: /conta");
}
?>
