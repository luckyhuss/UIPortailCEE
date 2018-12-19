<div class="tbodyClone">
	<div class="panel-group clonedOP" id="clonedOP1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<span class="panel_header_element"><a data-toggle="collapse"
						href="#CollapseOperation">Opération &#x2116; <span id="numId_OP0"
							class="numId">1</span></a></span>
					<button id="btnDel_0" name="btnDel_0" type="button"
						class="remove btn btn-circle btn-danger">
						<i class="glyphicon glyphicon-minus"></i>
					</button>

					<!-- <span class="panel_header_element"><a data-toggle="collapse" href="#resultatMesDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span> -->
				</h4>
			</div>

			<div id="CollapseOperation" class="panel-collapse collapse in">
				<div class="panel-body">


					<div class="choisirOperationContainer">
						<fieldset class="fieldset-margin-bottom choisirOperationPanel">
							<legend>Opération</legend>
							<div class="fieldset-container">
								<div class="header-group">
									<span class="form_label"><label for="Critere">Opération</label></span>
									<span class="header_output"><select id="selectOperation_OP0"
										name="selectOperation_OP0" class="form-control">
											<option value="0"></option>
											<option value="1">#1 - Operation 1</option>
											<option value="2">#2 - Operation 2</option>
											<option value="3">#3 - Operation 3</option>
											<option value="4">#4 - Operation 4</option>
											<option value="5">#5 - Operation 5</option>
									</select></span>
								</div>
							</div>
						</fieldset>
					</div>


					<div class="col-md-12 choisirCritereContainer displayed"
						id="sectionCritere_OP0">
						<fieldset class="fieldset-margin-bottom critereAsaisirPanel">
							<legend>Critères</legend>


							<div class="critere">

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere1">Critère 1</label></span>
										<span class="header_output"><input type="text"
											class="form-control" id="critere1" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere2">Critère 2</label></span>
										<span class="header_output"><input type="text"
											class="form-control" id="critere2" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere3">Critère 3</label></span>
										<span class="header_output"> <select id="critere3"
											name="critere3" class="form-control">
												<option value="1">H1</option>
												<option value="2">H2</option>
												<option value="3">H3</option>
										</select>
										</span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere4">Critère 4</label></span>
										<span class="header_output"> <select id="critere4"
											name="critere4" class="form-control">
												<option value="1">H1</option>
												<option value="2">H2</option>
												<option value="3">H3</option>
										</select>
										</span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Critere5">Critère 5</label></span>
										<span class="header_output"><input type="checkbox"
											id="Critere5" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Critere6">Critère 6</label></span>
										<span class="header_output"><input type="checkbox"
											id="Critere6" placeholder=""></span>
									</div>
								</div>

							</div>

						</fieldset>
					</div>

					<div class="col-md-12 panel-date displayed">

						<fieldset class="fieldset-margin-bottom dateEstimeeCommande">
							<legend>Date estimée commande</legend>

							<div class="date">
								<div class="input_holder">
									<input id="date_op0" name="date_op0"
										class="form-control datepicker" placeholder="mm/dd/yyyy" /> <span
										class="calendar_button"><i
										class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</fieldset>

						<div class="panel-group RemunerationRefEstiméePanel">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="stat__data col-md-8">
										<span class="header_label"><label for="RemunerationRefEstimée">Rémunération
												référence/estimée</label></span>
										<p class="header_output">10 €/MWh</p>
									</div>
									<div class="stat_icon_wrapper col-md-4">
										<i class="glyphicon glyphicon-stats"></i>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-12 panel-group resultatOperationPanel">
						<!-- <div class="panel panel-default">
							<div class="panel-body">
								<div class="resultatOperation">

									<span class="header_label"><label for="ResultatOperation">Résultat
											pour l'opération</label></span>


									<div class="header-group">
										<span class="header_label"><label for="ResultatOperationCL">Classique</label></span>
										<span class="header_output">10 kWhc</span> <span
											class="header_output">600 €</span>
									</div>

									<div class="header-group">
										<span class="header_label"><label for="ResultatOperationPR">Précarité</label></span>
										<span class="header_output">10 kWhc</span> <span
											class="header_output">600 €</span>
									</div>

								</div>
							</div>
						</div> -->

						<!-- <fieldset class="fieldset-margin-bottom" id="resultatOpe">
							<legend>Résultat</legend>
							<div class="fieldset-container">
								<div class="resultatOperation">
									<div class="header-group">
										<span class="header_label"><label for="ResultatOperationCL">Classique</label></span>
										<span class="header_output">10 kWhc</span> <span
											class="header_output">600 €</span>
									</div>

									<div class="header-group">
										<span class="header_label"><label for="ResultatOperationPR">Précarité</label></span>
										<span class="header_output">10 kWhc</span> <span
											class="header_output">600 €</span>
									</div>

								</div>
							</div>
						</fieldset> -->

			<fieldset class="fieldset-margin-bottom choisirIndicePanel">
				<legend>Résultat</legend>

				<div class="fieldset-container">
					<div class="header-group col-md-12" id="sectionRepartitionIndice">

						<div class="repartition-section">
							<span class="repartition-section-header">Calcul CUMAC</span>

							<div class="col-sm-6 col-md-6 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="resultatCumulePanel">Classique</label></span>
									<span class="header_output" id="resultatCumuleCL_cumac">10 kWhc</span>
								</div>
							</div>

							<div class="col-sm-6 col-md-6 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatCumulerPR">Précarité</label></span>
									<span class="header_output" id="resultatCumulePR_cumac">10 kWhc</span>
								</div>
							</div>

						</div>

						<div class="repartition-section col-md-6">
							<span class="repartition-section-header">Calcul AIDE Beneficiare</span>
							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatBenHP_aide">Hors précarité</label></span>
									<span class="header_output" id="resultatBenHP_aide">10 kWhc</span>
								</div>
							</div>

							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatBenP_aide">Précarité</label></span>
									<span class="header_output" id="resultatBenP_aide">10 kWhc</span>
								</div>
							</div>
						</div>

						<div class="repartition-section col-md-6">
							<span class="repartition-section-header">Calcul AIDE Pro</span>

							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatProHP_aide"> Hors précarité</label></span>
									<span class="header_output" id="resultatProHP_aide">10 kWhc</span>
								</div>
							</div>

							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatProP_aide"> Précarité</label></span>
									<span class="header_output" id="resultatProP_aide">10 kWhc</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</fieldset>

					</div>

					<!-- to cross check -->


				</div>
			</div>

			<div class="col-xs-12 col-md-12 ajouter_operation ">
				<button type="button" id="btnAdd_0"
					class="clone btn submit_button btn-circle btn-lg add"
					title="Ajouter operation">
					<i class="glyphicon glyphicon-plus"></i>
				</button>
				<button type="button" id="btnAdd_0"
					class="clone btn submit_button btn_operation"
					title="Ajouter operation">Ajouter une opération</button>

				<!-- <button id="btnAdd_0" name="btnAdd_0" type="button" class="clone btn btn-success"><i class="fa fa-plus-circle">+</i></button> -->
			</div>



		</div>
	</div>

