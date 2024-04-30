<?php
    include('header.php');
    $query = "SELECT COUNT(*) FROM perguntas";
    $stmt = $conexao->prepare($query);
    $stmt->execute();
    $stmt->bind_result($quantidade);
    $stmt->fetch();
    $stmt->close();
?>
    
<section id="principal">
    <div class="titulo"><h1>Página Inicial</h1></div>
    <p>Escolha uma opção no menu ao lado.</p>
</section>

<?php include('footer.php'); ?>
