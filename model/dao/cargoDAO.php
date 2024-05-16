<?php
include_once 'Database.php';
include_once 'Cargo.php';

class CargoDAO {
    private $conn;
    private $table_name = 'Cargo';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Cargo $cargo) {
        $query = "INSERT INTO {$this->table_name} (nome, permissao) VALUES (:nome, :permissao)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $cargo->nome);
        $stmt->bindParam(':permissao', $cargo->permissao);

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

    public function update(Cargo $cargo) {
        $query = "UPDATE {$this->table_name} SET nome = :nome, permissao = :permissao WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $cargo->id);
        $stmt->bindParam(':nome', $cargo->nome);
        $stmt->bindParam(':permissao', $cargo->permissao);

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
