<?php
include_once './model/conn/Database.php';
include_once './model/api/compraAPI.php';

class CompraDAO {
    private $conn;
    private $table_name = 'Compra';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Compra $compra) {
        $query = "INSERT INTO {$this->table_name} (data, cliente_id) VALUES (:data, :cliente_id)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':data', $compra->data);
        $stmt->bindParam(':cliente_id', $compra->cliente_id);

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

    public function update(Compra $compra) {
        $query = "UPDATE {$this->table_name} SET data = :data, cliente_id = :cliente_id WHERE identificador = :identificador";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':identificador', $compra->identificador);
        $stmt->bindParam(':data', $compra->data);
        $stmt->bindParam(':cliente_id', $compra->cliente_id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete($identificador) {
        $query = "DELETE FROM {$this->table_name} WHERE identificador = :identificador";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':identificador', $identificador);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
