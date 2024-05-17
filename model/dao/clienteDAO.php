<?php
include_once './model/conn/Database.php';
include_once './model/api/clienteAPI.php';

class ClienteDAO {
    private $conn;
    private $table_name = 'Cliente';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create(Cliente $cliente) {
        $query = "INSERT INTO {$this->table_name} (RG, CPF, Dt_Nascimento, Endereco) VALUES (:RG, :CPF, :Dt_Nascimento, :Endereco)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':RG', $cliente->RG);
        $stmt->bindParam(':CPF', $cliente->CPF);
        $stmt->bindParam(':Dt_Nascimento', $cliente->Dt_Nascimento);
        $stmt->bindParam(':Endereco', $cliente->Endereco);

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

    public function update(Cliente $cliente) {
        $query = "UPDATE {$this->table_name} SET RG = :RG, CPF = :CPF, Dt_Nascimento = :Dt_Nascimento, Endereco = :Endereco WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $cliente->id);
        $stmt->bindParam(':RG', $cliente->RG);
        $stmt->bindParam(':CPF', $cliente->CPF);
        $stmt->bindParam(':Dt_Nascimento', $cliente->Dt_Nascimento);
        $stmt->bindParam(':Endereco', $cliente->Endereco);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete($id) {
        $query = "DELETE FROM {$this->table_name} WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