</div>


<!-- button ajouter -->

<div class="col-md-12 submit_button_holder simuler_btn_holder">
	<a href="javascript:void(0)"  id="calculateCumac"  class="btn btn-primary submit_button" role="button">Calculer</a>
</div>




<script>
//.find("input, input[type='checkbox']")
//=======
    var regex = /^(.+?)(\d+)$/i;
    var cloneIndex = $(".clonedOP").length;
    if ($(".clonedOP").length == 1) {
        $('.remove').hide();
    } else {
        $('.remove').show();
    }

    
    function clone() {
     	//console.log('cloneIndex ' + cloneIndex + ', numOP at Clone : ' + numOperation() );

        $(this).parents(".clonedOP").clone(true, true)
            .appendTo(".tbodyClone")
            .attr("id", "clonedOP" + ( cloneIndex + 1 ))
            //.attr("name", "clonedOP" + ( cloneIndex + 1 ))
            .find("*")
            .each(function () {
				//$(this).val('');
				//$(this).prop("checked", false);
                var id = this.id || "";
                var match = id.match(regex) || [];
                if (match.length == 3) {
                    this.id = match[1] + (cloneIndex);
                    //console.log('match[1]: ', match[1], " cloneIndex: ", cloneIndex );
                }
            })
            .on('click', 'clone', clone)
            .on('click', 'remove', remove);

            $(".tbodyClone .clone").hide();

            cloneIndex++;

            var obj = $( ".tbodyClone .clonedOP:last-child" ).attr('id');

            $( "#" + obj + " div.col-md-12.ajouter_operation button").show();

        if ($(".clonedOP").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }
        $("#clonedOP1 .remove").hide();


        //console.log('next index:- ' + cloneIndex);

        //$('#sectionBenef_OP' + (cloneIndex - 1 )).addClass('displayed');
    	//$('#sectionLogements_OP' + (cloneIndex - 1 )).addClass('displayed');
    	//$('#sectionPlusLogements_OP' + (cloneIndex - 1 )).addClass('displayed');
    	//$('#sectionCalculReel_OP' + (cloneIndex - 1 )).addClass('displayed');
    	//$('#sectionSocial_OP' + (cloneIndex - 1 )).addClass('displayed');
    	//$('#sectionPaiementRAI_OP' + (cloneIndex - 1 )).addClass('displayed');
		//$('#sectionRepartition_OP0' + (cloneIndex - 1 )).addClass('displayed');

    	//$('#sectionBarErrorMsg_OP' + (cloneIndex - 1 )).addClass('displayed');
    	//$('#selectSecteur_OP' + (cloneIndex - 1 )).removeClass('input-validation-error');

    	//$('#calculReel').prop('checked',false);
		$('#sectionCritere_OP' + (cloneIndex - 1 )).addClass('displayed');
    	
    	$('#numId_OP' + (cloneIndex - 1 )).html(cloneIndex );

    	

    }
    function remove() {
        $(this).parents(".clonedOP").remove();
 
        if ($(".clonedOP").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }
        $("#clonedOP1 .remove").hide();

        $(".tbodyClone .clone").hide();
        var obj = $( ".tbodyClone .clonedOP:last-child" ).attr('id');

		$( "#" + obj + " div.col-md-12.ajouter_operation button").show();

		//console.log('numOP at Removal : ' + numOperation() );

		var numOP = numOperation();
		if(numOP == 1) {
			cloneIndex = 1;
			console.log('reset here at removal');
		}

		//get last id after removal
		console.log('obj value: ' , obj , ' Reset ID @ ' + getLastOperationId(obj) + ' Last child ' + obj + " cloneIndex: ", cloneIndex);

		cloneIndex = parseInt(getLastOperationId(obj));

		//hide resultatCumulePanel on each removal
		$('#resultatCumulePanel').addClass('displayed');
	}

    $(document).on("click", ".clone", clone);
    $(document).on("click", ".remove", remove);




    // Select operation - onchange display critere
    
    $('select[id^="selectOperation"]').change(function () {
    	$('select[id^="selectOperation"]').each(function () {
    		var valueChecked = $('#' + this.id).val();
    		var str = this.id;
    		var idSelected = str.split("_")[1];

			console.log('id Selected : ' , idSelected, " valueChecked: ", valueChecked);

			$('#sectionCritere_' + idSelected).addClass('displayed');

			if(valueChecked != 0) {
				$('#sectionCritere_' + idSelected).removeClass('displayed');
			}
        });
    	
    });
     

  </script>

