<header>

	<nav class="navbar navbar-default navbar-fixed-top">

		<div class="navbar-area">

			<div class="header_left">
				<div class="logo_wrapper">
					<a href="/uiportailcee/index.php"> <picture>
						<source srcset="assets/img/<?php echo $cssLoaded?>-small.png"
							media="(max-width: 1024px)">
						<img src="assets/img/<?php echo $cssLoaded?>-large.png"> </picture>
					</a>
				</div>
			</div>

			<div class="mobile_nav_trigger">
				<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
			</div>

			<div class="header_center"></div>

			<div class="header_right">

				<div class="icon_container">

					<div class="icon_holder">
						<a href="#"><span class="glyphicon glyphicon-off"
							aria-hidden="true" title="Déconnexion"></span></a>
					</div>

					<div class="icon_holder dropdown">
						<span class="disabled-icon glyphicon glyphicon-th"
							data-target="#dropdown1" class="dropdown-toggle"
							data-toggle="dropdown" aria-hidden="true"
							title="Prévu pour le lot 2"> </span>
						<!-- span class="badge badge-notify">99+</span-->
					</div>

					<div class="icon_holder">
						<span class="glyphicon glyphicon-bell" title="Notification"></span>
						<span class="badge badge-notify">9+</span>


						<div class="dropdown-alerte-notification displayed"
							id="dropdown-alerte-notification">
							<div class="arrow-up"></div>

							<div class="header-alerte-notification"></div>

							<div class="content-alerte-notification">
							
							
								<ul class="notification-list">
									
									<?php
                                    for ($i = 0; $i < 5; $i ++) {
                                    ?>
									<li>
									
    									<a href="/uiportailcee?pageLoaded=Dossiers&id=<?=$i ?>"> 
    									
    									
    									<span class="form_label"><label for="numDossiers">&#x2116; Dossiers</label></span>
    									<span class="descriptAlerte">45678102</span>
    											
    								    <span class="form_label"><label for="nature-piece">Statut de la pièce</label></span>
    								    <span class="descriptAlerte">En attente</span>
    												
    									<span class="form_label"><label for="nature-piece">Nature de la pièce</label></span>
    									<span class="descriptAlerte">Bon de commandes test here also</span>
    
    									</a>
										<hr>
									</li>
									
									<?php
                                    }
                                    ?>
                                    
                                    
                                    <?php
                                    for ($i = 0; $i < 5; $i ++) {
                                    ?>
									<li>
									
    									<a href="/uiportailcee?pageLoaded=Dossiers&id=<?=$i ?>"> 
    									
    									
    									<span class="form_label"><label for="numDossiers">&#x2116; Dossiers</label></span>
    									<span class="descriptAlerte">321548836</span>
    											
    								    <span class="form_label"><label for="nature-piece">Statut de
    													la pièce</label></span> 
    													<span class="descriptAlerte">Rejeté</span>
    													
    									<span class="form_label"><label for="statut">Raison d'inégibilité</label></span>
    									<span class="descriptAlerte">Bon de commandes test here also</span>
    												
    									</a>
										<hr>
									</li>
									
									<?php
                                    }
                                    ?>
                                    
                                    
								</ul>
								
								<div class="submit_button_holder">
											<a href="/uiportailcee?pageLoaded=HistoriqueAlertes" class="btn btn-primary submit_button btn-voir-alerte"
												role="button">Voir plus</a>
										</div>
								
							</div>

							<div class="refresh-alerte-notification">
								<a href="#"><span class="glyphicon glyphicon-refresh"
									title="Rafraichir"></span></a>
							</div>

						</div>



					</div>

					<div class="user_profile_holder">
						<div class="user_profile">
							<span class="user-name-holder">Pierre Michel Dupont</span><span
								class="filiale-ID-holder">(<?php echo $cssLoaded ?>)</span>
						</div>
					</div>

					<div class="icon_holder">
						<span class="glyphicon glyphicon-user displayed" title="Profile"></span>

						<div class="dropdown-user-profile displayed"
							id="dropdown-user-profile">
							<div class="arrow-up"></div>

							<div class="header-user-profile"></div>
							<div class="content-user-profile">
								<span class="user-name-holder">Pierre Michel Dupont</span><span
									class="filiale-ID-holder">(<?php echo $cssLoaded ?>)</span>
							</div>
							<div class="footer-user-profile"></div>

						</div>

						<ul class="displayed">
							<li class="dropdown user">
								<!-- 							<a href="#" class="dropdown-toggle" --> <!-- 								data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span>  -->
								<!-- 							</a> -->

								<ul class="dropdown-menu-user-profile displayed"
									id="dropdown-menu-user-profile">
									<li class="arrow-up"></li>
									<li class="divider"></li>
									<li>
										<div class="content-user-profile">
											<span class="user-name-holder">Pierre Michel Dupont</span><span
												class="filiale-ID-holder">(<?php echo $cssLoaded ?>)</span>
										</div>
									</li>
									<li class="divider"></li>
								</ul>
							</li>
						</ul>



					</div>

					<div class="notifications_area"></div>
					<div class="user_profile_area"></div>


				</div>

			</div>
			<!-- header_right -->

		</div>
		<!-- end navbar-area -->

	</nav>

</header>
<script>
$(document).on('click', function (e) {
    if (($(e.target).closest(".glyphicon-bell").length === 0  
    	    && (!$("#dropdown-alerte-notification").is(e.target) && $("#dropdown-alerte-notification").has(e.target).length === 0))) {
        //console.log("removed : " + $("#dropdown-alerte-notification").has(e.target).length);
       
        $("#dropdown-alerte-notification").addClass("displayed");
    }

    if (($(e.target).closest(".glyphicon-user").length === 0  
    	    	    && (!$("#dropdown-user-profile").is(e.target) && $("#dropdown-user-profile").has(e.target).length === 0))) {
        //console.log("removed : " + $("#dropdown-alerte-notification").has(e.target).length);
        $("#dropdown-user-profile").addClass("displayed");
        
    }
});


// On clicking on User [ user profile ]
$('.glyphicon-user').on('click', function(e) {
	console.log('user clicked');
	$('.dropdown-user-profile').toggleClass("displayed");
	e.preventDefault();
	  
});


// On clicking on bell [ alerte notification ] 
$('.glyphicon-bell').on('click', function(e) {
	console.log('bell clicked');

  	// close user profile if already open
  	//$('.dropdown-menu-user-profile').addClass("displayed");	

  	$('.dropdown-alerte-notification').toggleClass("displayed"); //you can list several class names 
  	e.preventDefault();
  
});



</script>

