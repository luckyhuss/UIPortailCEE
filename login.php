<!DOCTYPE html>


<html lang="fr-FR" xmlns="http://www.w3.org/1999/xhtml">


<head>
<title>TOTAL - Portail CEE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="assets/img/total-icon.png">
<link href="assets/css/auth.css" rel="stylesheet">
<link href="assets/css/simple-layout.css" rel="stylesheet">
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
<script src="assets/js/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- ================================================ TEALIUM =========================== -->


	<div id="overlay" style="display: none;">

		<div class="loader"></div>
		<span class="loading-text">Connection in progress</span>

	</div>

	<div class="banner_container">
		<div class="total-logo_container">
			<img alt="" src="assets/img/trans-back-total.png">
		</div>
	</div>

	<div class="login_page">

		<!-- CONTAINER -->

		<!-- CONTENT -->
		<div class="login_wrapper">


			<!-- Emplacement des différents screenset à intégrer dans les menus sous forme de tab et les popin éventuelles -->


			<form class="login display" id="login"></form>
			<!-- >div id="cee-login-container"></div-->

			<!-- gigya.js script should only be included once -->
			<script type="text/javascript">
                window.__gigyaConf = {enableSSOToken:true};
                </script>

			<script type="text/javascript"
				src="https://cdns.gigya.com/js/gigya.js?apiKey=3_uqyrM6IxD2UABJ48ldLyTKDuY3MxBl53jez4riy1nWRi2FHYav0tt9_Chiohe3OJ">
                </script>
			<script>
                var customLangParamsGigya = {
                    "GIGYA_LOGIN_SCREEN_CAPTION":'Portail CEE',
                    //"this_field_is_required":'login is required'
                };
                
                
                gigya.socialize.addEventHandlers({
                    onLogin: function() {
                        console.log("logged");
                    
//                         	document.getElementById('overlay').style.display='block';
//                         	}, 5000);
                        //document.getElementById('overlay').style.display='block';

                        mscConfirm("", "Vous serez connecté automatiquement en tant qu'utilisateur 'test.portail.cee.gfx@yopmail.com'. Cliquez sur OK pour continuer ou sur Annuler pour vous connecter avec un autre compte.", function(){
                  		  alert("Post deleted");
                  		},
                  		function() {
                  		  alert('Cancelled');
                  		});
                        
                    }
                });
                    
                    gigya.accounts.showScreenSet({
                        screenSet: 'CoreModel-Custom-RegistrationLogin',
                        startScreen:'gigya-login-screen',
                        customLang: customLangParamsGigya,
                        //containerID: 'cee-login-container',
                        containerID: 'login',
                        lang:'fr', 
                        onError: function () { 
                        	
                        	document.getElementById('overlay').style.display='block';
                            		//$('#myModal').find(".modal-body").text("Une erreur s'est produite lors de la connexion. Veuillez réessayer ultérieurement.");  
                        		    //$('#loginModal').modal('show');
                        		
                        },
                        onAfterScreenLoad: function () {
                            document.getElementById('login').style.display='block';
                        }
                    });
        		</script>



		</div>

		<!-- <div id="footer"><div class="copyright_area">Copyright &copy; 2018. All rights reserved</div></div>
 -->

		<div id="loginModal" class="modal fade popin-alerte">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn btn-default js-close"
							data-dismiss="modal">x</button>
						<h4 id="modalTitle" class="modal-title"></h4>
					</div>
					<div id="modalBody" class="modal-body">
						<ul class="list-group">
							<li class="list-group-item"><span class="img-infobulle"><img
									src="assets/img/popin-alerte.png" width="60px" height="60px"></span>
							</li>
							<li class="list-group-item">Une erreur s'est produite lors de la
								connexion. Veuillez réessayer ultérieurement</li>

						</ul>


					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn js-close btn-default"
									data-dismiss="modal">Fermer</button> -->
					</div>
				</div>
			</div>
		</div>


		<!--  <div class="modal fade popin-alerte" id="loginModal" tabindex="-1" -->
		<!-- 		role="dialog" aria-labelledby="myModalLabel"> -->
		<!-- 		<div class="modal-dialog errorModal" role="document"> -->
		<!-- 			<div class="modal-content"> -->
		<!-- 				<div class="modal-header"> -->
		<!-- 					<button type="button" class="btn btn-default js-close" -->
		<!-- 						data-dismiss="modal">x</button> -->
		<!-- 					<h4 class="modal-title" id="myModalLabel"></h4> -->
		<!-- 				</div> -->

		<!-- 				<div class="modal-body"> -->
		<!-- 					<ul class="list-group"> -->
		<!-- 						<li class="list-group-item"><span class="img-infobulle"><img -->
		<!-- 								src="assets/img/popin-alerte.png" width="60px" height="60px"></span> -->
		<!-- 						</li> -->
		<!-- 						<li class="list-group-item">Une erreur s'est produite lors de la connexion. Veuillez -->
		<!-- 						réessayer ultérieurement.</li> -->

		<!-- 					</ul> -->


		<!-- 				</div> -->

		<!-- 				<div class="modal-footer"> -->
		<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> -->
		<!-- 				</div> -->
		<!-- 			</div> -->
		<!-- 		</div> -->
		<!-- 	</div> -->


	</div>

	<script src="assets/js/msc-script.js"></script>
	<div class="msc-confirm" style="display: none;">
		<div class="msc-overlay">
			<!-- <button class="msc-close">×</button> -->
		</div>
		<div class="msc-content msc-confirm--animate">
			<h3 class="msc-title">Delete?</h3>
			<div class="msc-body"></div>
			<div class="msc-action">
				<button class="msc-ok">OK</button>
				<button class="msc-cancel">Annulé</button>
			</div>
		</div>
	</div> 
	
    
	<?php include ('footer.php'); ?>
	

<!-- 	<div class="copyright_area">Copyright &copy; 2018. All rights reserved</div> -->
	<script type="text/javascript">

</script>




</body>

</html>


