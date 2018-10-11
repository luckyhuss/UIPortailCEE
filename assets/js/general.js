$(function () {
    $('[data-toggle="popover"]').popover()
  })

// For datepicker in search bar
// For full parameters please check: https://github.com/eternicode/bootstrap-datepicker
jQuery('.datepicker').datepicker({
    datesDisabled: ['26/09/2018','14/09/2018','12/10/2018'],
    autoclose: true
    // startDate: '0d',
    // endDate: '+7d'
});


//Trigger mobile menu on and off
$(function () {
    $('.mobile_nav_trigger').click(function () {
    	$('#sidebar').toggleClass('mob_nav_area');
    	$('.overlay_wrapper').toggleClass('overlay');
    	$('#menu-close').toggleClass('menu-close-wrapper');
//        $('.nav_area').toggleClass('absolute');
//        $('.nav_area').toggleClass('center_of_attention');   
//        $('.content_area').toggleClass('absolute');
//        // refreshes the table 
//        var table = document.getElementById ("myTable");
//        table.refresh ();
    });
});

$(function () {
    $('.close').click(function () {
    	$('#menu-close').toggleClass('menu-close-wrapper');
    	$('#sidebar').toggleClass('mob_nav_area');
    	$('.overlay_wrapper').toggleClass('overlay');
    });
    
    //trigger user-profile
    $('.dropdown-menu-user-profile').click(function () {
    	$('.dropdown').addClass('open');
    	//alert('test');
    	$('.dropdown-menu-user-profile').toggleClass('active');
    });
    
//    $('.user').click(function () {
//    	//alert('test');
//    	$('.arrow-up').toggleClass('display');
//    });
//    

    
    $(".dropdown-menu-user-profile").focusin(function(){
    	alert('pop');
    });
    
});


//For datatable - Note(Tewin): You will need to change the ID if using more than one place and repeat the code.
jQuery(document).ready(function() {
    jQuery('#example').DataTable({
    	"paging":   false,
    	"info":     false
    });
} );

//Currently used in Suivi de Mon Activite
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


/* Recherche Dossier */


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



//calendar
$(document).ready(function() {
    $('#bootstrapModalFullCalendar').fullCalendar({
        lang: 'fr',
        header: {
            left: '',
            center: 'prev title next',
            right: ''
        },
        eventRender: function(event, element){
            element.popover({
            animation:true,
            delay: 300,
            content: event.title,
            trigger: 'hover'
        });
      },
        eventClick:  function(event, jsEvent, view) {
            $('#modalTitle').html(event.title);
            $('#modalBody').html(event.description);
            $('#fullCalModal').modal();
            return false;
        },
        events:
        [
           {
              "title":"Dossier 1",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',14),
              "end":moment().subtract('days',14),
           },
           {
              "title":"Dossier 2",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',10),
              "end":moment().subtract('days',10),
           },
           {
              "title":"Dossier 3",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',6),
              "end":moment().subtract('days',6),
           },
           {
              "title":"Dossier 4",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().subtract('days',2),
              "end":moment().subtract('days',2),
           },
           {
              "title":"Dossier 5",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment(),
              "end":moment(),
           },
           {
              "title":"Dossier 6",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',3),
              "end":moment().add('days',3),
           },
           {
              "title":"Dossier 7",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',5),
              "end":moment().add('days',5),
           },
           {
              "title":"Dossier 8",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',9),
              "end":moment().add('days',9),
           },
           {
              "title":"Dossier 9",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
              "start":moment().add('days',11),
              "end":moment().add('days',11),
           },
           {
              "title":"Dossier 10",
              "allday":"false",
              "description":"<p>Nothing to see!</p>",
               "start":moment().add('days',15),
              "end":moment().add('days',15),
           },
           {
            "title":"Dossier 11",
            "allday":"false",
            "description":"<p>Nothing to see!</p>",
             "start":moment().add('days',15),
            "end":moment().add('days',15),
         },
           
        ]
    });
});



