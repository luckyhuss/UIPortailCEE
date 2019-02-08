function loadTableDocumentsJoints(jsonData) {

	
	$.fn.DataTable.ext.pager.numbers_length = 4;
	$('#listDocumentsJoints').DataTable({
		"info": false, 
		"paging": true,
		"sorting": false,
		"ordering": false,
		"processing": true,
		"searching": false,
        "lengthChange": false,
        "pageLength": 5,
        "language": {
            "lengthMenu": "Afficher _MENU_ lignes par page",
            "zeroRecords": "Pas de données" ,   
            "info": "page _PAGE_ de _PAGES_",
            "infoEmpty": "Pas de données",
            "infoFiltered": "(filtrés de _MAX_ entrées)",
            "loadingRecords": "<div class='loader'></div>",
            "paginate": {
                "previous": '<i class="glyphicon glyphicon-chevron-left"></i>',
                "next": '<i class="glyphicon glyphicon-chevron-right"></i>'
            }
        },
        data : [
        	jsonData
		],
        columns:[
			{data : "Titre"},
			{data : "Commentaire"},
			{data : "Type"},
			{data : "Date1"},
			{data : "Date2"},
        ],
        drawCallback: function(settings) {
            var api = new $.fn.dataTable.Api(settings);
            var pagination = $(this)
                .closest('.dataTables_wrapper')
                .find('.dataTables_paginate');
            pagination.toggle(api.page.info().pages > 1);
        },
		"dom": '<"top"l>rt<"row"<"col-sm-12"<"bottom"fp><"clear">>>'
		
	});	
	jQuery('.listDataTable').wrap('<div class="dataTables_scroll" />');	
	
	
}
