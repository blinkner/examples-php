<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média Aritmética</title>
</head>
<body>
    <?php
        $valor1 = $_GET['v1'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['p2'] ?? 1;

    ?>
    <main>
        <h1>Média Aritmética</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" min="1" value="<?= $peso1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" min="1" value="<?= $peso2 ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Analisador</h2>
        <?php
            $media_simples = ($valor1 + $valor2) / 2;
            $media_ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

            echo "<p>A média simples resulta em $media_simples.</p>";
            echo "<p>A média ponderada resulta em $media_ponderada.</p>";
        ?>
    </section>
</body>
</html>