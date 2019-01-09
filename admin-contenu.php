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

			<div class="col-md-6 submit_button_holder admin-btn-voir ">
				<a class="btn btn-primary not-active">Voir Tout</a>
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

function registerSummernote(element, max, callbackMax) {
	$(element).summernote({
        height: 200,
        toolbar: [
            //["style", ["style"]],
            ["font", ["bold", "italic", "underline", "clear"]],
            //["fontname", ["fontname"]],
            ["color", ["color"]],
            ["para", [/*"ul", "ol",*/ "paragraph"]],
            ["view", ["fullscreen", "codeview", "help"]]
        ],
        lang: 'fr-FR',
      	callbacks: {
            onKeydown: function(e) {
              var t = e.currentTarget.innerText;
              if (t.trim().length >= max) {
                //delete key
                if (e.keyCode != 8)
                  e.preventDefault();
                // add other keys ...
              }
            },
            onKeyup: function(e) {
              var t = e.currentTarget.innerText;
              if (typeof callbackMax == 'function') {
                callbackMax(max - t.trim().length);
              }
            },
            onPaste: function(e) {
            	var t = e.currentTarget.innerText;
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                e.preventDefault();
                var maxPaste = bufferText.length;
                
                if(t.length + bufferText.length > max){
                    maxPaste = max - t.length;
                }
                if(maxPaste > 0){
                    document.execCommand('insertText', false, bufferText.substring(0, maxPaste));
                }
              	if (typeof callbackMax == 'function') {
                	callbackMax(max - t.length);
              	}
            }
      }
    });
  }

    $(document).ready(function() {
    	  registerSummernote('#summernote-filiale', 1000, function(maxFiliale) {
    		$('#max-filiale').text(maxFiliale)
    		
    	  });

    	  registerSummernote('#summernote-secteur', 1000, function(maxSecteur) {
      		$('#max-secteur').text(maxSecteur)
      		
      	  });

    	  registerSummernote('#summernoteplus-secteur', 1000, function(maxplusSecteur) {
        		$('#maxplus-secteur').text(maxplusSecteur)
        		
       	  });

    	  registerSummernote('#summernoteplus-filiale', 1000, function(maxplusFiliale) {
      		$('#maxplus-filiale').text(maxplusFiliale)
      		
     	  });
        	  

    	  
     /*    $('#summernote-filiale, #summernote-secteur, #summernoteplus-filiale, #summernoteplus-secteur').summernote({
            height: 200,
            toolbar: [
                //["style", ["style"]],
                ["font", ["bold", "italic", "underline", "clear"]],
                //["fontname", ["fontname"]],
                ["color", ["color"]],
                ["para", [/*"ul", "ol",*/ /*"paragraph"]],
                ["view", ["fullscreen", "codeview", "help"]]
            ],
            lang: 'fr-FR'
        });
 */
        

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
        $("html,body").animate({ scrollTop: 0 }, 100);
    }); 
    

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