<script>
//$('#' + idClicked).removeClass('input-validation-error');
/*	
$('select[id^="selectSecteur"]').change(function () {

	var isBar = isAnyBarSelected();

	var idClicked = $(this).attr('id');
	console.log('isBar ' + isBar + ' idClicked=> ' + idClicked);
	$('#' + idClicked).removeClass('input-validation-error');
	var idSecteurClicked = idClicked.split("_")[1];
	$('#sectionBarErrorMsg_' + idSecteurClicked).addClass('displayed');
	
    if(isBar < 2) {
    	$('select[id^="selectSecteur"]').each(function () {
        	
    		var valueChecked = $('#' + this.id).val();
    		var str = this.id;
    		var idSelected = str.split("_")[1];
    		if(valueChecked == '2') {
    			
    			//console.log('id selected BAR ' + this.id + ', => Id= ' + idSelected);
    			$('#selectBenef_' + idSecteurClicked).prop("selectedIndex", 0);
    			$('#sectionBenef_' + idSelected).removeClass('displayed');
    			$('#sectionPaiementRAI_' + idSelected).removeClass('displayed');
				$('#sectionRepartition_' + idSelected).removeClass('displayed');
				
    		}
    		else {
    	    	//console.log(this.id);
    	    	$('#sectionBenef_' + idSelected).addClass('displayed');
    	    	$('#sectionLogements_' + idSelected).addClass('displayed');
    	    	$('#sectionPlusLogements_' + idSelected).addClass('displayed');
    	    	$('#sectionCalculReel_' + idSelected).addClass('displayed');
    	    	$('#sectionSocial_' + idSelected).addClass('displayed');
    	    	$('#sectionPaiementRAI_' + idSelected).addClass('displayed');
				$('#sectionRepartition_' + idSelected).addClass('displayed');
    		}
    		
    	});

    }
    else{
    	$('#' + idClicked).prop("selectedIndex", 0);
    	$('#' + idClicked).addClass('input-validation-error');
    	$('#sectionBarErrorMsg_' + idSecteurClicked).removeClass('displayed');
    }
	
	
});


$('select[id^="selectBenef"]').change(function () {
	//console.log("id selected Type " + this.id);

	var typeSelected =  $('#' + this.id).val();
	var strType = this.id;
	var idTypeSelected = strType.split("_")[1];

	$('#sectionLogements_' + idTypeSelected).addClass('displayed');
	$('#sectionPlusLogements_' + idTypeSelected).addClass('displayed');
	$('#sectionCalculReel_' + idTypeSelected).addClass('displayed');
	$('#sectionSocial_' + idTypeSelected).addClass('displayed');
	$('#sectionDepartement_' + idTypeSelected).addClass('displayed');
	//$('#sectionPaiementRAI_' + idTypeSelected).addClass('displayed');
	
	switch(typeSelected) {
	  case '1':
		  	$('#sectionLogements_' + idTypeSelected).removeClass('displayed');
	    break;
	  case '2':
		  	$('#sectionPlusLogements_' + idTypeSelected).removeClass('displayed');
		  	$('#classique_' + idTypeSelected).val('');
		  	$('#precarite_' + idTypeSelected).val('');
		  	$('#grandprecarite_' + idTypeSelected).val('');
	    break;
	  case '3':
		  	$('#calculReel_'  + idTypeSelected ).prop('checked',false);
		  	$('#sectionCalculReel_' + idTypeSelected).removeClass('displayed');
		  	$('#sectionPlusLogements_' + idTypeSelected).removeClass('displayed');
		  	$('#sectionSocial_' + idTypeSelected).removeClass('displayed');
			$('#precariteBen_' + idTypeSelected).val('');
	  		$('#classiqueBen_' + idTypeSelected).val('');
			$('#precaritePro_' + idTypeSelected).val('');
	  		$('#classiquePro_' + idTypeSelected).val('');

		
	    break;
	  default:
	    //no code
		break;
	}
	
		
});


$(document).ready(function() {

	$('input[id^="calculReel"]').click(function () {
		//console.log('log checked ' + $('#'+this.id).val() );
		var strCalcul = this.id;
		var idCalculReel = strCalcul.split("_")[1];
		$('#sectionDepartement_'+idCalculReel).addClass('displayed');
		if($('#'+this.id).is(':checked')) {
			//console.log('log checked is ' + $('#'+this.id).val() );
			$('#sectionDepartement_'+idCalculReel).removeClass('displayed');
		}
	});
	
	
});*/

