<?php
include_once './model/conn/Database.php';
include_once './model/api/enderecoAPI.php';
include_once './model/DAO/enderecoDAO.php';


function salvaEndereco(){
    $cpf = $_SESSION['cpf'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $numero = $_POST['numero'];
    

    $Endereco = new Endereco($cpf,$cep,$rua,$bairro,$cidade,$numero);
    $EnderecoDAO = new EnderecoDAO();

    try{
        if($EnderecoDAO->readByCpfCliente($cpf)){
            $EnderecoDAO->update($Endereco);
        }else{
            if($EnderecoDAO->create($Endereco)){
                $_SESSION['cep'] = $cep;
                $_SESSION['rua'] = $rua;
                $_SESSION['bairro'] = $bairro;
                $_SESSION['cidade'] = $cidade;
                $_SESSION['numero'] = $numero;
                return "Endereco Criadao";
            }
        }
    }catch(Exception $e){
        echo 'erro: '. $e->getMessage();
    }
    
}


if(!isset($_SESSION['cpf']))
{
    header('location: /editarCliente');
}

salvaEndereco();

header('location: /conta');
?>
