<?php
include_once './model/conn/Database.php';
include_once './model/api/administradorAPI.php';

class AdministradorDAO {
    private $conn;
    private $table_name = 'administrador';

    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para criar um novo administrador
    public function create(Administrador $administrador) {
        $query = "INSERT INTO {$this->table_name} (id, cargo) VALUES ($1, $2)";
        $result = pg_query_params($this->conn, $query, array($administrador->id, $administrador->cargo));
        
        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao inserir administrador: " . pg_last_error($this->conn));
        }
    }

    // Método para buscar todos os administradores
    public function readAll() {
        $query = "SELECT * FROM {$this->table_name}";
        $result = pg_query($this->conn, $query);

        if ($result) {
            $administradores = [];
            while ($row = pg_fetch_assoc($result)) {
                $administradores[] = new Administrador($row['id'], $row['cargo']);
            }
            return $administradores;
        } else {
            throw new Exception("Erro ao buscar administradores: " . pg_last_error($this->conn));
        }
    }

    // Método para buscar um administrador por ID
    public function readById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            $row = pg_fetch_assoc($result);
            if ($row) {
                return new Administrador($row['id'], $row['cargo']);
            } else {
                return null;
            }
        } else {
            throw new Exception("Erro ao buscar administrador: " . pg_last_error($this->conn));
        }
    }

    // Método para atualizar um administrador
    public function update(Administrador $administrador) {
        $query = "UPDATE {$this->table_name} SET cargo = $1 WHERE id = $2";
        $result = pg_query_params($this->conn, $query, array($administrador->cargo, $administrador->id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao atualizar administrador: " . pg_last_error($this->conn));
        }
    }

    // Método para deletar um administrador
    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = $1";
        $result = pg_query_params($this->conn, $query, array($id));

        if ($result) {
            return true;
        } else {
            throw new Exception("Erro ao deletar administrador: " . pg_last_error($this->conn));
        }
    }
}
