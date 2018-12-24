
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

					<div class="row prospect-container displayed">
						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="RaisonSociale">Raison
										sociale</label></span> <span class="form_input"><input
									type="text" class="form-control" 
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
								<span class="form_input" ><input type="text"
									class="form-control" id="contact" placeholder=""></span>
							</div>
						</div>
					</div>
					
					
					<div class="row partenaire-container displayed">
						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="RaisonSociale">Raison
										sociale</label></span> 
										<!-- <span class="form_input"><input
									type="text" class="form-control" 
									id="raisonSocial" placeholder=""></span> -->
									<div id="msRaisonSociale" class="form-control"></div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4 input_holder">
							<div class="form-group">
								<span class="form_label"><label for="Siren">SIREN</label></span>
								<!-- <span class="form_input"><input type="text" class="form-control"
									id="siren" placeholder=""></span> -->
									<div id="msSiren" class="form-control"></div>
							</div>
						</div>

					</div>

				</div>




			</fieldset>




		</div>

	</div>
</div>

<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">

			<fieldset class="fieldset-margin-bottom choisirSecteurPanel">
				<legend>Secteur opération</legend>

				<div class="fieldset-container">
					<div class="header-group col-md-12">
						<span class="form_label"><label for="FiltreSecteur">Secteur</label></span>
						<span class="header_output"><select id="selectSecteur"
							name="selectSecteur" class="form-control secteur">
								<option value="0"></option>
								<option value="1">Industrie</option>
								<option value="2">bâtiment résidentiel (BAR)</option>
								<option value="3">Agriculture</option>
								<option value="4">bâtiment tertiare (BAT)</option>
								<option value="5">Secteur 5</option>
						</select></span>
					</div>

					<div class="header-group col-md-12">
						<span class="form_label"><label for="FiltreType">Type</label></span>
						<span class="header_output"><select id="selectType"
							name="selectType" class="form-control type">
								<option value="0"></option>
								<option value="1">Isolation (EN)</option>
								<option value="2">Chauffage (TH)</option>
								<option value="3">Equipement (EQ)</option>
								<option value="4">Service (SE)</option>
								<option value="5">Equipement Industriel (UT)</option>
						</select></span>
					</div>
				</div>
			</fieldset>
		</div>
	</div>
</div>


