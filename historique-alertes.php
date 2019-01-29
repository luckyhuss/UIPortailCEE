<div class="panel with-nav-tabs panel-default">
	<div class="panel-heading tabs-administration" id="contenuTabs">
		<ul class="nav nav-tabs">
			<li id="tabAlertes" class="tabs-pane"><a href="#tabAlerte" data-toggle="tab">Alertes</a></li>
			<li id="tabNotifs" class="tabs-pane"><a href="#tabNotification" data-toggle="tab">Notifications</a></li>
		</ul>

		<div class="panel-body tabs-gestion">
			<div class="tab-content">

				<div class="tab-pane fade in" id="tabAlerte">
    				<?php include ('content-alertes.php'); ?>
    			</div>

				<div class="tab-pane fade in" id="tabNotification">
    				<?php include ('content-notifications.php'); ?>
    			</div>
    			
			</div>
		</div>
		
	</div>
</div>




<script src="assets/js/jquery-ui.min.js"></script>

<script>
$(document).ready(function() {
	var urlParams = new URLSearchParams(location.search);

    var tabs = urlParams.get('tabs');
	console.log('params ' +  tabs);


	var activeIndex = 0;

	activeIndex = (tabs == "alerte") ? activeIndex : 1;
    

    $('#tabAlertes').removeClass('active');
	$('#tabNotifs').removeClass('active');

	if(tabs == 'alerte') {
		$('#tabAlertes').addClass('active');
	}else{
		$('#tabNotifs').addClass('active');
	}
	
	$('#contenuTabs').tabs({ active: activeIndex });
});

    
</script>