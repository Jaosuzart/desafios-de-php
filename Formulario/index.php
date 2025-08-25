<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilo.css">
    <title>Document</title>
</head>

<body>
    <?php
    // capturando dados do formulário retroalimentado
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;

    ?>
    <main>
        <h1>Resultado dos valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section id="resultado">
        <h1>Resultado da soma</h1>
        <?php
        $soma = $valor1 + $valor2;
        print "<p> A soma entre os valores $valor1 e $valor2 é <strong> igual a: $soma </strong> </p>"
        ?>
    </section>
</body>

</html>