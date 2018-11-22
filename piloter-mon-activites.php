
    <?php include ('filtre.php'); ?>
    
    <?php include 'dossiersEnCours.php'; ?>

    <?php include 'dossiersDeposes.php'; ?>

    <?php include 'dossiersPayes.php'; ?>


<div class="col-md-8 suiviAnnuel">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					data-parent="#accordion" href="#suiviAnnuel" class=""
					aria-expanded="true">Suivi annuel</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					data-parent="#accordion" href="#suiviAnnuel" class=""
					aria-expanded="true"><i class="glyphicon glyphicon-briefcase"></i></a></span>
			</h4>
		</div>
		<div id="suiviAnnuel" class="panel-collapse collapse in"
			aria-expanded="true" style="">
			<div class="panel-body">

				<div class="text-danger isa_error" data-valmsg-summary="true">
					<ul>
						<li>This is a test message</li>
						<li>This is a test message</li>
					</ul>
				</div>

				<div class="row">


					<!-- /*
<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="StatutPortail">Statut Portail</label></span> 
											
											<span class="form_input"> 
    											<select class="form-control">
    												<option value="0"></option>
        											<option value="1">Statut 1</option>
        											<option value="2">Statut 2</option>
        											<option value="3">Statut 3</option>
        											<option value="4">Statut 4</option>
            									</select>
            									</span>
        									
								</div>
							</div>

*/ -->



					<div class="col-md-12 graphHeader">
						<div class="col-md-6 form-group">
							<span class="form_label"><label for="statut">Statut</label></span>

							<span class="form_input"> <select class="form-control">
									<option value="1">En cours</option>
									<option value="2">Deposé</option>
									<option value="4">Payé</option>
							</select>
							</span>
						</div>
						<h6 class="col-md-6" style="color: red">
							<i>** Pas de webservices O<sub>2</sub> **
							</i>
						</h6>
					</div>

					<div id="chartContainer" class="col-md-12">
						<canvas id="myChart"></canvas>
					</div>




				</div>

				<!-- Closing collapsible wrapper -->
			</div>
		</div>
	</div>


</div>

<!-- End of left part -->

<!-- Start of right part -->
<div class="col-md-4 exportXLS">

	<!-- reporting xls -->
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<span class="panel_header_element"><a data-toggle="collapse"
						href="#collapseReportingXLS">Exporter au format XLS</a></span> <span
						class="panel_header_element"><a data-toggle="collapse"
						href="#collapseReportingXLS"><i class="glyphicon glyphicon-file"></i></a></span>
				</h4>
			</div>

			<div id="collapseReportingXLS" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10">Criteres</div>
						<div class="col-md-2">
							<a
								href="http://www.nature.com/nature/journal/v461/n7265/extref/nature08489-s3.xls"
								download="processus_3" target="_blank"><i
								class="glyphicon glyphicon-download-alt"></i></a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>


</div>




