<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TOTAL - </title>
<link rel="icon" type="image/png" href="assets/img/total-icon.png">

<!-- Bootstrap -->
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">

<!-- Datatables -->
<link rel="stylesheet" type="text/css" href="node_modules/datatables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="node_modules/datatables/DataTables/css/jquery.dataTables.min.css"/>

<link rel="stylesheet" type="text/css" href="node_modules/datatables/DataTables/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="node_modules/responsive/css/responsive.bootstrap.min.css"/>	

<link rel="stylesheet" type="text/css" href="node_modules/full-calendar/css/fullcalendar.min.css"/>
<!-- link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet"-->


<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">


<?php 
$cssLoaded = "ADMIN";

$persona = ($cssLoaded == "AS24") ? "-AS24": "";
$isGraph = false;

?>

<link href="assets/css/<?php echo $cssLoaded?>.css" rel="stylesheet">


<link href="node_modules/magicsuggest/css/magicsuggest.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="node_modules/magicsuggest/css/magicsuggest.css" rel="stylesheet" type="text/css">
<style>
body { background-color: #fafafa; }
.container { margin-top: 150px; max-width: 350px; }
</style>

<!-- include summernote css/js -->
<link href="node_modules/summernote/dist/summernote.css" rel="stylesheet">


</head>

<body>

	<?php 
	   $pageLoaded = "accueil";
	   $activeHome = "";
	   $activeSimuler = "";
	   $activeRechercher = "";
	   $activeCreer = "";
	   $activeDossier = "";
	   $activePiloter = "";
	   $activeInfo = "";
	   $activeAdminUtilisateur = "";
	   $activeAdminPermission = "";
	   $activeAdminContenu = "";
	   $openAdmin = "";
	   $activeAdmin = "";
	   
	   if (isset($_GET) && $_GET != null) {
	      
	       switch ($_GET['pageLoaded']) {
	           case 'Simuler':
	               $activeSimuler = "active-link";
	               $pageLoaded = "under-construction";
	               break;
	           
	           case 'Creer':
	               $activeCreer = "active-link";
	               $pageLoaded = "under-construction";
	               break;
	               
	           case 'Rechercher':
	               $activeRechercher = "active-link";
	               $pageLoaded = "rechercher-commercial".$persona;
	               break;
	           
	           case 'Dossiers':
	               $activeDossier = "active-link";
	               $pageLoaded = "recherche-dossiers";
	               break;
	           
	           case 'Piloter':
	               $activePiloter = "active-link";
	               $pageLoaded = "piloter-mon-activites";
	               $isGraph = "true";
	               break;
	            
	           case 'Info':
	               $activeInfo = "active-link";
	               $pageLoaded = "info-cee";
	               break;
	           case 'AdminContenu':
	               $activeAdmin = "active-link";
	               $activeAdminContenu = "active-link";
	               $pageLoaded = "admin-contenu";
	               $openAdmin = "in";
	               break;
	           case 'AdminUtilisateur':
	               $activeAdmin = "active-link";
	               $activeAdminUtilisateur = "active-link";
	               $pageLoaded = "admin-utilisateur";
	               $openAdmin = "in";
	               break;
	           case 'AdminPermission':
	               $activeAdmin = "active-link";
	               $activeAdminPermission = "active-link";
	               $pageLoaded = "admin-permission";
	               $openAdmin = "in";
	               break;
	           default:
                   $activeHome = "active-link";
                   $pageLoaded = ($cssLoaded == 'ADMIN') ? "admin-accueil":"accueil";
	       }
	       
	   }else{
	       $activeHome = "active-link";
	       $pageLoaded = ($cssLoaded == 'ADMIN') ? "admin-accueil":"accueil";
	   }
	?>

   <?php include("header.php"); ?>
   <script src="assets/js/jquery.min.js"></script>
   <!-- script src="assets/js/jquery.js"></script-->
   <?php include("page-content.php"); ?>
   
   <?php include("footer.php"); ?>

   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed  -->
    
    
    
    <script type="text/javascript" src="node_modules/full-calendar/js/moment.min.js"></script>
    <script type="text/javascript" src="node_modules/full-calendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="node_modules/full-calendar/js/lang/fr.js"></script>
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- Datatables scripts -->
    <script type="text/javascript" src="node_modules/datatables/datatables.min.js"></script>
    
    <!-- ChartJS -->
    <script src="assets/js/Chart.bundle.min.js"></script>	
    
    <!-- Other JS scripts -->
    <script src="assets/js/bootstrap-datepicker.js"></script>
    
    <?php
    if($isGraph) {
    ?>
    <script src="assets/js/mygraphs.js"></script>
    <?php 
    }
    ?>
    <script type="text/javascript" src="node_modules/datatables/DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="node_modules/datatables/DataTables/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="node_modules/responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/js/general.js"></script>
    <script type="text/javascript" src="node_modules/responsive/js/responsive.bootstrap.min.js"></script>
    

<script src="node_modules/magicsuggest/js/magicsuggest.js"></script>

</body>
</html>