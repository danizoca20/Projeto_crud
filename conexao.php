<?php
$host = "localhost";
$port = "5432";
$dbname = "projeto_crud";
$user = "postgres";
$password = "postgres";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}
?>
