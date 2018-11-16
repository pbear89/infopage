<!DOCTYPE html>
<html lang="es">
<?php $page='news';  $news=1; ?>
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
     
				    <h2 class="h2-responsive text-center">Autoridades de la UNESR y la Unefa inician alianza estratégica</h2>
				    <hr>

				    <div class="card card-cascade wider reverse my-4">
				        <div class="view view-cascade overlay">
				            
				            <img src="img/news/unefa-unesr.jpg" class="card-img-top" alt=""> 

				           <!--  <div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
							</div> -->

							
				            <div class="mask rgba-white-slight waves-effect waves-light"></div>
				        </div>
				        <div class="card-body card-body-cascade text-justify"> 
				            <h2 class="card-title"><strong></strong></h2>
				            
				            <p class="font-weight mdb-text py-2">
				            	 El rector de la Universidad Nacional Experimental Simón Rodríguez (UNESR), Phd. Rafael Ramos, siguiendo instrucciones del ministro del Poder Popular para la Educación Universitaria, Ciencia y Tecnología (Mppeuct), Hugbel Roa, anunció con beneplácito la alianza con la Universidad Nacional Experimental de las Fuerzas Armadas (Unefa), a través de su rector el G/D (EBN) Nerio Enrique Galbán Méndez para la conformación, cooperación y participación activa de la Unesr en la Milicias Universitarias Bolivarianas.
							</p>
							<p class="text-justify"> 
								Destacó la primera autoridad ueserrista: “Esta visita significa muchísimo para la Universidad pues el General viene de asumir un compromiso de lo que era la Guardia del Pueblo (...) Hombre de experiencia en cuanto a organización, que conoce cómo opera la contrarevolución, el imperialismo y que en estas primeras horas de cambios en la Unesr agradecemos el apoyo directo de este rector de una universidad hermana y, en compañía del Presidente de la Federación de Centros Universitarios Kennedy Morales, como representante elegido por los estudiantes de lo que es la nueva FCU, que va de la mano con sus autoridades; acá asumimos un compromiso con el General Galbán y se trata de plantearnos la corresponsabilidad de los jóvenes del pueblo en la defensa de la Nación, gracias a su vasta experiencia de organización estudiantil cívico militar que son las Brigadas Fabricio Ojeda”.
							</p>
							<p class="text-justify"> 								
								Señaló el Dr. Ramos “Esta es una deuda que tenemos pendiente con el Comandante Hugo Rafael Chávez. Creemos que en los próximos días, a través de esta alianza de cooperación con la Unefa, nuestros
								participantes tengan la oportunidad de integrarse a las Milicias Universitarias Bolivarianas; la Unefa ya tiene una labor bien adelantada en cuanto a este camino, prácticas y adiestramiento en lo referente a la defensa de la patria y, con la participación de cada uno de los Presidentes de Centros de Estudiantes de nuestros Núcleos y la conformación de las Brigadas Fabricio Ojeda en cada uno de ellos, fortaleceremos la unión cívico militar, desde nuestra Universidad, con nuestros jóvenes”, afirmó el rector.
							</p>
							<p class="font-weight mdb-text py-2">
			            	Por su parte el rector de la Unefa, G/D Galbán “Son tiempos de guerra, no estamos hablando de venir a acuartelar a nadie; ya estamos en guerra y estamos refiriéndonos a otro tipo de batalla, en la que el
							Socialismo del SXXI, la colaboración, con la formación ideológica, doctrinaria y política planteada desde el pensamiento del Comandante Hugo Rafael Chávez, permita a estos muchachos y muchachas a que aprendan, al máximo, a amar y defender la patria (...) Para mi es una gran responsabilidad y un honor asumir una tutoría de esta labor de mano con la Universidad Simón Rodríguez que nos permitirá conducir a esta juventud al desarrollo óptimo de sus capacidades, sus habilidades, fortalezas pero, principalmente, en lo moral – espiritual y eso lo lograremos trabajando teoría y práctica”
							</p>
							<p class="text-justify"> 
							Indicó Kennedy Morales que desde hace un año, en la FCU se viene trabajando un programa de organización de las bases de los movimientos sociales “... La Unidad de Mujeres robinsonianas; la Unidad de la Sexo
							diversidad y, ahora, el lanzamiento del Movimiento del Militante Robinsoniano, todo esto bajo las indicaciones del Rector. Por esta razón hemos decidido crear un gran Movimiento Nacional Fabricio Ojeda
							</p>
							<p class="text-justify"> 
							Finalizó el Rector Ramos informando “... En las próximas horas seguiremos conversando acerca de la cooperación que se puedan dar, en lo académico y que permita que la Unesr y la Unefa se conviertan en universidades más cercanas para la realización de un trabajo donde la patria salga fortalecida como la Venezuela potencia”.
				


							</p>
							<p class="font-weight font-bold text-right py-2">
					Caracas, 23/10/18
				</p>
							

			<div class="text-center">   
				<hr>
				<?php $title = "Autoridades de la UNESR y la Unefa inician alianza estratégica";?>
				<?php $url = "http://www.unesr.edu.ve/news-detail1.php" ?>

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