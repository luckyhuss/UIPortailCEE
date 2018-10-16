    
<div class="panel-group">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <span class="panel_header_element"><a data-toggle="collapse" href="#collapseFiltre">Filtre</a></span>
      <span class="panel_header_element"><a data-toggle="collapse" href="#collapseFiltre"><i class="glyphicon glyphicon-filter"></i></a></span>
    </h4>
  </div>

  <div id="collapseFiltre" class="panel-collapse collapse in">
    <div class="panel-body">
        <div class="col-md-6">
          <div class="form-group filtre-option-filiales">
          <label for="filiales">Filiales :</label>
          <select class="form-control" id="filiales" multiple>
            <option>B2B</option>
            <option>Commercial</option>
            <option>Pro</option>
          </select>
        </div>
        </div>
        
        <div class="col-md-6">
<div class="container">
<div id="ms1" class="form-control"></div>
</div>

<script>
$(function() {
        var ms1 = $('#ms1').magicSuggest({
          data: ['B2B','Commercial','Professional','B22B','Comm2ercial','Pro2fessional']
        });

        $(ms1).on('selectionchange', function(){
        	  alert(JSON.stringify(this.getSelection()));
        	});
      });
</script>
        </div>

        

    </div>
  </div>
  </div>
</div>