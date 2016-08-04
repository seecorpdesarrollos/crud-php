
 <link rel="stylesheet" type="text/css" href="css/paginacion.css">
<div class="contenedor">
      <section class="paginacion">
			<ul>
				<!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
				<?php if ($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php echo  " <span class='span'> $pagina    - DE -      $numeroPaginas </span>" ;?>
				
				<!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
				<?php if ($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</section>
	</div>

 