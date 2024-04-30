<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo</title>
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? 1412.00;
    ?>
    <main>
        <h1>Salário Mínimo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="valor">Seu salário (R$)</label>
            <input type="number" name="valor" id="valor" step="0.01" value="<?= $valor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Analisador</h2>
        <?php
            $salario_minimo = 1412.00;
            $contagem_salarios = floor($valor / $salario_minimo);
            $resto = fmod($valor * 100, $salario_minimo * 100);

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>O salário de ". numfmt_format_currency($padrao, $valor, "BRL") .".</p>";
            echo "<p>Corresponde a $contagem_salarios salários mínimos de ". numfmt_format_currency($padrao, $salario_minimo, "BRL") ." + ". numfmt_format_currency($padrao, $resto / 100, "BRL") .".</p>";
        ?>
    </section>
</body>
</html>