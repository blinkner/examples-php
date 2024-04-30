<?php include('header.php'); ?>

<section id="perguntas">
    <?php
        $query = "SELECT pergunta, img1, img2, disciplina, alt_a, alt_b, alt_c, alt_d, alt_e, resposta, referencia
                FROM perguntas WHERE id_pergunta=?";
        $stmt = $conexao->prepare($query);
        $stmt->bind_param("i", $_GET['id']);
        $stmt->execute();
        $stmt->bind_result($pergunta, $img1, $img2, $disciplina, $alt_a, $alt_b, $alt_c, $alt_d, $alt_e, $resposta, $referencia);
        $stmt->fetch();
        $stmt->close();
    ?>
    <div class="titulo"><h1><?php echo $_GET['id'], ' - ', $disciplina; ?></h1></div>
    <?php
        if ($img1):
            $img1 = "img/".$referencia.".png";
    ?>
    <img src="<?php echo $img1; ?>" alt="imagem 1">
    <?php 
        endif;
        if($img2):
            $img2 = "img/".$referencia."_2.png";
    ?>
    <img src="<?php echo $img2; ?>" alt="imagem 2">
    <?php endif; ?>

    <p><?php echo nl2br($pergunta); ?></p>

    <div class="opcao" id="opcao-a">
        a) <input type="radio" name="alternativa" value="a"> <?php echo $alt_a; ?>
    </div>
    <div class="opcao" id="opcao-b">
        b) <input type="radio" name="alternativa" value="b"> <?php echo $alt_b; ?>
    </div>
    <div class="opcao" id="opcao-c">
        c) <input type="radio" name="alternativa" value="c"> <?php echo $alt_c; ?>
    </div>
    <div class="opcao" id="opcao-d">
        d) <input type="radio" name="alternativa" value="d"> <?php echo $alt_d; ?>
    </div>
    <div class="opcao" id="opcao-e">
        e) <input type="radio" name="alternativa" value="e"> <?php echo $alt_e; ?>
    </div>

    <input type="hidden" id="resposta" value="<?php echo $resposta; ?>">
    
    <button id="enviar">Mostrar resposta</button>
</section>

<?php include('footer.php'); ?>