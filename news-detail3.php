<!DOCTYPE html>
<html lang="es">
<?php $page='news';  $news=3; ?>
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
		        <strong>Noticias</strong>
		    </h2>
		</div>


		<div class="row pt-3">	

			
			<?php include('partials/news-sidebar.php') ?>
			
			<div class="col-8">
			   	<div class="jumbotron jumbotron-fluid">
     
			    <h2 class="h2-responsive text-center">Feria Internacional de Ciencia y Tecnología (Fictec) 2018</h2>
				    <hr>

				    <div class="card card-cascade wider reverse my-4">
				        <div class="view view-cascade overlay">
				            
				            <img src="img/news/fictec.jpg" class="card-img-top" alt=""> 

				           <!--  <div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
							</div> -->

							
				            <div class="mask rgba-white-slight waves-effect waves-light"></div>
				        </div>
				        <div class="card-body card-body-cascade text-justify"> 
				            <h2 class="card-title"><strong></strong></h2>
				            
				            <p class="font-weight mdb-text py-2">
			            	 La Feria Internacional de Ciencia y Tecnología (Fictec) 2018 se desarrollará desde el 29 de noviembre hasta el 2 de diciembre en el Parque Simón Bolivar, de Caracas.
							</p>
							<p class="text-justify"> 
							Así lo informó este lunes el ministro para la Educación Universitaria, Ciencia y Tecnología, Hugbel Roa, durante el lanzamiento de la Fictec 2018, precisó, que Bielorrusia, Catar, China, Cuba, India, Irán, Rusia, Sudáfrica, Turquía y Vietnam han confirmado su participación en el evento.
							</p>
							<p class="text-justify"> 
							“Son 10 países los que confirmaron su participación con conferencistas y empresas (…). Estos países son socios y aliados que apuestan por Venezuela y sus potencialidades para el desarrollo científico y tecnológico”, dijo.
							</p>
							<p class="text-justify"> 
							El ministro explicó que la II Fictec, será un espacio de encuentro de las potencialidades y capacidades instaladas en ciencia y tecnología para alcanzar la independencia definitiva, como bien más preciado.
							</p>
							<p class="text-justify"> 
							Asimismo, indicó que será una oportunidad para dar a conocer los avances que se han obtenido en esa materia.
							</p>
							<p class="font-weight mdb-text py-2">
			            	Entre los logros, Roa detalló que han alcanzado que “el próximo satélite podrá trabajar con antenas hechas por venezolanos y eso es parte de ese trabajo que realizamos día a día”.
							</p>
							<p class="text-justify"> 
							De igual forma destacó, que en esta segunda edición de esta importante feria, será entregado el Premio Nacional de Ciencia Tecnología e Innovación en las cuales se premiarán 16 categorías. Este galardón fue creado en el año 2001 por el presidente fallecido Hugo Chávez.
							</p>
							<p class="text-justify"> 
							Por otro lado, Roa sostuvo un encuentro con la vicepresidente Ejecutiva de la República, Delcy Rodríguez, con el propósito de afinar detalles de cara a la Fictec 2018.
							</p>
							<p class="text-justify"> 
							“A diferencia de otros países, el desarrollo que nosotros hacemos es para la liberación”, aseveró el ministro Roa.
							</p>

							<!-- <div align="center" class="embed-responsive embed-responsive-16by9 ">

								<iframe width="560" height="315" src="https://www.youtube.com/embed/ZosWK_Nepvw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div> -->

							<p class="font-weight font-bold text-right py-2">
								Prensa Mppeuct
							</p>

							
			<div class="text-center">   
				<hr>
				<?php $title = "Feria Internacional de Ciencia y Tecnología (Fictec) 2018";?>
				<?php $url = "http://www.unesr.edu.ve/news-detail1.php" ?>

				<h2 class="h2-responsive text-center">Compartir en Redes Sociales</h2>

			    <!-- Twitter -->
			    <a target="_blank" href="https://twitter.com/share?text=<?php echo $title ?>&url=<?php echo $url; ?>" 
			    	class="btn btn-tw waves-effect waves-light" title="Twitear"> 
			    	<i class="fab fa-twitter fa-1x"></i> </a>
			   
			    <!-- Facebook -->
			    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>" class="btn btn-fb waves-effect waves-light" title="Compartir en Facebook">
			    	<i class="fab fa-facebook-f fa-1x"></i></a>						   
   
     		</div>		

			            </div>
			            
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