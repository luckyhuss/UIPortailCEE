<div class="tbodyClone">
	<div class="panel-group clonedOP" id="clonedOP1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<span class="panel_header_element"><a data-toggle="collapse"
						href="#CollapseOperation">Opération &#x2116; <span id="numId_OP0"
							class="numId">1</span></a></span>
					<button id="btnDel_0" name="btnDel_0" type="button"
						class="remove btn btn-circle btn-danger">
						<i class="glyphicon glyphicon-minus"></i>
					</button>

				</h4>
			</div>

			<div id="CollapseOperation" class="panel-collapse collapse in">
				<div class="panel-body">

					<?php include '_ChoixOperation.php'; ?>

					<?php include '_CritereSaisie.php'; ?>

					<?php include '_DateEstimee.php'; ?>



					<div class="col-md-12 resultatOperationPanel">
						<!-- <div class="panel panel-default">
							<div class="panel-body">
								<div class="resultatOperation">

									<span class="header_label"><label for="ResultatOperation">Résultat
											pour l'opération</label></span>


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

								</div>
							</div>
						</div> -->

						<!-- <fieldset class="fieldset-margin-bottom" id="resultatOpe">
							<legend>Résultat</legend>
							<div class="fieldset-container">
								<div class="resultatOperation">
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

								</div>
							</div>
						</fieldset> -->

						<fieldset class="fieldset-margin-bottom choisirResultatOpePanel displayed" id="resultatOperationPanel_OP0">
							<legend>Résultat</legend>

							<div class="fieldset-container">
								<div class="header-group col-md-12" id="sectionResultatParOperation_OP0">

									<div class="repartition-section col-md-12">
										<span class="repartition-section-header">Calcul CUMAC</span>

										<div class="col-sm-6 col-md-4 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatOperationCL">Classique</label></span>
												<span class="header_output" id="resultatOperationCL_cumac_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-4 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatOperationPR">Précarité</label></span>
												<span class="header_output" id="resultatOperationP_cumac_OP0">10 kWhc</span>
											</div>
										</div>

									</div>

									<div class="repartition-section col-md-4">
										<span class="repartition-section-header">Calcul AIDE Beneficiare</span>
										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatBenHP_aide">Hors précarité</label></span>
												<span class="header_output" id="resultatBenHPAide_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatBenP_aide">Précarité</label></span>
												<span class="header_output" id="resultatBenPAide_OP0">10 kWhc</span>
											</div>
										</div>
									</div>

									<div class="repartition-section col-md-4">
										<span class="repartition-section-header">Calcul AIDE Pro</span>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatProHP_aide"> Hors précarité</label></span>
												<span class="header_output" id="resultatProHPAide_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatProP_aide"> Précarité</label></span>
												<span class="header_output" id="resultatProPAide_OP0">10 kWhc</span>
											</div>
										</div>
									</div>

									<div class="repartition-section col-md-4">
										<span class="repartition-section-header">Calcul AIDE Apporteur affaire</span>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatAAHP_aide"> Hors précarité</label></span>
												<span class="header_output" id="resultatAAHPAide_OP0">10 kWhc</span>
											</div>
										</div>

										<div class="col-sm-6 col-md-12 input_holder">
											<div class="header-group">
												<span class="header_label"><label for="ResultatAAP_aide"> Précarité</label></span>
												<span class="header_output" id="resultatAAPAide_OP0">10 kWhc</span>
											</div>
										</div>
									</div>

								</div>
							</div>
						</fieldset>

					</div>

					<!-- to cross check -->

					<div class="criteresEligibilitePanel">

						<fieldset class="fieldset-margin-bottom choisirCriteresEligibilitePanel displayed" id="criteresEligibilitePanel_OP0">
							<legend>Critères d'éligibilité</legend>

							<div class="fieldset-container" id="sectionCriEliParOperation_OP0">

								<div class="input_holder">
									<div class="header-group">
										<span class="header_output" id="Critere_eligibilite_OP0">Critères d'éligibilité 1</span>
									</div>
								</div>

								<div class="input_holder">
									<div class="header-group">
									<span class="header_output" id="Critere_eligibilite_OP0">Critères d'éligibilité 2</span>
									</div>
								</div>

							</div>
						</fieldset>

					</div>

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
	<a href="javascript:void(0)"  id="calculateCumac"  class="btn btn-primary submit_button" role="button">Calculer</a>
</div>


