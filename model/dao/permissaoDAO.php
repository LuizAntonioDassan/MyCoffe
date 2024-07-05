<?php
include_once './model/conn/Database.php';

class PermissaoDAO {
    private $conn;
    private $table_name = 'permissoes';

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->conn = $db;
    }

    public function create($nome, $descricao) {
        $query = "INSERT INTO {$this->table_name} (nome) VALUES ($1)";
        $result = pg_query_params($this->conn, $query, array($nome));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir permissão: " . pg_last_error($this->conn));
        }
    }

    public function getAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $permissoes = [];
            while ($row = pg_fetch_assoc($result)) {
                $permissoes[] = $row;
            }
            return $permissoes;
        } else {
            throw new Exception("Erro ao buscar permissões: " . pg_last_error($this->conn));
        }
    }
}
?>
