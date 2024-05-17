<?php
include_once './model/conn/Database.php';
include_once './model/api/funcionarioAPI.php';

class FuncionarioDAO {
    private $conn;
    private $table_name = 'Funcionario';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Funcionario $funcionario) {
        $query = "INSERT INTO {$this->table_name} (email, cargo_id) VALUES (:email, :cargo_id)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $funcionario->email);
        $stmt->bindParam(':cargo_id', $funcionario->cargo_id);

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
