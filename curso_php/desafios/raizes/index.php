<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raízes</title>
</head>
<body>
    <?php
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Raízes</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Analisador</h2>
        <?php
            $raiz_quadrada = sqrt($valor);
            $raiz_cubica = $valor ** (1/3);

            echo "<p>O número $valor</p>";
            echo "<p>Possui raiz quadrada igual a $raiz_quadrada.</p>";
            echo "<p>E raiz cúbica igual a $raiz_cubica.</p>";
        ?>
    </section>
</body>
</html>