<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseFiltre">Filtre</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseFiltre"><i class="glyphicon glyphicon-filter"></i></a></span>
			</h4>
		</div>

		<div id="collapseFiltre" class="panel-collapse collapse in">
			<div class="panel-body">
				<ul class="filter-container">
					<li class="filter-item float-item">
						<div class="form-group filtre-option-filiales">
							<label for="filiales">Filiales :</label>
							<div id="msFiliale" class="form-control"></div>
						</div>
					</li>
					<li class="filter-item float-item">
						<div class="form-group filtre-option-operations">
							<label for="Operations">Operations :</label>
							<div id="msOperation" class="form-control"></div>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>

<script>
$(function() {
        var msFiliale = $('#msFiliale').magicSuggest({
          data: ['B2B','Commercial','Professional','B22B','Comm2ercial','Pro2fessional']
        });

        var msOperation = $('#msOperation').magicSuggest({
            data: ['B2BOper','CommercialOper','ProfessionalOper','B22BOper','Comm2ercialOper','Pro2fessionalOper']
          });

        $(msFiliale).on('selectionchange', function(){
        	  //alert(JSON.stringify(this.getSelection()));
        	});
      });
</script>
