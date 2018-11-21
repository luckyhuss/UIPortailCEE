<!-- <div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseSearchTypeDossier">Rechercher</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseSearchTypeDossier"><i
						class="glyphicon glyphicon-search"></i></a></span>
			</h4>
		</div>

		<div id="collapseSearchTypeDossier" class="panel-collapse collapse in">
			<div class="panel-body">

				<ul class="type-dossier-container">
					<li class="filter-item float-item">
						<div class="form-group">
							<span class="form_label"><label for="Dossier">Dossier</label></span>
							<span class="form_input"><input type="radio" name="type-dossier-rad"></span>
						</div>
					</li>
					<li class="filter-item float-item">
						<div class="form-group">
							<span class="form_label"><label for="Action">Action</label></span>
							<span class="form_input"><input type="radio" name="type-dossier-rad"></span>
						</div>
					</li>
					
				</ul>

			</div>
		</div>

	</div>
</div>
 -->


<?php include 'search-area-dossier-commercial.php'; ?>

<?php include 'resultatRechercherDossier.php'; ?>

<script>
function displayDetailDossier() {
    document.getElementById("detailDossier").style.display = "block";
}
</script>
