<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestUtilisateur">Gestion Utilisateur</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#gestUtilisateur"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="gestUtilisateur" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12 submit_button_holder admin-btn-new">
						<a href="javascript:void(0)" class="btn btn-primary submit_button newUser" onclick="javascript:displayDetailUser('new', null);">Nouvel Utilisateur</a>

					</div>
			
					<div class="col-md-12 data_table_holder">
						<table id="listUtilisateur"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>Prénom</th>
									<th>Nom</th>
									<th>Email</th>
									<th>Dénomination / SIREN</th>
									<th>Filiale</th>
									<th>Persona</th>
									<th>Actif</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php
                                for ($n = 0; $n <= 50; $n ++) {
                                ?>

								<tr>
									<td>John <?=$n?></td>
									<td>Smith</td>
									<td>jjohn@test.com</td>
									<td>dr-23-3e-das-67</td>
									<td>dr-23-3e-das-67</td>
									<td>GFX</td>
									<td>Oui</td>
									<td class="iconCol"><a href="javascript:void(0)"
										onclick="displayDetailUser('edit', <?=$n?>);"><i
											class="glyphicon glyphicon-edit" data-toggle="collapse"
											data-target="#collapseDetailUser"></i></a></td>
								</tr>

								<?php
                                }  // include("listeUtilisateur.php");
                                ?>
								
							</tbody>
						</table>

					</div>
				</div>

			</div>
		</div>
	</div>
	
	
	
	
	
</div>
<?php include("add-edit-utilisateur.php"); ?>

<script>


function displayDetailUser(ecran, id) {
	$('#email, [for="email"]').removeAttr('disabled').removeClass('disabled');

	if(ecran == 'edit') {
		$('#email, [for="email"]').attr('disabled','disabled').addClass('disabled');
		
	}

	$("#add-edit-panel").css("display", "block");
	
	$("html,body").animate({scrollTop: $("#gestAddEditUtilisateur").offset().top}, 2000);
}


</script>
