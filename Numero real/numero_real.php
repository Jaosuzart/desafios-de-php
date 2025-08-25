<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputRaw = $_POST['numero'] ?? '';
    $input    = str_replace(',', '.', $inputRaw);

    $intVal = filter_var($input, FILTER_VALIDATE_INT);
    if ($intVal !== false) {
        echo "<p>✅ O valor <b>{$inputRaw}</b> é um número inteiro.</p>";
    } else {
        $floatVal = filter_var($input, FILTER_VALIDATE_FLOAT);
        if ($floatVal !== false) {
            $parteInteira     = floor(abs($floatVal));
            $parteFracionaria = abs($floatVal) - $parteInteira;

            $fracaoFormatada = number_format($parteFracionaria, 2, ',', '');

            echo "<p>❌ A parte fracionária do número <b>{$inputRaw}</b> é <b>{$fracaoFormatada}</b>.</p>";
        } else {
            echo "<p>⚠️ O valor <b>{$inputRaw}</b> não é um número válido.</p>";
        }
    }
}
?>
