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
	<div class="panel-group">
		<form id="form_content" class="form_admin_content" action="#"
			method="POST">
			
	<?php
    	$summernote = "secteurs";
    	include ('admin-content-detail.php'); 
	?>
    </form>

		<div class="row">
			<div class="col-md-12 submit_button_holder admin-btn-holder">
				<button type="submit" class="btn btn-primary submit_button"
					name="btn-sauvegarder">Sauvegarder</button>
				<button type="submit" class="btn btn-primary submit_button"
					name="btn-annuler">Annuler</button>
			</div>
		</div>

	</div>
</div>

