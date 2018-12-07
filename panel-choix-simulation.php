
<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">




			<fieldset class="choisirProspectPartenaire">
				<legend>Prospect/Partenaire Existant</legend>
				<div class="fieldset-container">



					<div class="col-sm-3 col-md-3 input_holder">
						<div class="form-group">
							<span class="form_input"><input type="radio" name="optradio"
								value="prospect"></span> <span class="form_label"><label
								for="prospect">Prospect</label></span>
						</div>
					</div>

					<div class="col-sm-3 col-md-3 input_holder">
						<div class="form-group">
							<span class="form_input"><input type="radio" name="optradio"
								value="partenaire"></span> <span class="form_label"><label
								for="partenaire">Partenaire existant</label></span>
						</div>
					</div>




				</div>

				<div class="col-md-12 choix-container displayed">

					<div class="row prospect-container">
						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="RaisonSociale">Raison
										sociale</label></span> <span class="form_input"><input
									type="text" class="form-control" style="width: 100% !important"
									id="raisonSocial" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="Siren">SIREN</label></span>
								<span class="form_input"><input type="text" class="form-control"
									id="siren" placeholder=""></span>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 input_holder choix-partenaire">
							<div class="form-group">
								<span class="form_label"><label for="Contact">Contact</label></span>
								<span class="form_input" style="width: 100%"><input type="text"
									class="form-control" id="contact" placeholder=""></span>
							</div>
						</div>
					</div>
					
					

				</div>




			</fieldset>




		</div>

	</div>
</div>

<script>
 $(document).ready(function() {
	 
	 $( "input[name='optradio']" ).click(function(e) {
		 	$('.choix-partenaire').removeClass('displayed');
	   		var checkedValue = $("input[name='optradio']:checked").val();
	   		//alert('checked ' + checkedValue);
	   		if(checkedValue == 'partenaire') {
		   		$('.choix-partenaire').addClass('displayed');
	   		}

	   		$('.choix-container').removeClass('displayed');
	 });
	
	 });

</script>