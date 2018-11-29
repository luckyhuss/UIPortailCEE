<div class="form_admin_contenu">
	<div class="text-danger validation-summary-errors"
		data-valmsg-summary="true">
		<ul>
			<li>Text to be defined</li>
		</ul>
	</div>

	<div class="alert fade in alert-dismissible isa_error">
		<a href="#" class="close-alert" data-dismiss="alert"
			aria-label="close" title="Fermer">×</a> Ceci est un exemple de
		succès.
	</div>
</div>

<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">

			<div class="filiales-container col-md-6">

				<form id="form_content" class="form_admin_filiales" action="#"
					method="POST">


					<div class="form-group">

						<span class="form_label"> <label for="choisirFiliales">Filiales</label></span>

						<span class="form_input"> <select class="form-control">
								<option value="0"></option>
								<option value="1">Filiale test test</option>
								<option value="2">Filiale 2</option>
								<option value="3">Filiale 3</option>
								<option value="4">Filiale 4</option>
						</select>
						</span>

					</div>

				</form>
			</div>


		</div>

	</div>
</div>



<div class="panel-group">
	<form id="form_content" class="form_admin_content" action="#"
		method="POST">
	
	<?php
$summernote = "filiales";
include ('admin-content-detail.php');
?>


		<!-- <div class="row">
			<div class="col-md-6 submit_button_holder admin-btn-voir">
				<a class="btn btn-primary submit_button">Voir Tout</a>

			</div>
			<div class="col-md-6 submit_button_holder admin-btn-holder">
				<a class="btn btn-primary submit_button add_margin_right">Sauvegarder</a>
				<a class="btn btn-primary submit_button">Annuler</a>
			</div>
		</div> -->

	</form>

</div>




