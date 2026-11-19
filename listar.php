
<?php
require_once 'conexao.php';

try {
    $sql = "SELECT * FROM tarefas ORDER BY id";
    $stmt = $pdo->query($sql);
    $tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $erro = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<body>

    <h1>Minhas Tarefas</h1>

    <?php if (isset($erro)): ?>

        <p>Erro: <?= htmlspecialchars($erro) ?></p>

    <?php else: ?>

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
            </tr>

            <?php foreach ($tarefas as $tarefa): ?>
                <tr>
                    <td><?= htmlspecialchars($tarefa['id']) ?></td>
                    <td><?= htmlspecialchars($tarefa['titulo']) ?></td>
                    <td><?= htmlspecialchars($tarefa['descricao'] ?? '') ?></td>
                    <td><?= htmlspecialchars($tarefa['status']) ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    <?php endif; ?>

</body>
</html>
