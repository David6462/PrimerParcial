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
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php?pid=<?php echo base64_encode("presentacion/articulo/crearArticulo.php")?>">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?pid=<?php echo base64_encode("presentacion/articulo/crearArticulo.php")?>">Consultar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>
</nav>
	</div>
</div>