
<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestHabilitation">Gestion Demande Habilitation</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#gestHabilitation"><i class="glyphicon glyphicon-fire"></i></a></span>
			</h4>
		</div>

		<div id="gestHabilitation" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">


					<div class="col-md-12 data_table_holder">
						<table id="listDemandesHabilitation"
							class="table table-striped table-bordered nowrap listDataTable"
							style="width: 100%">
							<thead>
								<tr>
									<th>Nom</th>
									<th>Prénom</th>
									<th>SIREN</th>
									<th>Raison sociale</th>
									<th>PERSONA</th>
									<th>Date de demande</th>
									<th>Droit simulation</th>
									<th>Droit pré-dossier</th>
									<th></th>
								</tr>
							</thead>


							<tbody>
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
					href="#gestEditDemandeHabilitation">Modifier demande habilitation</a></span>
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestEditDemandeHabilitation"><i class="glyphicon glyphicon-fire"></i></a></span>
			</h4>
		</div>

		<div id="gestEditDemandeHabilitation" class="panel-collapse collapse in">
			<div class="panel-body"></div>
		</div>
	</div>
</div>



<script src="assets/js/msconfirm.js"></script>


<div class="msc-confirm displayed">
	<!-- <div class="msc-overlay"></div> -->
	<div class="msc-content msc-confirm--animate">
		<div class="msc-popin-alerte"></div>
		<div class="msc-body">
			<h4 class="msc-utilisateur"></h4>
			<span class="msc-connect-message"></span> <span
				class="msc-etape-message"></span>
		</div>
		<div class="msc-action">
			<button class="msc-ok">OK</button>
			<button class="msc-cancel">Annulé</button>
		</div>
	</div>
</div>



<script>
$(document).ready(function() {
	
	$.fn.DataTable.ext.pager.numbers_length = 4;
	$('#listDemandesHabilitation').DataTable({
		/* "ajax" : {
			TODO : from WS
		},
		"datatype" : 'json',  */
		
		
        data : [
        	<?php for($i=0; $i <7 ; $i++) {?>
    			   {"Nom"     : "test<?=$i?>",
    				"Prénom"  : "Smith",
    				"SIREN"   : "5346232222",
    				"RSociale": "This is a test",
    				"PERSONA" : "Pro",
    				"Date"    : "21/05/18",
    				"Droit1"  : (<?=$i?> % 2 == 1) , 
    				"Droit2"  : (<?=$i?> % 2 == 1) ,
    				"UserId"  : <?=$i?>
			 },
			<?php }?>
		],
		"columnDefs": [
            {

            	// Droit Simulation column
                targets: [ -2, -3],
                className: 'dt-body-center',
                render: function ( data ) {
                    return data ? '<span class="alert alert-success">Oui</span>' : '<span class="alert alert-danger">Non</span>';
                }, 
            },
            {   
                targets: [-1],
                className: 'iconCol col-action-btn',
            }
        ],
        columns:[
			{data : "Nom"},
			{data : "Prénom"},
			{data : "SIREN"},
			{data : "RSociale"},
			{data : "PERSONA"},
			{data : "Date"},
			{data : "Droit1"},
			{data : "Droit2"},
			{
				data : "UserId",
				render: function(data) {
                    return '<span class="icon-holder"><a href="javascript:void(0);" onclick="processDemande(\'valider' + '\',' + data + 
                    	');"><i class="glyphicon glyphicon-ok-circle" title="Valider" ></i></a></span>' +
                        '<span class="icon-holder"><a href="javascript:void(0);" onclick="processDemande(\'edit' + '\',' + data + 
                        ');"><i class="glyphicon glyphicon-edit" title="Editer" ></i></a></span>' +
                        '<span class="icon-holder"><a href="javascript:void(0);" onclick="processDemande(\'supprimer' + '\',' + data + 
                        ');"><i class="glyphicon glyphicon-trash" title="Supprimer"></i></a></span>';
                }
			},
        ],

        "paging": true,
		"destroy": true,
        "pageLength": 15, // affichage des demandes par 15
        "language": {
            "lengthMenu": "Afficher _MENU_ lignes par page",
            "zeroRecords": "Pas de données" ,   
            "info": "page _PAGE_ de _PAGES_",
            "infoEmpty": "Pas de données",
            "infoFiltered": "(filtrés de _MAX_ entrées)",
            "loadingRecords": "<div class='loader'></div>",
            "paginate": {
                "previous": '<i class="glyphicon glyphicon-chevron-left"></i>',
                "next": '<i class="glyphicon glyphicon-chevron-right"></i>'
            }
        },
        drawCallback: function(settings) {
            var api = new $.fn.dataTable.Api(settings);
            var pagination = $(this)
                .closest('.dataTables_wrapper')
                .find('.dataTables_paginate');
            pagination.toggle(api.page.info().pages > 1);
        },
		"dom": '<"top"l>rt<"row"<"col-sm-12"<"bottom"fp><"clear">>>'
		
	});	
	jQuery('.listDataTable').wrap('<div class="dataTables_scroll" />');			
});


function processDemande(process, id) {

	switch(process) {
 	  case 'supprimer':
 		 mscConfirm("", "Etes-vous sur de supprimer cette demande?","Cliquez sur OK pour confirmer la suppression ou sur Annuler.", 
 	            function()	{
 	      		  alert("Demande deleted");
 	      		  // TODO : Appel WS to delete
 	      		},
 	      		function() {
 	      		  // NOTHING to be done
 	      			
 	  			}
 	  	); 
 	    break;
 	  case 'valider':
 	 	  break;
 	  case 'edit':
 	 	  $('#add-edit-panel').removeClass('displayed');
 	 	  $("html,body").animate({scrollTop: $("#gestEditDemandeHabilitation").offset().top}, 1000);
 	 	  break;
 	  default:
 	 	  // NOTHING
	}
}
	

</script>