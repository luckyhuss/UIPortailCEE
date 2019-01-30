
<?php include '_ChoixSimulation.php'; ?>

<?php include '_Secteur.php'; ?>

<?php include '_InformationGenerale.php'; ?>

<?php include '_Indice.php'; ?>

<script>

$(document).ready(function() {
	var secteur = $('#selectSecteur');
	var type = $('#selectType');
	var dept = $('#selectDeptTravaux');

	if (secteur.val() === '0' || type.val() === '0' || dept.val() === '0') {
		$('.tbodyClone').addClass('displayed');
		$('#calculateCumac').addClass('displayed');
	}
	else {
		$('.tbodyClone').removeClass('displayed');
		$('#calculateCumac').removeClass('displayed');
	}
});

 $(document).ready(function() {
	 
	 $( "input[name='optradio']" ).click(function(e) {
		 	$('.choix-container').removeClass('displayed');
	   		var checkedValue = $("input[name='optradio']:checked").val();
	   		if(checkedValue == 'partenaire') {
		   		$('.prospect-container').addClass('displayed');
				$('.partenaire-container').removeClass('displayed');
	   		}
			else{
	   			$('.prospect-container').removeClass('displayed');
				$('.partenaire-container').addClass('displayed');
			}
	 });
	
	 });

	$(function() {
	var msRaisonSociale = $('#msRaisonSociale').magicSuggest({
		data: ["GALLIANCE DINDE","GARTAL", "DELABLI", "ENERGEL"]
	});

	var msSiren = $('#msSiren').magicSuggest({
		data: ['111222333','111222331','114222331','114222931','114222939','114224331','114222731','114221939']
		});

	});


//select secteur
	$('select[id^="selectSecteur"]').change(function () {

	var secteurSelected =  $('#' + this.id).val();

	$('#informationsgeneralesPanel').addClass('displayed');

	switch(secteurSelected) {
	  case '2':
	  		$('#informationsgeneralesPanel').removeClass('displayed');
			$('#sectionBenef').removeClass('displayed');
			$('#selectBenef' ).val('');
			$('#selectDeptTravaux' ).val('');
	    break;
	  case '4':
	 		$('#informationsgeneralesPanel').removeClass('displayed');
			$('#sectionBenef').addClass('displayed');
			$('#sectionLogements').addClass('displayed');
			$('#sectionPlusLogements').addClass('displayed');
			$('#sectionCalculPreca #calculateRepartition').addClass('displayed');
			$('#sectionCalculReel' ).addClass('displayed');
			$('#sectionStatistiques' ).addClass('displayed');
			$('#selectDeptTravaux' ).val('');
	    break;
	  default:
	    //no code
		break;
	}
});

//select type de benef
$('select[id^="selectBenef"]').change(function () {

	var typeSelected =  $('#' + this.id).val();

	$('#sectionLogements').addClass('displayed');
	$('#sectionPlusLogements').addClass('displayed');
	$('#sectionCalculReel' ).addClass('displayed');
	$('#sectionCalculPreca #calculateRepartition').addClass('displayed');
	$('#sectionStatistiques' ).addClass('displayed');
	
	switch(typeSelected) {
	  case '1':
		  	$('#sectionLogements').removeClass('displayed');
	    break;
	  case '2':
		  	$('#sectionPlusLogements').removeClass('displayed');
		  	$('#classique' ).val('');
		  	$('#precarite').val('');
		  	$('#grandprecarite').val('');
	    break;
	  case '3':
		  	$('#calculReel').prop('checked',false);
		  	$('#sectionCalculReel').removeClass('displayed');
			$('#sectionStatistiques' ).removeClass('displayed');
			$('#classique').val('');
		  	$('#precarite').val('');
		  	$('#grandprecarite').val('');
	    break;
	  default:
	    //no code
		break;
	}
	
		
});

//check if calcul au reel is checked
$(document).ready(function() {

	$('input[id^="calculReel"]').click(function () {
		$('#sectionPlusLogements').addClass('displayed');
		$('#sectionCalculPreca #calculateRepartition').addClass('displayed');
		if($('#'+this.id).is(':checked')) {
			$('#sectionPlusLogements').removeClass('displayed');
			$('#sectionCalculPreca #calculateRepartition').removeClass('displayed');
		}
	});

});


$('select[id^="selectSecteur"], select[id^="selectType"]').change(function () {

var secteur = $('#selectSecteur');
var type = $('#selectType');

remove(true);
if (secteur.val() !== '0' && type.val() !== '0'){
	$('.tbodyClone').removeClass('displayed');
	$('#calculateCumac').removeClass('displayed');
}

});
</script>