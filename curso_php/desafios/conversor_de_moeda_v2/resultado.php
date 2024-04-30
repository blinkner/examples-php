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
            // Utilizando API do Banco Central
            // dadosabertos.bcb.gov.br
            $inicio = date('m-d-Y', strtotime("-7 days"));
            $fim = date('m-d-Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET['dinheiro'] ?? 0;
            $dolar = $real / $cotacao;

            // Formatação de moedas com internacionalização!
            // Biblioteca intl
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus ", numfmt_format_currency($padrao, $real, "BRL"), " equivalem à ", numfmt_format_currency($padrao, $dolar, "USD"), ".</p>";
            echo "<p>Cotação recebida pelo Banco Central de ", numfmt_format_currency($padrao, $cotacao, "BRL"), ".</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>