function getLastOperationId(obj) {
	var lastOperationId = 0;
	var lastNumId = $( ".tbodyClone .numId:last-child" ).attr('id');
	//console.log('last id: ' , lastNumId);
	lastOperationId = obj.substr(8);
	return lastOperationId;
}

function numOperation() {
	var numOP = 0;

	$('span[id^="numId"]').each(function () {
		numOP++;
	}); 

	return numOP;
}

function isAnyBarSelected() {
	var isBar = 0;
	$('select[id^="selectSecteur"]').each(function () {
		var valueChecked = $('#' + this.id).val();
		
		if(valueChecked == '2') {
			isBar++;
		}
		
	});

	return isBar;
}



$('#calculateCumac').click(function() {
	displayResultatOperation();
	displayResultatCumule();

	

});

function displayResultatOperation() {
	//TO DO
}

function displayResultatCumule() {
	// get number of operations
	var totalNumOperation = numOperation();

	console.log('numOP: ', totalNumOperation);
	$('#resultatCumulePanel').addClass('displayed');
	if(parseInt(totalNumOperation) > 1) {
		//display panel resultat cumuler
		$('#resultatCumulePanel').removeClass('displayed');
		//display total number of operations for the calculation
		$('#numOperation').html(totalNumOperation );
	}

}


  </script>
