<?php
include_once './model/conn/Database.php';
include_once './model/api/produtoAPI.php';

class ProdutoDAO {
    private $conn;
    private $table_name = 'produto';

    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para criar um novo produto
    public function create(Produto $produto) {
        $query = "INSERT INTO {$this->table_name} (nome, preco, precodesconto,  codigobarras, marca, quantidade, atividade, nomecategoria, descricao, imagem) 
                  VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10)";
            $result = pg_query_params($this->conn, $query, array(
            $produto->nome,
            $produto->preco,
            $produto->precodesconto,
            $produto->codigobarras,
            $produto->marca,
            $produto->quantidade,
            $produto->atividade,
            $produto->categoria,
            $produto->descricao,
            $produto->imagem
        ));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir produto: " . pg_last_error($this->conn));
        }
    }

    // Método para buscar todos os produtos
    public function readAll() {
        $query = "SELECT * FROM {$this->table_name} where atividade = true";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $produtos = [];
            while ($row = pg_fetch_assoc($result)) {
                $produto = new Produto(
                    $row['nome'],
                    $row['preco'],
                    $row['precodesconto'],
                    $row['codigointerno'],
                    $row['codigobarras'],
                    $row['marca'],
                    $row['atividade'],
                    $row['quantidade'],
                    $row['nomecategoria'],
                    $row['descricao'],
                );
                if(isset($row['imagem'])){
                    $produto->setImagem($row['imagem']);
                }
                $produtos[] = $produto;
            }
            return $produtos;
        } else {
            throw new Exception("Erro ao buscar produtos: " . pg_last_error($this->conn));
        }
    }

    // Método para buscar um produto por ID (ou outro campo único)
    public function readByCodigoBarras($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE codigobarras = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                $produto = new Produto(
                    $row['nome'],
                    $row['preco'],
                    $row['precodesconto'],
                    $row['codigointerno'],
                    $row['codigobarras'],
                    $row['marca'],
                    $row['atividade'],
                    $row['quantidade'],
                    $row['nomecategoria'],
                    $row['descricao']
                );
                $produto->setImagem($row['imagem']);
                return $produto;
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar produto: " . pg_last_error($this->conn));
        }
    }

    // Método para atualizar um produto
    public function update(Produto $produto, $id) {
        $query = "UPDATE {$this->table_name} SET 
                    nome = $1, preco = $2, precodesconto = $3, descricao = $4, codigobarras = $5, 
                    marca = $6, quantidade = $7, atividade = $8, nomecategoria = $9, imagem = $10
                  WHERE codigobarras = $11";
        $result = pg_query_params($this->conn, $query, array(
            $produto->nome,
            $produto->preco,
            $produto->precodesconto,
            $produto->descricao,
            $produto->codigobarras,
            $produto->marca,
            $produto->quantidade,
            $produto->atividade,
            $produto->categoria,
            $produto->imagem,
            $id
        ));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar produto: " . pg_last_error($this->conn));
        }
    }

    // Método para deletar um produto
    public function delete($id) {
        $query = "UPDATE {$this->table_name} SET atividade = false  WHERE codigobarras = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar produto: " . pg_last_error($this->conn));
        }
    }
}
?>
