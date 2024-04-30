<?php

define("ESTADO","Minas Gerais");

// Sim também podemos ter código PHP antes do DocType.

$nome = 'Mauro George';
$nascimento = '06/09/1989';
$sobre_nome = 'Oliveira Tavares';

?>
<!doctype html>
<html>
	<head>
		<title>Título da Página</title>
		<?php
		// Código PHP aqui dentro do head.
		?>
		<meta charset="utf-8" />
	</head>

	<body>
	<?php
	// Código PHP aqui dentro do body!!!
	
	echo $nome."<br>";
	echo $nascimento;
	
	?>
	<p>
		Eu posso repetir o valor da variavel sempre que eu quiser sabia?
		Veja aqui o nosso título denovo <?php echo $sobre_nome; ?>
	</p>
	
	<p>
	<?php echo ESTADO ?>
	</p>
	
	</body>
</html>
<?php
// Código PHO aqui até depois de fecharmos a tag html!
?>