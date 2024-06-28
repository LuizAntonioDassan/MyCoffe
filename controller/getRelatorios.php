<?php
include_once 'model/conn/Database.php';

$database = new Database();
$conn = $database->getConnection();

$query = "SELECT p.nome, c.nome AS categoria, p.preco, p.quantidade 
          FROM produto p 
          JOIN categoria c ON p.nomecategoria = c.nome";
$result = pg_query($conn, $query);

$data = array();
while ($row = pg_fetch_assoc($result)) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
