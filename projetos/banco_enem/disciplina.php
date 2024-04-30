<?php
    include('header.php');

    if (isset($_GET['d'])):
        $d = '';
        switch ($_GET['d']) {
            case 'ch':
                $d = "Ciências Humanas e suas Tecnologias";
                break;
            case 'cn':
                $d = "Ciências da Natureza e suas Tecnologias";
                break;
            case 'l':
                $d = "Linguagens, Códigos e suas Tecnologias";
                break;
            case 'm':
                $d = "Matemática e suas Tecnologias";
                break;
            default:
                $d = '';
        }
        $query = "SELECT id_pergunta AS id FROM perguntas WHERE disciplina=?";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param("s", $d);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
?>

<section id="disciplina">
    <div class="titulo"><h1><?php echo $d; ?></h1></div>
    <div class="bloco-perguntas">
    <?php
        while ($pergunta = $resultado->fetch_assoc()): ?>
            <a href="perguntas?id=<?php echo $pergunta['id']; ?>">
                <div class="card-pergunta">
                    <?php echo $pergunta['id']; ?>
                </div>
            </a>
    <?php
        endwhile;
    endif;
    ?>
    </div>
</section>

<?php include('footer.php'); ?>