<div class="panel-group displayed" id="informationsgeneralesPanel">
	<div class="panel panel-default">

		<div class="panel-body">

			<fieldset class="fieldset-margin-bottom choisirInfoGeneralPanel">
				<legend>Informations générales</legend>

				<div class="fieldset-container">

					<div class="header-group col-md-12" id="sectionCodePostalTravaux">
						
						<span class="form_label"><label for="DepartmentdesTravaux">Département des travaux</label></span> 
						<span class="header_output">
							<select id="selectDeptTravaux" name="selectDeptTravaux" class="form-control">
								<option value="0"></option>
								<option value="1">#1</option>
								<option value="2">#2</option>
								<option value="3">#3</option>
							</select>
						</span>
					</div>

					<div class="header-group col-md-12 " id="sectionBenef">
						<span class="form_label"><label for="TypeDeBenef">Type de bénéficiaire</label></span> 
						<span class="header_output">
							<select id="selectBenef" name="selectBenef" class="form-control beneficiaire">
								<option value="0"></option>
								<option value="1">#1 - un logement</option>
								<option value="2">#2 - plusieurs logements</option>
								<option value="3">#3 - Bailleur social</option>
							</select>
						</span>
					</div>

					<div class="header-group col-md-12 displayed "
						id="sectionLogements">

						<fieldset class="fieldset-margin-bottom"
							id="repartitionFieldset">
							<legend> Logement</legend>
							<div class="col-sm-3 col-md-3 input_holder">
								<div class="form-group">
									<span class="form_input"><input type="radio" name="optLogement"
										value="logClassique"></span> <span class="form_label"><label
										for="logClassique">Classique</label></span>
								</div>
							</div>

							<div class="col-sm-3 col-md-3 input_holder">
								<div class="form-group">
									<span class="form_input"><input type="radio" name="optLogement"
										value="logPrecarite"></span> <span class="form_label"><label
										for="logPrecarite">Précarité</label></span>
								</div>
							</div>

							<div class="col-sm-3 col-md-3 input_holder">
								<div class="form-group">
									<span class="form_input"><input type="radio" name="optLogement"
										value="logGrPrecarite"></span> <span class="form_label"><label
										for="logGrPrecarite">Grande précarité</label></span>
								</div>
							</div>
						</fieldset>
					</div>

					<div class="header-group col-md-12 displayed" id="sectionStatistiques">

						<fieldset class="fieldset-margin-bottom"
							id="repartitionFieldset">
							<legend> Statistiques de la ville</legend>
						</fieldset>

					</div>

					<div class="header-group col-md-12 displayed" id="sectionCalculReel">
						<span class="form_label"><label for="CalculReel">Calcul au réel</label></span>
						<span class="header_output calculReelCheck"><input type="checkbox" id="calculReel" class="calculReel"></span>
					</div>

					<div class="header-group col-md-12 displayed" id="sectionPlusLogements">

						<fieldset class="fieldset-margin-bottom"
							id="repartitionFieldset">
							<legend> Plusieurs logements</legend>

							<div class="plusLogement-container col-md-12">

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="header_label"><label for="Classique">Nombre de
												logement Classique</label></span> <span
											class="header_output"><input type="text"
											class="form-control" id="classique" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="header_label"><label for="Precarite">Nombre de
												logement Précarité</label></span> <span
											class="header_output"><input type="text"
											class="form-control" id="precarite" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="header_label"><label for="GrandPrecarite">Nombre
												de logement Grand Précarité</label></span> <span
											class="header_output"><input type="text"
											class="form-control" id="grandprecarite"
											placeholder=""></span>
									</div>
								</div>
							</div>
						</fieldset>
					</div>


					<div class="header-group col-md-12" id="sectionResultatRepartition">
						<fieldset class="fieldset-margin-bottom" id="resultatRepartitionFieldset">
							<legend>Résultat répartition</legend>

							<div class="col-sm-6 col-md-4 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatRepCL">Classique</label></span>
									<span class="header_output" id="resultatRepCL">10 %</span> 
								</div>
							</div>

							<div class="col-sm-6 col-md-4 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatRepPR">Précarité</label></span>
									<span class="header_output" id="resultatRepPR">10 %</span>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="ResultatRepGPR">Grande précarité</label></span>
									<span class="header_output" id="resultatRepGPR">10 %</span>
								</div>
							</div>
						
						</fieldset>
					</div>

				</div>

			</fieldset>

		</div>

	</div>
</div>

<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">

			<fieldset class="fieldset-margin-bottom choisirIndicePanel">
				<legend>Indice</legend>

				<div class="fieldset-container">
					<div class="header-group col-md-12" id="sectionRepartitionIndice">

					<div class="repartition-container col-md-12">
						<div class="repartition-section col-md-6">
							<span class="repartition-section-header">Professionnel</span>

							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="IndiceProHP">Indice Hors précarité</label></span>
									<span class="header_output"><input type="text"
										class="form-control" id="indiceProHP" placeholder=""></span>
								</div>
							</div>

							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="IndiceProP">Indice précarité</label></span>
									<span class="header_output"><input type="text"
										class="form-control" id="indiceProP" placeholder=""></span>
								</div>
							</div>

						</div>

						<div class="repartition-section col-md-6">
							<span class="repartition-section-header">Bénéficiaire</span>
							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="IndiceBenHP">Indice Hors précarité</label></span>
									<span class="header_output"><input type="text"
										class="form-control" id="indiceBenHP" placeholder=""></span>
								</div>
							</div>

							<div class="col-sm-6 col-md-12 input_holder">
								<div class="header-group">
									<span class="header_label"><label for="IndiceBenP">Indice précarité</label></span>
									<span class="header_output"><input type="text"
										class="form-control" id="indiceBenP" placeholder=""></span>
								</div>
							</div>
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
		if($('#'+this.id).is(':checked')) {
			$('#sectionPlusLogements').removeClass('displayed');
		}
	});

});

</script>