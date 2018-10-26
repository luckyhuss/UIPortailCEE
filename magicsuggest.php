<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery MagicSuggest Plugin Basic Demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.0.0/flatly/bootstrap.min.css">
<link href="node_modules/magicsuggest/css/magicsuggest.css" rel="stylesheet" type="text/css">
<script src="assets/js/jquery.js"></script>
<script src="node_modules/magicsuggest/js/magicsuggest.js"></script>
<style>
body { background-color: #fafafa; }
.container { margin-top: 150px; max-width: 350px; }
</style>
</head>

<body>

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

</body>
</html>
