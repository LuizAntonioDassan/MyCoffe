<?php
include_once './model/conn/Database.php';
include_once './model/api/clienteAPI.php';

class ClienteDAO {
    private $conn;
    private $tableCliente = 'cliente';
    private $tableUsuario = 'usuarios';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Cliente $cliente) {
        $query = "INSERT INTO {$this->tableCliente} (datanascimento, rg, cpf, endereco, id) VALUES ($1, $2, $3, $4, $5)";
        $result = pg_query_params($this->conn, $query, array($cliente->Dt_Nascimento, $cliente->RG, $cliente->CPF, $cliente->Endereco, $cliente->id));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir cliente: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "select c.id, c.rg, c.cpf, c.email,  u.nome from {$this->tableCliente} c join {$this->tableUsuario} u on c.id = u.id;";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $clientes = [];
            while ($row = pg_fetch_assoc($result)) {
                $cliente = new Cliente($row['id'], $row['email']);
                $cliente->visualizaCliente($row['id'], $row['rg'], $row['cpf'], $row['email'], $row['nome']);
                $clientes[] = $cliente;
            }
            return $clientes;
        } else {
            throw new Exception("Erro ao buscar clientes: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->tableCliente} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Cliente($row['datanascimento'], $row['rg'], $row['cpf'], $row['endereco'], $row['id']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar cliente: " . pg_last_error($this->conn));
        }
    }

    public function update(Cliente $cliente) {
        $query = "UPDATE {$this->tableCliente} SET datanascimento = $1, rg = $2, cpf = $3, endereco = $4 WHERE id = $5";
        $result = pg_query_params($this->conn, $query, array($cliente->Dt_Nascimento, $cliente->RG, $cliente->CPF, $cliente->Endereco, $cliente->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar cliente: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->tableCliente} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar cliente: " . pg_last_error($this->conn));
        }
    }
}
?>
