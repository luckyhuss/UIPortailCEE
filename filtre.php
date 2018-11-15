<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseFiltre">Filtre</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseFiltre"><i class="glyphicon glyphicon-filter"></i></a></span>
			</h4>
		</div>

		<div id="collapseFiltre" class="panel-collapse collapse in">
			<div class="panel-body">
<!-- 				<ul class="filter-container"> -->
<!-- 					<li class="filter-item float-item"> -->
<!-- 						<div class="form-group filtre-option-filiales"> -->
<!-- 							<span class="form_label"><label for="filiales">Filiales</label></span> -->
<!-- 							<div id="msFiliale" class="form-control"></div> -->
<!-- 						</div> -->
<!-- 					</li> -->
<!-- 					<li class="filter-item float-item"> -->
<!-- 						<div class="form-group filtre-option-operations"> -->
<!-- 							<span class="form_label"><label for="Operations">Operations</label></span> -->
<!-- 							<div id="msOperation" class="form-control"></div> -->
<!-- 						</div> -->
<!-- 					</li> -->
<!-- 					<li class="filter-item float-item"> -->
<!-- 						<div class="form-group filtre-option-beneficiaire"> -->
<!-- 							<span class="form_label"><label for="Beneficiaire">Bénéficiaires -->
<!-- 									B2B</label></span> -->
<!-- 							<div id="msBeneficiaire" class="form-control"></div> -->
<!-- 						</div> -->
<!-- 					</li> -->
<!-- 				</ul> -->
				
				<div class="search_area">

					<form id="formSearchBar" class="form_search_bar form-inline"
						action="#" method="POST">
						<div class="text-danger validation-summary-errors"
							data-valmsg-summary="true">
							<ul>
								<li>Choisir au moins un filtre</li>
							</ul>
						</div>
						<div class="row each-row">
							<div class="col-md-6 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="Filiales">Filiales</label></span> 
									<div id="msFiliale" class="form-control" ></div>
								</div>
							</div>

							<div class="col-md-6 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="Operations">Opérations</label></span>
									<div id="msOperation" class="form-control" ></div>
								</div>
                            </div>
                        </div>    
						<div class="row each-row">
							<div class="col-md-6 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="Beneficiaires">Bénéficiaires</label></span> 
											<div id="msBeneficiaire" class="form-control" ></div>
								</div>
							</div>



<!-- <div class="col-md-6 graph_swap">
        <div class="form-group">
            <span class="form_label"><label for="SirenB2B">Change Graph</label></span>
            <span class="form_input">
            <select class="form-control select-chart">
                    <option value="1">En Cours</option>
                    <option value="2">Deposés</option>
                    <option value="4">Payé</option>
                </select>
            </span>
        </div>
    </div> -->


							<div class="col-md-12 submit_button_holder">
								<button type="submit" class="btn btn-primary submit_button">Rechercher</button>
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
          data: ['B2B','Commercial','Professional','B22B','Comm2ercial','Pro2fessional']
        });

        var msOperation = $('#msOperation').magicSuggest({
            data: ['B2BOper','CommercialOper','ProfessionalOper','B22BOper','Comm2ercialOper','Pro2fessionalOper','B2BOper1','CommercialOper1','ProfessionalOper1','B22BOper1','Comm2ercialOper1','Pro2fessionalOper1']
          });

        var msBeneficiaire = $('#msBeneficiaire').magicSuggest({
            data: ['B2BOper','CommercialOper','ProfessionalOper','B22BOper','Comm2ercialOper','Pro2fessionalOper']
          });

        $(msFiliale).on('selectionchange', function(){
        	  //alert(JSON.stringify(this.getSelection()));
        	});
      });
</script>
