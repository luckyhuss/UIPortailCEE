<div class="listesPiecesContainer">
    <fieldset class="fieldset-margin-bottom"><legend>Listes pièces</legend>
        <div class="fieldset-container">

            <div class="header-group col-md-12" id="sectionDocuments">

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="typeOS">Opération standardisée</label></span> 
                            <span class="header_output">
                                <select id="selectTypeOS" name="selectTypeOS" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">IND-UT-121</option>
                                    <option value="2">IND-UT-122</option>
                                    <option value="3">IND-UT-123</option>
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="naturePieces">Type document</label></span> 
                            <span class="header_output">
                                <select id="selectTypeDoc" name="selectTypeDoc" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">Engagement</option>
                                    <option value="2">Achèvement</option>
                                    <option value="3">Complémentaire</option>
                                    <option value="4">Autre</option>
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="naturePieces">Nature de la pièce</label></span> 
                            <span class="header_output">
                                <select id="selectNature" name="selectNature" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">Bon de commande</option>
                                    <option value="2">Devis</option>
                                    <option value="3">Acte d’engagement </option>
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="listeCritères">Critères d'éligibilité</label></span>
                            <span class="header_output"><a href="javascript:void(0)" onclick=""><i class="glyphicon glyphicon-th-list" data-toggle="modal" data-target="#listeCriteresDocModal"></i></a></span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                        <span class="header_label"><label for="NomDoc">Document</label></span>
                        <span class="header_output"><input type="file" name="fileToUpload" id="fileToUpload"></span>
                        </form>
                    </div>

                    <div class="col-md-12 submit_button_holder">
                        <a href="javascript:void(0)" id="sendDoc" class="btn btn-primary submit_button" role="button">Envoyer</a>
                    </div>

                    <div class="col-md-12 data_table_holder">
                        <table id="listePiecesTable"
                            class="table table-striped table-bordered nowrap"
                            style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Opération standardisée</th>
                                    <th>Type document</th>
                                    <th>Nom document</th>
                                    <th>Nature de la pièce</th>
                                    <th>Statut</th>
                                    <th>Commentaires</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IND-UT-122</td>
                                    <td>Engagement</td>
                                    <td>Document 1</td>
                                    <td>Devis</td>
                                    <td>Refusé</td>
                                    <td class="iconCol"><a href="javascript:void(0)"
                                        onclick=""><i
                                            class="glyphicon glyphicon-eye-open" data-toggle="modal"
                                            data-target="#commentaireModal"></i></a></td>
                                </tr>
                                <tr>
                                    <td>IND-UT-121</td>
                                    <td>Engagement</td>
                                    <td>Document 1</td>
                                    <td>Bon de commande</td>
                                    <td>Envoyé</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>

        </div>
    </fieldset>
</div>


<div class="modal fade popin-donnee" id="listeCriteresDocModal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog liste_critere" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn btn-default" data-dismiss="modal">x</button>
				<h4 class="modal-title" id="myModalLabel">Critères d'éligibilité</h4>
			</div>

			<div class="modal-body">
				<ul>
                    <li>Zone climatique : H1</li>
                    <li>Superficie d'isolant (m²) : 100</li>
                    <li>Energie de chauffage après travaux : 100</li>
				</ul>
			</div>

			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> -->
			</div>
		</div>
	</div>
</div>

<div class="modal fade popin-donnee" id="commentaireModal" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog liste_critere" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn btn-default" data-dismiss="modal">x</button>
				<h4 class="modal-title" id="myModalLabel">Commentaires</h4>
			</div>

			<div class="modal-body">
				<ul>
                    <li>Refusé</li>
                    <li>Voir les critères d'éligibilité</li>
				</ul>
			</div>

			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> -->
			</div>
		</div>
	</div>
</div>

<script>
        $(function () {
    $(".custom-close").on('click', function() {
        $('#commentaireModal').modal('hide');
        $('#listeCriteresDocModal').modal('hide');
    });
});
</script>