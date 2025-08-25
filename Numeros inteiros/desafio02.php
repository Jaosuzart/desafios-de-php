<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <h1>Sorteador de números</h1>
    <form method="post">
        <label for="min"> número mínimo:</label>
        <input type="number" id="min" name="min" required>
        <label for="max">Número máximo:</label>
        <input type="number" id="max" name="max" required>
        <button type="submit">Sortear</button>
    </form>

    <?php
if(isset($_POST['min']) && isset($_POST['max'])) {
        $min = (int) $_POST['min']; 
        $max = (int) $_POST['max']; 
      if ($min > $max) {
            echo "<p>⚠️ O valor mínimo deve ser menor ou igual ao valor máximo.</p>";
        } else {
            $sorteado = random_int($min, $max);
            echo "<p>O número sorteado entre $min e $max é: <strong>$sorteado</strong></p>";
        }
    }
    ?>
</body>
</html>