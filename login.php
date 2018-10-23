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
</head>

<body>
	<!-- ================================================ TEALIUM =========================== -->

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


			<form class="login" id="login"></form>
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
                        alert('test');
                        console.log("logged");
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
                            //alert('wawa'); 
                        }
                    });
        		</script>



		</div>
		
		<!-- <div id="footer"><div class="copyright_area">Copyright &copy; 2018. All rights reserved</div></div>
 -->
	</div>
	<?php include ('footer.php'); ?>
	

<!-- 	<div class="copyright_area">Copyright &copy; 2018. All rights reserved</div> -->
<script type="text/javascript">

</script>
</body>

</html>


