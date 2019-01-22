<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#resultatMesDossiers">Refus Pièces</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#resultatMesDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span>
			</h4>
		</div>

		<div id="resultatMesDossiers" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-12 data_table_holder">
							<table id="listUtilisateur1"
								class="table table-striped table-bordered nowrap"
								style="width: 100%">
								<thead>
									<tr>
										<th>Titre</th>
										<th>Contenu</th>
										<th>Plus d'info</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
							
								<?php
                                for ($n = 0; $n <= 50; $n ++) {
                                    ?>
                        
                        								<tr>
                        										<td>This is a test <?=$n?></td>
                        										<td>autres - tous - processus <?=$n?></td>
                        										<td style="width:100px">autres - tous - processus this is a test this is a test <?=$n?></td>
                        										<td class="iconCol"><a href="javascript:void(0)"
                        											onclick="displayDetailContent('<?=$gestion ?>', 1);"><i
                        												class="glyphicon glyphicon-edit" data-toggle="collapse"
                        												data-target="#collapseDetailContenu"></i></a></td>
                        									</tr>
                        
                        								<?php
                                } // include("listeUtilisateur.php");
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