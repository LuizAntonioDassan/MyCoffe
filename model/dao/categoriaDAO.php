<?php
include_once './model/conn/Database.php';
include_once './model/api/categoriaAPI.php';

class CategoriaDAO {
    private $conn;
    private $table_name = 'Categoria';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Categoria $categoria) {
        $query = "INSERT INTO {$this->table_name} (nome) VALUES (:nome)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $categoria->nome);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read() {
        $query = "SELECT * FROM {$this->table_name}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function update(Categoria $categoria) {
        $query = "UPDATE {$this->table_name} SET nome = :nome WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $categoria->id);
        $stmt->bindParam(':nome', $categoria->nome);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
