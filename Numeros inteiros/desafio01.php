<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
    <h1>Antecessor e Sucessor</h1>
    <form method="post">
        <label for="numero" class="prompt-label">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!empty($_POST["numero"])) {
        $numero = (int) $_POST['numero']; 
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "<p>O antecessor de $numero é $antecessor.</p>";
        echo "<p>O sucessor de $numero é $sucessor.</p>";
    }
    ?>
</body>
</html>