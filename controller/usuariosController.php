<?php
// Inclua as classes e funções necessárias
include_once './model/conn/Database.php';
include_once './model/api/usuarioAPI.php';
include_once './model/dao/usuarioDAO.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Função para criar um usuário
function createUser($nome, $email, $senha) {
    $database = new Database();
    $db = $database->getConnection();

    $usuario = new Usuario($nome, $email, $senha);
    $usuarioDao = new UsuarioDao($db);

    if ($usuarioDao->create($usuario)) {
        return "Usuário cadastrado com sucesso!";
    } else {
        return "Erro ao cadastrar o usuário.";
    }
}

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Hash da senha

    // Chama a função para criar o usuário
    $resultado = createUser($nome, $email, $senha);

    // Exibe o resultado
    echo $resultado;
}




?>
