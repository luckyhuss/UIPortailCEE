<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
  <h4 class="panel-title">
    <span class="panel_header_element"><a data-toggle="collapse" href="#collapseInfoImportantes">Informations Importantes</a></span>
    <span class="panel_header_element"><a data-toggle="collapse" href="#collapseInfoImportantes"><!-- <i class="glyphicon glyphicon-sort"></i> --></a></span>
  </h4>
</div>

<div id="collapseInfoImportantes" class="panel-collapse collapse in">
<div class="panel-body">

	<!-- Data table Changement Processus -->
	<div class="row">
		<div class="col-md-12 data_table_holder">
            <table id="info_importantes" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
            <tr>
                <th class="col-changement">Processus</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="javascript:void(0)" data-toggle="modal" data-target="#infoImportanteModal">Validité de convention</a></td>
            </tr>
            <!-- <tr>
                <td><a href="#" data-toggle="modal" data-target="#Modal1">Processus 2</a></td>
            </tr>
            <tr>
                <td><a href="#" data-toggle="modal" data-target="#Modal1">Processus 3</a></td>
            </tr> -->
            </tbody>
            </table>
		</div>
    </div>
    <!-- End datatable Changement Processus -->

	<!-- Data table Changement Fiche -->
	<div class="row">
		<div class="col-md-12 data_table_holder">
        <table id="changement_fiche" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
            <tr>
                <th class="col-changement">Fiche</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="javascript:void(0)" data-toggle="modal" data-target="#infoImportanteModal">Fiche 1</a></td>
            </tr>
            <!-- <tr>
                <td><a href="#" data-toggle="modal" data-target="#Modal1">Fiche 1</a></td>
            </tr>
            <tr>
                <td><a href="#" data-toggle="modal" data-target="#Modal1">Fiche 1</a></td>
            </tr> -->
            </tbody>
            </table>
		</div>
    </div>
    <!-- End datatable Changement Fiche-->

	<!-- Datatable Changement Partenariat -->
	<div class="row">
		<div class="col-md-12 data_table_holder">
            <table id="changement_partenariat" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                <tr>
                    <th class="col-changement">Partenariat</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="javascript:void(0)" data-toggle="modal" data-target="#infoImportanteModal">Partenariat 1</a></td>
                </tr>
                <!-- <tr>
                    <td><a href="#" data-toggle="modal" data-target="#Modal1">Partenariat 2</a></td>
                </tr>
                <tr>
                    <td><a href="#" data-toggle="modal" data-target="#Modal1">Partenariat 3</a></td>
                </tr> -->
                </tbody>
            </table>
		</div>
    </div>
    <!-- End datatable Changement Partenariat-->
    
    <div class="row">
		<div class="col-md-12 data_table_holder">
            <table id="information_autres" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                <tr>
                    <th class="col-changement">Autres</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="javascript:void(0)" data-toggle="modal" data-target="#infoImportanteModal">Autre 1</a></td>
                </tr>
                <!-- <tr>
                    <td><a href="#" data-toggle="modal" data-target="#Modal1">Partenariat 2</a></td>
                </tr>
                <tr>
                    <td><a href="#" data-toggle="modal" data-target="#Modal1">Partenariat 3</a></td>
                </tr> -->
                </tbody>
            </table>
		</div>
    </div>
</div>
</div>

</div>
</div>


<!-- Modal  -->
<div class="modal fade in popin-donnee" id="infoImportanteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog liste_critere" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-default" data-dismiss="modal">x</button>
                <h4 class="modal-title" id="myModalLabel">Signature électronique – modification du mail via UNIVERSIGN</h4>
            </div>
    
            <div class="modal-body">
                <span>Désormais, lors de l’envoi de l’attestation sur l’honneur via UNIVERSIGN, l’objet mentionnera le nom et le logo de la filiale. </span>
                <div id= "#infoImportanteCorpsPlus" class="modal-plus displayed">
                    <span>Détail plus</span>
                </div>
            </div>
    
            <div class="modal-footer">
                <button type="button" class="btn submit_button btn-circle btn-default btn-lg add" title=""><i class="glyphicon glyphicon-plus"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- Modal  -->

<script>
    $('button.add').on('click', function(){
        $("#infoImportanteCorpsPlus").toggleClass("displayed");
        $(this).find('i').toggleClass('glyphicon glyphicon-plus glyphicon glyphicon-minus');
    });

</script>