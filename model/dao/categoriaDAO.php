<?php
include_once './model/conn/Database.php';
include_once './model/api/categoriaAPI.php';

class CategoriaDAO {
    private $conn;
    private $table_name = 'categoria';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Categoria $categoria) {
        $query = "INSERT INTO {$this->table_name} (id, nome) VALUES ($1, $2)";
        $result = pg_query_params($this->conn, $query, array($categoria->id, $categoria->nome));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir categoria: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $categorias = [];
            while ($row = pg_fetch_assoc($result)) {
                $categorias[] = new Categoria($row['id'], $row['nome']);
            }
            return $categorias;
        } else {
            throw new Exception("Erro ao buscar categorias: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Categoria($row['id'], $row['nome']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar categoria: " . pg_last_error($this->conn));
        }
    }

    public function update(Categoria $categoria) {
        $query = "UPDATE {$this->table_name} SET nome = $1 WHERE id = $2";
        $result = pg_query_params($this->conn, $query, array($categoria->nome, $categoria->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar categoria: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar categoria: " . pg_last_error($this->conn));
        }
    }
}
?>
