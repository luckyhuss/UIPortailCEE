<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="panel_header_element"><a data-toggle="collapse" href="#collapseHistoSim">Historiques simulations</a></span>
                <!-- <span class="panel_header_element"><a data-toggle="collapse" href="#collapseInfoImportantes"><i class="glyphicon glyphicon-info-sign"></i></a></span> -->
            </h4>
        </div>

<div id="collapseHistoSim" class="panel-collapse collapse in">
        <div class="panel-body">
            <!-- <div class="input_holder">
                <span class="col-xs-10 col-sm-8 col-md-6  form_input"><input type="text" class="form-control searchTerm" id="searchSim" placeholder="Rechercher par le nom ou la date du brouillon"></span>
                <span class="submit_button_holder"><button type="submit" class="btn btn-primary submit_button" name="btn-search"><i class="glyphicon glyphicon-search"></i></button></span>
            </div> -->


        <form id="formSearchBrouillon" class="form_search_bar form-inline" action="#" method="POST">
            <div class="row">
                <div class="col-md-6 input_holder">
                    <div class="header-group">
                    <span class="form_label"><label for="NomDuBrouillon">Nom du brouillon</label></span>
                    <span class="header_output"><input type="text" class="form-control" id="nomDuBrouillon" placeholder=""></span>
                    </div>
                </div>

                <div class="col-md-6 input_holder">
                    <div class="header-group">
                    <span class="form_label"><label for="DateDuBrouillon">Date du brouillon</label></span>
                    <!-- <span class="form_input"><input type="text" class="form-control" id="dateDuBrouillon" placeholder=""></span> -->
                    <span class="header_output">
                        <input class="form-control" data-date-format="dd-mm-yyyy" placeholder="Choisissez une date" id="dateDuBrouillon" name="DateSimulation">
                    </span>
                </div>

                </div>

                <div class="col-md-12 submit_button_holder">
                    <button type="submit" class="btn btn-primary submit_button">Rechercher</button>
                </div>

            </div>
        </form>

            <span class="header_label"><label for="simEnregistree">Dernières simulations enregistrée </label></span>
                <div class="row">
                    <div class="col-md-12 data_table_holder">
                        <table id="simulationEnregistree" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Référence</th>
                            <th>Date création</th>
                            <th>MWhc</th>
                            <th>€</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4543451</td>
                            <td>14854</td>
                            <td>2018/02/05</td>
                            <td class="numcol">645</td>
                            <td class="numcol">545</td>
                            <td class="iconCol"><a href="javascript:void(0)" onclick="displayDetailSimulation();"><i class="glyphicon glyphicon-eye-open"
                                                        data-toggle="collapse" data-target="#collapseDetailSimulation"></i></a></td>
                        </tr>
                        <tr>
                            <td>4543452</td>
                            <td>14854</td>
                            <td>2018/02/05</td>
                            <td class="numcol">645</td>
                            <td class="numcol">545</td>
                            <td class="iconCol"><a href="javascript:void(0)" onclick="displayDetailSimulation();"><i class="glyphicon glyphicon-eye-open"
                                                        data-toggle="collapse" data-target="#collapseDetailSimulation"></i></a></td>
                        </tr>
                        </tbody>
                        </table>

                        <div class="col-md-12 submit_button_holder">
                            <button type="submit" class="btn btn-primary submit_button" id="voirPlusButton">Voir plus</button>
                        </div> 
                    </div>
                </div>
        </div>
</div>
    </div>
</div>

