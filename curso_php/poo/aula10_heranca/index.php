<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10 - Herança</title>
</head>
<body>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Fabiana");

        $p1->setSexo("M");
        $p4->setSexo("F");

        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");

        $p3->receberAumento(550.20);
        $p4->mudarTrabalho();
        $p2->cancelarMatricula();

        var_dump($p1);
        var_dump($p2);
        var_dump($p3);
        var_dump($p4);
    ?>
</body>
</html>