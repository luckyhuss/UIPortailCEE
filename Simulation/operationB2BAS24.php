<?php include '_Operation.php'; ?>

<!-- button ajouter -->

<!-- <div class="col-md-12 submit_button_holder simuler_btn_holder">
	<a href="javascript:void(0)"  id="calculateCumac"  class="btn btn-primary submit_button" role="button">Calculer</a>
</div> -->




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

        $('#clonedOP1').clone(true, true)
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
		// $('#sectionCritere_OP' + (cloneIndex - 1 )).addClass('displayed');

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
    //$(document).on("click", ".remove", remove);
    $(document).on("click", ".remove", function(){
		remove(false, $(this));
	});




    // Select operation - onchange display critere
    
    $('select[id^="selectOperation"]').change(function () {
    	$('select[id^="selectOperation"]').each(function () {
    		var valueChecked = $('#' + this.id).val();
    		var str = this.id;
    		var idSelected = str.split("_")[1];

			// console.log('id Selected : ' , idSelected, " valueChecked: ", valueChecked);

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
	//display results per operation
	displayResultatOperation();

	//display only if num OP > 1
	displayResultatCumule();

	

});

function displayResultatOperation() {

	$('fieldset[id^="resultatOperationPanel"]').each(function () {
		var fieldsetId = this.id;
		// console.log('panel resultat ', fieldsetId);

		$('#' + fieldsetId).removeClass('displayed');
	});

	$('fieldset[id^="criteresEligibilitePanel"]').each(function () {
		var fieldsetId = this.id;
		// console.log('panel resultat ', fieldsetId);

		$('#' + fieldsetId).removeClass('displayed');
	});

}

function hideResultatOperation(fieldsetId) {
	// $('fieldset[id^="resultatOperationPanel"]').each(function () {
	// 	var fieldsetId = this.id;
	// 	$('#' + fieldsetId).addClass('displayed');
	// });

	// $('fieldset[id^="criteresEligibilitePanel"]').each(function () {
	// 	var fieldsetId = this.id;
	// 	console.log('panel resultat ', fieldsetId);

	// 	$('#' + fieldsetId).addClass('displayed');
	// });
	// console.log('#resultatOperationPanel_OP' + fieldsetId);
	$('#resultatOperationPanel_OP' + fieldsetId).addClass('displayed');
	$('#criteresEligibilitePanel_OP' + fieldsetId).addClass('displayed');
	$('#resultatCumulePanel').addClass('displayed');
}



function displayResultatCumule() {
	// get number of operations
	var totalNumOperation = numOperation();

	// console.log('numOP: ', totalNumOperation);
	$('#resultatCumulePanel').addClass('displayed');
	if(parseInt(totalNumOperation) > 1) {
		//display panel resultat cumuler
		$('#resultatCumulePanel').removeClass('displayed');
		//display total number of operations for the calculation
		$('#numOperation').html(totalNumOperation );
	}

}


  </script>
