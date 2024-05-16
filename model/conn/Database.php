<?php
// Extrair informações da URL
$url = parse_url(getenv("postgres://luiz:CIePNJCXHtMFLXtdscz6Suxh5kzUdDBA@dpg-coc7ms8l5elc739okugg-a.oregon-postgres.render.com/mycoffe"));

$host = "dpg-coc7ms8l5elc739okugg-a.oregon-postgres.render.com";
$port = "5432";
$username = "luiz";
$password = "CIePNJCXHtMFLXtdscz6Suxh5kzUdDBA";
$database = "mycoffe";

// Montar a string de conexão
$conn_string = "host=$host port=$port dbname=$database user=$username password=$password";

// Estabelecer a conexão
$conn = pg_connect($conn_string);

// Verificar se a conexão foi bem-sucedida
if ($conn) {
    //echo "Conexão bem-sucedida!";
} else {
    echo "Falha na conexão!\n";
}