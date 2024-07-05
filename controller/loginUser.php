<?php
require_once('model/conn/Database.php');

$database = new Database();
$db = $database->getConnection();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$errorEmail = "Email não encontrado.";
$errorSenha = "Senha incorreta.";

if (!$db) {
    die("Erro ao conectar ao banco de dados.");
    }
$response = array('success' => false);
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = "SELECT id, nome, senha FROM usuarios WHERE email = $1";
    
    $result = pg_query_params($db, $query, array($email));

    if ($result && pg_num_rows($result) > 0) {
        $user = pg_fetch_assoc($result);
        //var_dump($user);
      
        
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['idUsuario'] = $user['id'];
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = $user['nome'];
            $queryAdm = "SELECT c.id as idcargo, c.nome, f.email, f.cargo_id, f.id as idpessoa from cargo c join funcionario f on c.id = f.cargo_id where f.id = $1";
            $resultAdm = pg_query_params($db, $queryAdm, array($_SESSION['idUsuario']));
            if($resultAdm && pg_num_rows($resultAdm) > 0){
                $row = pg_fetch_assoc($resultAdm);
                $_SESSION['idcargo'] = $row['idcargo'];
                $_SESSION['nomecargo'] = $row['nome'];
                $response['success'];
            }
            $queryCliente = "SELECT datanascimento, rg, cpf from cliente u  where id = $1";
            $resultCliente = pg_query_params($db, $queryCliente, array($_SESSION['idUsuario']));          
            if($resultCliente && pg_num_rows($resultCliente) > 0){
                $row = pg_fetch_assoc($resultCliente);
                $_SESSION['rg'] = $row['rg'];
                $_SESSION['dataNasc'] = $row['datanascimento'];
                $_SESSION['cpf'] = $row['cpf'];
                $response['success'];
            }
            $queryEndereco = "SELECT * from endereco e where cpfcliente = $1";
            $resultEndereco = pg_query_params($db, $queryEndereco, array($_SESSION['cpf']));          
            if($resultEndereco && pg_num_rows($resultEndereco) > 0){
                $row = pg_fetch_assoc($resultEndereco);
                $_SESSION['rua'] = $row['rua'];
                $_SESSION['bairro'] = $row['bairro'];
                $_SESSION['numero'] = $row['numero'];
                $_SESSION['cidade'] = $row['cidade'];
                $_SESSION['cep'] = $row['cep'];
                $response['success'];
            }


            $response['success'] = true;
        } else {
            $response['error'] = $errorSenha;
            }
    }else {
        $response['error'] = $errorEmail;
        
    }


    echo json_encode($response);
}
?>
