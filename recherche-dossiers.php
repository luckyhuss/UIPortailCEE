<?php include 'search-area-commercial.php'; ?>

<!-- Resultat de la recherche -->
<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#resultatMesDossiers">Résultat De La Recherche</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#resultatMesDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span>
			</h4>
		</div>

		<div id="resultatMesDossiers" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-12 data_table_holder">
						<table id="resultatRecherche"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>Num Dossier</th>
									<th>Num Action</th>
									<th>Raison Sociale B2B</th>
									<th>Nom B2C</th>
									<th>Raison Sociale Pro</th>
									<th>Statut Portail</th>
									<th>Ville Site Travaux</th>
									<th>Code Postal</th>
									<th>Aide Client</th>
									<th>Aide Pro</th>
									<th>SumCumacHP</th>
									<th>SumCumacP</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>23762328</td>
									<td>23762328</td>
									<td>Raison 1</td>
									<td>Dossier 1</td>
									<td>Fiche3</td>
									<td>En cours</td>
									<td>Paris</td>
									<td>50450</td>
									<td>10.45</td>
									<td>500.56</td>
									<td>10.00</td>
									<td>500.23</td>
									<td><a href="#" onclick="displayDetailDossier();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseDetailDossier"></i></a></td>
								</tr>
								<tr>
									<td>23762328</td>
									<td>23762328</td>
									<td>Raison 2</td>
									<td>Dossier 2</td>
									<td>Fiche3</td>
									<td>En cours</td>
									<td>Paris</td>
									<td>12345</td>
									<td>10.45</td>
									<td>500.56</td>
									<td>10.00</td>
									<td>500.23</td>
									<td><a href="#" onclick="displayDetailDossier();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseDetailDossier"></i></a></td>
								</tr>
								<tr>
									<td>23762328</td>
									<td>23762328</td>
									<td>Raison 3</td>
									<td>Dossier 3</td>
									<td>Fiche3</td>
									<td>En cours</td>
									<td>Paris</td>
									<td>748578</td>
									<td>10.45</td>
									<td>500.56</td>
									<td>10.00</td>
									<td>500.23</td>
									<td ><a href="#" onclick="displayDetailDossier();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseDetailDossier"></i></a></td>
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


<div class="panel-group" id="detailDossier">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseDetailDossier">Détail Du Dossier</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseDetailDossier"><i class="glyphicon glyphicon-folder-open"></i></a></span>
			</h4>
		</div>

		<div id="collapseDetailDossier" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="detailDossier">
							<legend class="the-legend">Dossier</legend>
							<div class="row">
						<div class="col-md-6 js-date-engagement">
							<h5><span class="enteteDossier">Date Engagement:</span> @Model.DateEngagement</h5>
						</div>
						<div class="col-md-6 js-aide">
						<h5><span class="enteteDossier">Aide: </span> @Model.Aide</h5>
						</div>

						<div class="col-md-6 js-date-fin-traveau">
						<h5><span class="enteteDossier">Date Fin Travaux: </span> @Model.DateFinTravaux</h5>
						</div>
						<div class="col-md-6 js-date-premier-contact">
						<h5><span class="enteteDossier">Date Premier Contact: </span> @Model.DatePremierContact</h5>
						</div>
					</div>

					<table id="detailDossierOperations"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Operations</caption>
						<thead>
							<tr>
								<th>Nom</th>
								<th>Fiche</th>
								<th>Num Action</th>
								<th>Statut</th>
								<th>kWhc</th>
								<th>€</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Dossier 1</td>
								<td>Fiche 1</td>
								<td>23762328</td>
								<td>En cours</td>
								<td>10</td>
								<td>500</td>
								<td style="text-align: center;"><a href="#"><i class="glyphicon glyphicon-eye-open"
										data-toggle="modal" data-target="#Modal1"></i></a></td>
							</tr>
							<tr>
								<td>Dossier 2</td>
								<td>Fiche 2</td>
								<td>23762328</td>
								<td>En cours</td>
								<td>10</td>
								<td>500</td>
								<td style="text-align: center;"><a href="#"><i class="glyphicon glyphicon-eye-open"
										data-toggle="modal" data-target="#Modal1"></i></a></td>
							</tr>
							<tr>
								<td>Dossier 3</td>
								<td>Fiche 3</td>
								<td>23762328</td>
								<td>En cours</td>
								<td>10</td>
								<td>500</td>
								<td style="text-align: center;"><a href="#"><i class="glyphicon glyphicon-eye-open"
										data-toggle="modal" data-target="#Modal1"></i></a></td>
							</tr>
						</tbody>
					</table>

					<!-- Info Beneficiaire -->


					<table id="infoBeneficiaire"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Informations Beneficiaire</caption>
						<thead>

							<tr>
								<th>ID</th>
								<th class="col-md-6 text-center">Nom</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td class="col-md-6 text-center">Test 1</td>
							</tr>
							<tr>
								<td>2</td>
								<td class="col-md-6 text-center">Test 2</td>
							</tr>
							<tr>
								<td>3</td>
								<td class="col-md-6 text-center">Test 3</td>
							</tr>
						</tbody>
					</table>
					<!-- Info Beneficiaire -->

					<!-- Documents Recu -->
    <?php include 'piece-jointe-commercial.php'; ?>
<!-- Documents Recu -->

				</div>
				<!-- Closing collapsible wrapper -->
			</div>
		</div>

	</div>
</div>


<!-- modal detail info -->
<div class="modal fade popin-donnee" id="Modal1" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog liste_critere" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="btn btn-default" data-dismiss="modal">x</button>
				<h4 class="modal-title" id="myModalLabel">Liste Criteres</h4>
			</div>

			<div class="modal-body">
				<ul>
					<li>Critere 1: Val1</li>
					<li>Critere 2: Val2</li>
					<li>Critere 3: Val3</li>
					<li>Critere 4: Val4</li>
					<li>Critere 5: Val5</li>
				</ul>
			</div>

			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> -->
			</div>
		</div>
	</div>
</div>
<!-- modal detail info -->


<script>
function displayDetailDossier() {
    document.getElementById("detailDossier").style.display = "block";
}
</script>