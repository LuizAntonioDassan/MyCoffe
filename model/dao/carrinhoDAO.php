<?php
include_once './model/conn/Database.php';
include_once './model/api/carrinho.php';

class CarrinhoDAO {
    private $conn;
    private $table_name = 'Carrinho';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Carrinho $carrinho) {
        $query = "INSERT INTO {$this->table_name} (cliente_RG) VALUES (:cliente_RG)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':cliente_RG', $carrinho->cliente_RG);

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

    public function update(Carrinho $carrinho) {
        $query = "UPDATE {$this->table_name} SET cliente_RG = :cliente_RG WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $carrinho->id);
        $stmt->bindParam(':cliente_RG', $carrinho->cliente_RG);

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
