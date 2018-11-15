<!DOCTYPE html>
<html lang="es">
<?php $page='news'; $news=7;  ?>
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
     
			    <h2 class="h2-responsive text-center">Autoridades ueserristas celebran 249 años del natalicio de Rodríguez</h2>
			    <hr>

			    <div class="card card-cascade wider reverse my-4">
			        <div class="view view-cascade overlay">
			            
			            <img src="img/news/sr-rector.jpeg" class="card-img-top" alt=""> 

			            <div class="mask rgba-white-slight waves-effect waves-light"></div>
			        </div>
			        <div class="card-body card-body-cascade text-justify"> 
			            <h2 class="card-title"><strong></strong></h2>
			            
			            <p class="text-justify py-2">
		
					</p>
					<p class="text-justify"> 
						
		Autoridades de la Universidad Nacional Experimental Simón Rodríguez (Unesr), encabezadas por el rector, Phd. Rafael Enrique Ramos y siguiendo instrucciones del ministro del Poder Popular para la Educación Universitaria, Ciencia y Tecnología (Mppeuct), Hugbel Roa, celebraron  el 249 aniversario del natalicio de Simón Rodríguez, con una ofrenda floral ante el busto del Maestro en la entrada del rectorado, a cargo de participantes de la Federación de Centros de Estudiantes FCU-Unesr y personal administrativo y obrero.

					</p>
					<p class="text-justify"> 
		El rector ueserrista indicó la importancia del pensamiento de Rodríguez en la actualidad, reafirmando el compromiso de la labor educativa robinsoniana: “Hablar de Rodríguez significa cumplir con una esperanza educativa. Queremos dar este pequeño pero merecido reconocimiento al Maestro y dejar claro que la Unesr está al servicio del Plan Estratégico de la Nación. La Venezuela libre y patriota se construye a través de las universidades”, indicó Ramos.

					</p>
					
					<p class="text-justify"> 
				
		Participaron en el acto el vicerrector administrativo, Dr. Julio Valdez; la vicerrectora administrativa, Dra. Endrina Gómez Durán; el secretario, doctorando Marcos Medina y el  director de Cultura,  Carlos Servando García, quien invitó  a la comunidad ueserrista a “continuar con el sendero revolucionario dispuesto por el Comandante Chávez, quien exaltó nuestras tres raíces con Zamora, Bolívar y Rodríguez y nos instruyó a difundir, rescatar y repensar este pensamiento para una Venezuela Productiva”.
		
					</p>
					
					<p class="text-justify"> 
		Elio Díaz, representante del personal obrero, agradeció por la invitación y por ser incorporados en estos espacios, mientras que Kennedy Morales, presidente de la Fcu-Unesr, destacó que en la Unesr “nos damos el lujo de llevar el nombre de Simón Rodríguez  y con su ejemplo de irreverencia nos comprometemos a construir de forma permanente las ideas en contra del capitalismo”.	
			
					</p>
					<p class="text-right font-bold"> 
						Prensa Unesr / Nairoby Reyes / Fotografías Érika Ramos y Jesús Franquis				
					</p>



			<div class="text-center">   
				<hr>
				<?php $title = "Autoridades ueserristas celebran 249 años del natalicio de Rodríguez ";?>
				<?php $url = "http://www.unesr.edu.ve/news-detail7.php" ?>

				<h2 class="h2-responsive text-center">Compartir en Redes Sociales</h2>

			    <!-- Twitter -->
			    <a target="_blank" href="https://twitter.com/share?text=<?php echo $title ?>&url=<?php echo $url; ?>" 
			    	class="btn btn-tw waves-effect waves-light" title="Tuitear"> <i class="fab fa-twitter fa-1x"></i> </a>
			   
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
