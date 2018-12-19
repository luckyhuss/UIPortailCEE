<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TOTAL -</title>
<link rel="icon" type="image/png" href="assets/img/total-icon.png">


<link href="assets/css/main.css" rel="stylesheet">

<!-- layout.css only for error and logout pages -->
<link href="assets/css/simple-layout.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">


</head>
<body>

	<div class="page_banner">
		<div class="page_total-logo">
			<img alt="" src="assets/img/trans-back-total.png">
		</div>
	</div>

	<div class="page_container">

		<div class="register_page">


			<div class="login" id="login"></div>

			<!-- CONTAINER -->
			<!-- CONTENT -->
			<div class="login_wrapper">
				<!-- Emplacement des différents screenset à intégrer dans les menus sous forme de tab et les popin éventuelles -->

				<!-- >div id="cee-login-container"></div-->
				<!-- gigya.js script should only be included once -->
				<script type="text/javascript">
				window.__gigyaConf = { enableSSOToken: true };
			</script>

				<script type="text/javascript"
					src="https://cdns.gigya.com/js/gigya.js?apiKey=3_uqyrM6IxD2UABJ48ldLyTKDuY3MxBl53jez4riy1nWRi2FHYav0tt9_Chiohe3OJ"></script>
				<script>
				var customLangParamsGigya = {
					"GIGYA_LOGIN_SCREEN_CAPTION": 'Portail CEE'
				};

				
				gigya.accounts.showScreenSet({
					screenSet: 'CEE-Custom-RegistrationLogin',
					startScreen: 'gigya-reset-password-screen',
					customLang: customLangParamsGigya,
					containerID: 'login',
					lang:'fr'
				});
						</script>
						
						
		</div>


			<button id="logoutButton" class="hide"
				onClick="gigya.accounts.logout({callback: res => { window.location.reload()}})">Deconnexion</button>


		</div>


	</div>
	

	<?php include ('footer.php'); ?>

</body>
</html>