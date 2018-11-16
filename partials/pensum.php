<div class="divider-new pt-5">
    <h2 class="h2-responsive indigo-text mx-4 font-bold wow fadeIn" data-wow-delay="0.2s">
        <strong>Información de la Institución</strong>
    </h2>
</div>


<div class="row pt-3">	

	<div class="col-3">
	    <div class="list-group" id="list-tab" role="tablist">
	       <!-- <a class="list-group-item list-group-item-action active" id="list-opcion1-list" data-toggle="list" href="#list-opcion1" role="tab" aria-controls="opcion1">Plan de Estudios</a> -->
	      <a class="list-group-item list-group-item-action active" id="list-opcion2-list" data-toggle="list" href="#list-opcion2" role="tab" aria-controls="opcion2">Pre-grado </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion3-list" data-toggle="list" href="#list-opcion3" role="tab" aria-controls="opcion3">Post-grado </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion4-list" data-toggle="list" href="#list-opcion4" role="tab" aria-controls="opcion4">Formas de Ingresos </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion5-list" data-toggle="list" href="#list-opcion5" role="tab" aria-controls="opcion5">Secretaría y Control de Estudios</a>
	    </div>
  	</div>
	<div class="col-8">
	    <div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade " id="list-opcion1" role="tabpanel" aria-labelledby="list-opcion1-list"> 

				<?php include('partials/content/plan-estudios.php'); ?>
									
			</div>
			<div class="tab-pane fade show active" id="list-opcion2" role="tabpanel" aria-labelledby="list-opcion2-list"> 
				
				<?php include('partials/content/pensum-pre.php'); ?>

			</div>
			<div class="tab-pane fade" id="list-opcion3" role="tabpanel" aria-labelledby="list-opcion3-list">
				
				<?php include('partials/content/pensum-post.php'); ?>
				
			</div>
	      	<div class="tab-pane fade" id="list-opcion4" role="tabpanel" aria-labelledby="list-opcion4-list">
	      		
	      		<?php include('partials/content/ingreso.php'); ?>
	      		
	      	</div>
			<div class="tab-pane fade" id="list-opcion5" role="tabpanel" aria-labelledby="list-opcion5-list">
	      		
					<?php include('partials/content/documentos.php'); ?>
				
			</div>
	    </div>
	</div>
</div>