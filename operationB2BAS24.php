<div class="tbodyClone">
	<div class="panel-group clonedOP" id="clonedOP1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<span class="panel_header_element"><a data-toggle="collapse"
						href="#CollapseOperation">Opération</a></span>
					<button id="btnDel_0" name="btnDel_0" type="button"
						class="remove btn btn-circle btn-danger">
						<i class="glyphicon glyphicon-minus"></i>
					</button>

					<!-- <span class="panel_header_element"><a data-toggle="collapse" href="#resultatMesDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span> -->
				</h4>
			</div>

			<div id="CollapseOperation" class="panel-collapse collapse in">
				<div class="panel-body">

					<div class="choisirSecteurContainer">
						<fieldset class="fieldset-margin-bottom choisirSecteurPanel">
							<legend>Secteur</legend>

							<div class="fieldset-container">

								<div class="header-group col-md-12">
									<span class="form_label"><label for="Critere">Secteur</label></span>
									<span class="header_output"><select id="selectSecteur_OP0"
										name="selectSecteur_OP0" class="form-control secteur">
											<option value="0"></option>
											<option value="1">#1 - Industrie</option>
											<option value="2">#2 - bâtiment résidentiel (BAR)</option>
											<option value="3">#3 - Agriculture</option>
											<option value="4">#4 - Secteur 4</option>
											<option value="5">#5 - Secteur 5</option>
									</select></span>
								</div>
								<div class="header-group col-md-12 displayed"
									id="sectionBenef_OP0">
									<span class="form_label"><label for="Critere">Type de
											bénéficiaire</label></span> <span class="header_output"><select
										id="selectBenef_OP0" name="selectBenef_OP0"
										class="form-control beneficiaire">
											<option value="0"></option>
											<option value="1">#1 - un logement</option>
											<option value="2">#2 - plusieurs logements</option>
											<option value="3">#3 - Bailleur social</option>
									</select></span>
								</div>

								<div class="header-group col-md-12 displayed"
									id="sectionLogements_OP0">
									<!-- <b style="color:red">A ETRE DEFINIT....</b> -->

									<!-- Type de logement -->
									<fieldset class="fieldset-margin-bottom" id="repartitionFieldset">
										<legend> Logement</legend>
										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optradio"
													value="logClassique"></span> <span class="form_label"><label
													for="logClassique">Classique</label></span>
											</div>
										</div>

										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optradio"
													value="logPrecarite"></span> <span class="form_label"><label
													for="logPrecarite">Précarité</label></span>
											</div>
										</div>

										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optradio"
													value="logGrPrecarite"></span> <span class="form_label"><label
													for="logGrPrecarite">Grande précarité</label></span>
											</div>
										</div>
									</fieldset>
								</div>


								<div class="header-group col-md-12 displayed"
									id="sectionPlusLogements_OP0">

									<fieldset class="fieldset-margin-bottom"
										id="repartitionFieldset">
										

										<div class="plusLogement-container col-md-12">
											
												<div class="col-sm-6 col-md-6 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="ClassiquePro">Nombre de logement Classique</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="classiquePro" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-6 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="PrecaritePro">Nombre de logement Précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="precaritePro" placeholder=""></span>
													</div>
												</div>
												
												<div class="col-sm-6 col-md-6 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="PrecaritePro">Nombre de logement Grand Précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="precaritePro" placeholder=""></span>
													</div>
												</div>

										</div>

									</fieldset>


								</div>


								<div class="header-group col-md-12 displayed"
									id="sectionSocial_OP0">

									<!-- repartition -->
									<fieldset class="fieldset-margin-bottom"
										id="repartitionFieldset">
										<legend> Répartition de la rémunération</legend>

										<div class="repartition-container col-md-12">
											<!-- <div class="repartition-section col-md-6">
												<span class="repartition-section-header">Professionnel</span>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="ClassiquePro">Classique</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="classiquePro" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="PrecaritePro">Précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="precaritePro" placeholder=""></span>
													</div>
												</div>

											</div>

											<div class="repartition-section col-md-6">
												<span class="repartition-section-header">Bénéficiaire</span>
												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="ClassiqueBen">Classique</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="classiqueBen" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="PrecariteBen">Précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="precariteBen" placeholder=""></span>
													</div>
												</div>
											</div> -->

										<div class="col-sm-6 col-md-6 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ClassiquePro">Professionnel</label></span>
												<span class="header_output"><input type="text"
													class="form-control" id="classiquePro" placeholder=""></span>
											</div>
										</div>

										<div class="col-sm-6 col-md-6 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="PrecaritePro">Bénéficiaire</label></span>
												<span class="header_output"><input type="text"
													class="form-control" id="precaritePro" placeholder=""></span>
											</div>
										</div>
										</div>

									</fieldset>

								</div>


							</div>




						</fieldset>
					</div>


					<div class="choisirOperationContainer">
						<fieldset class="fieldset-margin-bottom choisirOperationPanel">
							<legend>Opération</legend>
							<div class="fieldset-container">
								<div class="header-group">
									<span class="form_label"><label for="Critere">Opération</label></span>
									<span class="header_output"><select id="selectOperation_OP0"
										name="selectOperation_OP0" class="form-control">
											<option value="0"></option>
											<option value="1">#1 - Operation 1</option>
											<option value="2">#2 - Operation 2</option>
											<option value="3">#3 - Operation 3</option>
											<option value="4">#4 - Operation 4</option>
											<option value="5">#5 - Operation 5</option>
									</select></span>
								</div>
							</div>
						</fieldset>
					</div>


					<div class="col-md-12 choisirCritereContainer">
						<fieldset class="fieldset-margin-bottom critereAsaisirPanel">
							<legend>Critères</legend>


							<div class="critere">

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere1">Critère 1</label></span>
										<span class="header_output"><input type="text"
											class="form-control" id="critere1" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere2">Critère 2</label></span>
										<span class="header_output"><input type="text"
											class="form-control" id="critere2" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere3">Critère 3</label></span>
										<span class="header_output"> <select id="critere3"
											name="critere3" class="form-control">
												<option value="1">H1</option>
												<option value="2">H2</option>
												<option value="3">H3</option>
										</select>
										</span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="header-group">
										<span class="form_label"><label for="Critere4">Critère 4</label></span>
										<span class="header_output"> <select id="critere4"
											name="critere4" class="form-control">
												<option value="1">H1</option>
												<option value="2">H2</option>
												<option value="3">H3</option>
										</select>
										</span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Critere5">Critère 5</label></span>
										<span class="header_output"><input type="checkbox"
											id="Critere5" placeholder=""></span>
									</div>
								</div>

								<div class="col-sm-6 col-md-6 input_holder">
									<div class="form-group">
										<span class="form_label"><label for="Critere6">Critère 6</label></span>
										<span class="header_output"><input type="checkbox"
											id="Critere6" placeholder=""></span>
									</div>
								</div>

							</div>

						</fieldset>
					</div>

					<div class="col-md-12 panel-date displayed">

						<fieldset class="fieldset-margin-bottom dateEstimeeCommande">
							<legend>Date estimée commande</legend>

							<div class="date">
								<div class="input_holder">
									<input id="date_op0" name="date_op0"
										class="form-control datepicker" placeholder="mm/dd/yyyy" /> <span
										class="calendar_button"><i
										class="glyphicon glyphicon-calendar"></i></span>
								</div>
							</div>
						</fieldset>

						<div class="panel-group RemunerationRefEstiméePanel">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="stat__data col-md-8">
										<span class="header_label"><label for="RemunerationRefEstimée">Rémunération
												référence/estimée</label></span>
										<p class="header_output">10 €/MWh</p>
									</div>
									<div class="stat_icon_wrapper col-md-4">
										<i class="glyphicon glyphicon-stats"></i>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-12 panel-group resultatOperationPanel">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="resultatOperation">
									<!-- <div class="stat"> -->
									<!-- <div class="stat__data col-md-8"> -->
									<span class="header_label"><label for="ResultatOperation">Résultat
											pour l'opération</label></span>
									<!--  <span class="header_label"><label for="ResultatOperationCL">CL</label></span>
                                        <p class="header_output">10 kWhc 600 €</p>
                                        <span class="header_label"><label for="ResultatOperationPR">PR</label></span>
                                        <p class="header_output">10 kWhc 600 €</p> -->

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
									<!-- </div> -->
									<!-- </div> -->
								</div>
							</div>
						</div>
					</div>

												<!-- to cross check -->
							<!-- Type de Paiement -->
							<fieldset class="fieldset-margin-bottom" id="paiementFieldset">
								<legend> Type de paiement</legend>
								<div class="col-sm-3 col-md-3 input_holder">
									<div class="form-group">
										<span class="form_input"><input type="radio" name="optradio"
											value="mandatPaie" checked ></span> <span class="form_label"><label
											for="mandatPaie">Mandat de paiement </label></span>
									</div>
								</div>

								<div class="col-sm-3 col-md-3 input_holder">
									<div class="form-group">
										<span class="form_input"><input type="radio" name="optradio"
											value="versementBenef"></span> <span class="form_label"><label
											for="versementBenef">Versement au bénéficiaire</label></span>
									</div>
								</div>

							</fieldset>

							<!-- Type de RAI -->
							<fieldset class="fieldset-margin-bottom" id="RAIFieldset">
								<legend> Type de RAI</legend>
								<div class="col-sm-3 col-md-3 input_holder">
									<div class="form-group">
										<span class="form_input"><input type="radio" name="optradio"
											value="mentionSD"></span> <span class="form_label"><label
											for="mentionSD">Mention sur devis</label></span>
									</div>
								</div>

								<div class="col-sm-3 col-md-3 input_holder">
									<div class="form-group">
										<span class="form_input"><input type="radio" name="optradio"
											value="courierOffre"></span> <span class="form_label"><label
											for="courierOffre">Courrier d'offre</label></span>
									</div>
								</div>

								<div class="col-sm-3 col-md-3 input_holder">
									<div class="form-group">
										<span class="form_input"><input type="radio" name="optradio"
											value="convention" checked="checked"></span> <span class="form_label"><label
											for="convention">Convention</label></span>
									</div>
								</div>
							</fieldset>

						<!-- to cross check -->

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
	<button type="submit" class="btn btn-primary submit_button">Calculer</button>
