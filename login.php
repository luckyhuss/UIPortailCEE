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
                    "LOGINID_100164167086612030_PLACEHOLDER" : "Saisissez votre Email",
                    "PASSWORD_145545960497275740_PLACEHOLDER":"Saisissez votre Mot de passe",
                    "SUBMIT_1050490235864925_VALUE":"Se connecter"
                    //"this_field_is_required":'login is required'
                };

                var customButtons= [];
                
                
                gigya.socialize.addEventHandlers({
                    onLogin: function() {
                        console.log("logged");
                    
//                         	document.getElementById('overlay').style.display='block';
//                         	}, 5000);
                        //document.getElementById('overlay').style.display='block';
						document.getElementById('login').style.display='none';
                        mscConfirm("test.portail.cee.gfx@yopmail.com. ", "Vous serez connecté automatiquement en tant qu'utilisateur ","Cliquez sur OK pour continuer ou sur Annuler pour vous connecter avec un autre compte.", 
                            function()	{
                      		  alert("Post deleted");
                      		},
                      		function() {
                      		  alert('Cancelled');
                      			document.getElementById('login').style.display='block';
                  			}
                  		);
                        
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
                        	
                        	//document.getElementById('overlay').style.display='block';
                            		$('#myModal').find(".modal-body").text("Une erreur s'est produite lors de la connexion. Veuillez réessayer ultérieurement.");  
                        		    $('#loginModal').modal('show');
                        		
                        },
                     
                        onAfterScreenLoad: function () {
                            document.getElementById('login').style.display='block';
                            //document.getElementById('input.gigya-input-submit').style.display='none'; 
//                             setTimeout(function(){
//                             	$("input.gigya-input-submit").val('Login');
//                             }, 200); 
                            	//document.getElementById('input.gigya-input-submit').style.display='block'; 
                            
                        }
                    });

                    
                  
        		</script>


		<?php include ('footer.php'); ?>
		</div>

		<!-- <div id="footer"><div class="copyright_area">Copyright &copy; 2018. All rights reserved</div></div>
 -->

		<div id="loginModal" class="modal fade popin-alerte">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn btn-default"
							data-dismiss="modal">x</button>
						<h4 id="modalTitle" class="modal-title"></h4>
					</div>
					<div id="modalBody" class="modal-body">
						<ul class="list-group">
							<li class="list-group-item"><div class="msc-popin-alerte"></div>
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
	</div>

	<script src="assets/js/auth.js"></script>
	<div class="msc-confirm" style="display: none;">
		<!-- <div class="msc-overlay"></div> -->
		<div class="msc-content msc-confirm--animate">
			<div class="msc-popin-alerte"></div>
			<div class="msc-body">
				<span class="msc-connect-message"></span>
				<h4 class="msc-utilisateur"></h4>
				<span class="msc-etape-message"></span>
			</div>
			<div class="msc-action">
				<button class="msc-ok">OK</button>
				<button class="msc-cancel">Annulé</button>
			</div>
		</div>
	</div>



</body>

</html>


