<?php
include_once './model/conn/Database.php';
include_once './model/api/produtoAPI.php';

class ProdutoDAO {
    private $conn;
    private $table_name = 'Produto';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Produto $produto) {
        $query = "INSERT INTO {$this->table_name} (codigo_barras, descricao, preco, quantidade, marca) VALUES (:codigo_barras, :descricao, :preco, :quantidade, :marca)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':codigo_barras', $produto->codigo_barras);
        $stmt->bindParam(':descricao', $produto->descricao);
        $stmt->bindParam(':preco', $produto->preco);
        $stmt->bindParam(':quantidade', $produto->quantidade);
        $stmt->bindParam(':marca', $produto->marca);

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

    public function update(Produto $produto) {
        $query = "UPDATE {$this->table_name} SET descricao = :descricao, preco = :preco, quantidade = :quantidade, marca = :marca WHERE codigo_barras = :codigo_barras";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':codigo_barras', $produto->codigo_barras);
        $stmt->bindParam(':descricao', $produto->descricao);
        $stmt->bindParam(':preco', $produto->preco);
        $stmt->bindParam(':quantidade', $produto->quantidade);
        $stmt->bindParam(':marca', $produto->marca);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete($codigo_barras) {
        $query = "DELETE FROM {$this->table_name} WHERE codigo_barras = :codigo_barras";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':codigo_barras', $codigo_barras);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
