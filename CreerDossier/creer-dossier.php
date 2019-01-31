<div class="stepwizardCreer">
    <div class="stepwizardCreer-row setup-panel">

      <div class="stepwizardCreer-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>étape 1</p>
	  </div>
	  
      <div class="stepwizardCreer-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>étape 2</p>
	  </div>
	  
      <div class="stepwizardCreer-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>étape 3</p>
	  </div>

	  <div class="stepwizardCreer-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p>étape 4</p>
	  </div>
	  
	</div>
	
</div>
  
  <form role="form" action="" method="post">
    <div class="setup-content" id="step-1">
      <div class="stepOnePage">

		  	<?php include '_Secteur.php'; ?>
 
		  	<?php include '_InformationGenerale.php'; ?>

			<?php include '_Operation.php'; ?>
		  
			<div class="col-md-12 submit_button_holder" id="sectionStepOne">
				<button type="button" class="btn btn-primary nextBtn submit_button" id="ContinueStepOne">Continuer</button>
			</div>
      </div>
	</div>
	

    <div class="setup-content" id="step-2">
      <div class="stepTwoPage">

		  	<?php include '_InfoBeneficiaire.php'; ?>

			<?php include '_InfoProfessionnel.php'; ?>

			<div class="col-md-12 submit_button_holder " id="sectionStepTwo">
				<button type="button" class="btn btn-primary prevBtn submit_button" id="previousStepTwo">Retour</button>
				<button type="button" class="btn btn-primary nextBtn submit_button" id="continueStepTwo">Continuer</button>
			</div>

      </div>
	</div>

	<div class="setup-content" id="step-3">
      <div class="stepThreePage">

		  <?php include '_InfoPaiement.php'; ?>

		  	<div class="col-md-12 submit_button_holder " id="sectionStepThree">
				<button type="button" class="btn btn-primary prevBtn submit_button" id="previousStepThree">Retour</button>
				<button type="button" class="btn btn-primary nextBtn submit_button" id="continueStepThree">Continuer</button>
			</div>

      </div>
	</div>

    <div class="setup-content" id="step-4">
      <div class="stepFourPage">

		  <?php include 'Dossier\_ListesPieces.php'; ?>

		  	<div class="col-md-12 submit_button_holder " id="sectionStepThree">
				<button type="submit" class="btn btn-primary submit_button" id="createDossier_btn">Créer</button>
			</div>
      </div>
    </div>
  </form>


<script>
	$(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepWizard.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
})


</script>
