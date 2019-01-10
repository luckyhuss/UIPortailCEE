
<div class="col-md-12 panel-group resultatCumulePanel displayed" id="resultatCumulePanel">
	<div class="panel panel-default">

		<div class="panel-body">
			<fieldset class="resultatCumulerPanel">
				<legend>Resultat Cumulé</legend>
				<div class="fieldset-container">

					<div class="sectionResultatCumule col-md-12">
						
						<div class="header-group">
							<span class="header_label"><label for="ResultatCumulerCL">Nombre
									d'opération</label></span> <span class="header_output"
								id="numOperation">10</span>
						</div>
					</div>
					<div class="repartition-section">
						<span class="repartition-section-header">Calcul CUMAC</span>
						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="ResultatCumulerCL">Classique</label></span>
								<span class="header_output" id="resultatCumuleCL_cumac">10 kWhc</span> 
							</div>
						</div>

						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="ResultatCumulerPR">Précarité</label></span>
								<span class="header_output" id="resultatCumulePR_cumac">10 kWhc</span>
							</div>
						</div>
					</div>


					<div class="repartition-section col-md-6">
						<span class="repartition-section-header">Calcul AIDE Beneficiare</span>
						<div class="col-sm-6 col-md-12 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="ResultatCumuleBenHP_aide">Hors précarité</label></span>
								<span class="header_output" id="resultatCumuleBenHPAide_OP0">10 kWhc</span>
							</div>
						</div>

						<div class="col-sm-6 col-md-12 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="ResultatCumuleBenP_aide">Précarité</label></span>
								<span class="header_output" id="resultatCumuleBenPAide_OP0">10 kWhc</span>
							</div>
						</div>
					</div>

					<div class="repartition-section col-md-6">
						<span class="repartition-section-header">Calcul AIDE Pro</span>

						<div class="col-sm-6 col-md-12 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="ResultatCumuleProHP_aide"> Hors précarité</label></span>
								<span class="header_output" id="resultatCumuleProHPAide_OP0">10 kWhc</span>
							</div>
						</div>

						<div class="col-sm-6 col-md-12 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="ResultatCumuleProP_aide"> Précarité</label></span>
								<span class="header_output" id="resultatCumuleProPAide_OP0">10 kWhc</span>
							</div>
						</div>
					</div>

				</div>
			</fieldset>
		</div>
	</div>
</div>

<div class="col-md-12 mentionSurDevisSection">

	<div class="col-md-12 submit_button_holder" id="btn_mentionSurDevis">
		<a href="javascript:void(0)"  id="msd_cc"  class="btn btn-primary submit_button" role="button">Récupérer la mention à faire figurer et le cadre contribution</a>
	</div>

	<div class="panel-group mentionFigurerPanel displayed" id="mentionFigurerPanel">
		<div class="panel panel-default">

			<div class="panel-body">

				<fieldset class="fieldset-margin-bottom choisirRepartitionMSDPanel">
					<legend>Répartition</legend>

					<div class="fieldset-container" id="repartitionMSDFieldset">
						
							<span class="form_label col-md-12"><label for="repartitionMSD">Je donne ma prime au bénéficiaire</label></span>

						<div class="col-sm-3 col-md-3 input_holder">
							<div class="form-group">
								<span class="form_input"><input type="radio" name="optradio"
									value="prime_oui"></span> <span class="form_label"><label
									for="prime_oui">Oui</label></span>
							</div>
						</div>

						<div class="col-sm-3 col-md-3 input_holder">
							<div class="form-group">
								<span class="form_input"><input type="radio" name="optradio"
									value="prime_non"></span> <span class="form_label"><label
									for="prime_non">Non</label></span>
							</div>
						</div>
					</div>

					<div class="fieldset-container" id="repartitionRemFieldset">
						<span class="form_label col-md-12"><label for="repartitionRem">Répartition de la rémunération</label></span>

						<div class="col-sm-6 col-md-3 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="RemunerationPro">Professionel</label></span> <span
									class="header_output"><input type="text"
									class="form-control" id="remunerationPro" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-3 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="RemunerationBen">Bénéficiaire</label></span> <span
									class="header_output"><input type="text"
									class="form-control" id="remunerationBen" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-3 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="RemunerationAA">Apporteur affaire</label></span> <span
									class="header_output"><input type="text"
									class="form-control" id="remunerationAA" placeholder=""></span>
							</div>
						</div>
						
					</div>
				</fieldset>

				<fieldset class="fieldset-margin-bottom choisirModeDePaiementPanel">
					<legend>Mode de paiement</legend>

					<div class="fieldset-container">

						<div class="col-sm-6 col-md-3 input_holder">
							<div class="form-group">
								<span class="form_input"><input type="radio" name="optradio"
									value="mandatDePaiement"></span> <span class="form_label"><label
									for="MandatDePaiement">Mandat de paiement</label></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-3 input_holder">
							<div class="form-group">
								<span class="form_input"><input type="radio" name="optradio"
									value="paiementAuBen"></span> <span class="form_label"><label
									for="PaiementAuBen">Paiement au bénéficiaire</label></span>
							</div>
						</div>

					</div>
				</fieldset>

				<fieldset class="fieldset-margin-bottom choisirMentionSurDevisPanel">
					<legend>Mention sur devis</legend>

					<div class="fieldset-container">

						<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque 
							penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
							Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
							imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum 
							semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem 
							ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
							Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
							condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
							hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
							Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed
							consequat, leo eget bibendum sodales, augue velit cursus nunc,
						</span>

						<div class="col-md-12 submit_button_holder simuler_btn_holder">
							<a href="javascript:void(0)"  id="copier_msd"  class="btn btn-primary submit_button" role="button">Copier</a>
						</div>

					</div>
				</fieldset>


				<fieldset class="fieldset-margin-bottom choisirCadreContributionPanel">
					<legend>Cadre contribution</legend>

					<div class="fieldset-container">

						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="Nom_benef">Nom</label></span> <span
									class="header_output"><input type="text"
									class="form-control" id="nom_benef" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="Prenom_benef">Prénom</label></span> <span
									class="header_output"><input type="text"
									class="form-control" id="prenom_benef" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="Adresse_benef">Adresse</label></span> 
								<span
									class="header_output"><input type="text"
									class="form-control" id="adresse_benef"
									placeholder="">
								</span>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="Email_benef">Email</label></span> 
								<span
									class="header_output"><input type="text"
									class="form-control" id="email_benef"
									placeholder="">
								</span>
							</div>
						</div>

						<div class="col-sm-6 col-md-6 input_holder">
							<div class="header-group">
								<span class="header_label"><label for="Tel_benef">Téléphone</label></span> 
								<span
									class="header_output"><input type="text"
									class="form-control" id="tel_benef"
									placeholder="">
								</span>
							</div>
						</div>


					<div class="col-md-12 submit_button_holder simuler_btn_holder">
						<a href="javascript:void(0)"  id="generer_cc"  class="btn btn-primary submit_button" role="button">Générer</a>
					</div>

					</div>
				</fieldset>

			</div>
		</div>
	</div>

</div>

<script>

$('#btn_mentionSurDevis').click(function () {
	$('#mentionFigurerPanel').removeClass('displayed');
});

</script>
