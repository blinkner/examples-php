<?php
	$tipo = $_GET['tipo'];
	$page = '';

	if(!$_SESSION['conectado'] && $_GET['i'] == 'home') {
		$query_saga = "	SELECT id_saga, nome, tipo, img
							FROM sagas
							WHERE tipo='$tipo'
							ORDER BY nome ASC";
		$page = "Mercado";
	}
	else if($_GET['i'] == 'home') {
		$query_saga = "	SELECT sagas.id_saga, sagas.nome, sagas.tipo,
							sagas.img, usuarios.id_usuario, usuarios.sagas
						FROM sagas, usuarios
						WHERE (sagas.tipo='$tipo') && (usuarios.id_usuario='$id_usuario') && (usuarios.sagas NOT LIKE CONCAT('%',sagas.id_saga,'%'))
						ORDER BY sagas.nome ASC";
		$page = "Mercado";
	}
	if($_GET['i'] == 'minha_lista') {
		$query_saga = "	SELECT sagas.id_saga, sagas.nome, sagas.tipo,
							sagas.img, usuarios.id_usuario, usuarios.sagas
						FROM sagas, usuarios
						WHERE (sagas.tipo='$tipo') && (usuarios.id_usuario='$id_usuario') && (usuarios.sagas LIKE CONCAT('%',sagas.id_saga,'%'))
						ORDER BY sagas.nome ASC";
		$page = "Minha lista";
	}
	
	$resultado_saga = mysqli_query($conexao, $query_saga);
?>
	<!-- Título -->
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="text-center" style="margin-bottom: 10px">
				<h1 class="display-4" style="text-transform: capitalize">
					<?php echo $page.' - '.$tipo; ?>s
					<span id="notificacao" class="badge badge-pill badge-light"></span>
				</h1>
			</div>
		</div>
	</div>
	<!-- Mensagem -->
	<div class="row">
		<div class="col-12">
			<div class="" id="mensagem"></div>
		</div>
	</div>
	<!-- Corpo -->
	<div class="row">
	<?php
	while ($linha_saga = mysqli_fetch_array($resultado_saga)) { ?>
		<div class="col-6 col-lg-2 col-sm-4">
			<!-- Card -->
			<div class="card text-center border border-0 h-100">
				<img src="img/<?php echo $linha_saga['tipo'].'/'.$linha_saga['img']; ?>" class="card-img-top h-100">
				<div class="card-body p-1 card-info card-info-down">
					<div class="card-text">
						<a href="?saga=<?php echo $linha_saga['id_saga']; ?>">
							<button type="button" class="btn btn-dark"><?php echo $linha_saga['nome']; ?></button>
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>