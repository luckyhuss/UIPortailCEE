<!-- Sidebar Holder -->
<nav id="sidebar" class="sidebar">

	<div class="nav_area" id="nav_area">


		<!-- div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu active">
					<h4 class="panel-title">
						<a href="#"> <span class="glyphicon glyphicon-home"
							aria-hidden="true"></span> <span class="menu_title">Accueil</span></a>
					</h4>
				</div>
			</div>
		</div-->


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="#"><span class="glyphicon glyphicon-signal"
							aria-hidden="true"></span> <span class="menu_title">Simuler</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="#"><span class="glyphicon glyphicon-file"
							aria-hidden="true"></span> <span class="menu_title">Créer</span></a>
					</h4>
				</div>

			</div>
		</div>


		<div class="panel-group menu_item_wrapper">
			<div class="panel panel-default menu_item">
				<div class="panel-heading nav-menu">
					<h4 class="panel-title">
						<a href="#"><span class="glyphicon glyphicon-list-alt"
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
						<a href="#"><span class="glyphicon glyphicon-tasks"
							aria-hidden="true"></span> <span class="menu_title">Piloter Mon
								Activité</span></a>
					</h4>
				</div>

			</div>
		</div>

		<div class="panel-group menu_item_wrapper">
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
		</div>

	</div>


</nav>


<div id="menu-close">
	<a href="#" class="close"></a>
</div>



<script>

var header = document.getElementById("nav_area");
var btns = header.getElementsByClassName("nav-menu");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    if(document.getElementsByClassName("active")[0]){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
    //location.reload(true);
  });
}

</script>



