<div class="panel-group displayed" id="add-edit-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestAddEditUtilisateur">Ajouter/Modifier Utilisateur</a></span>
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestAddEditUtilisateur"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="gestAddEditUtilisateur" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="user_area">

					<form id="gestUtilisateur_content" class="form_admin_content" action="#"
						method="POST">
						<div class="text-danger validation-summary-errors"
							data-valmsg-summary="true">
							<ul>
								<li>Text to be defined</li>
							</ul>
						</div>
						
						<div class="alert fade in alert-dismissible isa_error">
							<a href="#" class="close-alert" data-dismiss="alert"
								aria-label="close" title="Fermer">×</a> Ceci est un exemple
							d'erreur.
						</div>

						<div class="content-container">
							<div class="row">

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="nom">Nom</label></span> <span
											class="form_input"><input type="text"
											class="form-control input-validation-error" id="nom"
											placeholder=""></span>
									</div>
								</div>

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="prenom">Prénom</label></span>
										<span class="form_input"><input type="text"
											class="form-control" id="prenom" placeholder=""></span>
									</div>
								</div>

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="email">Email</label></span>
										<span class="form_input"><input type="text"
											class="form-control" id="email" placeholder=""></span>
									</div>
								</div>

								

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="filiales">Filiales</label></span>

										<span class="form_input"> <select class="form-control">
												<option value='0'></option>
												<option value='1'>filiale 1</option>
												<option value='2'>filiale 2</option>
												<option value='3'>filiale 3</option>
												<option value='4'>filiale 4</option>
										</select>
										</span>

									</div>
								</div>
								
								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="persona">Persona</label></span>

										<span class="form_input"> <select class="form-control">
												<option value='0'></option>
												<option value='1'>Persona 1</option>
												<option value='2'>Persona 2</option>
												<option value='3'>Persona 3</option>
												<option value='4'>Persona 4</option>
										</select>
										</span>

									</div>
								</div>

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="denumSIREN">Dénomination / SIREN</label></span>
										<span class="form_input"><input type="text"
											class="form-control" id="denumSIREN" placeholder=""></span>
									</div>
								</div>


								<div class="col-md-12 submit_button_holder btn-save-user">
									<a href="#" class="btn btn-primary submit_button">Sauvegarder</a>

								</div>


							</div>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>
</div>