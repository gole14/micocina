<div class="container" id="main-container">
	<div class="row" id="main-row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header-inicio">
				<div id="menudeldia">
					<img src="assets/images/menudeldiasf.png" id="imgmenu">
				</div>
			<!-- Termina div header-inicio-->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8" id="carousel-container">
				<div class="carousel slide" id="carousel-ejemplo" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="carousel-ejemplo" data-slide-to="0" class="active"></li>
						<li data-target="carousel-ejemplo" data-slide-to="1"></li>
						<li data-target="carousel-ejemplo" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="assets/images/platillos/c1.JPG" alt="" id="platilloimg">
							<div class="carousel-caption">
								<h3>Platillo 1</h3>
							</div>
						<!--Termina item active-->	
						</div>
						<div class="item">
							<img src="assets/images/platillos/c2.jpg" alt=" " id="platilloimg">
							<div class="carousel-caption">
								<h3>Platillo 2</h3>
							</div>
						</div>
						<div class="item">
							<img src="assets/images/platillos/c3.jpg" alt=" " id="platilloimg">
							<div class="carousel-caption">
								<h3>Platillo 3</h3>
							</div>
						</div>
					<!--Termina listbox de imagenes-->
					</div>
					<a class="left carousel-control" href="#carousel-ejemplo" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">
							Anterior
						</span>
					</a>
					<a class="right carousel-control" href="#carousel-ejemplo" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">
							Siguiente
						</span>
					</a>
				<!--Termina el carrusel-->
				</div>
				<div class="col-lg-8 visible-lg" id="sdbanlg">
					<img src="assets/images/sdbanlg.png">
				<!--Termina el letrero de serv. a dom.-->
				</div>
				<div class="col-md-8 visible-md" id="sdbanmd">
					<img src="assets/images/sdbanmd.png">
				<!--Termina el letrero de serv. a dom.-->
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8 visible-sm" id="sdbansm">
					<img src="assets/images/sdbansm.png">
				<!--Termina el letrero de serv. a dom.-->
				</div>
			<!--Termina div que contiene el carrusel carrusel-->
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4" id="menu-day">
				<ul class="list-group">
					<li class="list-group-item list-group-item-success ">
						06 DE OCTUBRE
					</li>
					<li class="list-group-item">Platillo 1</li>
					<li class="list-group-item">Platillo 2</li>
					<li class="list-group-item">Platillo 3</li>
					<li class="list-group-item">Platillo 4</li>
					<li class="list-group-item">Platillo 5</li>
					<li class="list-group-item">Platillo 6</li>
					<li class="list-group-item">Platillo 7</li>
					<li class="list-group-item">Platillo 8</li>
					<li class="list-group-item">Platillo 9</li>
					<li class="list-group-item">Platillo 10</li>
					<li class="list-group-item">Platillo 11</li>
					<li class="list-group-item">Platillo 12</li>
					<li class="list-group-item">Platillo 13</li>
					<li class="list-group-item">Platillo 14</li>
					<li class="list-group-item">Platillo 15</li>
				</ul>					
			<!--Termina div menu del dia-->
			</div>
	<!-- Termina row principal-->
		<div class="col-xs-12 visible-xs" id="sdbanxs">	
		</div>
	</div>
<!--Termina contenedor-->
</div>

<script>
	
	$('.carousel').carousel({
 
  		interval: 3000,
  		pause:"hover"
 
	});
</script>