<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="panel_header_element"><a data-toggle="collapse" href="#collapseResultatRecherche">Résultat</a></span>
            </h4>
        </div>

        <div id="collapseResultatRecherche" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="row">
		    <div class="col-md-12 data_table_holder">
            <table id="resultatRechercheSim" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Référence</th>
                <th>Date création</th>
                <th>MWhc</th>
                <th>€</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>4543451</td>
                <td>14854</td>
                <td>2018/02/05</td>
                <td class="numcol">645</td>
                <td class="numcol">545</td>
                <td class="iconCol"><a href="javascript:void(0)" onclick="displayDetailSimulation();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseDetailSimulation"></i></a></td>
            </tr>
            <tr>
                <td>4543452</td>
                <td>14854</td>
                <td>2018/02/05</td>
                <td class="numcol">645</td>
                <td class="numcol">545</td>
                <td class="iconCol"><a href="javascript:void(0)" onclick="displayDetailSimulation();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseDetailSimulation"></i></a></td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="panel-group displayed" id="detailSimulation">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="panel_header_element"><a data-toggle="collapse" href="#collapseDetailSimulation">Détail</a></span>
            </h4>
        </div>

        <div id="collapseDetailSimulation" class="panel-collapse collapse">
            <div class="panel-body">
                <!-- <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> -->
                
                    <div class="header-group">
						<span class="header_label"><label for="raisonSociale">Nom du brouillon</label></span>
                        <span class="header_output">Brouillon 1</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="Siren">Référence</label></span>
						<span class="header_output">394629125</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="Filiale">Date de création</label></span>
						<span class="header_output">2018/03/06</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="Tel">Nombre d'opération</label></span>
						<span class="header_output">11</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="Couriel">Secteur</label></span>
						<span class="header_output">test</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="Adresse">Type</label></span>
						<span class="header_output">test</span>
					</div>


                <div class="col-md-12 submit_button_holder">
                    <a href="#" class="btn btn-primary submit_button" role="button">Reprendre</a>
                    <a href="#" data-toggle="modal" data-target="#supprimerSimModal" id="btn_supprimer" class="btn btn-primary submit_button" role="button">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-2 submit_button_holder btn-retour">
    <a class="btn btn-primary submit_button">Retour</a>
</div>


<!-- modal surrpimer simulation -->
<div class="modal fade popin-donnee" id="supprimerSimModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
            <h4 class="modal-title" id="supprimerSim">Supprimer cette simulation</h4>
        </div>

        <div class="modal-body">
            <span id="modal_body">
                <!-- <div class="header-group">
						<span class="header_label"><label for="DossierPerdu">Dossier perdu contre</label></span>
						<span class="header_output">Indefini</span>
					</div>

					<div class="header-group">
						<span class="header_label"><label for="Adresse">Type</label></span>
						<span class="header_output">Indefini</span>
                    </div>  -->
                    
                    <div class="col-sm-3 col-md-3 input_holder">
                        <div class="form-group">
                            <span class="form_input"><input type="radio" name="optDosPerdu"
                                value="dosPerdu"></span> <span class="form_label"><label
                                for="dosPerdu">Dossier perdu</label></span>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3 input_holder">
                        <div class="form-group">
                            <span class="form_input"><input type="radio" name="optDosAban"
                                value="dosAbandonne"></span> <span class="form_label"><label
                                for="dosAbandonne">Dossier abandonné</label></span>
                        </div>
                    </div>
            </span>

            <div id="supprimerSimModalMsg" class="modal-msg displayed">
                <span>Supprimer</span>
            </div>
        </div>

        <div class="modal-footer">
            <!-- <span><button type="button" class="btn btn-default" id="modal-btn-non">non</button></span> -->
            <span><button type="button" class="btn btn-default" id="modal-btn-oui">ok</button></span>
        </div>
        </div>
    </div>
</div>

<script>

    $('#dateDuBrouillon').datepicker({
        language: 'fr'
});

function displayDetailSimulation() {
    document.getElementById("detailSimulation").style.display = "block";
    // $("html,body").animate({scrollTop: $("#collapseDetailSimulation").offset().top}, 2000);
}

$(document).ready(function() {
	$('#simulationEnregistree, #resultatRechercheSim')
		.DataTable();

$( "#supprimerSimModal .modal-footer #modal-btn-oui" ).click(function() {
    $("#supprimerSimModalMsg").css("display", "block");
    $("#supprimerSimModal #modal_body, #supprimerSimModal .modal-footer").css("display", "none");
});

// $( "#supprimerSimModal .modal-footer #modal-btn-non" ).click(function() {
//     $('#supprimerSimModal').modal('hide'); 
// });

$("#supprimerSimModal").on("hidden.bs.modal", function(){
    $("#supprimerSimModal #modal_body, #supprimerSimModal .modal-footer").css("display", "block");
    $("#supprimerSimModalMsg").css("display", "none");
});

});
</script>