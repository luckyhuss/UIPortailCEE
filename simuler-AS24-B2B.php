<div class="panel-group" id="simulationError">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="text-danger validation-summary-errors" data-valmsg-summary="true">
                <ul>
                    <li>Le No. Action doit être numérique</li>
                    <li>La Référence Externe doit être alphanumérique</li>
                    <li>Le Code Postal doit être numérique</li>
                    <li>La Ville doit être alphanumérique</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'panel-choix-simulation.php'; ?>


<?php include 'operationB2BAS24.php'; ?>


<?php include 'resultat-cumule.php'; ?>

<!--  div class="col-md-5 simulationHistoriques"-->
    <?php //include 'simulationHistoriques.php'; ?>
<!-- /div-->

<div id="button_operation">
    <div class="col-md-12 submit_button_holder">
        <a href="#" data-toggle="modal" data-target="#brouillonModal" class="btn btn-primary submit_button" role="button">Brouillon</a>
        <a href="#" data-toggle="modal" data-target="#CreerDossierModal" class="btn btn-primary submit_button" role="button">Créer Dossier</a>
        <!-- <a href="#" class="btn btn-primary submit_button" id="btn_historique" role="button">Historiques</a> -->
    </div>
</div>

<!-- modal -->
<div class="modal fade in popin-donnee" id="CreerDossierModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
            <h4 class="modal-title" id="CreerDossierLabel">Saisir information beneficiare</h4>
        </div>

        <div class="modal-body">
            <div class="col-md-12 col-xs-12 form-group">
                <span class="form_label"><label for="SirenDossier">Siren</label></span>
                <span class="form_input"><input type="text" class="form-control" id="sirenDossier" placeholder=""></span>
            </div>

            <div class="col-md-12 col-xs-12 form-group">
                <span class="form_label"><label for="RaisonSocialeDossier">Raison sociale</label></span>
                <span class="form_input"><input type="text" class="form-control" id="raisonSocialeDossier" placeholder=""></span>
            </div>

            <div class="col-md-12 col-xs-12 form-group">
                <span class="form_label"><label for="AutreDossier">Autre</label></span>
                <span class="form_input"><input type="text" class="form-control" id="autreDossier" placeholder=""></span>
            </div>

            <div id="saisirDossier" class="modal-msg displayed">
                <span>Votre demande a bien été envoyée au BO. Elle sera etudiée dans les meilleurs delais.</span>
                
                <div class="header-group">
                    <span class="header_label"><label for="saisirDossierRef">Reference</label></span>
                    <span class="header_output"><a><i class="glyphicon glyphicon-download-alt" rel="tooltip" title="Télécharger dossier"></i></a></span>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="modal-btn-ok">OK</button>
        </div>
        </div>
    </div>
</div>

<div class="modal fade in popin-donnee" id="brouillonModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
            <h4 class="modal-title" id="myModalLabel">Nommer</h4>
        </div>

        <div class="modal-body">
            <!-- <div class="col-md-12 col-xs-12 form-group">
                <span class="form_label"><label for="NomBrouillon">Nom</label></span>
                <span class="form_input"><input type="text" class="form-control" id="nomDossier" placeholder=""></span>
            </div> -->

            <!-- <div class="col-sm-6 col-md-12 input_holder"> -->
                <div class="header-group" id="brouillonName">
                    <!-- <span class="header_label"><label for="NomBrouillon">Nom</label></span> -->
                    <span class="header_output"><input type="text" class="form-control" id="nomDossier" placeholder=""></span>
                </div>
            <!-- </div> -->

            <div id="refDossier" class="modal-msg displayed">
                <div class="header-group">
                    <span class="header_label"><label for="Ref">Référence</label></span>
                    <span class="header_output">Indéfini</span>
                    <span class="header_output"><a><i class="disabled-icon glyphicon glyphicon-download-alt" rel="tooltip" title="Télécharger dossier"></i></a></span>
                </div>
            </div>

            <span class="brouillon-error-message text-danger displayed" id="sectionErrorMsg"> Votre brouillon n'a pas pu être sauvegarder.</span>
        </div>

        <div class="modal-footer">
            <!-- <a href="#"><i class="btn btn-default glyphicon glyphicon-ok" data-toggle="" data-target="" data-dismiss="modal"></i></a> -->
            <button type="button" class="btn btn-default" id="modal-btn-ok">ok</button>
        </div>
        </div>
    </div>
</div>

<script>

$( "#brouillonModal .modal-footer #modal-btn-ok" ).click(function() {
    // success
    saveBrouillonSuccess();
    hideButtonOk();

    // fail
    // saveBrouillonFail();
});

function saveBrouillonSuccess(){
    $("#brouillonModal").find('.modal-title').text("Dossier sauvegardé");
    $("#refDossier").css("display", "block");
}

function saveBrouillonFail(){
    $("#sectionErrorMsg").css("display", "block");
    $("#brouillonModal .modal-footer").css("display", "none");
}

function hideButtonOk(){
    $("#brouillonModal .modal-body #brouillonName").css("display", "none");
    $("#brouillonModal .modal-footer").css("display", "none");
}

$("#brouillonModal").on("hidden.bs.modal", function(){
    $("#brouillonModal").find('.modal-title').text("Nommer");
    $("#brouillonModal .modal-body #brouillonName, #brouillonModal .modal-footer").css("display", "block");
    $("#refDossier").css("display", "none");
});

$( "#CreerDossierModal .modal-footer #modal-btn-ok" ).click(function() {
    $("#CreerDossierModal").find('.modal-title').text("Dossier sauvegardé");
    $("#saisirDossier").css("display", "block");
    $("#CreerDossierModal .modal-body .form-group").css("display", "none");
    $("#CreerDossierModal .modal-footer").css("display", "none");
});

$("#CreerDossierModal").on("hidden.bs.modal", function(){
    $("#CreerDossierModal").find('.modal-title').text("Saisir information beneficiare");
    $("#saisirDossier").css("display", "none");
    $("#CreerDossierModal .modal-body .form-group").css("display", "block");
    $("#CreerDossierModal .modal-footer #modal-btn-ok").css("display", "block");
});
</script>