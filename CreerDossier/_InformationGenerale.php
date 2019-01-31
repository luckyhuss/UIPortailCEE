<div class="panel-group" id="informationsgeneralesPanel">
	<div class="panel panel-default">

		<div class="panel-body">

			<fieldset class="fieldset-margin-bottom choisirInfoGeneralPanel">
				<legend>Informations générales</legend>

				<div class="fieldset-container">
                                                    
					<div class="input_holder">
						<div class="header-group">
							<span class="form_label"><label for="AddrDesTravaux">Addresse des travaux</label></span> 
							<span class="header_output"><input type="text" class="form-control" id="addrDesTravaux" placeholder=""></span>
						</div>
					</div>
                                
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
                    
					<?php include 'Simulation\_DateEstimee.php'; ?>

					<div class="header-group col-md-12 displayed" id="sectionBenef">
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

					<div class="col-md-12 submit_button_holder displayed" id="sectionCalculPreca">
    					<button type="submit" class="btn btn-primary submit_button" id="calculateRepartition">Calcul Répartition</button>
					</div>

					<div class="header-group col-md-12 displayed" id="sectionResultatRepartition">
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

<script>
    //select type de benef
    $('select[id^="selectBenef"]').change(function () {

    var typeSelected =  $('#' + this.id).val();

    $('#sectionLogements').addClass('displayed');
    $('#sectionPlusLogements').addClass('displayed');
    $('#sectionCalculReel' ).addClass('displayed');
    $('.choisirInfoGeneralPanel .submit_button_holder').addClass('displayed');
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
    $('.choisirInfoGeneralPanel .submit_button_holder').addClass('displayed');
    if($('#'+this.id).is(':checked')) {
        $('#sectionPlusLogements').removeClass('displayed');
        $('.choisirInfoGeneralPanel .submit_button_holder').removeClass('displayed');
    }
});

});
</script>