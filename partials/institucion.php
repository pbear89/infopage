<div class="divider-new pt-5">
    <h2 class="h2-responsive indigo-text mx-4 font-bold wow fadeIn" data-wow-delay="0.2s">
        <strong>Información de la Institución</strong>
    </h2>
</div>

<div class="row pt-3">	

	<div class="col-3">
	    <div class="list-group" id="list-tab" role="tablist">
	      <a class="list-group-item list-group-item-action active" id="list-opcion1-list" data-toggle="list" href="#list-opcion1" role="tab" aria-controls="opcion1">Historia</a>
	      <a class="list-group-item list-group-item-action" id="list-opcion2-list" data-toggle="list" href="#list-opcion2" role="tab" aria-controls="opcion2">Cuerpo Directivo </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion3-list" data-toggle="list" href="#list-opcion3" role="tab" aria-controls="opcion3">Misión y Visión </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion4-list" data-toggle="list" href="#list-opcion4" role="tab" aria-controls="opcion4">Formas de Ingresos </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion5-list" data-toggle="list" href="#list-opcion5" role="tab" aria-controls="opcion5">Secretaría y Control de Estudios</a>
	      <a class="list-group-item list-group-item-action" id="list-opcion6-list" data-toggle="list" href="#list-opcion6" role="tab" aria-controls="opcion6">Estaciones Experimentales</a>
	      <a class="list-group-item list-group-item-action" href="nucleos.php">Listado de Núcleos y Extensiones</a>
	      
	    </div>
  	</div>
	<div class="col-8">
	    <div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="list-opcion1" role="tabpanel" aria-labelledby="list-opcion1-list"> 
				<ul class="list-group-flush">
					<?php include('partials/content/historia.php'); ?>
				</ul>
			</div>
			<div class="tab-pane fade " id="list-opcion2" role="tabpanel" aria-labelledby="list-opcion2-list"> 
				<ul class="list-group-flush">
					<?php include('partials/content/directivos.php'); ?>
				</ul>
			</div>
			<div class="tab-pane fade" id="list-opcion3" role="tabpanel" aria-labelledby="list-opcion3-list">
				<ul class="list-group-flush">
					<?php include('partials/content/mision-vision.php'); ?>
				</ul>
			</div>
	      	<div class="tab-pane fade" id="list-opcion4" role="tabpanel" aria-labelledby="list-opcion4-list">
	      		<ul class="list-group-flush">
					<?php include('partials/content/ingreso.php'); ?>
				</ul>
	      		
	      	</div>
			<div class="tab-pane fade" id="list-opcion5" role="tabpanel" aria-labelledby="list-opcion5-list">
	      		<?php include('partials/content/documentos.php'); ?>
			</div>
			<div class="tab-pane fade" id="list-opcion6" role="tabpanel" aria-labelledby="list-opcion6-list">
	      		<?php include('partials/content/experimentales.php'); ?>
			</div>
	    </div>
	</div>
</div>