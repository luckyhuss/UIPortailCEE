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
            <div class="input_holder">
                    <span class="form_input"><input type="text" class="form-control searchTerm" id="searchSim" placeholder="Search"></span>
                    <button type="submit" class="searchButton"><i class="glyphicon glyphicon-search"></i></button>
            </div>

            <span class="header_label"><label for="simEnregistree">Dernières simulations enregistrée </label></span>
                <div class="row">
                    <div class="col-md-12 data_table_holder">
                        <table id="simulationEnregistree" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Ref</th>
                            <th>Fiche</th>
                            <th>Client</th>
                            <th>kWhc</th>
                            <th>€</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>4543451</td>
                            <td>14854</td>
                            <td>Fiche 1</td>
                            <td>Client 1</td>
                            <td class="numcol">645</td>
                            <td class="numcol">545</td>
                            <td class="iconCol"><a href="javascript:void(0)" onclick="displayDetailSimulation();"><i class="glyphicon glyphicon-eye-open"
                                                        data-toggle="collapse" data-target="#collapseDetailSimulation"></i></a></td>
                        </tr>
                        <tr>
                            <td>4543452</td>
                            <td>14854</td>
                            <td>Fiche 2</td>
                            <td>Client 2</td>
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

<div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="panel_header_element"><a data-toggle="collapse" href="#collapseResultatRecherche">Resultat</a></span>
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
                <th>Ref</th>
                <th>Fiche</th>
                <th>Client</th>
                <th>kWhc</th>
                <th>€</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>4543451</td>
                <td>14854</td>
                <td>Fiche 1</td>
                <td>Client 1</td>
                <td class="numcol">645</td>
                <td class="numcol">545</td>
                <td class="iconCol"><a href="javascript:void(0)" onclick="displayDetailSimulation();"><i class="glyphicon glyphicon-eye-open"
											data-toggle="collapse" data-target="#collapseDetailSimulation"></i></a></td>
            </tr>
            <tr>
                <td>4543452</td>
                <td>14854</td>
                <td>Fiche 2</td>
                <td>Client 2</td>
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

        <div id="collapseDetailSimulation" class="panel-collapse collapse in">
            <div class="panel-body">
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                
                <div class="col-md-12 submit_button_holder">
                    <a href="#" data-toggle="modal" data-target="#Modal2" class="btn btn-primary submit_button" role="button">Reprendre</a>
                    <a href="#" data-toggle="modal" data-target="#supprimerSimModal" class="btn btn-primary submit_button" role="button">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-2 submit_button_holder btn-retour">
    <a class="btn btn-primary submit_button">Retour</a>
</div>
<!-- <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <span class="panel_header_element"><a data-toggle="collapse" href="#collapseDetailSim">Detail Simulation</a></span>
            </h4>
        </div>

        <div id="collapseDetailSim">
        <div class="panel-body">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        
            <div class="col-md-12 submit_button_holder">
                <button type="submit" class="btn btn-primary submit_button">Reprendre</button>
                <button type="submit" class="btn btn-primary submit_button">Supprimer</button>
            </div>
        </div>
        </div>

    </div>
</div> -->

<!-- modal detail simulation -->
<!-- <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
            <h4 class="modal-title" id="myModalLabel">Demande</h4>
        </div>

        <div class="modal-body">
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Reprendre</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Supprimer</button>
        </div>
        </div>
    </div>
</div> -->

<!-- modal surrpimer simulation -->
<div class="modal fade popin-donnee" id="supprimerSimModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
            <h4 class="modal-title" id="supprimerSim">Supprimer cette simulation</h4>
        </div>

        <div class="modal-body">
            <span id="modal_body">Dossier perdu contre: 
                prix:
            </span>

            <div id="supprimerSimModalMsg" class="modal-msg displayed">
                <span>Supprimer</span>
            </div>
        </div>

        <div class="modal-footer">
            <span><button type="button" class="btn btn-default" id="modal-btn-non">non</button></span>
            <span><button type="button" class="btn btn-default" id="modal-btn-oui">oui</button></span>
        </div>
        </div>
    </div>
</div>

<script>
function displayDetailSimulation() {
    document.getElementById("detailSimulation").style.display = "block";
    $("html,body").animate({scrollTop: $("#collapseDetailSimulation").offset().top}, 2000);
}

$(document).ready(function() {
	$('#simulationEnregistree, #resultatRechercheSim')
		.DataTable();

$( "#supprimerSimModal .modal-footer #modal-btn-oui" ).click(function() {
    $("#supprimerSimModalMsg").css("display", "block");
    $("#supprimerSimModal #modal_body, #supprimerSimModal .modal-footer").css("display", "none");
});

$( "#supprimerSimModal .modal-footer #modal-btn-non" ).click(function() {
    $('#supprimerSimModal').modal('hide'); 
});

$("#supprimerSimModal").on("hidden.bs.modal", function(){
    $("#supprimerSimModal #modal_body, #supprimerSimModal .modal-footer").css("display", "block");
    $("#supprimerSimModalMsg").css("display", "none");
});

});
</script>