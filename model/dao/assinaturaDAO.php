<?php
include_once './model/conn/Database.php';
include_once './model/dao/assinaturaAPI.php';

class AssinaturaDAO {
    private $conn;
    private $table_name = 'Assinatura';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Assinatura $assinatura) {
        $query = "INSERT INTO {$this->table_name} (descricao, preco, duracao) VALUES (:descricao, :preco, :duracao)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':descricao', $assinatura->descricao);
        $stmt->bindParam(':preco', $assinatura->preco);
        $stmt->bindParam(':duracao', $assinatura->duracao);

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

    public function update(Assinatura $assinatura) {
        $query = "UPDATE {$this->table_name} SET descricao = :descricao, preco = :preco, duracao = :duracao WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $assinatura->id);
        $stmt->bindParam(':descricao', $assinatura->descricao);
        $stmt->bindParam(':preco', $assinatura->preco);
        $stmt->bindParam(':duracao', $assinatura->duracao);

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
