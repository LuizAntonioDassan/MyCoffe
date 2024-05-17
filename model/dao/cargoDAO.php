<?php
include_once './model/conn/Database.php';
include_once './model/api/cargoAPI.php';

class CargoDAO {
    private $conn;
    private $table_name = 'cargo';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Cargo $cargo) {
        $query = "INSERT INTO {$this->table_name} (id, nome, permissao) VALUES ($1, $2, $3)";
        $result = pg_query_params($this->conn, $query, array($cargo->id, $cargo->nome, $cargo->permissao));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir cargo: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $cargos = [];
            while ($row = pg_fetch_assoc($result)) {
                $cargos[] = new Cargo($row['id'], $row['nome'], $row['permissao']);
            }
            return $cargos;
        } else {
            throw new Exception("Erro ao buscar cargos: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Cargo($row['id'], $row['nome'], $row['permissao']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar cargo: " . pg_last_error($this->conn));
        }
    }

    public function update(Cargo $cargo) {
        $query = "UPDATE {$this->table_name} SET descricao = $1 WHERE id = $2";
        $result = pg_query_params($this->conn, $query, array($cargo->nome, $cargo->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar cargo: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar cargo: " . pg_last_error($this->conn));
        }
    }
}
?>
