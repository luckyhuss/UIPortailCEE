<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseContent">Contenu</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseContent"><i class="glyphicon glyphicon-leaf"></i></a></span>
			</h4>
		</div>

		<div id="collapseContent" class="panel-collapse collapse in">
			<div class="panel-body">

				<!-- Content of block Content -->



				<div class="content-container">


					<div class="row">

						<div class="col-md-6 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="personas">Persona</label></span>

								<span class="form_input"> <select class="form-control">
										<option value='0'></option>
										<option value='1'>Personas 1</option>
										<option value='2'>Personas 2</option>
										<option value='3'>Personas 3</option>
										<option value='4'>Personas 4</option>
								</select>
								</span>

							</div>
						</div>

						<div class="col-md-6 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="pages">Pages</label></span>

								<span class="form_input"> <select class="form-control">
										<option value='0'></option>
										<option value='1'>Page 1</option>
										<option value='2'>Page 2</option>
										<option value='3'>Page 3</option>
										<option value='4'>Page 4</option>
								</select>
								</span>

							</div>
						</div>





						<div class="col-md-6 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="zones">Bloc</label></span>

								<span class="form_input"> <select class="form-control">
										<option value='0'></option>
										<option value='1'>Zones 1</option>
										<option value='2'>Zones 2</option>
										<option value='3'>Zones 3</option>
										<option value='4'>Zones 4</option>
								</select>
								</span>

							</div>
						</div>

						<div class="col-md-6 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="zones">Sous-bloc</label></span>

								<span class="form_input"> <select class="form-control">
										<option value='0'></option>
										<option value='1'>Zones 1</option>
										<option value='2'>Zones 2</option>
										<option value='3'>Zones 3</option>
										<option value='4'>Zones 4</option>
								</select>
								</span>

							</div>
						</div>




						<div class="col-md-12 submit_button_holder admin-btn-new">
							<a href="javascript:void(0)"
								class="btn btn-primary submit_button"
								onclick="javascript:displayDetailContent('<?=$gestion ?>', 'new');">Nouveau Contenu</a>

						</div>

						<div class="col-md-12 data_table_holder">
							<table id="listContent"
								class="table table-striped table-bordered nowrap"
								style="width: 100%">
								<thead>
									<tr>
										<th>Titre</th>
										<th>Contenu</th>
										<th>Plus d'info</th>
										<th>Lien</th>
										<th>Phone</th>
										<th>Email</th>
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
                        										<td>this is a link, this is a link</td>
                        										<td>555 666 777</td>
                        										<td>test@yopmail.com</td>
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

				</div>


			</div>
		</div>
	</div>
</div>

<div class="panel-group displayed" id="panel-detail-contenu-<?=$gestion ?>">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseDetailContenu-<?=$gestion ?>">Détail</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseDetailContenu-<?=$gestion ?>"><i class="glyphicon glyphicon"></i></a></span>
			</h4>
		</div>

		<div id="collapseDetailContenu-<?=$gestion ?>" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="content-container">
					<div class="row">
						<div class="col-md-12 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="titre">Titre</label></span>
								<span class="form_input"><input type="text" class="form-control"
									id="titre" placeholder=""></span>
							</div>
						</div>


						<div class="col-md-12 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="texte">Contenu</label></span>

								<span class="form_input" style="width: 100% !important"> <textarea
										id="summernote-<?=$gestion ?>" class="form-textarea"
										rows="5"></textarea>
								</span>

							</div>
						</div>

						<div class="col-md-12 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="texte">Plus d'info</label></span>

								<span class="form_input" style="width: 100% !important"> <textarea
										id="summernoteplus-<?=$gestion ?>" class="form-textarea"
										rows="5"></textarea>
								</span>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<script>

</script>