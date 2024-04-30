<!-- Modal de Edição -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="Editar">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content text-dark">
			<!-- Cabeçalho do Modal -->
			<div class="modal-header">
				<h5 class="modal-title" id="tituloModal">Título</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<!-- Corpo do Modal -->
			<div class="modal-body">
				<form id="formEditar" action="?saga=<?php echo $id_saga; ?>" method="post">
					<input type="hidden" id="idTemporada" name="idTemporada" value="">
					<div class="form-group input-group">
						<input type="number" id="epModal" name="epModal" class="form-control" value="00" min=00 max="00">
						<input type="text" id="totalEpModal" name="totalEpModal" class="form-control input-group-append" value="00" readonly>
					</div>
				</form>
			</div>
			<!--Rodapé do Modal-->
			<div class="modal-footer">
				<input type="submit" class="btn btn-success" value="Salvar" form="formEditar">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>

		</div>
	</div>
</div>