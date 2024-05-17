<?php
include_once './model/conn/Database.php';
include_once './model/api/funcionarioAPI.php';

class FuncionarioDAO {
    private $conn;
    private $table_name = 'funcionario';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Funcionario $funcionario) {
        $query = "INSERT INTO {$this->table_name} (email, cargo_id) VALUES ($1, $2)";
        $result = pg_query_params($this->conn, $query, array($funcionario->email, $funcionario->cargo_id));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir funcionário: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $funcionarios = [];
            while ($row = pg_fetch_assoc($result)) {
                $funcionarios[] = new Funcionario($row['id'], $row['nome'], $row['cargo']);
            }
            return $funcionarios;
        } else {
            throw new Exception("Erro ao buscar funcionários: " . pg_last_error($this->conn));
        }
    }

    public function readById($email) {
        $query = "SELECT * FROM {$this->table_name} WHERE email = $1";
        $result = pg_query_params($this->conn, $query, array($email));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Funcionario($row['email'], $row['nome'], $row['cargo']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar funcionário: " . pg_last_error($this->conn));
        }
    }

    public function update(Funcionario $funcionario) {
        $query = "UPDATE {$this->table_name} SET cargo = $1 WHERE id = $2";
        $result = pg_query_params($this->conn, $query, array($funcionario->cargo_id, $funcionario->email));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar funcionário: " . pg_last_error($this->conn));
        }
    }

    public function delete($email) {
        $query = "DELETE FROM {$this->table_name} WHERE email = $1";
        $result = pg_query_params($this->conn, $query, array($email));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar funcionário: " . pg_last_error($this->conn));
        }
    }
}
?>
