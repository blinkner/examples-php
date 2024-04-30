<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número Aleatório</title>
</head>
<body>
    <header>
        <h1>Número aleatório</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $numero = mt_rand(0, 100);
            echo "O valor gerado foi $numero.";
        ?>
        <p><a href="javascript:location.reload()">Gerar outro</a></p>
    </main>
</body>
</html>