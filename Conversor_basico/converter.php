<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiKey = '500001b5677400582216916e';
    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);
    $fromCurrency = strtoupper(trim($_POST['from_currency'] ?? ''));
    $toCurrency = strtoupper(trim($_POST['to_currency'] ?? ''));

    if ($amount === false || $amount <= 0) {
        die('⚠️ Valor inválido informado.');
    }

    if (empty($fromCurrency) || empty($toCurrency)) {
        die('⚠️ Selecione as moedas corretamente.');
    }

    $apiUrl = "https://v6.exchangerate-api.com/v6/{$apiKey}/latest/{$fromCurrency}";

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // 🔧 Caso tenha problema de certificado SSL:
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        die("❌ Erro na requisição cURL: " . curl_error($ch));
    }

    curl_close($ch);

    $data = json_decode($response, true);

    if ($data && isset($data['result']) && $data['result'] === 'success') {
        if (isset($data['conversion_rates'][$toCurrency])) {
            $exchangeRate = $data['conversion_rates'][$toCurrency];
            $convertedAmount = $amount * $exchangeRate;

            echo "<h2>💱 Resultado da Conversão</h2>";
            echo "<p><b>" . number_format($amount, 2, ',', '.') . " {$fromCurrency}</b> equivalem a <b>" . number_format($convertedAmount, 2, ',', '.') . " {$toCurrency}</b></p>";
            echo "<p>📊 Taxa de câmbio: 1 {$fromCurrency} = {$exchangeRate} {$toCurrency}</p>";
            echo "<br><a href='index.php'>🔙 Fazer outra conversão</a>";
        } else {
            echo "⚠️ A moeda de destino <b>{$toCurrency}</b> não foi encontrada.";
        }
    } else {
        echo "❌ Erro ao obter taxas de câmbio. Verifique se sua chave de API é válida.";
        if ($data) {
            echo "<pre>" . print_r($data, true) . "</pre>";
        }
    }
} else {
    header('Location: index.php');
    exit();
}
?>
