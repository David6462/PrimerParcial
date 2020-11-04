<div class="container">
	<?php include "presentacion/encabezado.php";
	$articulo = new Articulo();
	$articulo -> consultar();
	?>
	<div class="row mt-3">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<h3>Parcial Articulos</h3>
				</div>
			</div>
		</div>
		
	</div>
</div>