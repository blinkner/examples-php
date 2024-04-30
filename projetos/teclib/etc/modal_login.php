<!-- Modal de Login -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Login">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content text-dark">
			<!-- Cabeçalho do Modal -->
			<div class="modal-header">
				<h5 class="modal-title" id="titulo">Entrar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- Corpo do Modal -->
			<div class="modal-body">
				<form action="?i=home" method="post">
					<div class="form-group">
						<input type="text" name="login" id="login" class="form-control" placeholder="Usuário">
					</div>
					<div class="form-group">
						<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
					</div>
					<input type="submit" name="enviar" class="btn btn-secondary btn-block" value="Entrar">
				</form>
				<small>Não tem conta? <a href="">Clique aqui</a> para se registrar.</small>
			</div>
			<!-- Rodapé do Modal -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>

		</div>
	</div>
</div>