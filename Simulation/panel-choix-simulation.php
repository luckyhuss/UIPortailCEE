
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