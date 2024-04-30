		<aside>
			<div class="coluna col2 sidebar">
				<h3>Categorias</h3>
				<ul class="sem-marcador sem-padding">
				<?php
					$queryCategoria = "SELECT * FROM produtos GROUP BY categoria ASC";
					$resultadoCategoria = mysql_query($queryCategoria,$conexao);
					while ($linhaCategoria = mysql_fetch_array($resultadoCategoria))
					{
				?>
					<li><a href="categoria.php?categoria=<?php echo $linhaCategoria['categoria']; ?>">&raquo; <?php echo $linhaCategoria['categoria']; ?></a></li>
				<?php
					}
				?>
				</ul>
			</div>
		</aside>