
<?php include '_ResultatCumule.php'; ?>

<div class="col-md-12 mentionSurDevisSection">

	<div class="col-md-12 submit_button_holder" id="btn_mentionSurDevis">
		<a href="javascript:void(0)"  id="msd_cc"  class="btn btn-primary submit_button" role="button">Récupérer la mention à faire figurer et le cadre contribution</a>
	</div>

	<?php include '_MentionDevisOuFacture.php'; ?>

</div>

<script>

$('#btn_mentionSurDevis').click(function () {
	$('#mentionFigurerPanel').removeClass('displayed');
});

</script>
