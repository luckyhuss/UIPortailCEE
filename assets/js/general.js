$(function () {
    $('[data-toggle="popover"]').popover()
  })

// For datepicker in search bar
// For full parameters please check:
// https://github.com/eternicode/bootstrap-datepicker
jQuery('.datepicker').datepicker({
    datesDisabled: ['26/09/2018','14/09/2018','12/10/2018'],
    autoclose: true
    // startDate: '0d',
    // endDate: '+7d'
});


// Trigger mobile menu on and off
$(function () {
    $('.mobile_nav_trigger').click(function () {
    	$('#sidebar').toggleClass('mob_nav_area');
    	$('.overlay_wrapper').toggleClass('overlay');
    	$('#menu-close').toggleClass('menu-close-wrapper');
// $('.nav_area').toggleClass('absolute');
// $('.nav_area').toggleClass('center_of_attention');
// $('.content_area').toggleClass('absolute');
// // refreshes the table
// var table = document.getElementById ("myTable");
// table.refresh ();
    });
});

$(function () {
    $('.close').click(function () {
    	$('#menu-close').toggleClass('menu-close-wrapper');
    	$('#sidebar').toggleClass('mob_nav_area');
    	$('.overlay_wrapper').toggleClass('overlay');
    });
    
    // trigger user-profile
    $('.dropdown-menu-user-profile').click(function () {
    	$('.dropdown').addClass('open');
    	// alert('test');
    	$('.dropdown-menu-user-profile').toggleClass('active');
    });
    
// $('.user').click(function () {
// //alert('test');
// $('.arrow-up').toggleClass('display');
// });
//    

    
    $(".dropdown-menu-user-profile").focusin(function(){
    	alert('pop');
    });
    
});


// For datatable - Note(Tewin): You will need to change the ID if using more
// than one place and repeat the code.
jQuery(document).ready(function() {
    jQuery('#example').DataTable({
    	"paging":   false,
    	"info":     false
    });
} );

// Currently used in Suivi de Mon Activite
jQuery(document).ready(function() {
    jQuery('#sdma_dossiersEnCours').DataTable({
    	"paging":   false,
        "info":     false,
        "ordering": false,
        "searching": false
    });
} );


jQuery(document).ready(function() {
    jQuery('#sdma_dossiersDeposes').DataTable({
    	"paging":   false,
        "info":     false,
        "ordering": false,
        "searching": false
    });
} );


/* Gerer mes Dossiers */
$(document).ready(function() {
    $('#resultatRecherche').DataTable( {
        "searching": false,
        "paging": false,
        "info": false,
        "ordering": false,
        "scrollX": true
   } );
} );


$(document).ready(function() {
    $('#detailDossierOperations').DataTable( {
        "searching": false,
        "paging": false,
        "info": false,
        "ordering": false,
        "scrollX": true
   } );
} );

$(document).ready(function() {
    $('#infoBeneficiaire').DataTable( {
        "searching": false,
        "paging": false,
        "info": false,
        "ordering": false,
        "scrollX": true
   } );
} );

$(document).ready(function() {
    $('#listesDesDocs').DataTable( {
        "searching": false,
        "paging": false,
        "info": false,
        "ordering": false,
   } );
} );
/* Gerer mes Dossiers */


/* page d'accueil */
// calendar

