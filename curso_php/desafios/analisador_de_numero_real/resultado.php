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
            $numero = $_GET['numero'] ?? 0;
            $parte_inteira = floor($numero);
            $parte_fracionaria = $numero - $parte_inteira;

            echo "<p>Analisando o número $numero...</p>";
            echo "<p>A parte inteira é ", number_format($parte_inteira, 0, ',', '.'), ".</p>";
            echo "<p>A parte fracionária é ", number_format($parte_fracionaria, 3, ',', '.'), ".</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>