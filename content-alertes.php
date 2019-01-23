<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#listeRefusPieces">Refus Pièces</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#listeRefusPieces"><i class="glyphicon glyphicon-list-alt"></i></a></span>
			</h4>
		</div>

		<div id="listeRefusPieces" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-12 data_table_holder">
						<table id="listRefusPieces"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>Numéro Dossier</th>
									<th>Statut de la pièce</th>
									<th>Nature de la pièce</th>

									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php
                                for ($n = 0; $n <= 50; $n ++) {
                                    ?>
                        
                        		<tr>
									<td>This is a test <?=$n?></td>
									<td>Rejeté</td>
									<td>This is a test</td>
									<td class="iconCol"><a
										href="/uiportailcee?pageLoaded=Dossiers&id=<?=$n ?>"><i
											class="glyphicon glyphicon-eye-open"></i></a></td>
								</tr>
                        
                        		<?php
                                }
                                ?>
								
							</tbody>
						</table>

					</div>
				</div>

				<!-- Closing collapsible wrapper -->
			</div>
		</div>

	</div>
</div>


<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#listeRefusDossiers">Refus Dossiers</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#listeRefusDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span>
			</h4>
		</div>

		<div id="listeRefusDossiers" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-12 data_table_holder">
						<table id="listRefusDossiers"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>Numéro Dossier</th>
									<th>Statut de la pièce</th>
									<th>Raison d'inéligibilité</th>

									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php
                                for ($n = 0; $n <= 50; $n ++) {
                                    ?>
                        
                        		<tr>
									<td>4587962 <?=$n?></td>
									<td>En attente</td>
									<td>This is a test</td>
									<td class="iconCol"><a
										href="/uiportailcee?pageLoaded=Dossiers&id=<?=$n ?>"><i
											class="glyphicon glyphicon-eye-open"></i></a></td>
								</tr>
                        
                        		<?php
                                }
                                ?>
								
							</tbody>
						</table>

					</div>
				</div>

				<!-- Closing collapsible wrapper -->
			</div>
		</div>

	</div>
</div>