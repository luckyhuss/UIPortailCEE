<div class="col-md-7 operation">
    <?php include 'operationB2BAS24.php'; ?>
</div>

<div class="col-md-5 simulationHistoriques">
    <?php include 'simulationHistoriques.php'; ?>
</div>

<div id="button_operation">
    <div class="col-md-12 submit_button_holder">
        <a href="#" data-toggle="modal" data-target="#brouillonModal" class="btn btn-primary submit_button" role="button">Brouillon</a>
        <a href="#" data-toggle="modal" data-target="#CreerDossierModal" class="btn btn-primary submit_button" role="button">Creer Dossier</a>
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
            <div class="col-md-12 col-xs-12 form-group">
                <span class="form_label"><label for="NomBrouillon">Nom</label></span>
                <span class="form_input"><input type="text" class="form-control" id="nomDossier" placeholder=""></span>
            </div>

            <div id="refDossier" class="modal-msg displayed">
                <div class="header-group">
                    <span class="header_label"><label for="Ref">Ref</label></span>
                    <span class="header_output">Indéfini</span>
                    <span class="header_output"><a><i class="glyphicon glyphicon-download-alt" rel="tooltip" title="Télécharger dossier"></i></a></span>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <!-- <a href="#"><i class="btn btn-default glyphicon glyphicon-ok" data-toggle="" data-target="" data-dismiss="modal"></i></a> -->
            <button type="button" class="btn btn-default" id="modal-btn-ok">OK</button>
        </div>
        </div>
    </div>
</div>


<!-- <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
            <h4 class="modal-title" id="myModalLabel">Dossier Sauvegardé</h4>
        </div>

        <div class="modal-body">
            <span>Ref: <a href="http://kmmc.in/wp-content/uploads/2014/01/lesson2.pdf" download="processus_2" target="_blank">31252</a></span>
        </div>

        <div class="modal-footer">
            <a href="http://kmmc.in/wp-content/uploads/2014/01/lesson2.pdf" download="processus_2" target="_blank">
          <button type="button" class="btn"><i class="glyphicon glyphicon-download-alt"></i></button>
        </a>
        </div>
        </div>
    </div>
</div> -->

<script>
    $('#first').click(function() {
    $('#Modal1').html('your content');
});

$( "#brouillonModal .modal-footer #modal-btn-ok" ).click(function() {
    $("#brouillonModal").find('.modal-title').text("Dossier sauvegardé");
    $("#refDossier").css("display", "block");
    $("#brouillonModal .modal-body .form-group").css("display", "none");
    $("#brouillonModal .modal-footer").css("display", "none");
});

$("#brouillonModal").on("hidden.bs.modal", function(){
    $("#brouillonModal").find('.modal-title').text("Nommer");
    $("#refDossier").css("display", "none");
    $("#brouillonModal .modal-body .form-group").css("display", "block");
    $("#brouillonModal .modal-footer #modal-btn-ok").css("display", "block");
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