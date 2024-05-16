<?php
include_once 'Database.php';
include_once 'Usuario.php';

class UsuarioDAO {
    private $conn;
    private $table_name = 'Usuario';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Usuario $usuario) {
        $query = "INSERT INTO {$this->table_name} (email, senha, nome, foto) VALUES (:email, :senha, :nome, :foto)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $usuario->email);
        $stmt->bindParam(':senha', $usuario->senha);
        $stmt->bindParam(':nome', $usuario->nome);
        $stmt->bindParam(':foto', $usuario->foto);

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

    public function update(Usuario $usuario) {
        $query = "UPDATE {$this->table_name} SET senha = :senha, nome = :nome, foto = :foto WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $usuario->email);
        $stmt->bindParam(':senha', $usuario->senha);
        $stmt->bindParam(':nome', $usuario->nome);
        $stmt->bindParam(':foto', $usuario->foto);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete($email) {
        $query = "DELETE FROM {$this->table_name} WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