$(document).ready(function() {
    $('#bootstrapModalFullCalendar').fullCalendar({
        lang: 'fr',
        height: 200,
        header: {
            left: 'title',
            center: '',
            right: 'prev next'
        },
        eventRender: function(event, element){
            element.popover({
            animation:true,
            placement: 'top',
            container: 'body',
            delay: 300,
            content: event.title,
            trigger: 'hover'
        });
      },
    dayClick: function(date, allDay, jsEvent, view) {
        var eventsCount = 0;
        var date = date.format('YYYY-MM-DD');

        $('#bootstrapModalFullCalendar').fullCalendar('clientEvents', function(event) {
          var start = moment(event.start).format("YYYY-MM-DD");
          var end = moment(event.end).format("YYYY-MM-DD");
          if(date == start)
          {
            $('#modalTitle').html(event.title);
            $('#modalBody').html(event.description);
          }
        openModal();
        });
    },
    eventClick:  function(event, jsEvent, view) {
        $('#modalTitle').html(event.title);
        $('#modalBody').html(event.description);
        $('#fullCalModal').modal();
    },
        events:
        [
           {
              "title":"Dossier 1",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":'2018-10-01',
              "end":'2018-10-01',
              "color":'green'
           },
           {
               "title":"Dossier X",
               "allday":"false",
               "description":"<p>Nothing to see!</p>",
               "start":'2018-10-03',
               "end":'2018-10-03',
               "color":'#e4043b'
            },
            {
                "title":"Dossier X1",
                "allday":"false",
                "description":"<p>Nothing to see!</p>",
                "start":'2018-10-03',
                "end":'2018-10-03',
                "color":'green'
             },
           {
              "title":"Dossier 2",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',10),
              "end":moment().subtract('days',10),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 3",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',6),
              "end":moment().subtract('days',6),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 4",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',2),
              "end":moment().subtract('days',2),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 5",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment(),
              "end":moment(),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 6",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',3),
              "end":moment().add('days',3),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 7",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',5),
              "end":moment().add('days',5),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 8",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',9),
              "end":moment().add('days',9),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 9",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',11),
              "end":moment().add('days',11),
              "color":'#e4043b'
           },
           {
              "title":"Dossier 10",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
               "start":moment().add('days',15),
              "end":moment().add('days',15),
              "color":'yellow'
           },
           {
            "title":"Dossier 11",
            "allday":"false",
            "description":"<p>Nothing to see!</p>",
             "start":moment().add('days',15),
            "end":moment().add('days',15),
            "color":'blue'
         },
           
        ],
    });
});


function setColorDossier(typeDossier){
	
	switch(typeDossier) {
	    case 'echeance':
	    	//set color to red
	    	alert('echeance');
	    	$('.fc-event').css({
	    	    'color': 'red!important',
	    	    'border' : '10px solid red',
	    	    
	    	});
	        break;
	    case 'renouvellement':
	        // set color to yellow
	    	alert('renouvellement');
	    	$('.fc-event').css({
	    	    'color': 'red!important',
	    	    'border' : '10px solid red',
	    	    
	    	});
	    	//$('.fc-event').css('border-color', '#e4043b!important');
	    	//document.getElementsByClassName('fc-event').style.background  = "red";
	        break;
	    default:
	    	$('.fc-event').css({
	    	    'color': 'red!important',
	    	    'border' : '10px solid red',
	    	    
	    	});
	        //code block
	}
}

function openModal() {
    var title = $('#modalTitle').html();
    if(title.length == 0){
        $('#modalTitle').html("Pas de dossier arrivant à échéance ce jour");
        $('#modalBody').html("Pas de dossier arrivant à échéance ce jour");
    }
    $('#fullCalModal').modal();
}

function CloseCalendarModal() {
    $('#modalTitle').html("");
    $('#modalBody').html("");
}

$(".js-close").on("click", function (e) {
    CloseCalendarModal();
})

/* page d'accueil */

/* piloter mon activite */
jQuery(document).ready(function() {
    jQuery('#dossiersEnCours').DataTable({
    	"paging":   false,
        "info":     false,
        "ordering": false,
        "searching": false,
        "scrollX": true
    });
} );

jQuery(document).ready(function() {
    jQuery('#dossiersDeposes').DataTable({
    	"paging":   false,
        "info":     false,
        "ordering": false,
        "searching": false,
        "scrollX": true
    });
} );

jQuery(document).ready(function() {
    jQuery('#dossiersPayes').DataTable({
    	"paging":   false,
        "info":     false,
        "ordering": false,
        "searching": false,
        "scrollX": true
    });
} );

jQuery(document).ready(function() {
    jQuery('#listeDossiers').DataTable({
    	"paging":   true,
        "info":     false,
        "ordering": false,
        "searching": false,
        "scrollX": true,
        "language": {
            "paginate": {
              "previous": '<i class="glyphicon glyphicon-chevron-left"></i>',
              "next": '<i class="glyphicon glyphicon-chevron-right"></i>'
            }
          },
          "dom":'<"top"l>rt<"row"<"col-sm-12"<"bottom"fp><"clear">>>'
    });
});