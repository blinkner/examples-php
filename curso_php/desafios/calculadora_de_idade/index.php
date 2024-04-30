<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Idade</title>
</head>
<body>
    <?php
        $ano_nascimento = $_GET['ano-nascimento'] ?? 0;
        $ano = $_GET['ano'] ?? date('Y');
    ?>
    <main>
        <h1>Calculadora de Idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="ano_nascimento">Ano em que nasceu</label>
            <input type="number" name="ano-nascimento" id="ano-nascimento" max="<?= date('Y') ?>" value="<?= $ano_nascimento ?>">
            <label for="ano">Ano</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Analisador</h2>
        <?php
            $idade = $ano - $ano_nascimento;

            echo "<p>A sua idade em $ano é/será de $idade anos.</p>";
        ?>
    </section>
</body>
</html>