<?php
require_once('model/conn/Database.php');

$database = new Database();
$db = $database->getConnection();

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $query = "SELECT COUNT(*) FROM usuarios WHERE email = $1";
    $result = pg_query_params($db, $query, array($email));

    if ($result) {
        $count = pg_fetch_result($result, 0, 0);
        if ($count > 0) {
            echo 'exists';
        } else {
            echo 'not_exists';
        }
    } else {
        echo 'error';
    }
}