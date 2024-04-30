<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="valor">Valor para sacar</label>
            <input type="number" name="valor" id="valor" step="5" value="<?= $valor ?>">
            <p>O caixa possui apenas notas de R$ 100,00, R$ 50,00, R$ 10,00 e R$ 5,00.</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Retirada</h2>
        <?php
            $n100 = intdiv($valor, 100);
            $resto = $valor % 100;
            $n50 = intdiv($resto, 50);
            $resto = $resto % 50;
            $n10 = intdiv($resto, 10);
            $resto = $resto % 10;
            $n5 = intdiv($resto, 5);

            echo "<p>R$ 100,00 x$n100</p>";
            echo "<p>R$ 50,00 x$n50</p>";
            echo "<p>R$ 10,00 x$n10</p>";
            echo "<p>R$ 5,00 x$n5</p>";
        ?>
    </section>
</body>
</html>