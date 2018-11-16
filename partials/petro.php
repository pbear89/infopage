<div class="divider-new pt-5">
    <h2 class="h2-responsive indigo-text mx-4 font-bold wow fadeIn" data-wow-delay="0.2s">
        <strong>Información del Petro</strong>
    </h2>
</div>


<div class="row pt-3">	

	<div class="col-3">
	    <div class="list-group" id="list-tab" role="tablist">
	      <a class="list-group-item list-group-item-action active" id="list-opcion1-list" data-toggle="list" href="#list-opcion1" role="tab" aria-controls="opcion1">Introducción </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion2-list" data-toggle="list" href="#list-opcion2" role="tab" aria-controls="opcion2">¿Qué es el Petro? </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion3-list" data-toggle="list" href="#list-opcion3" role="tab" aria-controls="opcion3">Métodos de Uso  </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion4-list" data-toggle="list" href="#list-opcion4" role="tab" aria-controls="opcion4">¿Cómo se compra?  </a>
	         <a class="list-group-item list-group-item-action" id="list-opcion5-list" data-toggle="list" href="#list-opcion5" role="tab" aria-controls="opcion5"> Precio </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion6-list" data-toggle="list" href="#list-opcion6" role="tab" aria-controls="opcion6">Incentivos </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion7-list" data-toggle="list" href="#list-opcion7" role="tab" aria-controls="opcion7">Emisiones </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion8-list" data-toggle="list" href="#list-opcion8" role="tab" aria-controls="opcion8">Ecosistema </a>
	      <a class="list-group-item list-group-item-action" id="list-opcion9-list" data-toggle="list" href="#list-opcion9" role="tab" aria-controls="opcion9">Descripción Técnica </a>
	    </div>
  	</div>
	<div class="col-8">
	    <div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="list-opcion1" role="tabpanel" aria-labelledby="list-opcion1-list"> 

				<?php include('partials/content/petro-intro.php'); ?>
									
			</div>
			<div class="tab-pane fade " id="list-opcion2" role="tabpanel" aria-labelledby="list-opcion2-list"> 
				
				<?php include('partials/content/petro-que-es.php'); ?>

			</div>
			<div class="tab-pane fade" id="list-opcion3" role="tabpanel" aria-labelledby="list-opcion3-list">
				
				<?php include('partials/content/petro-usabilidad.php'); ?>
				
			</div>
	      	<div class="tab-pane fade" id="list-opcion4" role="tabpanel" aria-labelledby="list-opcion4-list">
	      		
				<?php include('partials/content/petro-compra.php'); ?>
				</ul>
	      	</div>
			<div class="tab-pane fade" id="list-opcion5" role="tabpanel" aria-labelledby="list-opcion5-list">
				<?php include('partials/content/petro-precio.php'); ?>
	      		
	</div>
                 <div class="tab-pane fade" id="list-opcion6" role="tabpanel" aria-labelledby="list-opcion6-list">
				<?php include('partials/content/petro-incentivos.php'); ?>

			</div>
			 <div class="tab-pane fade" id="list-opcion7" role="tabpanel" aria-labelledby="list-opcion7-list">
				<?php include('partials/content/petro-emisiones.php'); ?>

			</div>
			 <div class="tab-pane fade" id="list-opcion8" role="tabpanel" aria-labelledby="list-opcion8-list">
				<?php include('partials/content/petro-ecosistema.php'); ?>

			</div>
			 <div class="tab-pane fade" id="list-opcion9" role="tabpanel" aria-labelledby="list-opcion9-list">
				<?php include('partials/content/petro-descripcion.php'); ?>

			</div>
	      		
	      		
					
					
				</ul>
			</div>
	    </div>
	</div>
</div>