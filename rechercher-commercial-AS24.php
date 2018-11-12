
<div class="panel with-nav-tabs panel-default">
	<div class="panel-heading tabs-rechercher">
		<ul class="nav nav-tabs">
			<li class="tabs-pane active"><a href="#tab1default" data-toggle="tab">Dossier</a></li>
			<li class="tabs-pane"><a href="#tab2default" data-toggle="tab">Fiche Récapitulatif Pro/B2B</a></li>
		</ul>
	</div>
	<div class="panel-body">
		<div class="tab-content">
			<div class="tab-pane fade in active" id="tab1default">
			
			<?php include ('rechercherAS24Dossier.php'); ?>
			
			</div>
			<div class="tab-pane fade" id="tab2default">
			
			<?php include ('rechercherGFXPro.php'); ?>
			
			</div>
		</div>
	</div>
</div>