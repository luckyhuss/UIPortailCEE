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
							class="table table-striped table-bordered nowrap listDataTable" style="width: 100%">
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
									
											
									
									<td class="iconCol col-action-btn" style="width:8%!important">
									<span class="icon-holder"> <a href="javascript:void(0)"><i data-toggle="modal" data-target="#Modal1"
												class="glyphicon glyphicon-eye-open"></i></a></span>
									    <span class="icon-holder"><a
											href="javascript:void(0)" onclick="displayDetailUser('edit', <?=$n?>);"><i
												class="glyphicon glyphicon-edit" data-toggle="collapse"
												data-target="#collapseDetailUser"></i></a></span>
										
									</td>
												
									
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
	
<!-- modal detail info -->
<div class="modal fade popin-donnee" id="Modal1" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog liste_critere" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn btn-default" data-dismiss="modal">x</button>
				<h4 class="modal-title" id="myModalLabel">Détail Utilisateur</h4>
			</div>

			<div class="modal-body">
				<ul>
					<li>Info 1: Val1</li>
					<li>Info 2: Val2</li>
					<li>Info 3: Val3</li>
					<li>Info 4: Val4</li>
					<li>Info 5: Val5</li>
				</ul>
			</div>

			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<!-- modal detail info -->	
	
	
	
</div>
<?php include("add-edit-utilisateur.php"); ?>

<script>


function displayDetailUser(ecran, id) {
 
	$('#email, [for="email"]').removeAttr('disabled').removeClass('disabled');

	if(ecran == 'edit') {
		$('#email, [for="email"]').attr('disabled','disabled').addClass('disabled');
		
	}

	$("#add-edit-panel").css("display", "block");
	
	$("html,body").animate({scrollTop: $("#gestAddEditUtilisateur").offset().top}, 1000);

}


</script>
