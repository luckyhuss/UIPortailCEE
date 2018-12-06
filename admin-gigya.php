<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestUtilisateur">Gestion Utilisateur Gigya</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#gestUtilisateur"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="gestUtilisateur" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12 submit_button_holder admin-btn-new">
						<a href="javascript:void(0)"
							class="btn btn-primary submit_button newUser"
							onclick="javascript:displayDetailUser('new');">Nouvel Utilisateur</a>

					</div>

					<div class="col-md-12 data_table_holder">
						<table id="listUtilisateur"
							class="table table-striped table-bordered nowrap"
							style="width: 100%">
							<thead>
								<tr>
									<th>Username</th>
									<th>Email</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php
                                    for ($n = 0; $n <= 50; $n ++) {
                                        ?>
                            
                            								<tr>
                            									<td>John <?=$n?></td>
                            									<td>jjohn@test.com</td>
                            									<td class="iconCol"><a href="javascript:void(0)"
                            										onclick="displayDetailUser();"><i
                            											class="glyphicon glyphicon-edit" data-toggle="collapse"
                            											data-target="#collapseDetailUser"></i></a></td>
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


<div class="panel-group displayed" id="add-edit-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestAddEditUtilisateur">Ajouter/Modifier Gigya</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#gestAddEditUtilisateur"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="gestAddEditUtilisateur" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="user_area">
					<div class="form_admin_contenu">
						<div class="text-danger validation-summary-errors"
							data-valmsg-summary="true">
							<ul>
								<li>Username to be defined</li>
								<li>Email to be defined</li>
							</ul>
						</div>

						<div class="alert fade in alert-dismissible isa_error">
							<a href="#" class="close-alert" data-dismiss="alert"
								aria-label="close" title="Fermer">×</a> Ceci est un exemple
							d'erreur.
						</div>
					</div>
					<form id="gestUtilisateur_content" class="form_admin_content"
						action="#" method="POST">

						<div class="content-container">
							<div class="row">

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Username">Username</label></span>
										<span class="form_input"><input type="text"
											class="form-control input-validation-error" id="username"
											placeholder=""></span>
									</div>
								</div>

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="email">Email</label></span>
										<span class="form_input"><input type="text"
											class="form-control" id="email" placeholder=""></span>
									</div>
								</div>

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="password">Mot de passe</label></span>
										<span class="form_input"><input type="password"
											class="form-control" id="password" placeholder=""></span>
									</div>
								</div>

								<div class="col-md-12 submit_button_holder">
									<button type="submit" class="btn btn-primary submit_button"
										name="btn-sauvegarder">Sauvegarder</button>

								</div>


							</div>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>
</div>

<script>


function displayDetailUser(id) {
	$("#add-edit-panel").css("display", "block");
	$("html,body").animate({scrollTop: $("#gestAddEditUtilisateur").offset().top}, 2000);
}


</script>

