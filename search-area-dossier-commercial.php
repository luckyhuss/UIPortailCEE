<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseSearchBar">Criteres De Recherche</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseSearchBar"><i class="glyphicon glyphicon-search"></i></a></span>
			</h4>
		</div>

		<div id="collapseSearchBar" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="search_area">

					<form id="formSearchBar" class="form_search_bar form-inline"
						action="#" method="POST">
						<div class="text-danger validation-summary-errors"
							data-valmsg-summary="true">
							<ul>
								<li>Le No. Action doit être numérique</li>
								<li>La Référence Externe doit être alphanumérique</li>
								<li>Le Code Postal doit être numérique</li>
								<li>La Ville doit être alphanumérique</li>
							</ul>
						</div>


						<div class="row">
							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="RaisonSocialeB2B">Raison
											sociale client</label></span> <span class="form_input"><input
										type="text" class="form-control" id="raisonSocialeB2B"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="SireneB2B">Sirene client</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="sireneB2B" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NomB2C">Nom du particulier</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="nomB2C" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NumDossier">Numéro dossier</label></span>
									<span class="form_input"><input type="text"
										class="form-control input-validation-error" id="numDossier"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NumAction">Numéro action</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="numAction" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="StatutPortail">Statut
											Portail</label></span>

									<div class="form_input">
										<select class="form-control">
											<option value='0'></option>
											<option value='1'>Statut 1 dasd</option>
											<option value='2'>Statut 2</option>
											<option value='3'>Statut 3 asdas</option>
											<option value='4'>Statut 4</option>
											<option value='5'>Statut 5</option>
											<option value='6'>Statut 6</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="Référence">Référence
											Externe</label></span> <span class="form_input"><input
										type="text" class="form-control" id="référence" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NomFiche">Nom fiche </label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="nomFiche" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NumDepot">Numéro depot</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="numDepot" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-12 submit_button_holder">
								<button type="submit" class="btn btn-primary submit_button">Rechercher</button>
							</div>
						</div>



					</form>
				</div>
				<!-- End .search_area -->

			</div>
		</div>

	</div>
</div>

