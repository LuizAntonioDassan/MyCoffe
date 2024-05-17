<?php
include_once './model/conn/Database.php';
include_once './model/api/assinaturaAPI.php';

class AssinaturaDAO {
    private $conn;
    private $table_name = 'assinatura';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Assinatura $assinatura) {
        $query = "INSERT INTO {$this->table_name} (atividade, preco, precodesconto, imagens, descricao, codigointerno) VALUES ($1, $2, $3, $4, $5, $6)";
        $result = pg_query_params($this->conn, $query, array($assinatura->ativo, $assinatura->preco, $assinatura->precoDesconto, null, $assinatura->descricao, $assinatura->id));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir assinatura: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $assinaturas = [];
            while ($row = pg_fetch_assoc($result)) {
                $assinaturas[] = new Assinatura($row['id'], $row['preco'], $row['precodeconto'], $row['imagens'], $row['descricao'], $row['codigointerno']);
            }
            return $assinaturas;
        } else {
            throw new Exception("Erro ao buscar assinaturas: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Assinatura($row['id'], $row['preco'], $row['precodeconto'], $row['imagens'], $row['descricao'], $row['codigointerno']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar assinatura: " . pg_last_error($this->conn));
        }
    }

    public function update(Assinatura $assinatura) {
        $query = "UPDATE {$this->table_name} SET atividade = $1, preco = $2, precodesconto = $3 WHERE condigointerno = $4";
        $result = pg_query_params($this->conn, $query, array($assinatura->ativo, $assinatura->preco, $assinatura->precoDesconto, $assinatura->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar assinatura: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE codigointerno = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar assinatura: " . pg_last_error($this->conn));
        }
    }
}
?>
