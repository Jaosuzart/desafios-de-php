<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
    <h2>Desafio 5: Reajustar Preço</h2>
    <form method="post">
        <label>Preço do produto:</label>
        <input type="number" name="preco" step="0.01" required>
        <label>Percentual de reajuste (%):</label>
        <input type="number" name="perc" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $preco = $_POST["preco"];
        $perc = $_POST["perc"];

        $novoPreco = $preco + ($preco * $perc / 100);

        echo "<p>O novo preço é: R$ " . number_format($novoPreco, 2, ",", ".") . "</p>";
    }
    ?>
</body>
</html>
