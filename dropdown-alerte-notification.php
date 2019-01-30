<div class="dropdown-alerte-notification displayed"
	id="dropdown-alerte-notification">
	<div class="arrow-up"></div>
	<div class="header-alerte-notification"></div>




	<div class="content-alerte-notification">

		<fieldset class="fieldset-alertes">
			<legend>Alerte</legend>
			<div class="fieldset-container">
				<ul class="notification-list">

                <?php
                for ($i = 0; $i < 5; $i ++) {
                    ?>
                        									<li><a
                	href="/uiportailcee?pageLoaded=Dossiers&id=<?=$i ?>"> <span
                		class="form_label"><label for="numDossiers">&#x2116; Dossiers</label></span>
                		<span class="descriptAlerte">45678102</span> <span
                		class="form_label"><label for="nature-piece">Statut de la pièce</label></span>
                		<span class="descriptAlerte">En attente</span> <span
                		class="form_label"><label for="nature-piece">Nature de la pièce</label></span>
                		<span class="descriptAlerte">Bon de commandes test here also</span>
                
                </a>
                	<hr></li>
                        									
				<?php
                }
                
                for ($i = 0; $i < 5; $i ++) {
                ?>
					<li><a
						href="/uiportailcee?pageLoaded=Dossiers&id=<?=$i ?>"> <span
							class="form_label"><label for="numDossiers">&#x2116; Dossiers</label></span>
							<span class="descriptAlerte">321548836</span> <span
							class="form_label"><label for="nature-piece">Statut de la pièce</label></span>
							<span class="descriptAlerte">Rejeté</span> <span
							class="form_label"><label for="statut">Raison d'inégibilité</label></span>
							<span class="descriptAlerte">Bon de commandes test here also</span>

					</a>
						<hr></li>
        									
				<?php
                }
                ?>
                                            
                                            
				</ul>

				<div class="submit_button_holder">
					<a href="/uiportailcee?pageLoaded=HistoriqueAlertes&tabs=alerte"
						class="btn btn-primary submit_button btn-voir-alerte"
						role="button">Voir plus</a>
				</div>


			</div>
		</fieldset>


		<fieldset class="fieldset-notifications">
			<legend>Notifications</legend>
			<div class="fieldset-container">
				<ul class="notification-list">
									
					<?php
                    for ($i = 0; $i < 5; $i ++) {
                        ?>
						<li><a href="/uiportailcee?pageLoaded=Dossiers&id=<?=$i ?>"> <span
							class="form_label"><label for="numDossiers">&#x2116; Dossiers</label></span>
							<span class="descriptAlerte">45678102</span> <span
							class="form_label"><label for="nature-piece">Statut de la pièce</label></span>
							<span class="descriptAlerte">En attente</span> <span
							class="form_label"><label for="nature-piece">Nature de la pièce</label></span>
							<span class="descriptAlerte">Bon de commandes test here also</span>

							</a>
						<hr></li>
									
					<?php
                    }
                    
                                        for ($i = 0; $i < 5; $i ++) {
                                        ?>
									<li><a href="/uiportailcee?pageLoaded=Dossiers&id=<?=$i ?>"> <span
							class="form_label"><label for="numDossiers">&#x2116; Dossiers</label></span>
							<span class="descriptAlerte">321548836</span> <span
							class="form_label"><label for="nature-piece">Statut de la pièce</label></span>
							<span class="descriptAlerte">Rejeté</span> <span
							class="form_label"><label for="statut">Raison d'inégibilité</label></span>
							<span class="descriptAlerte">Bon de commandes test here also</span>

					</a>
						<hr></li>
									
									<?php
                                    }
                                    ?>
                                    
                                    
								</ul>

				<div class="submit_button_holder">
					<a href="/uiportailcee?pageLoaded=HistoriqueAlertes&tabs=notif"
						class="btn btn-primary submit_button btn-voir-alerte"
						role="button">Voir plus</a>
				</div>


			</div>
		</fieldset>

	</div>



	<div class="refresh-alerte-notification">
		<a href="#"><span class="glyphicon glyphicon-refresh"
			title="Rafraichir"></span></a>
	</div>

</div>