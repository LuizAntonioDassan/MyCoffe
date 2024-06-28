<?php
$response = array();

if (isset($_SESSION['cpf'])) {
    $response['cpfExists'] = true;
} else {
    $response['cpfExists'] = false;
}


if (isset($_SESSION['rua']) && isset($_SESSION['cidade']) && isset($_SESSION['numero']) && isset($_SESSION['cep']) && isset($_SESSION['bairro'])) {
    $response['cepExists'] = true;
} else {
    $response['cepExists'] = false;
}
header('Content-Type: application/json');
echo json_encode($response);
?>
