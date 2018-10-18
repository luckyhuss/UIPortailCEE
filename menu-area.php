<!-- Sidebar Holder -->
<nav id="sidebar" class="sidebar">

	<div class="nav_area" id="nav_area">

<!-- <ul class="nav sidebar-nav"> -->
<!--                 <li class="nav-menu home"> -->
<!--                    <h4 class="panel-title"> -->
<!-- 						<a href="/uiportailcee/index.php"> <span class="glyphicon glyphicon-home" -->
<!-- 							aria-hidden="true"></span> <span class="menu_title">Accueil</span></a> -->
<!-- 					</h4> -->
<!--                 </li> -->
<!--                 <li class="nav-menu"> -->
<!--                     <h4 class="panel-title"> -->
<!-- 						<a href="/uiportailcee/index1.php"><span class="glyphicon glyphicon-signal" -->
<!-- 							aria-hidden="true"></span> <span class="menu_title">Simuler</span></a> -->
<!-- 					</h4> -->
<!--                 </li> -->
<!--                 <li class="nav-menu"> -->
<!--                     <h4 class="panel-title"> -->
<!-- 						<a href="/uiportailcee/index2.php"><span class="glyphicon glyphicon-file" -->
<!-- 							aria-hidden="true"></span> <span class="menu_title">Créer</span></a> -->
<!-- 					</h4> -->
<!--                 </li> -->
<!--                 </ul> -->


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu home">
					<h4 class="panel-title">
						<a href="/uiportailcee/index.php"> <span class="glyphicon glyphicon-home"
							aria-hidden="true"></span> <span class="menu_title">Accueil</span></a>
					</h4>
				</div>
			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="/uiportailcee/index1.php"><span class="glyphicon glyphicon-signal"
							aria-hidden="true"></span> <span class="menu_title">Simuler</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="/uiportailcee/index2.php"><span class="glyphicon glyphicon-file"
							aria-hidden="true"></span> <span class="menu_title">Créer</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="/uiportailcee/index3.php"><span class="glyphicon glyphicon-list-alt"
							aria-hidden="true"></span> <span class="menu_title">Gérer Mes
								Dossiers</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="/uiportailcee/index4.php"><span class="glyphicon glyphicon-tasks"
							aria-hidden="true"></span> <span class="menu_title">Piloter Mon
								Activité</span></a>
					</h4>
				</div>

			</div>
		</div>

		<!-- div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="#"><span class="glyphicon glyphicon-euro"
							aria-hidden="true"></span> <span class="menu_title">Ma
								Facturation</span></a>
					</h4>
				</div>

			</div>
		</div>

		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="#"><span class="glyphicon glyphicon-info-sign"
							aria-hidden="true"></span> <span class="menu_title">Infos CEE</span></a>
					</h4>
				</div>

			</div>
		</div-->

	</div>


</nav>


<div id="menu-close">
	<a href="#" class="close"></a>
</div>



<script>



$(function () {
    setNavigation();
});

function setNavigation() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);

   	var index = window.location.pathname.split("/").pop();


   	$( ".nav-menu" ).click(function() {
   		
   		var href = $('a', this).attr('href');
   		window.location.href = href;
   	});
   	
   	
    $(".nav-menu a").each(function () {
        var href = $(this).attr('href');

        if (path.substring(0, href.length) === href) {
            $(this).closest('.nav-menu').addClass('active');
            $("div").removeClass('home');
        }

    });
}

</script>



