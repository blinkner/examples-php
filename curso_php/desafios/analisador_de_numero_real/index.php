<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <section>
        <form action="resultado.php" method="get">
            <label for="numero">Número real</label>
            <input type="number" name="numero" id="numero" step="0.001">
            <input type="submit" value="Calcular">
        </form>
    </section>
</body>
</html>