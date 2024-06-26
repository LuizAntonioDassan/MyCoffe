<?php
include_once './model/conn/Database.php';
include_once './model/api/carrinhoAPI.php';

class CarrinhoDAO {
    private $conn;
    private $table_name = 'carrinho';

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->conn =$db;
    }

    public function create(Carrinho $carrinho) {
        $query = "INSERT INTO {$this->table_name} (identificador, codigoProduto, precoFinal, quantidade) VALUES ($1, $2, $3, $4)";
        $result = pg_query_params($this->conn, $query, array($carrinho->id, $carrinho->codigoProduto, $carrinho->precoFinal, $carrinho->quantidade));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir item no carrinho: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $carrinhos = [];
            while ($row = pg_fetch_assoc($result)) {
                $carrinhos[] = new Carrinho($row['identificador'], $row['codigoProduto'], $row['precoFinal'], $row['quantidade']);
            }
            return $carrinhos;
        } else {
            throw new Exception("Erro ao buscar itens do carrinho: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE identificador = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $carrinhos = [];
            while ($row = pg_fetch_assoc($result)) {
                $carrinhos[] = new Carrinho($row['identificador'], $row['codigoproduto'], $row['precofinal'], $row['quantidade']);
            }
            return $carrinhos;
        } else {
            throw new Exception("Erro ao buscar itens do carrinho: " . pg_last_error($this->conn));
        }
    }

    public function update(Carrinho $carrinho) {
        $query = "UPDATE {$this->table_name} SET codigoProduto = $1 WHERE identificador = $2";
        $result = pg_query_params($this->conn, $query, array($carrinho->codigoProduto, $carrinho->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar item do carrinho: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE identificador = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar item do carrinho: " . pg_last_error($this->conn));
        }
    }
}
?>