</div>

<div class="col-md-12 panel-group resultatCumulePanel">
	<div class="panel panel-default">
		<div class="resultatCumule">
			<div class="panel-body">
				<div class="resultatCumule">
					<div class="stat__data col-md-8">
						<span class="header_label"><label for="ResultatCumule">Résultat
								cumulé</label></span>
						<div class="header-group">
							<span class="header_label"><label for="ResultatCumulerCL">Classique</label></span>
							<span class="header_output">10 kWhc</span> <span
								class="header_output">600 €</span>
						</div>

						<div class="header-group">
							<span class="header_label"><label for="ResultatCumulerPR">Précarité</label></span>
							<span class="header_output">10 kWhc</span> <span
								class="header_output">600 €</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- mention devis -->
<div class="col-md-12 panel-group mentionDevis_Facture">
	<div class="panel panel-default">
		<div class="mentionDevisOuFacture">
			<div class="panel-body">

				<div class="col-md-6 panel-group mentionDevisPanel">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="mentionDevis">
								<span class="header_label"><label for="mentionDevis">Mention
										devis</label></span> <span>Lorem ipsum dolor sit amet,
									consectetur adipiscing elit, sed do eiusmod tempor incididunt.
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt. Lorem ipsum dolor sit amet,
									consectetur adipiscing elit.</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 panel-group mentionFacturePanel">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="mentionFacture">
								<span class="header_label"><label for="mentionFacture">Mention
										facture</label></span> <span>Lorem ipsum dolor sit amet,
									consectetur adipiscing elit, sed do eiusmod tempor incididunt.
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt. Lorem ipsum dolor sit amet,
									consectetur adipiscing elit.</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script>
