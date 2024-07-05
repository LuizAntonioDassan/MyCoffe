<?php
include_once './model/conn/Database.php';

class CargoPermissaoDAO {
    private $conn;
    private $table_name = 'cargo_permissoes';

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->conn = $db;
    }

    public function addPermissaoToCargo($cargo_id, $permissao_id) {
        $query = "INSERT INTO {$this->table_name} (cargo_id, permissao_id) VALUES ($1, $2)";
        $result = pg_query_params($this->conn, $query, array($cargo_id, $permissao_id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao associar permissão ao cargo: " . pg_last_error($this->conn));
        }
    }
    public function getPermissoesByCargo($cargo_id) {
        $query = "SELECT p.* FROM permissoes p
                  JOIN cargo_permissoes cp ON p.id = cp.permissao_id
                  WHERE cp.cargo_id = $1";
        $result = pg_query_params($this->conn, $query, array($cargo_id));

        if ($result) {
            $permissoes = [];
            while ($row = pg_fetch_assoc($result)) {
                $permissoes[] = $row;
            }
            return $permissoes;
        } else {
            throw new Exception("Erro ao buscar permissões: " . pg_last_error($this->conn));
        }
    }

    public function getPermissoesByUser($user_id) {
        $query = "SELECT p.* FROM permissoes p
                  JOIN cargo_permissoes cp ON p.id = cp.permissao_id
                  JOIN funcionario f ON f.cargo_id = cp.cargo_id
                  WHERE f.id = $1";
        $result = pg_query_params($this->conn, $query, array($user_id));

        if ($result) {
            $permissoes = [];
            while ($row = pg_fetch_assoc($result)) {
                $permissoes[] = $row;
            }
            return $permissoes;
        } else {
            throw new Exception("Erro ao buscar permissões do usuário: " . pg_last_error($this->conn));
        }
    }

    public function updatePermissions($cargo_id, $permissions) {
        pg_query($this->conn, "BEGIN");
    
        try {
            $delete_query = "DELETE FROM cargo_permissoes WHERE cargo_id = $1";
            pg_query_params($this->conn, $delete_query, array($cargo_id));
    
            foreach ($permissions as $permissao_id) {
                $insert_query = "INSERT INTO cargo_permissoes (cargo_id, permissao_id) VALUES ($1, $2)";
                pg_query_params($this->conn, $insert_query, array($cargo_id, $permissao_id));
            }
    
            pg_query($this->conn, "COMMIT");
        } catch (Exception $e) {
            pg_query($this->conn, "ROLLBACK");
            throw new Exception("Erro ao atualizar permissões: " . $e->getMessage());
        }
    }
    
}
?>
