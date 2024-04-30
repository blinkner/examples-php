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
            $numero = $_GET['numero'] ?? 1;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>O número é $numero.</p>";
            echo "<p>Seu antecessor é $antecessor.</p>";
            echo "<p>Seu sucessor é $sucessor.</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>