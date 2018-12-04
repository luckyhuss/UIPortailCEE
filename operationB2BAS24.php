<div class="tbodyClone">
<div class="panel-group clonedInput" id="clonedInput1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="panel_header_element"><a data-toggle="collapse"
                    href="#CollapseOperation">Operation</a></span>
                <button id="btnDel_0" name="btnDel_0" type="button" class="remove btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                    
                    <!-- <span class="panel_header_element"><a data-toggle="collapse" href="#resultatMesDossiers"><i class="glyphicon glyphicon-list-alt"></i></a></span> -->
			</h4>
		</div>

		<div id="CollapseOperation" class="panel-collapse collapse in">
			<div class="panel-body">

                <div class="col-md-12 panel-group choisirSecteurPanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="choisirSecteur">
                                <span class="col-md-12 col-sm-12 col-xs-12 header_label"><label for="choisirSecteur">Choisir secteur </label></span>
                                <span class="col-md-12 col-sm-12 col-xs-12 form_input">
                                <div class="col-md-3 input_holder">
                                    <div class="form-group">
                                        <label class="form_label radio-inline"><input type="radio" name="optradio" checked>Bat</label>
                                    </div>
                                </div>
                                <div class="col-md-3 input_holder">
                                    <div class="form-group">
                                        <label class="form_label radio-inline"><input type="radio" name="optradio">Bar</label>
                                    </div>
                                </div>
                                <div class="col-md-3 input_holder">
                                    <div class="form-group">
                                        <label class="form_label radio-inline"><input type="radio" name="optradio">Industrie</label>
                                    </div>
                                </div>
                                <div class="col-md-3 input_holder">
                                    <div class="form-group">
                                        <label class="form_label radio-inline"><input type="radio" name="optradio">Agri</label>
                                    </div>
                                </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 panel-group choisirOperationPanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="choisirOperation">
                                <span class="col-md-3 col-sm-6 col-xs-12 header_label"><label for="choisirOperation">Choisir operation </label></span>
                                <span class="col-md-9 col-sm-6 col-xs-12 form_input">
                                    <select class="form-control">
                                        <option value="1">#1 - Fiche 1</option>
                                        <option value="2">#2 - Fiche 2</option>
                                        <option value="3">#3 - Fiche 3</option>
                                        <option value="4">#4 - Fiche 4</option>
                                        <option value="5">#5 - Fiche 5</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 panel-group critereAsaisirPanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="critere">
                                <span class="header_label"><label for="critereAsaisir">Criteres a saisir </label></span>
                                <form id="formCritereSim" class="form_search_bar form-inline" action="#" method="POST">
                                        <div class="col-md-12 input_holder">
                                            <div class="form-group">
                                                <span class="form_label"><label for="NumAction">Critere 1</label></span>
                                                <span class="form_input"><input type="checkbox" id="numAction" placeholder=""></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 input_holder">
                                            <div class="form-group">
                                                <span class="form_label"><label for="NumAction">Critere 2</label></span>
                                                <span class="form_input"><input type="checkbox" id="numAction" placeholder=""></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 input_holder">
                                            <div class="form-group">
                                                <span class="form_label"><label for="NumAction">Critere 3</label></span>
                                                <span class="form_input"><input type="checkbox" id="numAction" placeholder=""></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 input_holder">
                                            <div class="form-group">
                                                <span class="form_label"><label for="NumAction">Critere 4</label></span>
                                                <span class="form_input"><input type="checkbox" id="numAction" placeholder=""></span>
                                            </div>
                                        </div>

                                        <div class="col-md-12 submit_button_holder">
                                            <button type="submit" class="btn btn-primary submit_button">Calculer</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 panel-group dateEstimeeCommande">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <span class="header_label"><label for="dateEstimeeCommande">Date estimée commande </label></span>

                            <div class="datepicker"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 panel-group resultatOperationPanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="resultatOperation">
                                <div class="stat">
                                    <div class="stat__data col-md-8">
                                        <span class="header_label"><label for="ResultatOperation">Resultat pour l'operation</label></span>
                                        <p class="header_output">10 kWhc 600 €</p>
                                    </div>
                                    <div class="stat_icon_wrapper col-md-4">
                                        <i class="glyphicon glyphicon-stats"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 panel-group RemunerationRefEstiméePanel">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="stat__data col-md-8">
                                <span class="header_label"><label for="RemunerationRefEstimée">Remuneration Reference/estimée</label></span>
                                <p class="header_output">10 €/MWh</p>
                            </div>
                            <div class="stat_icon_wrapper col-md-4">
                                <i class="glyphicon glyphicon-stats"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-md-12 ajouter_operation ">
        <button type="button" id="btnAdd_0" class="clone btn submit_button btn-circle btn-lg add" title="Ajouter operation"><i class="glyphicon glyphicon-plus"></i></button>
        <button type="button" id="btnAdd_0" class="clone btn submit_button btn_operation" title="Ajouter operation">Ajouter une opération</button>

        <!-- <button id="btnAdd_0" name="btnAdd_0" type="button" class="clone btn btn-success"><i class="fa fa-plus-circle">+</i></button> -->
    </div>

    </div>
</div>

</div>


<!-- button ajouter -->



<br class="clearfix" />

<div class="col-md-12 panel-group resultatCumule">
    <div class="panel panel-default">
        <div class="resultatCumule">
            <div class="panel-body">
                <div class="resultatCumule">
                    <div class="stat__data col-md-8">
                        <span class="header_label"><label for="ResultatCumule">Resultat cumulé</label></span>
                        <p class="header_output">10 kWhc 600</p>
                    </div>
                    <div class="stat_icon_wrapper col-md-4">
                        <i class="glyphicon glyphicon-stats"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    //duplicate
    // $('button.add, button.btn_operation').on('click', function(){

    // //clone
    // var row = $('.duplicate').clone();
    // $(row).insertAfter('.ajouter_operation');
    // $(row).show();
    // var r= $('<button type="button" class="btn submit_button btn-circle btn-lg add" title="Ajouter operation"><i class="glyphicon glyphicon-minus"></i></button>');
    //     $(".duplicate .panel-heading .panel-title").append(r);
    // });

    var regex = /^(.*)(\d)+$/i;
    var cloneIndex = $(".clonedInput").length;
    if ($(".clonedInput").length == 1) {
        $('.remove').hide();
    } else {
        $('.remove').show();
    }

    function clone() {
        $(this).parents(".clonedInput").clone()
            .appendTo(".tbodyClone")
            .attr("id", "clonedInput" + cloneIndex)
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

        cloneIndex++;
      
        if ($(".clonedInput").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }

    }
    function remove() {        
        $(this).parents(".clonedInput").remove();

        if ($(".clonedInput").length == 1) {
            $('.remove').hide();
        } else {
            $('.remove').show();
        }

    }    

    $(document).on("click", ".clone", clone);
    $(document).on("click", ".remove", remove);
</script>