<section>
	<div class="container" style="min-height: 460px">
		<?php
		$id_usuario = $_SESSION['id_usuario'];
		
		if(isset($_GET['tipo'])) {
			// Página de Sagas
			include("sagas.php");
		}
		else if(isset($_GET['saga'])) {
			// Página de Temporadas
			include("temporadas.php");
		}
		else
		{ ?>
			<!-- Título -->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="text-center" style="margin-bottom: 10px">
						<h1 class="display-4">Bem-vindo(a) ao TecLib</h1>
					</div>
				</div>
			</div>

		<?php if(!$_SESSION['conectado']) { ?>
			<!-- Mensagem -->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div id="mensagem" class="alert alert-info">
						Faça <a href="#" class="alert-link" data-toggle="modal" data-target="#modal">login</a> para gerenciar a sua biblioteca particular.
					</div>
				</div>
			</div>
		<?php } ?>

			<div class="row">
				<div class="col-12">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan semper fringilla. Maecenas in lobortis orci, sit amet tempus urna. Aliquam scelerisque, ipsum eu laoreet feugiat, sem orci venenatis purus, vel tristique arcu arcu vitae lacus. Nulla vel mattis lorem, a cursus massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pharetra turpis a lacus maximus, ac rutrum nisi varius. Sed dapibus volutpat massa. Maecenas sollicitudin arcu ac ligula molestie, sed pretium magna rhoncus. Duis sit amet pretium dolor. Suspendisse consectetur dapibus lorem eu condimentum. Praesent ac aliquam nulla. Proin consectetur ligula magna, eu egestas purus consequat sed. Quisque sed placerat turpis. Sed eu arcu aliquam, fringilla ex ut, sagittis ligula. Pellentesque eu eros magna. Phasellus rhoncus neque ac justo varius imperdiet.
					</p>
					<p>
						Vestibulum lorem velit, fringilla id enim ut, tristique volutpat diam. Nulla aliquet dapibus mauris ac ultrices. Maecenas interdum non leo et efficitur. Fusce volutpat orci ligula, porta vehicula lacus eleifend vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at venenatis enim. Nam fermentum lectus vel feugiat imperdiet. Quisque vel consectetur enim. Duis non eros non nisl porttitor tristique et sed odio.
					</p>
					<p>
						Nullam vitae erat ultrices, accumsan neque sit amet, feugiat felis. In eget feugiat lectus, non vulputate metus. Vestibulum pharetra nibh id libero lobortis dictum. Maecenas metus urna, rutrum quis enim vitae, ullamcorper sollicitudin odio. Nunc quis feugiat dui. Aliquam erat volutpat. Ut posuere neque ut libero maximus, vel rutrum risus varius. Mauris rutrum sagittis nulla.
					</p>
					<p>
						Vestibulum ut diam eu elit posuere pharetra. Ut finibus mi enim, et sollicitudin eros cursus eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis id ligula ullamcorper, ultrices libero sit amet, tempus odio. Suspendisse finibus, diam sed elementum efficitur, ante nisl molestie libero, nec luctus justo magna nec risus. Curabitur efficitur porttitor libero id pellentesque. Cras lobortis sollicitudin massa vel tincidunt. Morbi lobortis justo vitae ipsum tincidunt, a porta lectus hendrerit. Nunc varius est eget libero viverra, eget fermentum mi blandit. Phasellus nisl turpis, sagittis in nisl sit amet, fermentum pharetra quam.
					</p>
				</div>
			</div>
		<?php } ?>
	</div>
</section>