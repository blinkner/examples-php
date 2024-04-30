<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php
        $tempo = $_GET['tempo'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
            <label for="tempo">Tempo (em segundos)</label>
            <input type="number" name="tempo" id="tempo" value="<?= $tempo ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Analisador</h2>
        <?php
            const SEMANA_SEGUNDOS = 604800;
            const DIAS_SEGUNDOS = 86400;
            const HORAS_SEGUNDOS = 3600;
            const MINUTOS_SEGUNDOS = 60;

            $semanas = intdiv($tempo, SEMANA_SEGUNDOS);
            $resto = $tempo % SEMANA_SEGUNDOS;
            $dias = intdiv($resto, DIAS_SEGUNDOS);
            $resto = $resto % DIAS_SEGUNDOS;
            $horas = intdiv($resto, HORAS_SEGUNDOS);
            $resto = $resto % HORAS_SEGUNDOS;
            $minutos = intdiv($resto, MINUTOS_SEGUNDOS);
            $resto = $resto % MINUTOS_SEGUNDOS;
            $segundos = $resto;

            echo "<p>$semanas semanas.</p>";
            echo "<p>$dias dias.</p>";
            echo "<p>$horas horas.</p>";
            echo "<p>$minutos minutos.</p>";
            echo "<p>$segundos segundos.</p>";
        ?>
    </section>
</body>
</html>