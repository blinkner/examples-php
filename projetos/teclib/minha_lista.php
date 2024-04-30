<section>
	<div class="container" style="min-height: 460px">
		<?php
			if($_SESSION['conectado']) {
				$id_usuario = $_SESSION['id_usuario'];

				if(isset($_GET['tipo'])) {
					// Página de Sagas
					include("sagas.php");
				}
				if(isset($_GET['saga'])) {
					// Página de Temporadas
					include("temporadas.php");
				}
			}
			else {
				header("location: ?i=home");
			}
		?>
	</div>
</section>