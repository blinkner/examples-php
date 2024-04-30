					<section>
						<h3>Últimas Notícias</h3>
						<ul class="sem-marcador sem-padding noticias">
						
						<?php
						// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
						
						$query = "	SELECT
									noticia.*,
									DATE_FORMAT(noticia.data,'%d/%m/%Y') AS data_format
									FROM noticia LIMIT 0,3";
						
						$resultado = mysql_query($query,$conexao);
						
						while ($linha = mysql_fetch_array($resultado))
						{
							?>
							<li>
								<img src="<?php echo $linha['img']; ?>" alt="" />
								<h4><?php echo $linha['titulo']; ?></h4>
								<p>
									<?php echo $linha['data_format']; ?>
									<?php echo substr($linha['descricao'],0,50); ?>
									<a href="noticia.php?id_noticia=<?php echo $linha['id_noticia']; ?>">Leia mais &raquo</a>
								</p>
							</li>
						<?php
						}
						?>
						</ul>
					</section>