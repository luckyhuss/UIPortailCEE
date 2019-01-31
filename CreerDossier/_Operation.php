<div class="tbodyClone">
	<div class="panel-group clonedOP" id="clonedOP1">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<span class="panel_header_element"><a data-toggle="collapse"
						href="#CollapseOperation">Opération &#x2116; <span id="numId_OP0"
							class="numId">1</span></a></span>
					<button id="btnDel_0" name="btnDel_0" type="button"
						class="remove btn btn-circle btn-danger">
						<i class="glyphicon glyphicon-minus"></i>
					</button>

				</h4>
			</div>

			<div id="CollapseOperation" class="panel-collapse collapse in">
				<div class="panel-body">

					<?php include 'Simulation\_ChoixOperation.php'; ?>

					<?php include 'Simulation\_CritereSaisie.php'; ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-12 ajouter_operation ">
				<button type="button" id="btnAdd_0"
					class="clone btn submit_button btn-circle btn-lg add"
					title="Ajouter operation">
					<i class="glyphicon glyphicon-plus"></i>
				</button>
				<button type="button" id="btnAdd_0"
					class="clone btn submit_button btn_operation"
					title="Ajouter operation">Ajouter une opération</button>

			</div>



		</div>
	</div>

</div>

<!-- button ajouter -->



<script>
var regex = /^(.+?)(\d+)$/i;
    var cloneIndex = $(".clonedOP").length;
    if ($(".clonedOP").length == 1) {
        $('.remove').hide();
    } else {
        $('.remove').show();
    }

    
    function clone() {

        $('#clonedOP1').clone(true, true)
            .appendTo(".tbodyClone")
            .attr("id", "clonedOP" + ( cloneIndex + 1 ))
            .find("*")
            .each(function () {
                var id = this.id || "";
                var match = id.match(regex) || [];
                if (match.length == 3) {
                    this.id = match[1] + (cloneIndex);
                }
            })
            .on('click', 'clone', clone)
            .on('click', 'remove', remove);

            $(".tbodyClone .clone").hide();

            cloneIndex++;

            var obj = $( ".tbodyClone .clonedOP:last-child" ).attr('id');

            $( "#" + obj + " div.col-md-12.ajouter_operation button").show();

        if ($(".clonedOP").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }
        $("#clonedOP1 .remove").hide();

		 $('#clonedOP' + cloneIndex).find('.choisirCritereContainer').addClass('displayed');
    	
    	$('#numId_OP' + (cloneIndex - 1 )).html(cloneIndex );

    	// hide results for added panel
		hideResultatOperation(cloneIndex-1);

    }
    function remove(all = false, object = null) {
		if(!all){
			object = object !== null ? object : $(this);
			object.parents(".clonedOP").remove();
		}else{
			$(".clonedOP").each(function(index, val){
				if (index == 0) {
					$('.remove').hide();
					$(this).parent().addClass('displayed');
					$(this).find('.choisirCritereContainer').addClass('displayed');
				} else {
					$(this).remove();
				}
			})
		}
 
        if ($(".clonedOP").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }
        $("#clonedOP1 .remove, .tbodyClone .clone").hide();

		var obj = $( ".tbodyClone .clonedOP:last-child" ).attr('id');
		
		$( `#${obj} div.col-md-12.ajouter_operation button`).show();

		var numOP = numOperation();
		if(numOP == 1) {
			cloneIndex = 1;
		}

		cloneIndex = parseInt(getLastOperationId(obj));

	}

    $(document).on("click", ".clone", clone);
    $(document).on("click", ".remove", function(){
		remove(false, $(this));
	});




    // Select operation - onchange display critere
    
    $('select[id^="selectOperation"]').change(function () {
    	$('select[id^="selectOperation"]').each(function () {
    		var valueChecked = $('#' + this.id).val();
    		var str = this.id;
    		var idSelected = str.split("_")[1];

			$('#sectionCritere_' + idSelected).addClass('displayed');

			if(valueChecked != 0) {
				$('#sectionCritere_' + idSelected).removeClass('displayed');
			}
        });
    	
    });
     

function getLastOperationId(obj) {
	var lastOperationId = 0;
	var lastNumId = $( ".tbodyClone .numId:last-child" ).attr('id');
	lastOperationId = obj.substr(8);
	return lastOperationId;
}

function numOperation() {
	var numOP = 0;

	$('span[id^="numId"]').each(function () {
		numOP++;
	}); 

	return numOP;
}

function isAnyBarSelected() {
	var isBar = 0;
	$('select[id^="selectSecteur"]').each(function () {
		var valueChecked = $('#' + this.id).val();
		
		if(valueChecked == '2') {
			isBar++;
		}
		
	});

	return isBar;
}
</script>