<div class="panel-group" id="courierOffrePanel">
	<div class="panel panel-default">
		<div class="panel-body">

        <fieldset class="fieldset-margin-bottom choisirCourierOffrePanel">
            <legend>Devis</legend>

            <div class="fieldset-container" id="repartitionCourierOffreFieldset">

                <div class="col-md-12 input_holder">
                    <div class="header-group">
                        <span class="header_label"><label for="choisirDevis">Ajouter un devis</label></span>
                        <span class="header_output">
                            <input type=file style="display: none" id=choose>
                            <input type=button onClick=getFile.simulate() value="Choisir un fichier">
                            <label id=selected>Pas de fichier</label>
                        </span>
                    </div>
                </div>

                <div class="col-md-12 input_holder">
                    <div class="header-group">
                        <span class="header_label"><label for="choisirDevis">Information</label></span>
                        <span class="header_output">
                            <p>"Un Cadre contribution et un Courier d'offre seront envoyés au bénéficiaire par notre BO."
                        </span>
                    </div>
                </div>
                
            </div>
        </fieldset>
		</div>
	</div>
</div>

<script>

    const selectFile = function() {
	
	let regex = /[^\\]+$/
	
	this.choose,
	this.selected
	
	this.msg = str => {
		let prefix = '[selectFile.js]\n\nError: '
		return alert(prefix+str)
	}
		
	this.check = () => {
		if (this.choose && this.selected != null) {
			let choose = document.getElementById(this.choose),
				selected = document.getElementById(this.selected)
			choose.addEventListener('change',() => {
				if (choose.value != '') { 
					selected.innerHTML = choose.value.match(regex)
				}
			})
		} else {
			this.msg('Targets not set.')
		}
	}
	
	selectFile.prototype.targets = (trigger, filetext) => {
		this.choose = trigger
		this.selected = filetext
	}
	
	selectFile.prototype.simulate = () => {
		if (this.choose != null) {
			let choose = document.getElementById(this.choose)
			if (typeof choose != 'undefined') {
				choose.click()
				this.check()
			} else {
				this.msg('Could not find element '+this.choose)
			}
		} else {
			this.msg('Targets not set.')
		}
	}	
	
};

var getFile = new selectFile;
getFile.targets('choose','selected');

</script>