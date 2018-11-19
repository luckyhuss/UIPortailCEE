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
									<span class="form_label"><label for="NumAction">Numéro action</label></span>
									<span class="form_input"><input type="text"
										class="form-control input-validation-error" id="numAction"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="Référence">Référence
											Externe</label></span> <span class="form_input"><input
										type="text" class="form-control" id="référence"
										placeholder=""></span>
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
									<span class="form_label"><label for="StatutPortail">Statut Portail</label></span> 
											
											<span class="form_input" > 
    											<select class="form-control">
    												<option value='0'></option>
        											<option value='1'>Statut 1</option>
        											<option value='2'>Statut 2</option>
        											<option value='3'>Statut 3</option>
        											<option value='4'>Statut 4</option>
            									</select>
            									</span>
        									
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="CodePostal">Code Postal</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="codePostal" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="VilleTravaux">Ville
											Travaux</label></span> <span class="form_input"><input
										type="text" class="form-control" id="villeTravaux"
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
									<span class="form_label"><label for="RaisonSocialeB2B">Raison
											sociale client</label></span> <span class="form_input"><input
										type="text" class="form-control" id="raisonSocialeB2B"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="ChargeAffaireB2B">Charge
										affaire client</label></span> <span class="form_input"><input
										type="text" class="form-control" id="chargeAffaireB2B"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="SirenePro">Sirene Pro</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="sirenePro" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="RaisonSocialePro">Raison
											Sociale Pro</label></span> <span class="form_input"><input
										type="text" class="form-control" id="raisonSocialePro"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="ChargeAffairePro">Charge
											Affaire Pro</label></span> <span class="form_input"><input
										type="text" class="form-control" id="chargeAffairePro"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="ApporteurAffaireNom">Apporteur
											Affaire Nom</label></span> <span class="form_input"><input
										type="text" class="form-control" id="apporteurAffaireNom"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="ApporteurAffaireSiren">Apporteur
											Affaire Siren</label></span> <span class="form_input"><input
										type="text" class="form-control" id="apporteurAffaireSiren"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="PrestataireNom">Prestataire
											Nom</label></span> <span class="form_input"><input
										type="text" class="form-control" id="prestataireNom"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="PrestataireSiren">Prestataire
											Siren</label></span> <span class="form_input"><input
										type="text" class="form-control" id="prestataireSiren"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="ReferenceOS">Reference opération standardisée</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="referenceOS" placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="VersionOS">Version opération standardisée</label></span>
									<span class="form_input"><input type="number"
										class="form-control" id="versionOS" placeholder=""></span>
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


