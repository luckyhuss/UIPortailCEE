<div class="panel-group">
	<div class="panel panel-default">

		<div class="panel-body">

			<fieldset class="fieldset-margin-bottom choisirSecteurPanel">
				<legend>Secteur opération</legend>

				<div class="fieldset-container">
					<div class="header-group col-md-12">
						<span class="form_label"><label for="FiltreSecteur">Secteur</label></span>
						<span class="header_output"><select required aria-required="true" id="selectSecteur"
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

<script>
    //select secteur
	$('select[id^="selectSecteur"]').change(function () {

    var secteurSelected =  $('#' + this.id).val();

    $('#sectionBenef').addClass('displayed');

    switch(secteurSelected) {
    case '2':
            $('#sectionBenef').removeClass('displayed');
            $('#selectBenef' ).val('');
            $('#selectDeptTravaux' ).val('');
        break;
    case '4':
            $('#sectionBenef').addClass('displayed');
            $('#sectionLogements').addClass('displayed');
            $('#sectionPlusLogements').addClass('displayed');
            $('#sectionCalculPreca #calculateRepartition').addClass('displayed');
            $('#sectionCalculReel' ).addClass('displayed');
            $('#selectDeptTravaux' ).val('');
        break;
    default:
        //no code
        break;
    }
    });
</script>