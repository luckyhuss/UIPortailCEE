<!-- Calendar -->
<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseCalendrier">Calendrier</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseCalendrier"><i class="glyphicon glyphicon-calendar"></i></a></span>
			</h4>
		</div>

		<div id="collapseCalendrier" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="mois">
					<div class="row">
						<div class="col-md-12">
							<div id="fullCalendarEcheance"></div>
						</div>
					</div>

					<div class="grc-calendar-legend">
						<ul class="list-group">
							<li class="list-group-item">
								<span class="echeance-change"></span>Echéance Dossier
							</li>
							
						</ul>
					</div>

				</div>

				<div id="fullCalModal" class="modal fade">
					<div class="modal-dialog popin-info">
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="btn btn-default js-close" data-dismiss="modal">x</button>
								<h4 id="modalTitle" class="modal-title"></h4>
							</div>
							<div id="modalBody" class="modal-body"></div>
							<div class="modal-footer">
								<!-- <button type="button" class="btn js-close btn-default"
									data-dismiss="modal">Fermer</button> -->
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- Calendar -->

 <?php include ('resultatDossierCalendrier.php'); ?>
