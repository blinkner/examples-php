<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10 - Herança</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        // $p1 = new Pessoa;
        $v1 = new Visitante;
        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M"); 

        var_dump($v1);

        $a1 = new Aluno;
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("M");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        var_dump($a1);

        $b1 = new Bolsista;
        $b1->setNome("Jubileu");
        $b1->setMatricula(1112);
        $b1->setBolsa(12.5);
        $b1->setCurso("Administração");
        $b1->setIdade(17);
        $b1->pagarMensalidade();

        var_dump($b1);
    ?>
</body>
</html>