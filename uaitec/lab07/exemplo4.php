<!doctype html>
<html>
	<head>
		<title>Título da Página</title>
		<meta charset="utf-8" />
	</head>

	<body>
	<?php
		// While
		
		$numero = 1;
		
		while ($numero <= 5)
		{
			echo "Testando numero $numero <br>";
			
			$numero++;
		}
		
		// Do While
		
		$numero = 5;
		
		do
		{
			$numero++;
			echo "Testando numero $numero <br>";
		}
		while ($numero<=10)
	?>
	
	</body>
</html>