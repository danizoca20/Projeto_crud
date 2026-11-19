<?php
$enviado = $_SERVER['REQUEST_METHOD'] === 'POST';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
</head>
<body>

<h1>Formulário de Contato</h1>

<?php if ($enviado): ?>
    <h2>Dados enviados:</h2>
    
    <?php
    // Verifica se os campos existem antes de usar
    $nome = $_POST['nome'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';
    ?>
    
    <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
    <p><strong>Mensagem:</strong> <?= htmlspecialchars($mensagem) ?></p>
    
    <br>
    <a href="contato.php">Enviar outro formulário</a>
<?php else: ?>
    <form method="POST" action="contato.php">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>
        
        <label>Mensagem:</label><br>
        <textarea name="mensagem" required></textarea><br><br>
        
        <button type="submit">Enviar</button>
    </form>
<?php endif; ?>

</body>
</html>
