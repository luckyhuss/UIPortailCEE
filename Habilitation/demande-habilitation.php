<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TOTAL -</title>
<link rel="icon" type="image/png" href="../assets/img/total-icon.png">
<!-- <link href="../assets/css/main.css" rel="stylesheet"> -->
<link href="../assets/css/habilitation.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="../assets/css/simple-layout.css" rel="stylesheet">


<!-- Bootstrap -->
<link href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">
	
<link href="../node_modules/magicsuggest/css/magicsuggest.css" rel="stylesheet" type="text/css">
<script src="../assets/js/jquery.min.js"></script>
<script src="../node_modules/magicsuggest/js/magicsuggest.js"></script>


</head>
<body>

	<header>

		<nav class="navbar navbar-default navbar-fixed-top">

			<div class="page_banner">
				<div class="page_total-logo">
					<img alt="" src="../assets/img/total-logo.png">
				</div>
			</div>
		</nav>
	</header>

	<section class="page_area">
		<div class="container-fluid">
			<div class="row flex-container">

				<section class="demande-main">
					<div class="demande-content" > 
        			 	<?php include ('content-demande-habilitation.php'); ?>
        			</div>
				</section>

			</div>
		</div>
	</section>
    	
    	<?php include ('../footer.php'); ?>

	</body>
</html>