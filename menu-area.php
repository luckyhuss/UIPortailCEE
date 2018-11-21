<!-- Sidebar Holder -->
<nav id="sidebar" class="sidebar">

	<div class="nav_area" id="nav_area">
<form method="post" action="/uiportailcee/"><input type="hidden" name="pageLoaded" value="Test"></form>
		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeHome ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Accueil" > <span class="glyphicon glyphicon-home"
							aria-hidden="true"></span> <span class="menu_title">Accueil</span></a>
					</h4>
				</div>
			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeSimuler ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Simuler" alt="Simuler"><span class="glyphicon glyphicon-signal"
							aria-hidden="true"></span> <span class="menu_title">Simuler</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeCreer ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Creer"><span class="glyphicon glyphicon-file"
							aria-hidden="true"></span> <span class="menu_title">Créer</span></a>
					</h4>
				</div>

			</div>
		</div>
		
		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeRechercher ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Rechercher"><span class="glyphicon glyphicon-search"
							aria-hidden="true"></span> <span class="menu_title">Rechercher</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeDossier ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Dossiers"><span class="glyphicon glyphicon-list-alt"
							aria-hidden="true"></span> <span class="menu_title">Gérer Mes
								Dossiers</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activePiloter ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Piloter"><span class="glyphicon glyphicon-tasks"
							aria-hidden="true"></span> <span class="menu_title">Piloter Mon
								Activité</span></a>
					</h4>
				</div>

			</div>
		</div>
		
		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeInfo ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Info"><span class="glyphicon glyphicon-tasks"
							aria-hidden="true"></span> <span class="menu_title">Info CEE</span></a>
					</h4>
				</div>

			</div>
		</div>

		<?php if($cssLoaded == "ADMIN") {?>
		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeAdmin ?>">
					<h4 class="panel-title">
						<a href="javascript:void()" id="Admin" alt="Administration"><span class="glyphicon glyphicon-cog"
							aria-hidden="true"></span> <span class="menu_title">Administration</span></a>
					</h4>
				</div>

			</div>
		</div>
		
		<?php }?>
		
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

	/*
    
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
            $(this).closest('.nav-menu').addClass('active-link');
            $("div").removeClass('home');
        }

    });

	*/


    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);

   	var index = window.location.pathname.split("/").pop();


   	$( ".nav-menu" ).click(function(e) {
   		e.preventDefault();
   		var href = $('a', this).attr('href');
   		var id = $('a', this).attr('id');
   		//$.get({path:id});
   	    //alert(id);
   		window.location.href = '/uiportailcee?pageLoaded=' + id,true;
   		//var post_data = {'account_type':"Free"}
   		//return $.post("/uiportailcee/", post_data);
   		//form.submit();
   	});
   	
   	
    $(".nav-menu a").each(function () {
        var href = $(this).attr('href');

        if (path.substring(0, href.length) === href) {
            $(this).closest('.nav-menu').addClass('active-link');
            $("div").removeClass('home');
        }

    });
}

</script>



