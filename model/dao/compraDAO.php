<?php
include_once './model/conn/Database.php';
include_once './model/api/compraAPI.php';

class CompraDAO {
    private $conn;
    private $table_name = 'compra';

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->conn = $db;
    }

    public function create(Compra $compra) {
        $query = "INSERT INTO {$this->table_name} (identificador, data, cliente_rg) VALUES ($1, $2, $3)";
        $result = pg_query_params($this->conn, $query, array($compra->identificador, $compra->data, $compra->cliente_id));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir compra: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $compras = [];
            while ($row = pg_fetch_assoc($result)) {
                $compras[] = new Compra($row['identificador'], $row['data'], $row['cliente_rg']);
            }
            return $compras;
        } else {
            throw new Exception("Erro ao buscar compras: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Compra($row['identificador'], $row['data'], $row['cliente_rg']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar compra: " . pg_last_error($this->conn));
        }
    }

    public function update(Compra $compra) {
        $query = "UPDATE {$this->table_name} SET cliente_rg = $1, data = $2 WHERE identificador = $3";
        $result = pg_query_params($this->conn, $query, array($compra->cliente_id, $compra->data, $compra->identificador));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar compra: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE identificador = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar compra: " . pg_last_error($this->conn));
        }
    }
}
?>
