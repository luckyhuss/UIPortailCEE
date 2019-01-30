<div class="panel-group" id="informationsPaiementPanel">
	<div class="panel panel-default">
		<div class="panel-body">

        <fieldset class="fieldset-margin-bottom choisirModeDePaiementPanel">
            <legend>Informations paiement</legend>

            <div class="fieldset-container" id="repartitionMDPFieldset">

                <div class="col-sm-6 col-md-3 input_holder">
                    <div class="form-group">
                        <span class="form_input"><input type="radio" name="optradio"
                            value="mandatDePaiement"></span> <span class="form_label"><label
                            for="MandatDePaiement">Mandat de paiement</label></span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 input_holder">
                    <div class="form-group">
                        <span class="form_input"><input type="radio" name="optradio"
                            value="paiementAuBen"></span> <span class="form_label"><label
                            for="PaiementAuBen">Paiement au bénéficiaire</label></span>
                    </div>
                </div>

            </div>
            
            <div class="fieldset-container" id="repartitionMSDFieldset">
                
                <span class="form_label col-md-12"><label for="repartitionMSD">Je donne ma prime au bénéficiaire</label></span>

                <div class="col-sm-3 col-md-3 input_holder">
                    <div class="form-group">
                        <span class="form_input"><input type="radio" name="optradio"
                            value="prime_oui"></span> <span class="form_label"><label
                            for="prime_oui">Oui</label></span>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3 input_holder">
                    <div class="form-group">
                        <span class="form_input"><input type="radio" name="optradio"
                            value="prime_non"></span> <span class="form_label"><label
                            for="prime_non">Non</label></span>
                    </div>
                </div>
            </div>

            <div class="fieldset-container" id="repartitionRemFieldset">
                <span class="form_label col-md-12"><label for="repartitionRem">Répartition de la rémunération</label></span>

                <div class="col-sm-6 col-md-3 input_holder">
                    <div class="header-group">
                        <span class="form_label"><label for="RemunerationPro">Professionel</label></span> <span
                            class="header_output"><input type="text"
                            class="form-control" id="remunerationPro" placeholder=""></span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 input_holder">
                    <div class="header-group">
                        <span class="form_label"><label for="RemunerationBen">Bénéficiaire</label></span> <span
                            class="header_output"><input type="text"
                            class="form-control" id="remunerationBen" placeholder=""></span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 input_holder">
                    <div class="header-group">
                        <span class="form_label"><label for="RemunerationAA">Apporteur affaire</label></span> <span
                            class="header_output"><input type="text"
                            class="form-control" id="remunerationAA" placeholder=""></span>
                    </div>
                </div>
                
            </div>
        </fieldset>

		</div>
	</div>
</div>