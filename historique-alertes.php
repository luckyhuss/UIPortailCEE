<div class="panel with-nav-tabs panel-default">
	<div class="panel-heading tabs-administration" id="contenuTabs">
		<ul class="nav nav-tabs">
			<li class="tabs-pane active"><a href="#tabAlerte" data-toggle="tab">Alertes</a></li>
			<li class="tabs-pane"><a href="#tabNotification" data-toggle="tab">Notifications</a></li>
		</ul>

		<div class="panel-body tabs-gest-contenu">
			<div class="tab-content">

				<div class="tab-pane fade in active" id="tabAlerte">
			
			<?php include ('content-alertes.php'); ?>
			
			</div>

				<div class="tab-pane fade " id="tabNotification">
			
			<?php include ('content-notifications.php'); ?>
			
			</div>
			</div>

			


		</div>
	</div>
</div>




<script src="assets/js/jquery-ui.min.js"></script>

<script>


    $("#contenuTabs").tabs({
        activate: function(event, ui) {
            // tabs activated -> scroll page for summernote problem
            console.log('click tabs');
            var top = document.body.getBoundingClientRect().top;
            $("html,body").animate({ scrollTop: ((top == 0) ? 2 : 0) }, 100);
        }
    });

    function displayDetailContent(gestion, id) {
    	
    	//alert('gestion ' + gestion);
    	$("#panel-detail-contenu-" + gestion).css("display", "block");
    	$("html,body").animate({scrollTop: $("#collapseDetailContenu-" + gestion).offset().top}, 2000);
    	
    }
  </script>