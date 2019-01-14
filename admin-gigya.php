
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
									<th>Email</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								<?php
        for ($n = 0; $n <= 50; $n ++) {
            ?>
                            
                            	<tr>
									<td>jjohnasdasd<?=$n?>@testasdsa.com</td>
									<td class="iconCol col-action-btn"><span class="icon-holder"><a
											href="javascript:void(0)" onclick="displayDetailUser();"><i
												class="glyphicon glyphicon-edit" data-toggle="collapse"
												data-target="#collapseDetailUser"></i></a></span><span
										class="icon-holder"> <a href="javascript:void(0)"
											onclick="deleteUser('jjohnasdasd<?=$n?>@testasdsa.com');"><i
												class="glyphicon glyphicon-trash"></i></a></span></td>
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


					<div class="content-container">
						<div class="row">
							<div class="screensetContainer" id="screensetContainer"></div>
						</div>
					</div>
					<script type="text/javascript">
    window.__gigyaConf = { enableSSOToken: true };
</script>
					<script>
    var customLangParamsGigya = {
        "GIGYA_LOGIN_SCREEN_CAPTION": 'Portail CEE',
        "HEADER_131443300282291300_LABEL": "Connectez-vous au portail CEE"
    };

    $(document).ready(function () {
        gigya.socialize.addEventHandlers({
            callback: function (res) {
                //alert('callback');
                console.log(res);
            }
        });

        gigya.accounts.showScreenSet({
            screenSet: 'CEE-Custom-RegistrationLogin',
            startScreen: 'gigya-register-screen',
            customLang: customLangParamsGigya,
            containerID: 'screensetContainer',
            lang: 'fr',
            //onAfterScreenLoad: function () {
            //    //checkGigyaSession();
            //}
            onAfterSubmit: function (data) {
                console.log(data);
            }                                         

        });
    });

</script>
				
					<script type="text/javascript" src="https://cdns.gigya.com/js/gigya.js?apiKey=3_uqyrM6IxD2UABJ48ldLyTKDuY3MxBl53jez4riy1nWRi2FHYav0tt9_Chiohe3OJ"></script>
				
					<script>
        var customLangParamsGigya = {
            "GIGYA_LOGIN_SCREEN_CAPTION": 'Portail CEE',
            "HEADER_131443300282291300_LABEL": "Connectez-vous au portail CEE"
        };

        $(document).ready(function () {
            gigya.accounts.showScreenSet({
                screenSet: 'CEE-Custom-RegistrationLogin',
                startScreen: 'gigya-register-screen',
                customLang: customLangParamsGigya,
                containerID: 'screensetContainer',
                lang: 'fr'
            });
        });

    </script>
			



				</div>


			</div>
		</div>
	</div>
</div>


<script src="assets/js/msconfirm.js"></script>
<script>


function displayDetailUser(id) {
	$("#add-edit-panel").removeClass("displayed");
	$("html,body").animate({scrollTop: $("#gestAddEditUtilisateur").offset().top}, 2000);
}


function deleteUser(email) {
	$("#add-edit-panel").addClass("displayed");
	mscConfirm(email, " sera supprimé définitivement de Gigya ","Cliquez sur OK pour confirmer la suppression ou sur Annuler.", 
            function()	{
      		  alert("User deleted");
      		},
      		function() {
      		  alert('Cancelled');
      			
  			}
  	); 

	
}

</script>

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