
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
									<span class="header_output"><select id="selectSecteur_OP0"
										name="selectSecteur_OP0" class="form-control secteur">
											<option value="0"></option>
											<option value="1">Industrie</option>
											<option value="2">bâtiment résidentiel (BAR)</option>
											<option value="3">Agriculture</option>
											<option value="4">Secteur 4</option>
											<option value="5">Secteur 5</option>
									</select></span> <span
										class="BAR-error-message text-danger displayed"
										id="sectionBarErrorMsg_OP0">Vous ne pouvez saisir BAR qu'une
										seule fois...</span>
								</div>

								<div class="header-group col-md-12">
									<span class="form_label"><label for="FiltreType">Type</label></span>
									<span class="header_output"><select id="selectType_OP0"
										name="selectType_OP0" class="form-control type">
											<option value="0"></option>
											<option value="1">Isolation (EN)</option>
											<option value="2">Chauffage (TH)</option>
											<option value="3">Equipement (EQ)</option>
											<option value="4">Service (SE)</option>
											<option value="5">Equipement Industriel (UT)</option>
									</select></span> <span
										class="BAR-error-message text-danger displayed"
										id="sectionBarErrorMsg_OP0">Vous ne pouvez saisir BAR qu'une
										seule fois...</span>
								</div>

								<!-- <div class="header-group col-md-12 displayed"
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
									id="sectionCalculReel_OP0">

									<span class="form_label"><label for="CalculReel">Calcul au réel</label></span>
									<span class="header_output calculReelCheck"><input
										type="checkbox" id="calculReel_OP0" class="calculReel"></span>


									<div class="header-group col-md-12 displayed"
										id="sectionDepartement_OP0">
										
													<span class="form_label"><label for="Departement">Département
															des travaux</label></span> <span class="header_output"><input
														type="text" class="form-control"
														id="departementTravaux_OP0" placeholder=""></span>
										
									</div>

								</div>


								<div class="header-group col-md-12 displayed"
									id="sectionLogements_OP0">

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


								<div class="header-group col-md-12 displayed"
									id="sectionPlusLogements_OP0">

									<fieldset class="fieldset-margin-bottom"
										id="repartitionFieldset">


										<div class="plusLogement-container col-md-12">

											<div class="col-sm-6 col-md-6 input_holder">
												<div class="header-group">
													<span class="header_label"><label for="Classique">Nombre de
															logement Classique</label></span> <span
														class="header_output"><input type="text"
														class="form-control" id="classique_OP0" placeholder=""></span>
												</div>
											</div>

											<div class="col-sm-6 col-md-6 input_holder">
												<div class="header-group">
													<span class="header_label"><label for="Precarite">Nombre de
															logement Précarité</label></span> <span
														class="header_output"><input type="text"
														class="form-control" id="precarite_OP0" placeholder=""></span>
												</div>
											</div>

											<div class="col-sm-6 col-md-6 input_holder">
												<div class="header-group">
													<span class="header_label"><label for="GrandPrecarite">Nombre
															de logement Grand Précarité</label></span> <span
														class="header_output"><input type="text"
														class="form-control" id="grandprecarite_OP0"
														placeholder=""></span>
												</div>
											</div>
										</div>
									</fieldset>
								</div>


								<div class="header-group col-md-12 displayed"
									id="sectionSocial_OP0">

									<fieldset class="fieldset-margin-bottom"
										id="repartitionFieldset">
										<legend> Répartition de la rémunération</legend>

										<div class="repartition-container col-md-12">
											<div class="repartition-section col-md-6">
												<span class="repartition-section-header">Professionnel</span>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="ClassiquePro">Classique</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="classiquePro_OP0" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="PrecaritePro">Précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="precaritePro_OP0" placeholder=""></span>
													</div>
												</div>

											</div>

											<div class="repartition-section col-md-6">
												<span class="repartition-section-header">Bénéficiaire</span>
												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="ClassiqueBen">Classique</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="classiqueBen_OP0" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="PrecariteBen">Précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="precariteBen_OP0" placeholder=""></span>
													</div>
												</div>
											</div>


										</div>

									</fieldset>
								</div>


								<div class="header-group col-md-12 displayed"
									id="sectionRepartition_OP0">

									<fieldset class="fieldset-margin-bottom"
										id="repartitionFieldset">
										<legend> Répartition</legend>

										<div class="repartition-container col-md-12">
											<div class="repartition-section col-md-6">
												<span class="repartition-section-header">Professionnel</span>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="IndiceProHP">Indice Hors précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="indiceProHP_OP0" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="IndiceProP">Indice précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="indiceProP_OP0" placeholder=""></span>
													</div>
												</div>

											</div>

											<div class="repartition-section col-md-6">
												<span class="repartition-section-header">Bénéficiaire</span>
												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="IndiceBenHP">Indice Hors précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="indiceBenHP_OP0" placeholder=""></span>
													</div>
												</div>

												<div class="col-sm-6 col-md-12 input_holder">
													<div class="header-group">
														<span class="header_label"><label for="IndiceBenP">Indice précarité</label></span>
														<span class="header_output"><input type="text"
															class="form-control" id="indiceBenP_OP0" placeholder=""></span>
													</div>
												</div>
											</div>


										</div>

									</fieldset>
								</div>

								<div class="paiement-rai displayed" id="sectionPaiementRAI_OP0">
									<fieldset class="fieldset-margin-bottom" id="paiementFieldset">
										<legend> Type de paiement</legend>
										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optPaiement"
													value="mandatPaie" checked></span> <span class="form_label"><label
													for="mandatPaie">Mandat de paiement </label></span>
											</div>
										</div>

										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optPaiement"
													value="versementBenef"></span> <span class="form_label"><label
													for="versementBenef">Versement au bénéficiaire</label></span>
											</div>
										</div>

									</fieldset>

									<fieldset class="fieldset-margin-bottom" id="RAIFieldset">
										<legend> Type de RAI</legend>
										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optRAI"
													value="mentionSD"></span> <span class="form_label"><label
													for="mentionSD">Mention sur devis</label></span>
											</div>
										</div>

										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optRAI"
													value="courierOffre"></span> <span class="form_label"><label
													for="courierOffre">Courrier d'offre</label></span>
											</div>
										</div>

										<div class="col-sm-3 col-md-3 input_holder">
											<div class="form-group">
												<span class="form_input"><input type="radio" name="optRAI"
													value="convention" checked="checked"></span> <span
													class="form_label"><label for="convention">Convention</label></span>
											</div>
										</div>
									</fieldset>

								</div> -->



							</div>

						</fieldset>

		</div>

	</div>
</div>


<script>
//  $(document).ready(function() {
	 
// 	 $( "input[name='optradio']" ).click(function(e) {
// 		 	$('.choix-partenaire').removeClass('displayed');
// 	   		var checkedValue = $("input[name='optradio']:checked").val();
// 	   		alert('checked ' + checkedValue);
// 	   		if(checkedValue == 'partenaire') {
// 		   		$('.choix-partenaire').addClass('displayed');
// 	   		}

// 	   		$('.choix-container').removeClass('displayed');
// 	 });
	
// 	 });

 $(document).ready(function() {
	 
	 $( "input[name='optradio']" ).click(function(e) {
		 	$('.choix-container').removeClass('displayed');
	   		var checkedValue = $("input[name='optradio']:checked").val();
	   		// alert('checked ' + checkedValue);
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

	// $(msRaisonSociale).on('selectionchange', function(){
	// 		alert(JSON.stringify(this.getSelection()));
	// 	});
	});

</script>