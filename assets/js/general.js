$(function() {
	$('[data-toggle="popover"]').popover()
})

// For datepicker in search bar
// For full parameters please check:
// https://github.com/eternicode/bootstrap-datepicker
jQuery('.datepicker').datepicker({
	datesDisabled : [ '26/09/2018', '14/09/2018', '12/10/2018' ],
	autoclose : true
// startDate: '0d',
// endDate: '+7d'
});

// Trigger mobile menu on and off
$(function() {
	$('.mobile_nav_trigger').click(function() {
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

$(function() {
	$('.close').click(function() {
		$('#menu-close').toggleClass('menu-close-wrapper');
		$('#sidebar').toggleClass('mob_nav_area');
		$('.overlay_wrapper').toggleClass('overlay');
	});

	// trigger user-profile
	$('.dropdown-menu-user-profile').click(function() {
		$('.dropdown').addClass('open');
		// alert('test');
		$('.dropdown-menu-user-profile').toggleClass('active');
	});

	// $('.user').click(function () {
	// //alert('test');
	// $('.arrow-up').toggleClass('display');
	// });
	//    

	$(".dropdown-menu-user-profile").focusin(function() {
		alert('pop');
	});

});

// For datatable - Note(Tewin): You will need to change the ID if using more
// than one place and repeat the code.
jQuery(document).ready(function() {
	jQuery('#example').DataTable({
		"paging" : false,
		"info" : false
	});
});

// Currently used in Suivi de Mon Activite
jQuery(document).ready(function() {
	jQuery('#sdma_dossiersEnCours').DataTable({
		"paging" : false,
		"info" : false,
		"ordering" : false,
		"searching" : false
	});
});

jQuery(document).ready(function() {
	jQuery('#sdma_dossiersDeposes').DataTable({
		"paging" : false,
		"info" : false,
		"ordering" : false,
		"searching" : false
	});
});

/* Gerer mes Dossiers */
$(document).ready(function() {
	$('#resultatRecherche').DataTable({
		"searching" : false,
		"paging" : false,
		"info" : false,
		"ordering" : false,
	});
	jQuery('#resultatRecherche').wrap('<div class="dataTables_scroll" />');			
});

$(document).ready(function() {
	$('#detailDossierOperations').DataTable({
		"searching" : false,
		"paging" : false,
		"info" : false,
		"ordering" : false,
	});
		jQuery('#detailDossierOperations').wrap('<div class="dataTables_scroll" />');		
	});

$(document).ready(function() {
	$('#infoBeneficiaire').DataTable({
		"searching" : false,
		"paging" : false,
		"info" : false,
		"ordering" : false,
	});
		jQuery('#infoBeneficiaire').wrap('<div class="dataTables_scroll" />');		
	});

$(document).ready(function() {
	$('#listesDesDocs').DataTable({
		"searching" : false,
		"paging" : false,
		"info" : false,
		"ordering" : false,
	});
		jQuery('#listesDesDocs').wrap('<div class="dataTables_scroll" />');		
	});
/* Gerer mes Dossiers */

/* page d'accueil */
// calendar
/*******************************************************************************
 * Color Code ********************************* #e4043b => Echeance Dossier
 * #82b20d => Renouvellement Dossier #ecae05 => Date Prévue
 * 
 */

$(document).ready(
		function() {
			var isModal = true;
			$('#bootstrapModalFullCalendar').fullCalendar(
					{
						lang : 'fr',
						height : 200,
						header : {
							left : 'title',
							center : '',
							right : 'prev next'
						},
						eventRender : function(event, element) {
							element.popover({
								animation : true,
								placement : 'top',
								container : 'body',
								delay : 300,
								content : event.title,
								trigger : 'hover'
							});
						},
						dayClick : function(date, allDay, jsEvent, view) {
							var eventsCount = 0;
							var date = date.format('YYYY-MM-DD');
							$(".displayed").css("display", "none");
							$('#bootstrapModalFullCalendar').fullCalendar(
									'clientEvents',
									function(event) {
										var start = event.start
												.format("YYYY-MM-DD");
										// var end =
										// event.end.format("YYYY-MM-DD");
										// alert('start ' + start);
										if (date == start) {
											isModal = false;
											$(".displayed").css("display",
													"block");
										}

									});

							openModal(isModal);
							isModal = true;
						},
						eventClick : function(event, jsEvent, view) {
							isModal = false
							$(".displayed").css("display", "block");
							openModal(isModal);
							isModal = true;
						},
						events : [ {
							"title" : "Dossier 1",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-01',
							"end" : '2018-10-01',
							"color" : '#e4043b'
						}, {
							"title" : "Dossier X, Dossier 2",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-03',
							"end" : '2018-10-03',
							"color" : '#e4043b'
						}, {
							"title" : "Dossier XI",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-03',
							"end" : '2018-10-03',
							"color" : '#82b20d'
						}, {
							"title" : "Dossier XII",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-03',
							"end" : '2018-10-03',
							"color" : '#ecae05'
						}

						],
					});

			$('#fullCalendarEcheance').fullCalendar(
					{
						lang : 'fr',
						height : 200,
						header : {
							left : 'title',
							center : '',
							right : 'prev next'
						},
						eventRender : function(event, element) {
							element.popover({
								animation : true,
								placement : 'top',
								container : 'body',
								delay : 300,
								content : event.title,
								trigger : 'hover'
							});
						},
						dayClick : function(date, allDay, jsEvent, view) {
							var eventsCount = 0;
							var date = date.format('YYYY-MM-DD');
							$(".displayed").css("display", "none");
							$('#fullCalendarEcheance').fullCalendar(
									'clientEvents',
									function(event) {
										var start = event.start.format("YYYY-MM-DD");
										if (date == start) {
											isModal = false;
											$(".displayed").css("display",
													"block");
											$("html,body").animate({scrollTop: $("table#dossiersCalendrier").offset().top}, 2000)
													
										}

									});

							openModal(isModal);
							isModal = true;
						},
						eventClick : function(event, jsEvent, view) {
							isModal = false
							$(".displayed").css("display", "block");
							$("html,body").animate({scrollTop: $("table#dossiersCalendrier").offset().top}, 2000)
							
							openModal(isModal);
							isModal = true;
						},
						events : [ /*{
							"title" : "Dossier 1",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-01',
							"end" : '2018-10-01',
							"color" : '#e4043b'
						}, {
							"title" : "Dossier X, Dossier 2",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-03',
							"end" : '2018-10-03',
							"color" : '#e4043b'
						}, {
							"title" : "Dossier XI",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-12',
							"end" : '2018-10-12',
							"color" : '#e4043b'
						}, {
							"title" : "Dossier XII",
							"allday" : "false",
							"description" : "none",
							"start" : '2018-10-06',
							"end" : '2018-10-06',
							"color" : '#e4043b'
						}
*/
						],
					});
		});

function openModal(isModal) {
	if (isModal) {
		// $('#modalTitle').html("Pas de dossier arrivant à échéance ce jour");
		// $('#modalBody').html("Pas de dossier arrivant à échéance ce jour");
		$('#fullCalModal').modal();
		// $("html,body").animate({scrollTop: $("table#dossiersCalendrier").offset().top}, 2000);
	}

}

function CloseCalendarModal() {
	// $('#modalTitle').html("");
	// $('#modalBody').html("");
}

$(".js-close").on("click", function(e) {
	CloseCalendarModal();
})

/* page d'accueil */
jQuery(document).ready(function() {
	jQuery('#dossiersCalendrier').DataTable({
		"paging" : false,
		"info" : false,
		"ordering" : false,
		"searching" : false,
	});
		jQuery('#dossiersCalendrier').wrap('<div class="dataTables_scroll" />');		
	});

/* piloter mon activite */
jQuery(document).ready(function() {
	jQuery('#dossiersEnCours').DataTable({
		"paging" : false,
		"info" : false,
		"ordering" : false,
		"searching" : false,
	});
		jQuery('#dossiersEnCours').wrap('<div class="dataTables_scroll" />');		
	});

jQuery(document).ready(function() {
	jQuery('#dossiersDeposes').DataTable({
		"paging" : false,
		"info" : false,
		"ordering" : false,
		"searching" : false,
	});
		jQuery('#dossiersDeposes').wrap('<div class="dataTables_scroll" />');		
	});

jQuery(document).ready(function() {
	jQuery('#dossiersPayes').DataTable({
		"paging" : false,
		"info" : false,
		"ordering" : false,
		"searching" : false,
	});
	jQuery('#dossiersPayes').wrap('<div class="dataTables_scroll" />');			
});

jQuery(document)
		.ready(
				function() {
					jQuery('#listeDossiers')
							.DataTable(
									{
										"paging" : true,
										"info" : false,
										"ordering" : false,
										"searching" : false,
										"scrollX" : true,
										"lengthChange": false,
										"language" : {
											"paginate" : {
												"previous" : '<i class="glyphicon glyphicon-chevron-left"></i>',
												"next" : '<i class="glyphicon glyphicon-chevron-right"></i>'
											}
										},
										// "dom" : '<"top"l>rt<"row"<"col-sm-12"<"bottom"fp><"clear">>>'
									});
				});

// page rechercher fiche
	jQuery(document).ready(function() {
		jQuery('#resultatFicheRecapTable').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#resultatFicheRecapTable').wrap('<div class="dataTables_scroll" />');		
	});
	
	/* piloter mon activite */
	jQuery(document).ready(function() {
		jQuery('#InfoSocieteFiche').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#InfoSocieteFiche').wrap('<div class="dataTables_scroll" />');
	});
	
	jQuery(document).ready(function() {
		jQuery('#signatureElectroniqueFiche').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#signatureElectroniqueFiche').wrap('<div class="dataTables_scroll" />');
	});
	
	jQuery(document).ready(function() {
		jQuery('#conventionsFiche').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#conventionsFiche').wrap('<div class="dataTables_scroll" />');
	});

	jQuery(document).ready(function() {

		jQuery('#infoActiviteFiche').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#infoActiviteFiche').wrap('<div class="dataTables_scroll" />');
	});


	jQuery(document).ready(function() {
		jQuery('#operationsFiche').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#operationsFiche').wrap('<div class="dataTables_scroll"/>');
	});

	jQuery(document).ready(function() {
		jQuery('#resultatRechercherDossier').DataTable({
			"paging" : false,
			"info" : false,
			"ordering" : false,
			"searching" : false,
		});
		jQuery('#resultatRechercherDossier').wrap('<div class="dataTables_scroll" />');
	});