<?php
include_once './model/conn/Database.php';
include_once './model/api/usuarioAPI.php';

class UsuarioDAO {
    private $conn;
    private $table_name = 'usuarios';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Usuario $usuario) {
        $query = "INSERT INTO {$this->table_name} (id, nome, email, senha) VALUES ($1, $2, $3, $4)";
        $result = pg_query_params($this->conn, $query, array($usuario->id, $usuario->nome, $usuario->email, $usuario->senha));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir usuário: " . pg_last_error($this->conn));
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $usuarios = [];
            while ($row = pg_fetch_assoc($result)) {
                $usuarios[] = new Usuario($row['id'], $row['nome'], $row['email'], $row['senha']);
            }
            return $usuarios;
        } else {
            throw new Exception("Erro ao buscar usuários: " . pg_last_error($this->conn));
        }
    }

    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Usuario($row['id'], $row['nome'], $row['email'], $row['senha']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar usuário: " . pg_last_error($this->conn));
        }
    }

    public function update(Usuario $usuario) {
        $query = "UPDATE {$this->table_name} SET nome = $1, email = $2, senha = $3 WHERE id = $4";
        $result = pg_query_params($this->conn, $query, array($usuario->nome, $usuario->email, $usuario->senha, $usuario->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar usuário: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar usuário: " . pg_last_error($this->conn));
        }
    }
}
?>
