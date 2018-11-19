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
									<td><a href="javascript:void(0)" onclick="displayDetailDossier();"><i class="glyphicon glyphicon-eye-open"
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
									<td><a href="javascript:void(0)" onclick="displayDetailDossier();"><i class="glyphicon glyphicon-eye-open"
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
									<td ><a href="javascript:void(0)" onclick="displayDetailDossier();"><i class="glyphicon glyphicon-eye-open"
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
							
							<div class="header_numDossier">
						<div class="header-group">
							<span class="header_label"><label for="numDossier">Numéro Dossier</label></span>
							<span class="header_output">1390</span>
						</div>

					</div>

					<div class="row">

						<div class="apporteur-prestataire-container col-md-11">

							<ul class="apporteur-prestataire-wrapper">
								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="nomApporteur">Nom
												Apporteur</label></span> <span class="header_output">LOGISTA</span>
									</div>
								</li>
								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="sirenApporteur">SIREN
												Apporteur</label></span> <span class="header_output">394629125</span>
									</div>
								</li>

								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="nomPrestataire">Nom
												Prestataire</label></span> <span class="header_output">Indéfini</span>
									</div>
								</li>

								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="sirenPrestataire">SIREN
												Prestataire</label></span> <span class="header_output">111222333</span>
									</div>
								</li>

							</ul>

						</div>

					</div>

					<div class="row">

						<div class="date-container col-md-11">

							<ul class="date-wrapper">
								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="dateAchevement">Date
												Achèvement</label></span> <span class="header_output">20/04/2018</span>
									</div>
								</li>
								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="dateEngagement">Date
												Engagement</label></span> <span class="header_output">14/12/2017</span>
									</div>
								</li>

								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="datePrevisionnelle">Date
												Prévisionnelle de Travaux</label></span> <span
											class="header_output">10/05/2018</span>
									</div>
								</li>

								<li class="filter-item float-item">
									<div class="header-group">
										<span class="header_label"><label for="dateRAI">Date RAI</label></span>
										<span class="header_output">11/12/2017</span>
									</div>
								</li>

							</ul>

						</div>

					</div>

					<table id="detailDossierOperations"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Operations</caption>
						<thead>
							<tr>
								<th>Réference opération standardisée</th>
								<th>mWhc classique</th>
								<th>mWhc précartité</th>
								<th>Statut</th>
								<th class="listeCriteres">Liste des criteres</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Dossier 1</td>
								<td>Fiche 1</td>
								<td>23762328</td>
								<td>En cours</td>
								<td style="text-align: center;"><a href="javascript:void(0)"><i class="glyphicon glyphicon-eye-open"
										data-toggle="modal" data-target="#Modal1"></i></a></td>
							</tr>
							<tr>
								<td>Dossier 2</td>
								<td>Fiche 2</td>
								<td>23762328</td>
								<td>En cours</td>
								<td style="text-align: center;"><a href="javascript:void(0)"><i class="glyphicon glyphicon-eye-open"
										data-toggle="modal" data-target="#Modal1"></i></a></td>
							</tr>
							<tr>
								<td>Dossier 3</td>
								<td>Fiche 3</td>
								<td>23762328</td>
								<td>En cours</td>
								<td style="text-align: center;"><a href="javascript:void(0)"><i class="glyphicon glyphicon-eye-open"
										data-toggle="modal" data-target="#Modal1"></i></a></td>
							</tr>
						</tbody>
					</table>
					
					<div class="col-md-2 submit_button_holder btn-retour">
								<button type="submit" class="btn btn-primary submit_button">Retour</button>
							</div>

					<!-- Info Beneficiaire -->


					<table id="infoBeneficiaire"
						class="table table-striped table-bordered nowrap displayed"
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


	<?php //include 'resultatRechercherDossier.php'; ?>
	
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