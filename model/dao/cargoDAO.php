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
        $query = "INSERT INTO {$this->table_name} (nome) VALUES ($1)";
        $result = pg_query_params($this->conn, $query, array($cargo->nome));
        
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
                $cargo = new Cargo($row['nome']);
                $cargo->setId($row['id']);
                $cargos[] = $cargo;
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
                $cargo = new Cargo($row['nome']);
                $cargo->setId($row['id']);
                return $cargo;
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar cargo: " . pg_last_error($this->conn));
        }
    }

    public function update(Cargo $cargo) {
        $query = "UPDATE {$this->table_name} SET nome = $1 WHERE id = $2";
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
    public function getPermissions($cargo_id) {
        $query = "SELECT permissao_id FROM cargo_permissoes WHERE cargo_id = $1";
        $result = pg_query_params($this->conn, $query, array($cargo_id));

        if ($result) {
            $permissions = [];
            while ($row = pg_fetch_assoc($result)) {
                $permissions[] = $row['permissao_id'];
            }
            return $permissions;
        } else {
            throw new Exception("Erro ao buscar permissões do cargo: " . pg_last_error($this->conn));
        }
    }
    
}
?>
