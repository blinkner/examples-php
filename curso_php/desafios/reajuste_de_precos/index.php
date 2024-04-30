<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste de Preços</title>
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? 0;
        $porcentagem = $_GET['porcentagem'] ?? 0;
    ?>
    <main>
        <h1>Reajuste de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="valor">valor (em R$)</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>">
            <label for="porcentagem">Porcentagem (<span id="porcent"><?= $porcentagem ?></span>%)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" oninput="porcent.innerText = this.value" value="<?= $porcentagem ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Analisador</h2>
        <?php
            $reajuste = $valor * (1 + ($porcentagem / 100));

            echo "<p>O valor do reajuste é de R\$ $reajuste.</p>";
        ?>
    </section>
</body>
</html>