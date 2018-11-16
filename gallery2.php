<!DOCTYPE html>
<html lang="es">
<?php $page='news'; ?>
	<?php include('partials/head.php'); ?>
	<?php // include('partials/styles.php'); ?>
    
<body>

    <header>

		<?php include('partials/header.php'); ?>		
		<?php //include('partials/slider.php'); ?>

	</header>

	<!-- Main container-->
	<div class="container">
				
		<div class="divider-new pt-5">
		    <h2 class="h2-responsive indigo-text mx-4 font-bold wow fadeIn" data-wow-delay="0.2s">
		        <strong>Galería</strong>
		    </h2>
		</div>


		<div class="row pt-3">	

			
			<div class="col-3">
			    <div class="list-group" id="list-tab" role="tablist">
			      <a class="list-group-item list-group-item-action active" href="fcu.php" > Anterior </a>			      
			    </div>
		  	</div>
			<div class="col-8">
			   	<div class="jumbotron jumbotron-fluid">
     
				    <h2 class="h2-responsive text-center">Visitas A Nucleos</h2>
				    <hr>

				    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="img/FCU/v1.jpeg" alt="First slide">
					       <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita Nucleo San Carlos, Cojedes.</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/FCU/v2.jpeg" alt="Second slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita FCU </p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/FCU/v3.jpeg" alt="Third slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita Nucleo Valle de la Pascua, Guarico.</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/FCU/v4.jpeg" alt="Third slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita Nucleo Mucuchies, Mérida</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/FCU/v5.jpeg" alt="Third slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita Nucleo Barquisimeto, Lara</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/FCU/v6.jpeg" alt="Third slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita Nucleo La Grita, Táchira</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="img/FCU/v7.jpeg" alt="Third slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h5></h5>
						    <p>Visita Nucleo Los Teques, Miranda</p>
						  </div>
					    </div>

					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
			    
				</div>
			</div>

		</div>
	</div>
    <!--/ Main container-->

	<?php include('partials/footer.php'); ?>		
	<?php include('partials/js.php'); ?>

</body>
</html>