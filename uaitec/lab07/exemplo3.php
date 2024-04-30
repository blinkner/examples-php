<!doctype html>
<html>
	<head>
		<title>Título da Página</title>
		<meta charset="utf-8" />
	</head>

	<body>
	<?php
		$limite = 10;
		
		if ($limite <= 1)
		{
			echo "$limite é um número menor ou igual a 1";
		}
		else if ($limite <= 2)
		{
			echo "$limite é um número menor ou igual a 2";
		}
		else
		{
			echo "$limite é um número maior que 1";
		}
	?>
	
	</body>
</html>