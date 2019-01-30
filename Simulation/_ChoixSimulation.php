<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">
			<fieldset class="choisirProspectPartenaire">
				<legend>Prospect/Partenaire Existant</legend>
				<div class="fieldset-container">
					<div class="col-sm-3 col-md-3 input_holder">
						<div class="form-group">
							<span class="form_input"><input type="radio" name="optradio"
								value="prospect"></span> <span class="form_label"><label
								for="prospect">Prospect</label></span>
						</div>
					</div>

					<div class="col-sm-3 col-md-3 input_holder">
						<div class="form-group">
							<span class="form_input"><input type="radio" name="optradio"
								value="partenaire"></span> <span class="form_label"><label
								for="partenaire">Partenaire existant</label></span>
						</div>
					</div>
				</div>

				<div class="col-md-12 choix-container displayed">

					<div class="row prospect-container displayed">
						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="RaisonSociale">Raison
										sociale</label></span> <span class="form_input"><input
									type="text" class="form-control" 
									id="raisonSocial" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="Siren">SIREN</label></span>
								<span class="form_input"><input type="text" class="form-control"
									id="siren" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 input_holder choix-partenaire">
							<div class="form-group">
								<span class="form_label"><label for="Contact">Contact</label></span>
								<span class="form_input" ><input type="text"
									class="form-control" id="contact" placeholder=""></span>
							</div>
						</div>
					</div>
					
					
					<div class="row partenaire-container displayed">
						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="RaisonSociale">Raison
										sociale</label></span> 
										<!-- <span class="form_input"><input
									type="text" class="form-control" 
									id="raisonSocial" placeholder=""></span> -->
									<div id="msRaisonSociale" class="form-control"></div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="Siren">SIREN</label></span>
								<!-- <span class="form_input"><input type="text" class="form-control"
									id="siren" placeholder=""></span> -->
									<div id="msSiren" class="form-control"></div>
							</div>
						</div>

					</div>

				</div>




			</fieldset>
		</div>

	</div>
</div>