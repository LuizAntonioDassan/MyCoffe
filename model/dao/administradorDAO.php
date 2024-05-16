<?php
include_once 'Database.php';
include_once 'Administrador.php';

class AdministradorDAO {
    private $conn;
    private $table_name = 'Administrador';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Administrador $administrador) {
        $query = "INSERT INTO {$this->table_name} (email) VALUES (:email)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $administrador->email);

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
