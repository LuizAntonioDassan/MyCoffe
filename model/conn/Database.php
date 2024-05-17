<?php
class Database {
    private $host = "dpg-coc7ms8l5elc739okugg-a.oregon-postgres.render.com";
    private $port = "5432";
    private $username = "luiz";
    private $password = "CIePNJCXHtMFLXtdscz6Suxh5kzUdDBA";
    private $database = "mycoffe";
    private $conn = null;

    public function getConnection() {
        try {
            $conn_string = "host={$this->host} port={$this->port} dbname={$this->database} user={$this->username} password={$this->password}";
            $this->conn = pg_connect($conn_string);

            if (!$this->conn) {
                throw new Exception("Falha na conexão!");
            }
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>
