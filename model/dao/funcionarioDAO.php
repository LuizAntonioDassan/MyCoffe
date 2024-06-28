<?php
include_once './model/conn/Database.php';
include_once './model/api/funcionarioAPI.php';

class FuncionarioDAO {
    private $conn;
    private $table_funcionario = 'funcionario';
    private $table_cargo = 'cargo';
    private $table_usuario = 'usuarios';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Funcionario $funcionario) {
        $query = "INSERT INTO {$this->table_funcionario} (email, cargo_id, id) VALUES ($1, $2, $3)";
        $result = pg_query_params($this->conn, $query, array($funcionario->email, $funcionario->cargo, $funcionario->id));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir funcionário: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "select u.nome as nome_funcionario ,c.nome as nome_cargo, f.email, u.id from {$this->table_funcionario} f 
                    join {$this->table_cargo} c on f.cargo_id = c.id 
                    join {$this->table_usuario} u on f.email  = u.email";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $funcionarios = [];
            while ($row = pg_fetch_assoc($result)) {
                $funcionario = new Funcionario($row['nome_funcionario'],$row['email'], $row['nome_cargo']);
                $funcionario->setId($row['id']);
                $funcionarios[] = $funcionario;
            }
            return $funcionarios;
        } else {
            throw new Exception("Erro ao buscar funcionários: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT u.nome, f.email, f.cargo_id, u.id  from funcionario f join usuarios u on f.email = u.email  where u.id = $1;";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                $func = new Funcionario($row['nome'], $row['email'], $row['cargo_id']);
                $func->setId($row['id']);
                return $func;
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar funcionário: " . pg_last_error($this->conn));
        }
    }

    public function update(Funcionario $funcionario) {
        $query = "UPDATE {$this->table_funcionario} SET cargo_id = $1, email = $2 WHERE id = $3";
        $result = pg_query_params($this->conn, $query, array($funcionario->cargo, $funcionario->email, $funcionario->id));
        $query2 = "UPDATE usuarios SET nome = $1, email = $2 WHERE id = $3";
        $result2 = pg_query_params($this->conn, $query2, array($funcionario->nome,$funcionario->email, $funcionario->id));

        if ($result && $result2) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar funcionário: " . pg_last_error($this->conn));
        }
    }

    public function delete($email) {
        $query = "DELETE FROM {$this->table_funcionario} WHERE email = $1";
        $result = pg_query_params($this->conn, $query, array($email));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar funcionário: " . pg_last_error($this->conn));
        }
    }
}
?>
