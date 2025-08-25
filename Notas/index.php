<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Médias</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
    <h2>Desafio 3: Médias</h2>
    <form method="post">
        <label>Nota 1:</label><input type="number" name="n1" step="0.1" required>
        <label>Peso 1:</label><input type="number" name="p1" required>
        <br>
        <label>Nota 2:</label><input type="number" name="n2" step="0.1" required>
        <label>Peso 2:</label><input type="number" name="p2" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $n1 = $_POST["n1"]; $p1 = $_POST["p1"];
        $n2 = $_POST["n2"]; $p2 = $_POST["p2"];

        $mediaArit = ($n1 + $n2) / 2;
        $mediaPond = (($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2);
        
        echo "<p>Média aritmética: $mediaArit</p>";
        echo "<p>Média Ponderada: $mediaPond</p>";
    }
    ?>
    </body>
    </html>