<?php

include_once './model/conn/Database.php';
include_once './model/api/usuarioAPI.php';
include_once './model/api/funcionarioAPI.php';
include_once './model/api/clienteAPI.php';
include_once './model/dao/usuarioDAO.php';
include_once './model/dao/clienteDAO.php';
include_once './model/dao/funcionarioDAO.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function createUser($nome, $email, $senha){
    $database = new Database();
    $db = $database->getConnection();

    $usuario = new Usuario($nome, $email, $senha);
    $usuarioDao = new UsuarioDAO($db);

    try{
        if ($usuarioDao->create_simplified_client($usuario)) {
            return "Usuario Criado";
        } 
    }catch(Exception $e){
        echo 'Erro: ' . $e->getMessage();
    }
}

function createFuncionario($nome,$email, $permissao){
    $database = new Database();
    $db = $database->getConnection();

    $usuarioDao = new UsuarioDAO($db);

    $recuperaUsuarioNovo = $usuarioDao->readByEmail($email);

    $funcionario = new Funcionario($nome,$email, $permissao);
    $funcionario->setId($recuperaUsuarioNovo->getId());
    $funcionarioDao = new FuncionarioDAO($db);

    try{
        if($funcionarioDao->create($funcionario)){
            return "Funcionario Criado: " . $funcionario->getId();
        }
    }catch(Exception $e){
        echo 'Erro: '. $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); 
    $permissao = $_POST['cargo_id'];

    $resultado = createUser($nome, $email, $senha);
    $resultado2 = createFuncionario($nome,$email, $permissao);

    if($resultado && $resultado2){
        header("Location: /perfilFuncionario");
        exit();
    }
}