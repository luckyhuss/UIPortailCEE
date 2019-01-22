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

	<div class="banner_container">
		<div class="total-logo_container">
			<img alt="" src="assets/img/trans-back-total.png">
		</div>
	</div>

	<div class="reset_page">

		<!-- CONTAINER -->

		<!-- CONTENT -->
		<div class="reset_wrapper">


			<form class="reset" id="reset"></form>

		
			<script type="text/javascript">
                window.__gigyaConf = {enableSSOToken:true};
                </script>

			<script type="text/javascript"	src="https://cdns.gigya.com/js/gigya.js?apiKey=3_uqyrM6IxD2UABJ48ldLyTKDuY3MxBl53jez4riy1nWRi2FHYav0tt9_Chiohe3OJ"></script>
			
			<script>
			
			 var customLangParamsGigya = {
				        "GIGYA_LOGIN_SCREEN_CAPTION": 'Portail CEE',
				        "LINK_27440782544695820_LABEL": "Retour à la page de connexion"
				        };

						gigya.accounts.showScreenSet({
							screenSet: 'CEE-Custom-RegistrationLogin',
							startScreen: 'gigya-reset-password-screen',
							customLang: customLangParamsGigya,
							containerID: 'reset',
							lang:'fr'
						});

                    
                  
        	</script>


		<?php include ('footer.php'); ?>
		</div>


	</div>





</body>

</html>


