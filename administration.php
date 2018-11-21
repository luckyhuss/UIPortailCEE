<div class="panel with-nav-tabs panel-default">
	<div class="panel-heading tabs-administration">
		<ul class="nav nav-tabs">
			<li class="tabs-pane active"><a href="#tabFiliale" data-toggle="tab">Filiales</a></li>
			<li class="tabs-pane"><a href="#tabSecteur" data-toggle="tab">Secteurs</a></li>
		</ul>
	</div>
	<div class="panel-body">
		<div class="tab-content">
			<div class="tab-pane fade in active" id="tabFiliale">
			
			<?php include ('content-filiales.php'); ?>
			
			</div>
			<div class="tab-pane fade" id="tabSecteur">
			
			<?php include ('content-secteurs.php'); ?>
			
			</div>
		</div>
	</div>
</div>