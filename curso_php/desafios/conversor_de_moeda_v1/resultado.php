<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            const COTACAO = 4.99;
            $real = $_GET['dinheiro'] ?? 0;
            $dolar = $real / COTACAO;

            // Formatação manual!
            // echo "<p>Seus R\$", number_format($real, 2, ',', '.'), " equivalem à US\$", number_format($dolar, 2, ',', '.'), ".</p>";

            // Formatação de moedas com internacionalização!
            // Biblioteca intl
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus ", numfmt_format_currency($padrao, $real, "BRL"), " equivalem à ", numfmt_format_currency($padrao, $dolar, "USD"), ".</p>";
            echo "<p>Cotação fixa de ", numfmt_format_currency($padrao, COTACAO, "BRL"), ".</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>