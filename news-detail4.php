<!DOCTYPE html>
<html lang="es">
<?php $page='news'; $news=4; ?>
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
     
			    <h2 class="h2-responsive text-center">UNESR egresó 880 docentes de la Micro Misión Simón Rodríguez</h2>
			    <hr>

			    <div class="card card-cascade wider reverse my-4">
			        <div class="view view-cascade overlay">
			            
			            <img src="img/autoridades/micro-mision.jpg" class="card-img-top" alt=""> 

			            <div class="mask rgba-white-slight waves-effect waves-light"></div>
			        </div>
			        <div class="card-body card-body-cascade text-justify"> 
			            <h2 class="card-title"><strong></strong></h2>
			            
			            <p class="font-weight mdb-text py-2">
			            	
						Las autoridades rectorales de la Universidad Nacional Experimental Simón Rodríguez (UNESR), presidida por el Dr. Enrique Ramos Olivares, dándole fiel cumplimiento a las instrucciones de los ministros de Educación, Aristóbulo Istúriz y de Educación Universitaria, Ciencia y Tecnología, Hugbel Roa, en el marco de la Micro Misión Simón Rodríguez, egresaron a 880 docentes, provenientes de todo el país, en las licenciaturas en: Biología; Física; Química; Matemática; Lengua; Inglés; Geografía, Historia y Ciudadanía y Educación Física.

					</p>
					<p class="text-justify"> 
						Es importante destacar que la Micro Misión Simón Rodríguez, creada en el 2014 durante el primer período presidencial de Nicolás Maduro, es un Programa de Formación Nacional creado por el Ministerio de Educación cuyo objetivo es formar a las y los profesores dependiendo de las necesidades de cada región.
					</p>
					<p class="text-justify"> 
						El acto protocolar se realizó en el Salón Venezuela del Círculo Militar de Caracas, y contó con la participación en el estrado acompañando al Rector de la Unesr, de la viceministra de Educación, Rosángela Orozco Rondón; el vicerrector Académico, Dr. Julio Valdez; el secretario, doctorando Marcos Medina; la vicerrectora Administrativa, Dra. Ana Endrina Gómez; el decano de Educación Avanzada, G/D Luis Bracho Magdaleno y Lenin Romero, presidente del Centro Nacional para el Mejoramiento de la Enseñanza de la Ciencia (Cenamec).

					</p>
					<p class="text-justify"> 
						La máxima autoridad de la Unesr expresó que el acto de hoy forma parte de la celebración del 249 aniversario del natalicio del Maestro de maestros Simón Rodríguez “… Este acto representa un alto compromiso con la patria en momentos de una guerra inducida. Pero también la disposición de nuestro pueblo en avanzar hacia la Venezuela soñada, la Venezuela potencia (…) Desde la Universidad asumimos el compromiso patrio de mantener nuestros ambientes abiertos para continuar la formación de los profesionales que se necesitan (…) Nos satisface ver los rostros de alegría de graduandas y graduandos, sus familiares, las autoridades presentes gracias al logro de esta nueva meta de nuestros estudiantes”.

					</p>
					<p class="text-justify"> 
						Durante su intervención en el acto de grado, Ramos resaltó el compromiso de las autoridades ueserristas en el sagrado compromiso de enseñar “… Veíamos en sus caras el compromiso de aportar en cada una de sus regiones (…) Reconocer el deber ser de la educación como punta de lanza para lograr un país libre, soberano, que no se detiene ante nada y no se doblega ante nadie”, concluyó.
					</p>
					<p class="text-justify"> 
						Por otra parte, en el acto que se realizó en el teatro de la Academia Militar a razón de esta nueva promoción de docentes el Presidente de la República Bolivariana de Venezuela, Nicolás Maduro Moros, destacó “Tenemos que descolonizar el pensamiento y alinear toda la educación venezolana con un proceso descolonizador, independentista. Toda la educación debe estar integrada a las metas de desarrollo de este plan, con esfuerzo propio” De igual manera decretó la creación de la Universidad Nacional Experimental del Magisterio Samuel Robinson para los estudios de todos los maestros y maestras de Venezuela.
					</p>
					<p class="text-justify"> 
						Asimismo, destacó que la educación y la cultura son la base de los valores y en la Revolución Bolivariana se ha llegado a 90% de escolaridad “La Revolución Bolivariana debe cuidar el acceso a la educación, debe promover todas las vías nacionales, regionales y locales para lograr el acceso a la educación (…) y la Micro Misión Simón Rodríguez  abarca a toda la sociedad”, manifestó el Presidente.

					</p>
					<p class="text-justify"> 

					</p>
					
					<p class="text-right font-bold"> 
						Prensa Unesr / Redacción y fotografía: Erika Ramos / Fuente: Dr. Enrique Ramos Olivares, Rector Unesr y medios de comunicación nacionales.
					</p>


			<div class="text-center">   
				<hr>
				<?php $title = "UNESR egresó 880 docentes de la Micro Misión Simón Rodríguez";?>
				<?php $url = "http://www.unesr.edu.ve/news-detail4.php" ?>

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