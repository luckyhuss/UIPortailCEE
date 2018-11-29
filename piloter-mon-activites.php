
    <?php include ('filtre.php'); ?>
    
    <?php include 'dossiersEnCours.php'; ?>

    <?php include 'dossiersDeposes.php'; ?>

    <?php include 'dossiersPayes.php'; ?>


<div class="panel-group">
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

				<?php include 'common-message-detail.php'; ?>

				<div class="row">


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

					<div id="chartContainer" class="col-md-8">
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


<!-- reporting xls -->
<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseReportingXLS">Exporter Excel</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseReportingXLS"><i class="glyphicon glyphicon-file"></i></a></span>
			</h4>
		</div>

		<div id="collapseReportingXLS" class="panel-collapse collapse in">
			<div class="panel-body">

				<form id="form_content" class="form_exporter" action="#"
					method="POST">

					<div class="header-group">
						<span class="header_label"><label for="critere">Critères</label></span>
						<span class="header_output form_input critere-form_input"> <select
							class="form-control">
								<option value='0'></option>
								<option value='1'>Critères 1</option>
								<option value='2'>Critères 2</option>
								<option value='3'>Critères 3</option>
								<option value='4'>Critères 4</option>
						</select>
						</span> <span class="submit_button_holder"><button type="submit"
								class="btn btn-primary submit_button" name="btn-exporter">Exporter</button></span>
					</div>


				</form>
			</div>
		</div>

	</div>
</div>







