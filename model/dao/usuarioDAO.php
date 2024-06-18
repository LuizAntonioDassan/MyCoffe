<?php
include_once './model/conn/Database.php';
include_once './model/api/usuarioAPI.php';
include_once './model/api/clienteAPI.php';

class UsuarioDAO {
    private $conn;
    private $table_usuario = 'usuarios';
    private $table_cliente = 'cliente';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Usuario $usuario) {
        $query = "INSERT INTO {$this->table_usuario} (nome, email, senha) VALUES ($1, $2, $3)";
        $result = pg_query_params($this->conn, $query, array($usuario->nome, $usuario->email, $usuario->senha));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir usuário: " . pg_last_error($this->conn));
        }
    }
    public function create_simplified_client(Usuario $usuario) {
        
        pg_query($this->conn, "BEGIN");

        try {
            
            $query1 = "INSERT INTO {$this->table_usuario} (nome, email, senha) VALUES ($1, $2, $3) RETURNING id";
            $result1 = pg_query_params($this->conn, $query1, array($usuario->nome, $usuario->email, $usuario->senha));

            if (!$result1) {
                throw new Exception("Erro ao inserir na tabela usuarios: " . pg_last_error($this->conn));
            }

            
            $usuario_id = pg_fetch_result($result1, 0, 'id');

        
            $query2 = "INSERT INTO {$this->table_cliente} (id, email) VALUES ($1, $2)";
            $result2 = pg_query_params($this->conn, $query2, array($usuario_id, $usuario->email));

            if (!$result2) {
                throw new Exception("Erro ao inserir na tabela clientes: " . pg_last_error($this->conn));
            }

            
            pg_query($this->conn, "COMMIT");
            return true;
        } catch (Exception $e) {
            
            pg_query($this->conn, "ROLLBACK");
            throw $e;
        }
    }

    public function readAll() {
        $query = "SELECT * FROM {$this->table_usuario}";
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
        $query = "SELECT * FROM {$this->table_usuario} WHERE id = $1";
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
    public function readByEmail($email) {
        $query = "SELECT * FROM {$this->table_usuario} WHERE email = $1";
        $result = pg_query_params($this->conn, $query, array($email));

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
        $query = "UPDATE {$this->table_usuario} SET nome = $1, email = $2, senha = $3 WHERE id = $4";
        $result = pg_query_params($this->conn, $query, array($usuario->nome, $usuario->email, $usuario->senha, $usuario->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar usuário: " . pg_last_error($this->conn));
        }
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_usuario} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar usuário: " . pg_last_error($this->conn));
        }
    }
}
?>
