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
								<option value="1">Filiale test test </option>
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
    

	<div class="row">
		<div class="col-md-12 submit_button_holder admin-btn-holder">
			<button type="submit" class="btn btn-primary submit_button"
				name="btn-sauvegarder">Sauvegarder</button>
			<button type="submit" class="btn btn-primary submit_button"
				name="btn-annuler">Annuler</button>
		</div>
	</div>
	
	</form>

</div>




