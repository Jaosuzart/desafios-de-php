<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/estilo.css">
    <title>Conversor de Moeda Básico</title>
</head>
<body>
    <h2>Conversor de Moeda Básico</h2>
    <form action="converter.php" method="post">
        <label for="amount">Valor:</label>
        <input type="number" id="amount" name="amount" step="0.01" required><br><br>

        <label for="from_currency">De:</label>
        <select id="from_currency" name="from_currency" required>
            <option value="BRL">Real Brasileiro</option>
            <option value="USD">Dólar Americano</option>
            <option value="EUR">Euro</option>
            <option value="GBP">Libra Esterlina</option>
            <option value="JPY">Iene Japonês</option>
        </select><br><br>

        <label for="to_currency">Para:</label>
        <select id="to_currency" name="to_currency" required>
            <option value="USD">Dólar Americano</option>
            <option value="BRL">Real Brasileiro</option>
            <option value="EUR">Euro</option>
            <option value="GBP">Libra Esterlina</option>
            <option value="JPY">Iene Japonês</option>
        </select><br><br>

        <button type="submit">Converter</button>
    </form>
</body>
</html>
