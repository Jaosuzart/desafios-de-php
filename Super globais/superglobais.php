<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilo.css">
    <title>Exercício Php</title>
</head>
<body>
  <main> 
    <pre>
        <?php
        setcookie("dia-da-semana", "SEGUNDA", time()+ 3600);

        session_start();
        $_SESSION["Teste"] = "Funcionou!";

        echo "<h1> SuperGlobal GET </h1>";
        var_dump($_GET);
        echo "<h1> SuperGlobal POST</h1>";
        var_dump($_POST);
        echo "<h1> SuperGlobal REQUEST</h1>";
        var_dump($_REQUEST);
        echo "<h1> SuperGlobal COOKIE</h1>";
        var_dump($_COOKIE);
        echo "<h1> SuperGlobal SESSION</h1>";
        var_dump($_SESSION);
                ?>
    </pre>
  </main>
</body>
</html>