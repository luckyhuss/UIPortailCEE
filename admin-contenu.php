<div class="panel with-nav-tabs panel-default">
	<div class="panel-heading tabs-administration">
		<ul class="nav nav-tabs">
			<li class="tabs-pane active"><a href="#tabSecteur" data-toggle="tab">Secteurs</a></li>
			<li class="tabs-pane"><a href="#tabFiliale" data-toggle="tab">Filiales</a></li>
		</ul>
	</div>
	<div class="panel-body tabs-gest-contenu">
		<div class="tab-content">
			
			<div class="tab-pane fade in active" id="tabSecteur">
			
			<?php include ('content-secteurs.php'); ?>
			
			</div>
			
			<div class="tab-pane fade " id="tabFiliale">
			
			<?php include ('content-filiales.php'); ?>
			
			</div>
		</div>
	</div>
</div>




<script src="node_modules/summernote/dist/summernote.js"></script>
<script src="node_modules/summernote/dist/lang/summernote-fr-FR.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote-filiales, #summernote-secteurs').summernote({
        	height: 200, 
        	toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
            lang : 'fr-FR'
            });
    });
    /* $(document).ready(function() {
        $('#summernote-secteur').summernote({
        	height: 200, 
        	toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
            lang : 'fr-FR'
        	});
    }); */
  </script>