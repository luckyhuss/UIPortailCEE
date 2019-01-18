<div class="listesPiecesContainer">
    <fieldset class="fieldset-margin-bottom"><legend>Listes pièces</legend>
        <div class="fieldset-container">

            <div class="header-group col-md-12" id="sectionDocuments">

                <fieldset class="fieldset-margin-bottom" id="docEngagementFieldset">
                    <legend>Document d'engagement</legend>

                    <div class="col-md-12 input_holder">
                        <span class="header_label"><label for="naturePieces">Nature</label></span> 
                        <span class="header_output">
                            <select id="selectDeptTravaux" name="selectDeptTravaux" class="form-control">
                                <option value="0"></option>
                                <option value="1">Bon de commande</option>
                                <option value="2">Devis</option>
                                <option value="3">#3</option>
                            </select>
                        </span>
                    </div>

                    <div class="col-md-12 input_holder">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                        <span class="header_label"><label for="StatutEngagement">Document</label></span>
                        <span class="header_output"><input type="file" name="fileToUpload" id="fileToUpload"></span>
                        </form>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="StatutEngagement">Statut</label></span>
                            <span class="header_output"><input type="textarea"
                                class="form-control" id="statutEngagement" placeholder=""></span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="listeCritères">Critères d'éligibilité</label></span>
                            <span class="header_output"><input type="text"
                                class="form-control" id="critèresEngagement" placeholder=""></span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="CommentaireEngagment">Commentaire</label></span>
                            <span class="header_output"><input type="text"
                                class="form-control" id="comEngagement" placeholder=""></span>
                        </div>
                    </div>

                    <div class="col-md-12 submit_button_holder">
                        <a href="javascript:void(0)" id="sendDocEngagement" class="btn btn-primary submit_button" role="button">Envoyer</a>
                    </div>

                        <div class="col-md-12 data_table_holder">
                            <table id="docEngagementTable"
                                class="table table-striped table-bordered nowrap"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nom document</th>
                                        <th>Nature</th>
                                        <th>Critères d'éligibilité</th>
                                        <th>Statut</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Document 1</td>
                                        <td>Devis</td>
                                        <td>Critères 1</td>
                                        <td>Envoyé</td>
                                        <td class="iconCol"><a href="javascript:void(0)"
                                            onclick=""><i
                                                class="glyphicon glyphicon-eye-open" data-toggle="collapse"
                                                data-target="#Modal1"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>

                </fieldset>

                <fieldset class="fieldset-margin-bottom" id="docAchevementFieldset">
                    <legend>Document d'achèvement</legend>

                    <div class="col-md-12 input_holder">
                        <span class="header_label"><label for="naturePieces">Nature</label></span> 
                        <span class="header_output">
                            <select id="selectDeptTravaux" name="selectDeptTravaux" class="form-control">
                                <option value="0"></option>
                                <option value="1">Bon de commande</option>
                                <option value="2">Devis</option>
                                <option value="3">#3</option>
                            </select>
                        </span>
                    </div>

                    <div class="col-md-12 input_holder">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                        <span class="header_label"><label for="StatutEngagement">Document</label></span>
                        <span class="header_output"><input type="file" name="fileToUpload" id="fileToUpload"></span>
                        </form>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="StatutEngagement">Statut</label></span>
                            <span class="header_output"><input type="textarea"
                                class="form-control" id="statutEngagement" placeholder=""></span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="listeCritères">Critères d'éligibilité</label></span>
                            <span class="header_output"><input type="text"
                                class="form-control" id="critèresEngagement" placeholder=""></span>
                        </div>
                    </div>

                    <div class="col-md-12 input_holder">
                        <div class="header-group">
                            <span class="header_label"><label for="CommentaireEngagment">Commentaire</label></span>
                            <span class="header_output"><input type="text"
                                class="form-control" id="comEngagement" placeholder=""></span>
                        </div>
                    </div>

                    <div class="col-md-12 submit_button_holder">
                        <a href="javascript:void(0)" id="sendDocAchevement" class="btn btn-primary submit_button" role="button">Envoyer</a>
                    </div>

                        <div class="col-md-12 data_table_holder">
                            <table id="docAchevementTable"
                                class="table table-striped table-bordered nowrap"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nom document</th>
                                        <th>Nature</th>
                                        <th>Critères d'éligibilité</th>
                                        <th>Statut</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Document 1</td>
                                        <td>Devis</td>
                                        <td>Raison 1</td>
                                        <td>Statut 1</td>
                                        <td class="iconCol"><a href="javascript:void(0)"
                                            onclick=""><i
                                                class="glyphicon glyphicon-eye-open" data-toggle="collapse"
                                                data-target=""></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Document 2</td>
                                        <td>Devis</td>
                                        <td>Raison 2</td>
                                        <td>Statut 2</td>
                                        <td class="iconCol"><a href="javascript:void(0)"
                                            onclick=""><i
                                                class="glyphicon glyphicon-eye-open" data-toggle="collapse"
                                                data-target=""></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Document 3</td>
                                        <td>Devis</td>
                                        <td>Raison 3</td>
                                        <td>Statut 3</td>
                                        <td class="iconCol"><a href="javascript:void(0)"
                                            onclick=""><i
                                                class="glyphicon glyphicon-eye-open" data-toggle="collapse"
                                                data-target=""></i></a></td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>

                </fieldset>

            </div>

        </div>
    </fieldset>
</div>


<div class="modal fade popin-donnee" id="Modal1" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog liste_critere" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn btn-default" data-dismiss="modal">x</button>
				<h4 class="modal-title" id="myModalLabel">Commentaire</h4>
			</div>

			<div class="modal-body">
				<ul>
					<li>val1</li>
				</ul>
			</div>

			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> -->
			</div>
		</div>
	</div>
</div>