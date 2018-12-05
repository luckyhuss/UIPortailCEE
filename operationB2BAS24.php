<div class="tbodyClone">
	<div class="panel-group clonedInput" id="clonedInput1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<span class="panel_header_element"><a data-toggle="collapse"
						href="#CollapseOperation">Operation</a></span>
					<button id="btnDel_0" name="btnDel_0" type="button"
						class="remove btn btn-danger">
						<i class="glyphicon glyphicon-trash"></i>
					</button>

					<!-- <span class="panel_header_element"><a data-toggle="collapse" href="#resultatMesDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span> -->
				</h4>
			</div>

			<div id="CollapseOperation" class="panel-collapse collapse in">
				<div class="panel-body">

					<div class="col-md-12 panel-group choisirSecteurPanel">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="choisirSecteur">
									<span class="col-xs-12 col-sm-12 col-md-12 header_label"><label
										for="choisirSecteur">Choisir secteur </label></span>

									<div class="col-xs-6 col-sm-3 col-md-3 input_holder">
										<div class="form-group">
											<span class="form_input"><input type="radio" name="optradio"
												checked></span> <span class="form_label"><label for="Bat">Bat</label></span>
										</div>
									</div>

									<div class="col-sm-3 col-md-3 input_holder">
										<div class="form-group">
											<span class="form_input"><input type="radio" name="optradio"></span> <span class="form_label"><label for="Bar">Bar</label></span>

										</div>
									</div>

									<div class="col-xs-6 col-sm-3 col-md-3 input_holder">
										<div class="form-group">
											<span class="form_input"><input type="radio" name="optradio"></span> <span class="form_label"><label
												for="Industrie">Industrie</label></span>
										</div>
									</div>

									<div class="col-sm-3 col-md-3 input_holder">
										<div class="form-group">
											<span class="form_input"><input type="radio" name="optradio"></span> <span class="form_label"><label for="Agri">Agri</label></span>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>




					<div class="col-md-12 panel-group choisirOperationPanel">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="choisirOperation">
									<span class="col-md-3 col-sm-3 col-xs-12 header_label"><label
										for="choisirOperation">Choisir operation </label></span> <span
										class="col-md-9 col-sm-9 col-xs-12 form_input"> <select
										class="form-control">
											<option value="1">#1 - Fiche 1</option>
											<option value="2">#2 - Fiche 2</option>
											<option value="3">#3 - Fiche 3</option>
											<option value="4">#4 - Fiche 4</option>
											<option value="5">#5 - Fiche 5</option>
									</select>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-9 panel-group critereAsaisirPanel">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="critere">
									<span class="col-md-12 header_label"><label
										for="critereAsaisir">Criteres a saisir </label></span>
									<form id="formCritereSim" class="form_search_bar form-inline"
										action="#" method="POST">
										<div class="col-md-6 col-sm-6 col-xs-12 input_holder">
											<div class="form-group">
												<span class="form_label"><label for="NumAction">Critere 1</label></span>
												<span class="form_input"><input type="checkbox"
													id="numAction" placeholder=""></span>
											</div>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 input_holder">
											<div class="form-group">
												<span class="form_label"><label for="Critere">Critere 2</label></span>
												<span class="form_input"><input type="checkbox" id="Critere"
													placeholder=""></span>
											</div>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 input_holder">
											<div class="form-group">
												<span class="form_label"><label for="Critere">Critere 3</label></span>
												<span class="form_input"><input type="checkbox" id="Critere"
													placeholder=""></span>
											</div>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 input_holder">
											<div class="form-group">
												<span class="form_label"><label for="Critere">Critere 4</label></span>
												<span class="form_input"><input type="checkbox" id="Critere"
													placeholder=""></span>
											</div>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 input_holder">
											<div class="form-group">
												<span class="form_label"><label for="Critere">Critere 5</label></span>
												<span class="form_input"><input type="checkbox" id="Critere"
													placeholder=""></span>
											</div>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 input_holder">
											<div class="form-group">
												<span class="form_label"><label for="Critere">Critere 6</label></span>
												<span class="form_input"><input type="checkbox" id="Critere"
													placeholder=""></span>
											</div>
										</div>

										<div class="col-md-12 submit_button_holder">
											<button type="submit" class="btn btn-primary submit_button">Calculer</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 panel-date">
						<div class="panel-group dateEstimeeCommande">
							<div class="panel panel-default">
								<div class="panel-body">
									<span class="col-md-12 header_label"><label
										for="dateEstimeeCommande">Date estimée commande </label></span>
									<div class="date">
										<div class="input_holder">
											<input class="form-control datepicker"
												placeholder="mm/dd/yyyy" /> <span class="calendar_button"><i
												class="glyphicon glyphicon-calendar"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="panel-group RemunerationRefEstiméePanel">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="stat__data col-md-8">
										<span class="header_label"><label for="RemunerationRefEstimée">Remuneration
												reference/estimée</label></span>
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
									<span class="header_label"><label for="ResultatOperation">Resultat
											pour l'operation</label></span>
									<!--  <span class="header_label"><label for="ResultatOperationCL">CL</label></span>
                                        <p class="header_output">10 kWhc 600 €</p>
                                        <span class="header_label"><label for="ResultatOperationPR">PR</label></span>
                                        <p class="header_output">10 kWhc 600 €</p> -->

									<div class="header-group">
										<span class="header_label"><label for="ResultatOperationCL">CL</label></span>
										<span class="header_output">10 kWhc</span> <span
											class="header_output">600 €</span>
									</div>

									<div class="header-group">
										<span class="header_label"><label for="ResultatOperationPR">PR</label></span>
										<span class="header_output">10 kWhc</span> <span
											class="header_output">600 €</span>
									</div>
									<!-- </div> -->
									<!-- </div> -->
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-md-12 ajouter_operation ">
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

<div class="col-md-12 panel-group resultatCumule">
	<div class="panel panel-default">
		<div class="resultatCumule">
			<div class="panel-body">
				<div class="resultatCumule">
					<div class="stat__data col-md-8">
						<span class="header_label"><label for="ResultatCumule">Resultat
								cumulé</label></span>
						<p class="header_output">10 kWhc 600</p>
					</div>
					<div class="stat_icon_wrapper col-md-4">
						<i class="glyphicon glyphicon-stats"></i>
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
                                <span class="header_label"><label for="mentionDevis">Mention devis</label></span>
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 panel-group mentionFacturePanel">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="mentionFacture">
								<span class="header_label"><label for="mentionFacture">Mention facture</label></span> 
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script>

    var regex = /^(.*)(\d)+$/i;
    var cloneIndex = $(".clonedInput").length;
    if ($(".clonedInput").length == 1) {
        $('.remove').hide();
    } else {
        $('.remove').show();
    }

    function clone() {
        $(this).parents(".clonedInput").clone()
            .appendTo(".tbodyClone")
            .attr("id", "clonedInput" + cloneIndex)
            .find("*")
            .each(function () {
                var id = this.id || "";
                var match = id.match(regex) || [];
                if (match.length == 3) {
                    this.id = match[1] + (cloneIndex);
                }
            })
            .on('click', 'clone', clone)
            .on('click', 'remove', remove);

        if ($(".clonedInput").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }

    }
    function remove() {        
        $(this).parents(".clonedInput").remove();

        if ($(".clonedInput").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }

    }    

    $(document).on("click", ".clone", clone);
    $(document).on("click", ".remove", remove);

</script>