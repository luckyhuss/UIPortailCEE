<div class="form_admin_contenu">
	<div class="isa_success" data-valmsg-summary="true">
		<ul>
			<li>Text to be defined</li>
		</ul>
	</div>
</div>
<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">

			<div class="secteurs-container  col-md-6">

				<form id="form_content" class="form_admin_secteurs" action="#"
					method="POST">

					<div class="form-group">

						<span class="form_label"> <label for="choisirSecteurs">Secteurs</label></span>

						<span class="form_input"> <select class="form-control">
								<option value="0"></option>
								<option value="AGRI">Agriculture [AGRI]</option>
								<option value="BAR">Bâtiment Résidentiel [BAR]</option>
								<option value="BAT">Bâtiment Tertiaire [BAT]</option>
								<option value="IND">Industrie [IND]</option>
								<option value="RES">Réseaux [RES]</option>
								<option value="TRA">Transport [TRA]</option>
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
        $summernote = "secteurs";
        include ('admin-content-detail.php');
        ?>
    

			<div class="row">
				<div class="col-md-6 submit_button_holder admin-btn-voir">
					<a class="btn btn-primary submit_button">Voir Tout</a>

				</div>
				<div class="col-md-6 submit_button_holder admin-btn-holder">
					<a class="btn btn-primary submit_button add_margin_right">Sauvegarder</a>
					<a class="btn btn-primary submit_button">Annuler</a>
				</div>
			</div>
		</form>
	</div>


