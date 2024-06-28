<?php
include_once 'model/conn/Database.php';

$database = new Database();
$conn = $database->getConnection();

$query = "SELECT 
    cl.email,
    co.identificador,
    co.data,
    ca.quantidade,
    SUM(ca.precofinal * ca.quantidade) AS total_compra
FROM 
    compra co
JOIN 
    carrinho ca ON co.identificador = ca.identificador
JOIN 
    cliente cl ON co.cpfcliente = cl.cpf
GROUP BY 
   cl.email, ca.quantidade, co.identificador, co.data
ORDER BY 
    co.data DESC
";
$result = pg_query($conn, $query);

$data = array();
while ($row = pg_fetch_assoc($result)) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
