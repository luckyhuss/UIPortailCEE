<?php include '_Operation.php'; ?>

<!-- button ajouter -->

<!-- <div class="col-md-12 submit_button_holder simuler_btn_holder">
	<a href="javascript:void(0)"  id="calculateCumac"  class="btn btn-primary submit_button" role="button">Calculer</a>
</div> -->




<script>
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
