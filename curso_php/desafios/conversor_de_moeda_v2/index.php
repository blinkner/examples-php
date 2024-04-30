<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moeda V1</title>
</head>
<body>
    <header>
        <h1>Conversor de moeda V1</h1>
    </header>
    <section>
        <form action="resultado.php" method="get">
            <label for="dinheiro">Seu dinheiro (em R$):</label>
            <input type="number" name="dinheiro" id="dinheiro" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </section>
</body>
</html>