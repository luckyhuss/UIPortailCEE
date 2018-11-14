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
                                    <th>Siren</th>
                                    <th>Raison Sociale</th>
									<th>Maison mere</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>23762328</td>
									<td>Raison 1</td>
									<td>123</td>
									<td class="iconCol"><a href="#" onclick="displayInfoAdmin();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseInfoAdmin"></i></a></td>
								</tr>
								<tr>
                                    <td>23762328</td>
									<td>Raison 2</td>
									<td>123</td>
									<td class="iconCol"><a href="#" onclick="displayInfoAdmin();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseInfoAdmin"></i></a></td>
								</tr>
								<tr>
                                    <td>23762328</td>
									<td>Raison 3</td>
									<td>123</td>
									<td class="iconCol"><a href="#" onclick="displayInfoAdmin();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseInfoAdmin"></i></a></td>
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


<div class="panel-group displayed" id="infoAdmin">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseInfoAdmin">Informations Administratives</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseInfoAdmin"><i class="glyphicon glyphicon-folder-open"></i></a></span>
			</h4>
		</div>

		<div id="collapseInfoAdmin" class="panel-collapse collapse in">
			<div class="panel-body">

					<table id="InfoSocieteFiche"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Société</caption>
						<thead>
							<tr>
								<th>Raison Sociale</th>
								<th>Siren</th>
								<th>Filiale/ Maison mere</th>
								<th>Tel</th>
								<th>Couriel</th>
								<th>Adresse</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Raison 1</td>
								<td>Siren 1</td>
								<td>23762328</td>
								<td>5856325</td>
								<td>test@total.mu</td>
								<td>123</td>
							</tr>
							<tr>
                                <td>Raison 2</td>
								<td>Siren 2</td>
								<td>23762328</td>
								<td>5856325</td>
								<td>test@total.mu</td>
								<td>123</td>
							</tr>
						</tbody>
					</table>


					<!-- Signature Electronique -->
					<table id="signatureElectroniqueFiche"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Signature Electronique</caption>
						<thead>

							<tr>
								<th></th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Tel</th>
                                <th>Mail</th>
                                <th>Statut</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Dirigeant</td>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>54445654</td>
                                <td>Mail</td>
                                <td>-</td>
							</tr>
							<tr>
                                <td>Responsable CEE</td>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>54445654</td>
                                <td>Mail</td>
                                <td>Statut</td>
							</tr>
						</tbody>
					</table>
					<!-- Signature Electronique -->


					<!-- Conventions -->
					<table id="conventionsFiche"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Conventions</caption>
						<thead>

							<tr>
                                <th>Nom</th>
                                <th class="numcol">Signee le</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Convention x</td>
                                <td class="numcol">10/31/2018</td>
							</tr>
							<tr>
                                <td>Avenant x</td>
                                <td class="numcol">10/31/2018</td>
							</tr>
						</tbody>
					</table>
					<!-- Conventions -->

					<!-- Info Activite -->
					<table id="infoActiviteFiche"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Informations Activité</caption>
						<thead>

							<tr>
								<th>Dossiers</th>
                                <th class="numcol">Total</th>
                                <th class="numcol">€</th>
                                <th class="numcol">kWhc</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>En cours</td>
                                <td class="numcol">45</td>
                                <td class="numcol">244</td>
                                <td class="numcol">544</td>
							</tr>
							<tr>
                                <td>Deposés</td>
                                <td class="numcol">45</td>
                                <td class="numcol">244</td>
                                <td class="numcol">544</td>
                            </tr>
                            <tr>
								<td>Payés (Ben)</td>
                                <td class="numcol">45</td>
                                <td class="numcol">244</td>
                                <td class="numcol">544</td>
							</tr>
							<tr>
                                <td>Payés (Pro)</td>
                                <td class="numcol">45</td>
                                <td class="numcol">244</td>
                                <td class="numcol">544</td>
							</tr>
						</tbody>
					</table>
                    <!-- Info Activite -->

                    <!-- Top 10 operations -->
					<table id="operationsFiche"
						class="table table-striped table-bordered nowrap"
						style="width: 100%">
						<caption class="tbl-caption">Top 10 opérations</caption>
						<thead>

							<tr>
								<th>Nom</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Operation 1</td>
							</tr>
							<tr>
                                <td>Operation 2</td>
                            </tr>
                            <tr>
								<td>Operation 3</td>
							</tr>
							<tr>
                                <td>Operation 4</td>
							</tr>
						</tbody>
					</table>
                    <!-- Top 10 operations -->
                    
				</div>
				<!-- Closing collapsible wrapper -->
			</div>
		</div>

	</div>


<script>
function displayInfoAdmin() {
    document.getElementById("infoAdmin").style.display = "block";
}
</script>
