<div class="panel-group displayed" id="add-edit-panel">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestAddEditPermission">Ajouter/Modifier Permission</a></span>
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#gestAddEditPermission"><i class="glyphicon glyphicon-user"></i></a></span>
			</h4>
		</div>

		<div id="gestAddEditPermission" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="user_area">

					<form id="gestPermission_content" class="form_admin_content" action="#"
						method="POST">
						<div class="text-danger validation-summary-errors"
							data-valmsg-summary="true">
							<ul>
								<li>Text to be defined</li>
							</ul>
						</div>

						<div class="content-container">
							<div class="row">



								<div class="col-md-12 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="nom">Utilisateur</label></span>
										<span class="form_input">John Smith</span>
									</div>
								</div>



								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Filiales">Filiales</label></span>
										<div id="msFiliale" class="form-control"></div>
									</div>
								</div>

								<div class="col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Secteurs">Secteurs</label></span>
										<div id="msSecteur" class="form-control"></div>
									</div>
								</div>


								<div class="col-md-12 submit_button_holder">
									<button type="submit" class="btn btn-primary submit_button"
										name="btn-sauvegarder">Sauvegarder</button>

								</div>


							</div>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>
</div>

<script>
$(function() {
        var msFiliale = $('#msFiliale').magicSuggest({
        	value: [{"id":"367","name":"IND-UT-117"},{"id":"373","name":"IND-UT-116"}],
            data: [{"id":"367","name":"IND-UT-117"},{"id":"373","name":"IND-UT-116"},{"id":"405","name":"IND-UT-113"},{"id":"443","name":"IND-BA-112"},{"id":"445","name":"IND-UT-117"},{"id":"457","name":"IND-UT-115"},{"id":"462","name":"IND-UT-102"},{"id":"464","name":"BAT-TH-112"},{"id":"479","name":"BAT-TH-134"},{"id":"481","name":"BAT-TH-145"},{"id":"499","name":"BAT-EQ-130"}]
        });

        var msOperation = $('#msSecteur').magicSuggest({
            data: ['B2BOper','CommercialOper','ProfessionalOper','B22BOper','Comm2ercialOper','Pro2fessionalOper','B2BOper1','CommercialOper1','ProfessionalOper1','B22BOper1','Comm2ercialOper1','Pro2fessionalOper1']
          });

       

        $(msFiliale).on('selectionchange', function(){
        	  //alert(JSON.stringify(this.getSelection()));
        	});
      });
</script>