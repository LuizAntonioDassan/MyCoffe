<?php

include_once 'model/api/enderecoAPI.php';
include_once 'model/conn/Database.php'; // Certifique-se de ter uma classe Database para gerenciar a conexão com o banco de dados

class EnderecoDAO {
    private $conn;
    private $table_name = 'endereco';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create(Endereco $endereco) {
        $query = "INSERT INTO {$this->table_name} (cpfCliente, cep, rua, bairro, cidade, numero) VALUES ($1, $2, $3, $4, $5, $6)";
        $result = pg_query_params($this->conn, $query, array(
            $endereco->getCpfCliente(),
            $endereco->getCep(),
            $endereco->getRua(),
            $endereco->getBairro(),
            $endereco->getCidade(),
            $endereco->getNumero()
        ));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir endereço: " . pg_last_error($this->conn));
        }
    }

    public function readByCpfCliente($cpfCliente) {
        $query = "SELECT * FROM {$this->table_name} WHERE cpfCliente = $1";
        $result = pg_query_params($this->conn, $query, array($cpfCliente));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Endereco(
                    $row['cpfcliente'],
                    $row['cep'],
                    $row['rua'],
                    $row['bairro'],
                    $row['cidade'],
                    $row['numero']
                );
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar endereço: " . pg_last_error($this->conn));
        }
    }

    public function update(Endereco $endereco) {
        $query = "UPDATE {$this->table_name} SET cep = $1, rua = $2, bairro = $3, cidade = $4, numero = $5 WHERE cpfCliente = $6";
        $result = pg_query_params($this->conn, $query, array(
            $endereco->getCep(),
            $endereco->getRua(),
            $endereco->getBairro(),
            $endereco->getCidade(),
            $endereco->getNumero(),
            $endereco->getCpfCliente()
        ));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar endereço: " . pg_last_error($this->conn));
        }
    }

    public function delete($cpfCliente) {
        $query = "DELETE FROM {$this->table_name} WHERE cpfCliente = $1";
        $result = pg_query_params($this->conn, $query, array($cpfCliente));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar endereço: " . pg_last_error($this->conn));
        }
    }
}
?>
