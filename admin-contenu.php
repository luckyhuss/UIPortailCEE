<div class="panel with-nav-tabs panel-default">
	<div class="panel-heading tabs-administration" id="contenuTabs">
		<ul class="nav nav-tabs">
			<li class="tabs-pane active"><a href="#tabSecteur" data-toggle="tab">Secteurs</a></li>
			<li class="tabs-pane"><a href="#tabFiliale" data-toggle="tab">Filiales</a></li>
		</ul>

		<div class="panel-body tabs-gest-contenu">
			<div class="tab-content">

				<div class="tab-pane fade in active" id="tabSecteur">
			
			<?php include ('content-secteurs.php'); ?>
			
			</div>

				<div class="tab-pane fade " id="tabFiliale">
			
			<?php include ('content-filiales.php'); ?>
			
			</div>
			</div>
			
			<div class="col-md-6 submit_button_holder admin-btn-voir">
                <a class="btn btn-primary submit_button">Voir Tout</a>
            </div>
            <div class="col-md-6 submit_button_holder admin-btn-holder">
                <a id="save" class="btn btn-primary submit_button add_margin_right">Sauvegarder</a>
                <a id="cancel" class="btn btn-primary submit_button">Annuler</a>
            </div>
			
			
		</div>
	</div>
</div>




<script src="node_modules/summernote/dist/summernote.js"></script>
<script src="node_modules/summernote/dist/lang/summernote-fr-FR.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote-filiales, #summernote-secteurs, #summernoteplus-filiales, #summernoteplus-secteurs').summernote({
            height: 200,
            toolbar: [
                //["style", ["style"]],
                ["font", ["bold", "italic", "underline", "clear"]],
                //["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", [/*"ul", "ol",*/ "paragraph"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
            lang: 'fr-FR'
        });

    });

   // $(function () {
    //	 $('#tabs-gest-contenu').tabs({
    //	 activate: function (event, ui) {
    //	 	console.log('click');
    //	 }
    //	 });
    //	});

    $('#save').click(function() {
    	var top = document.body.getBoundingClientRect().top;
        $("html,body").animate({ scrollTop: ((top == 0) ? 2 : 0) }, 100);
        }); 
    

    $("#contenuTabs").tabs({
        activate: function(event, ui) {
            // tabs activated -> scroll page for summernote problem
            console.log('click tabs');
            var top = document.body.getBoundingClientRect().top;
            $("html,body").animate({ scrollTop: ((top == 0) ? 2 : 0) }, 100);
        }
    });

    
  </script>