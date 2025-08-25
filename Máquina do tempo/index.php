<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style//estilo.css">
</head>
<body>
    <h2>Desafio 4: Máquina do Tempo</h2>
    <form method="post">
        <label>Ano de nascimento:</label>
        <input type="number" name="nasc" required>
        <label>Ano futuro ou passado:</label>
        <input type="number" name="ano" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nasc = $_POST["nasc"];
        $ano = $_POST["ano"];
        $idade = $ano - $nasc;

        echo "<p>Em $ano, você terá <strong>$idade</strong> anos.</p>";
    }
    ?>
</body>
</html>
