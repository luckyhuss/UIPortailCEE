<!-- Resultat de la recherche -->
<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#resultatFicheRecap">Résultat De La Recherche</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#resultatFicheRecap"><i class="glyphicon glyphicon-list-alt"></i></a></span>
			</h4>
		</div>

		<div id="resultatFicheRecap" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-12 data_table_holder">
						<table id="resultatFicheRecapTable"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>SIREN</th>
									<th>Raison sociale</th>
									<th>Maison mere</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>23762328</td>
									<td>Raison 1</td>
									<td>123</td>
									<td class="iconCol"><a href="javascript:void(0)"
										onclick="displayInfoAdmin();"><i
											class="glyphicon glyphicon-eye-open" data-toggle="collapse"
											data-target="#collapseInfoAdmin"></i></a></td>
								</tr>
								<tr>
									<td>23762328</td>
									<td>Raison 2</td>
									<td>123</td>
									<td class="iconCol"><a href="javascript:void(0)"
										onclick="displayInfoAdmin();"><i
											class="glyphicon glyphicon-eye-open" data-toggle="collapse"
											data-target="#collapseInfoAdmin"></i></a></td>
								</tr>
								<tr>
									<td>23762328</td>
									<td>Raison 3</td>
									<td>123</td>
									<td class="iconCol"><a href="javascript:void(0)"
										onclick="displayInfoAdmin();"><i
											class="glyphicon glyphicon-eye-open" data-toggle="collapse"
											data-target="#collapseInfoAdmin"></i></a></td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>

				<!-- Closing collapsible wrapper -->
			</div>
		</div>

	</div>
</div>

<!-- Resultat de la recherche -->

<div class="panel-group displayed" id="resultatFicheRecapPanel">
    <div class="panel panel-default">

	   	<div class="panel-heading">
            <h4 class="panel-title">
                <span class="panel_header_element"><a data-toggle="collapse" data-parent="#accordionFiche" href="#collapseFicheDetail">Détail fiche</a></span>
                <span class="panel_header_element"><a data-toggle="collapse" data-parent="#accordionFiche" href="#collapseFicheDetail"><i class="glyphicon glyphicon-list"></i></a></span>
            </h4>
		</div>

		<div class="panel-body" id="infoAdmin">
			<fieldset class="fieldset-margin-bottom choisirInfoAdminPanel">
				<legend id= "infoLegend" >Information administrative</legend>
				<div class="fieldset-container">

					<div class="header-group col-md-12" id="sectionSociete">
						<fieldset class="fieldset-margin-bottom" id="societeFieldset">
							<legend>Société</legend>

								<div class="header-group">
									<span class="header_label"><label for="raisonSociale">Raison
											sociale</label></span> <span class="header_output">LOGISTA</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Siren">SIREN</label></span>
									<span class="header_output">394629125</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Filiale">Filiale</label></span>
									<span class="header_output">Indéfini</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Tel">Téléphone</label></span>
									<span class="header_output">111222333</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Couriel">Couriel</label></span>
									<span class="header_output">111222333</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Adresse">Adresse</label></span>
									<span class="header_output">34 Rue de George Gabon, paris 16 eme
										this is a test this is a test this is a test...</span>
								</div>
						
						</fieldset>
					</div>

				</div>
				<div class="fieldset-container">
					<div class="header-group col-md-12" id="sectionSigElec">
						<fieldset class="fieldset-margin-bottom" id="signatureElectroniqueFieldset">
							<legend>Signature Electronique</legend>
						<div class="signature-container col-md-10">
							<div class="signature-section col-md-6">
								<span class="signature-section-header">Dirigeant</span>
								<div class="header-group">
									<span class="header_label"><label for="nom">Nom</label></span> <span
										class="header_output">LOGISTA</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="prenom">Prénom</label></span>
									<span class="header_output">394629125</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Tel">Téléphone</label></span>
									<span class="header_output">111222333</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="mail">Mail</label></span>
									<span class="header_output">111222333</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="statut">Statut</label></span>
									<span class="header_output">Indéfini</span>
								</div>
							</div>

							<div class="signature-section col-md-6">
								<span class="signature-section-header">Responsable CEE</span>
								<div class="header-group">
									<span class="header_label"><label for="nom">Nom</label></span> <span
										class="header_output">LOGISTA</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="prenom">Prénom</label></span>
									<span class="header_output">394629125</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="Tel">Téléphone</label></span>
									<span class="header_output">111222333</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="mail">Mail</label></span>
									<span class="header_output">111222333</span>
								</div>

								<div class="header-group">
									<span class="header_label"><label for="statut">Statut</label></span>
									<span class="header_output">Indéfini</span>
								</div>
							</div>
						</div>
						</fieldset>
					</div>
				</div>
				<div class="fieldset-container">
					<div class="header-group col-md-12" id="sectionConvention">
						<fieldset class="fieldset-margin-bottom" id="conventionFieldset">
							<legend>Convention</legend>

						<div class="header-group">
							<span class="header_label"><label for="Convention">Convention </label></span>
							<span class="header_output">Signee le xxx</span>
						</div>

						<div class="header-group">
							<span class="header_label"><label for="Avenant">Avenant</label></span>
							<span class="header_output">Signee le xxx</span>
						</div>
						
						</fieldset>
					</div>
				</div>
			</fieldset>
		</div>

		<!-- Info Activite -->
		<div class="panel-body" id="infoActivite">
			<fieldset class="fieldset-margin-bottom choisirInfoActivitePanel">
				<legend>Information activité</legend>

					<div class="header-group">
						<span class="header_label"><label for="docEnCours">Total
								dossiers en cours </label></span> <span
							class="header_output">2124 € kWhc</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="docDeposes">Total
								dossiers deposés</label></span> <span
							class="header_output">153 € kWhc</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="docPayes">Total
								dossiers payés (BEN) </label></span> <span
							class="header_output">2124 € kWhc</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="docPayes">Total
								dossiers payés (PRO)</label></span> <span
							class="header_output">153 € kWhc</span>
					</div>

			</fieldset>
		</div>
		<!-- Info Activite -->

		<!-- Top 10 operations -->
		<div class="panel-body" id="infoOperation">
			<fieldset class="fieldset-margin-bottom choisirInfoGeneralPanel">
				<legend>Top 10 opérations</legend>
					<table id="operationsFiche"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<thead>
							<tr>
								<th>Réference opération standardisée</th>
								<th>mWhc classique</th>
								<th>mWhc précartité</th>
								<th>Statut</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Dossier 1</td>
								<td class="numcol">0,000</td>
								<td class="numcol">0,000</td>
								<td>En cours</td>
							</tr>
							<tr>
								<td>Dossier 2</td>
								<td class="numcol">0,000</td>
								<td class="numcol">0,000</td>
								<td>En cours</td>
							</tr>
							<tr>
								<td>Dossier 3</td>
								<td class="numcol">0,000</td>
								<td class="numcol">0,000</td>
								<td>En cours</td>
							</tr>
						</tbody>
					</table>

			</fieldset>
		</div>

	</div>
</div>



<script>
function displayInfoAdmin() {
	document.getElementById("resultatFicheRecapPanel").style.display = "block";
    // document.getElementById("infoAdmin").style.display = "block";
	// document.getElementById("infoOperation").style.display = "block";
	// document.getElementById("infoActivite").style.display = "block";	
}
</script>
