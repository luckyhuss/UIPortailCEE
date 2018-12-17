<!-- Sidebar Holder -->
<nav id="sidebar" class="sidebar">

	<div class="nav_area" id="nav_area">
		<form method="post" action="/uiportailcee/">
			<input type="hidden" name="pageLoaded" value="Test">
		</form>
		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeHome ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Accueil"> <span
							class="glyphicon glyphicon-home" aria-hidden="true"></span> <span
							class="menu_title">Accueil</span></a>
					</h4>
				</div>
			</div>
		</div>


		<!-- div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php //echo $activeSimuler ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Simuler" alt="Simuler"><span
							class="glyphicon glyphicon-signal" aria-hidden="true"></span> <span
							class="menu_title">Simuler</span></a>
					</h4>
				</div>

			</div>
		</div-->

		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeSimulation ?>">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#simulation" id="simulation" class="collapsed"
							aria-expanded="true"><span class="glyphicon glyphicon-signal"
							aria-hidden="true"></span> <span class="menu_title">Simulation<span
								class="caret"></span></span></a>
					</h4>
				</div>

				<div id="simulation"
					class="panel-collapse sub_menu_items collapse <?php echo $openSimulation ?>"
					aria-expanded="true">
					<div
						class="panel-heading nav-menu sous-menu <?php echo $activeNouvelleSimulation ?>">
						<h4 class="panel-title">
							<a href="javascript:void(0)" id="NouvelleSimulation"><span
								class="glyphicon glyphicon" aria-hidden="true"></span><span
								class="glyphicon glyphicon-list" aria-hidden="true"></span> <span
								class="menu_title">Nouvelle Simulation</span></a>
						</h4>
					</div>
					<div
						class="panel-heading nav-menu sous-menu <?php echo $activeHistoriqueSimulation ?>">
						<h4 class="panel-title">
							<a href="javascript:void(0)" id="HistoriqueSimulation"><span
								class="glyphicon glyphicon" aria-hidden="true"></span><span
								class="glyphicon glyphicon-list" aria-hidden="true"></span> <span
								class="menu_title">Historiques</span></a>
						</h4>
					</div>
				</div>
			</div>
		</div>



		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeCreer ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Creer"><span
							class="glyphicon glyphicon-file" aria-hidden="true"></span> <span
							class="menu_title">Créer</span></a>
					</h4>
				</div>

			</div>
		</div>

		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeRechercher ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Rechercher"><span
							class="glyphicon glyphicon-search" aria-hidden="true"></span> <span
							class="menu_title">Rechercher</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeDossier ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Dossiers"><span
							class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <span
							class="menu_title">Gérer Mes Dossiers</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activePiloter ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Piloter"><span
							class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <span
							class="menu_title">Piloter Mon Activité</span></a>
					</h4>
				</div>

			</div>
		</div>

		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeInfo ?>">
					<h4 class="panel-title">
						<a href="javascript:void(0)" id="Info"><span
							class="glyphicon glyphicon-tasks" aria-hidden="true"></span> <span
							class="menu_title">Info CEE</span></a>
					</h4>
				</div>

			</div>
		</div>

		<?php if($cssLoaded == "ADMIN") {?>
		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu <?php echo $activeAdmin ?>">
					<h4 class="panel-title">
						<a data-toggle="collapse" href="#admin" id="admin" class="collapsed"
							aria-expanded="true"><span class="glyphicon glyphicon-cog"
							aria-hidden="true"></span> <span class="menu_title">Administration<span
								class="caret"></span></span></a>
					</h4>
				</div>

				<div id="admin"
					class="panel-collapse sub_menu_items collapse <?php echo $openAdmin ?>"
					aria-expanded="true">
					<div
						class="panel-heading nav-menu sous-menu <?php echo $activeAdminContenu ?>">
						<h4 class="panel-title">
							<a href="javascript:void(0)" id="AdminContenu"><span
								class="glyphicon glyphicon" aria-hidden="true"></span><span
								class="glyphicon glyphicon-list" aria-hidden="true"></span> <span
								class="menu_title">Gestion Contenu</span></a>
						</h4>
					</div>
					<div
						class="panel-heading nav-menu sous-menu <?php echo $activeAdminUtilisateur ?>">
						<h4 class="panel-title">
							<a href="javascript:void(0)" id="AdminUtilisateur"><span
								class="glyphicon glyphicon" aria-hidden="true"></span><span
								class="glyphicon glyphicon-user" aria-hidden="true"></span> <span
								class="menu_title">Gestion Utilisateur</span></a>
						</h4>
					</div>
					<div
						class="panel-heading nav-menu sous-menu <?php echo $activeAdminGigya ?>">
						<h4 class="panel-title">
							<a href="javascript:void(0)" id="AdminGigya"><span
								class="glyphicon glyphicon" aria-hidden="true"></span><span
								class="glyphicon glyphicon-user" aria-hidden="true"></span> <span
								class="menu_title">Gestion Gigya</span></a>
						</h4>
					</div>
					<div
						class="panel-heading nav-menu sous-menu <?php echo $activeAdminPermission ?>">
						<h4 class="panel-title">
							<a href="javascript:void(0)" id="AdminPermission"><span
								class="glyphicon glyphicon" aria-hidden="true"></span><span
								class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <span
								class="menu_title">Gestion Permission</span></a>
						</h4>
					</div>
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


   	$( ".nav-menu" ).click(function(e) {
   		e.preventDefault();
   		e.stopPropagation();
   		
   		var href = $('a', this).attr('href');
   		var id = $('a', this).attr('id');
   		
		//alert('id: ' + id);
	    if(id == 'admin') {
    	    $( "div #admin" ).toggleClass( "in" );
	    }
	    else if(id == 'simulation') {
	    	$( "div #simulation" ).toggleClass( "in" );    
  	    }else {
   			window.location.href = '/uiportailcee?pageLoaded=' + id,true;
   	    }

   	});
   	
}

</script>



