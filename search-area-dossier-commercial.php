<div class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
					href="#collapseSearchBar">Criteres De Recherche</a></span> <span
					class="panel_header_element"><a data-toggle="collapse"
					href="#collapseSearchBar"><i class="glyphicon glyphicon-search"></i></a></span>
			</h4>
		</div>

		<div id="collapseSearchBar" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="search_area">

					<form id="formSearchBar" class="form_search_bar form-inline"
						action="#" method="POST">
						<div class="text-danger validation-summary-errors"
							data-valmsg-summary="true">
							<ul>
								<li>Le No. Action doit être numérique</li>
								<li>La Référence Externe doit être alphanumérique</li>
								<li>Le Code Postal doit être numérique</li>
								<li>La Ville doit être alphanumérique</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="RaisonSocialeB2B">Raison
											sociale client</label></span> <span class="form_input"><input
										type="text" class="form-control" id="raisonSocialeB2B"
										placeholder=""></span>
								</div>
							</div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="SireneB2B">Sirene client</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="sireneB2B" placeholder=""></span>
								</div>
                            </div>

                            <div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NomB2C">Nom du particulier</label></span>
									<span class="form_input"><input type="text"
										class="form-control" id="nomB2C" placeholder=""></span>
								</div>
                            </div>

                            <div class="col-md-4 input_holder">
                                <div class="form-group">
                                    <span class="form_label"><label for="NumDossier">Numéro dossier</label></span>
                                    <span class="form_input"><input type="text"
                                        class="form-control input-validation-error" id="numDossier"
                                        placeholder=""></span>
                                </div>
                            </div>

                            <div class="col-md-4 input_holder">
                                <div class="form-group">
                                    <span class="form_label"><label for="NumAction">Numéro action</label></span>
                                    <span class="form_input"><input type="text"
                                        class="form-control" id="numAction"
                                        placeholder=""></span>
                                </div>
                            </div>

							<div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="StatutPortail">Statut Portail</label></span> 
											
											<div class="form_input custom-select" > 
    											<select class="form-control" style="display:none;">
    												<option value='0'></option>
        											<option value='1'>Statut 1</option>
        											<option value='2'>Statut 2</option>
        											<option value='3'>Statut 3</option>
        											<option value='4'>Statut 4</option>
            									</select>
            									</div>
								</div>
							</div>

                            <div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="Référence">Référence
											Externe</label></span> <span class="form_input"><input
										type="text" class="form-control" id="référence"
										placeholder=""></span>
								</div>
                            </div>
                            
                            <div class="col-md-4 input_holder">
								<div class="form-group">
									<span class="form_label"><label for="NomFiche">Nom fiche
											</label></span> <span class="form_input"><input
										type="text" class="form-control" id="nomFiche"
										placeholder=""></span>
								</div>
							</div>

                            <div class="col-md-4 input_holder">
                                <div class="form-group">
                                    <span class="form_label"><label for="NumDepot">Numéro depot</label></span>
                                    <span class="form_input"><input type="text"
                                        class="form-control" id="numDepot"
                                        placeholder=""></span>
                                </div>
                            </div>

							<div class="col-md-12 submit_button_holder">
								<button type="submit" class="btn btn-primary submit_button">Rechercher</button>
							</div>
                        </div>
                        


					</form>
				</div>
				<!-- End .search_area -->

			</div>
		</div>

	</div>
</div>

<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

$( ".select-items div:last-child" )
.hover(function() {
  $( this ).addClass( "solast" );
}, function() {
  $( this ).removeClass( "solast" );
});

$( ".select-items div:first-child" )
.hover(function() {
  $( this ).addClass( "sofirst" );
}, function() {
  $( this ).removeClass( "sofirst" );
});



/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
