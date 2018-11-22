<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#infoCee">Gestion Utilisateur</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#infoCee"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="infoCee" class="panel-collapse collapse in">
			<div class="panel-body">
			
			<div class="row">
					<div class="col-md-12 data_table_holder">
						<table id="resultatRecherche"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
                                    <th>Prénom</th>
									<th>Nom</th>
									<th>Email</th>
									<th>ID Gigya</th>
									<th>ID Oxygène</th>
									<th>Filiale</th>
									<th class="numcol">Actif</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php include("listeutilisateur.php"); ?>
								
								
							</tbody>
						</table>

					</div>
				</div>
			
			
			</div>
		</div>
	</div>
</div>
