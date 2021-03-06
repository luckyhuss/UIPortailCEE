<div class="panel-group">
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
            <form id="formSearchBar" class="form_search_bar form-inline" action="#" method="POST">
        <div class="row">
            <div class="col-md-6 input_holder">
                <div class="form-group">
                <span class="form_label"><label for="RaisonSociale">Raison Sociale</label></span>
                <span class="form_input"><input type="text" class="form-control" id="raisonSociale" placeholder=""></span>
                </div>
            </div>

            <div class="col-md-6 input_holder">
                <div class="form-group">
                <span class="form_label"><label for="Siren">Siren</label></span>
                <span class="form_input"><input type="number" class="form-control" id="Siren" placeholder=""></span>
                </div>
            </div>

            <div class="col-md-12 input_holder">
                <div class="form-group">
                <span class="form_label"><label for="Groupe">Groupe</label></span>
                <span class="form_input"><input type="checkbox" id="groupe" placeholder=""></span>
                </div>
            </div>

            <div class="col-md-6 input_holder">
                <div class="form-group">
                <span class="form_label"><label for="NumeroDossier">Numero dossier</label></span>
                <span class="form_input"><input type="text" class="form-control" id="numeroDossier" placeholder=""></span>
                </div>
            </div>

            <div class="col-md-6 input_holder">
                <div class="form-group">
                <span class="form_label"><label for="NumeroAction">Numero action</label></span>
                <span class="form_input"><input type="number" class="form-control" id="numeroAction" placeholder=""></span>
                </div>
            </div>

            <div class="col-md-12 submit_button_holder">
                <button type="submit" class="btn btn-primary submit_button">Rechercher</button>
            </div>

        </div>
    </form>

			</div>
		</div>

	</div>
</div>

<?php include 'search-area-dossier-commercial.php'; ?>

<?php include 'resultatRechercherDossier.php'; ?>

<script>
function displayDetailDossier() {
    document.getElementById("detailDossier").style.display = "block";
}
</script>
