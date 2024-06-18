<?php
include_once './model/conn/Database.php';
include_once './model/api/usuarioAPI.php';
include_once './model/api/clienteAPI.php';
include_once './model/dao/usuarioDAO.php';
include_once './model/dao/clienteDAO.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createUser($nome, $email, $senha) {
    $database = new Database();
    $db = $database->getConnection();

    $usuario = new Usuario($nome, $email, $senha);
    $usuarioDao = new UsuarioDao($db);

    try{
        if ($usuarioDao->create_simplified_client($usuario)) {
            return "Usuario Criado";
        } 
    }catch(Exception $e){
        echo 'Erro: ' . $e->getMessage();
    }
}

function prepareSession($email){
    $database = new Database();
    $db = $database->getConnection();

    $usuarioDao = new UsuarioDAO($db);
    $usuario = $usuarioDao->readByEmail($email);

    $_SESSION['idUsuario'] = $usuario->id;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); 

    $resultado = createUser($nome, $email, $senha);

    prepareSession($_POST['email']);

    if($resultado){
        header("Location: /produtos");
        exit();
    }
}


?>
