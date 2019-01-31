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

				</h4>
			</div>

			<div id="CollapseOperation" class="panel-collapse collapse in">
				<div class="panel-body">

					<?php include '_ChoixOperation.php'; ?>

					<?php include '_CritereSaisie.php'; ?>

					<div class="col-md-12 resultatOperationPanel">
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

						<fieldset class="fieldset-margin-bottom choisirResultatOpePanel displayed" id="resultatOperationPanel_OP0">
							<legend>Résultat</legend>

							<div class="fieldset-container">
								<div class="header-group col-md-12" id="sectionResultatParOperation_OP0">

									<div class="repartition-section col-md-12">
										<span class="repartition-section-header">Calcul CUMAC</span>

										<div class="col-sm-6 col-md-4 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatOperationCL">Classique</label></span>
												<span class="header_output" id="resultatOperationCL_cumac_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-4 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatOperationPR">Précarité</label></span>
												<span class="header_output" id="resultatOperationP_cumac_OP0">10 kWhc</span>
											</div>
										</div>

									</div>

									<div class="repartition-section col-md-4">
										<span class="repartition-section-header">Calcul AIDE Beneficiare</span>
										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatBenHP_aide">Hors précarité</label></span>
												<span class="header_output" id="resultatBenHPAide_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatBenP_aide">Précarité</label></span>
												<span class="header_output" id="resultatBenPAide_OP0">10 kWhc</span>
											</div>
										</div>
									</div>

									<div class="repartition-section col-md-4">
										<span class="repartition-section-header">Calcul AIDE Pro</span>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatProHP_aide"> Hors précarité</label></span>
												<span class="header_output" id="resultatProHPAide_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatProP_aide"> Précarité</label></span>
												<span class="header_output" id="resultatProPAide_OP0">10 kWhc</span>
											</div>
										</div>
									</div>

									<div class="repartition-section col-md-4">
										<span class="repartition-section-header">Calcul AIDE Apporteur affaire</span>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatAAHP_aide"> Hors précarité</label></span>
												<span class="header_output" id="resultatAAHPAide_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatAAP_aide"> Précarité</label></span>
												<span class="header_output" id="resultatAAPAide_OP0">10 kWhc</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</fieldset>

					</div>

					<!-- to cross check -->

					<div class="criteresEligibilitePanel">

						<fieldset class="fieldset-margin-bottom choisirCriteresEligibilitePanel displayed" id="criteresEligibilitePanel_OP0">
							<legend>Critères d'éligibilité</legend>

							<div class="fieldset-container" id="sectionCriEliParOperation_OP0">

								<div class="input_holder">
									<div class="header-group">
										<span class="header_output" id="Critere_eligibilite_OP0">Critères d'éligibilité 1</span>
									</div>
								</div>

								<div class="input_holder">
									<div class="header-group">
									<span class="header_output" id="Critere_eligibilite_OP0">Critères d'éligibilité 2</span>
									</div>
								</div>

							</div>
						</fieldset>

					</div>

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
var regex = /^(.+?)(\d+)$/i;
    var cloneIndex = $(".clonedOP").length;
    if ($(".clonedOP").length == 1) {
        $('.remove').hide();
    } else {
        $('.remove').show();
    }

    
    function clone() {
     	//console.log('cloneIndex ' + cloneIndex + ', numOP at Clone : ' + numOperation() );

        $('#clonedOP1').clone(true, true)
            .appendTo(".tbodyClone")
            .attr("id", "clonedOP" + ( cloneIndex + 1 ))
            .find("*")
            .each(function () {
                var id = this.id || "";
                var match = id.match(regex) || [];
                if (match.length == 3) {
                    this.id = match[1] + (cloneIndex);
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

		 $('#clonedOP' + cloneIndex).find('.choisirCritereContainer').addClass('displayed');
    	
    	$('#numId_OP' + (cloneIndex - 1 )).html(cloneIndex );

    	// hide results for added panel
		hideResultatOperation(cloneIndex-1);

    }
    function remove(all = false, object = null) {
		if(!all){
			object = object !== null ? object : $(this);
			object.parents(".clonedOP").remove();
		}else{
			$(".clonedOP").each(function(index, val){
				if (index == 0) {
					$('.remove').hide();
					$(this).parent().addClass('displayed');
					$(this).find('.choisirCritereContainer, .criteresEligibilitePanel, .resultatOperationPanel').addClass('displayed');
				} else {
					$(this).remove();
				}
			})
		}
 
        if ($(".clonedOP").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }
        $("#clonedOP1 .remove, .tbodyClone .clone").hide();

		var obj = $( ".tbodyClone .clonedOP:last-child" ).attr('id');
		
		$( `#${obj} div.col-md-12.ajouter_operation button`).show();

		var numOP = numOperation();
		if(numOP == 1) {
			cloneIndex = 1;
		}

		cloneIndex = parseInt(getLastOperationId(obj));

		//hide resultatCumulePanel on each removal
		$('#resultatCumulePanel').addClass('displayed');

		// hide all results if one panel is removed
		// hideResultatOperation();
	}

    $(document).on("click", ".clone", clone);
    $(document).on("click", ".remove", function(){
		remove(false, $(this));
	});




    // Select operation - onchange display critere
    
    $('select[id^="selectOperation"]').change(function () {
    	$('select[id^="selectOperation"]').each(function () {
    		var valueChecked = $('#' + this.id).val();
    		var str = this.id;
    		var idSelected = str.split("_")[1];

			$('#sectionCritere_' + idSelected).addClass('displayed');

			if(valueChecked != 0) {
				$('#sectionCritere_' + idSelected).removeClass('displayed');
			}
        });
    	
    });
     

function getLastOperationId(obj) {
	var lastOperationId = 0;
	var lastNumId = $( ".tbodyClone .numId:last-child" ).attr('id');
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
	//display results per operation
	displayResultatOperation();

	//display only if num OP > 1
	displayResultatCumule();

	

});

function displayResultatOperation() {

$('fieldset[id^="resultatOperationPanel"]').each(function () {
    var fieldsetId = this.id;

    $('#' + fieldsetId).removeClass('displayed');
});

$('fieldset[id^="criteresEligibilitePanel"]').each(function () {
    var fieldsetId = this.id;

    $('#' + fieldsetId).removeClass('displayed');
});

}

function hideResultatOperation(fieldsetId) {
$('#resultatOperationPanel_OP' + fieldsetId).addClass('displayed');
$('#criteresEligibilitePanel_OP' + fieldsetId).addClass('displayed');
$('#resultatCumulePanel').addClass('displayed');
}

function displayResultatCumule() {
// get number of operations
var totalNumOperation = numOperation();

$('#resultatCumulePanel').addClass('displayed');
if(parseInt(totalNumOperation) > 1) {
    //display panel resultat cumuler
    $('#resultatCumulePanel').removeClass('displayed');
    //display total number of operations for the calculation
    $('#numOperation').html(totalNumOperation );
}

}
</script>