//.find("input, input[type='checkbox']")
//=======
    var regex = /^(.*)(\d)+$/i;
    var cloneIndex = $(".clonedOP").length;
    if ($(".clonedOP").length == 1) {
        $('.remove').hide();
    } else {
        $('.remove').show();
    }

    function clone() {
        $(this).parents(".clonedOP").clone(true, true)
            .appendTo(".tbodyClone")
            .attr("id", "clonedOP" + (cloneIndex+1))
            .attr("name", "clonedOP" + (cloneIndex+1))
            .find("*")
            .each(function () {
				//$(this).val('');
				//$(this).prop("checked", false);
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


        //console.log('next index:- ' + cloneIndex);

        $('#sectionBenef_OP' + (cloneIndex - 1 )).addClass('displayed');
    	$('#sectionLogements_OP' + (cloneIndex - 1 )).addClass('displayed');
    	$('#sectionPlusLogements_OP' + (cloneIndex - 1 )).addClass('displayed');
    	$('#sectionSocial_OP' + (cloneIndex - 1 )).addClass('displayed');
}
    function remove() {
        $(this).parents(".clonedOP").remove();
 
        if ($(".clonedOP").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }
        $("#clonedOP1 .remove").hide();

        $(".tbodyClone .clone").hide();
        var obj = $( ".tbodyClone .clonedOP:last-child" ).attr('id');

		$( "#" + obj + " div.col-md-12.ajouter_operation button").show();

    }

    $(document).on("click", ".clone", clone);
    $(document).on("click", ".remove", remove);




  </script>

<script>

	
$('select[id^="selectSecteur"]').change(function () {

	var isBar = isAnyBarSelected();

	

	var idClicked = $(this).attr('id');
	console.log('isBar ' + isBar + ' idClicked=> ' + idClicked);

    if(isBar < 2) {
    	$('select[id^="selectSecteur"]').each(function () {
    		var valueChecked = $('#' + this.id).val();
    		var str = this.id;
    		var idSelected = str.split("_")[1];
    		if(valueChecked == '2') {
    			
    			console.log('id selected BAR ' + this.id + ', => Id= ' + idSelected);
    			$('#sectionBenef_' + idSelected).removeClass('displayed');
    		}
    		else {
    	    	console.log(this.id);
    	    	$('#sectionBenef_' + idSelected).addClass('displayed');
    	    	$('#sectionLogements_' + idSelected).addClass('displayed');
    	    	$('#sectionPlusLogements_' + idSelected).addClass('displayed');
    	    	$('#sectionSocial_' + idSelected).addClass('displayed');
    		}
    		
    	});

    }
    else{
    	$('#' + idClicked).prop("selectedIndex", 0);
    }
	
	
});


$('select[id^="selectBenef"]').change(function () {
	console.log("id selected Type " + this.id);

	var typeSelected =  $('#' + this.id).val();
	var strType = this.id;
	var idTypeSelected = strType.split("_")[1];

	$('#sectionLogements_' + idTypeSelected).addClass('displayed');
	$('#sectionPlusLogements_' + idTypeSelected).addClass('displayed');
	$('#sectionSocial_' + idTypeSelected).addClass('displayed');
	
	switch(typeSelected) {
	  case '1':
		  $('#sectionLogements_' + idTypeSelected).removeClass('displayed');
	    break;
	  case '2':
		  $('#sectionPlusLogements_' + idTypeSelected).removeClass('displayed');
	    break;
	  case '3':
		  $('#sectionSocial_' + idTypeSelected).removeClass('displayed');
	    break;
	  default:
	    //no code
	}
	
	/* if(typeSelected == '2') {
		$('#sectionPlusLogements_' + idTypeSelected).removeClass('displayed');
	}
	else {
    	$('#sectionPlusLogements_' + idTypeSelected).addClass('displayed');
	}
	 */
		
});
	

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

  </script>
