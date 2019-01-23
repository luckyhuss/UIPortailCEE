<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestPermission">Gestion Permission</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#gestPermission"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="gestPermission" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
			
					<div class="col-md-12 data_table_holder">
						<table id="listPermission"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>Prénom</th>
									<th>Nom</th>
									<th>Email</th>
									<th>Secteur(s)</th>
									<th>Filiale(s)</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php
                                for ($n = 0; $n <= 125; $n ++) {
                                ?>

								<tr>
									<td>John <?=$n?></td>
									<td>Smith</td>
									<td>jjohn@test.com</td>
									<td></td>
									<td></td>
									<td class="iconCol"><a href="javascript:void(0)"
										onclick="displayPermision();"><i
											class="glyphicon glyphicon-edit" data-toggle="collapse"
											data-target="#collapsePermission"></i></a></td>
								</tr>

								<?php
                                }  
                                ?>
								
							</tbody>
						</table>

					</div>
				</div>

			</div>
		</div>
	</div>
	
	
	
	
	
</div>
<?php include("add-edit-permission.php"); ?>

<script>


function displayPermision(id) {
	$("#add-edit-panel").css("display", "block");
	$("html,body").animate({scrollTop: $("#gestAddEditPermission").offset().top}, 1000);
}



</script>
