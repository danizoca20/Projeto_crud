
<?php
$host = "localhost";
$port = "5432";
$banco = "projeto_crud";
$usuario = "postgres";
$senha = "postgres";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$banco",
        $usuario,
        $senha
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . htmlspecialchars($e->getMessage()));
}
?>
