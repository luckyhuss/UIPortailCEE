(function(){
    function ce(tag, clas, txt) {
        var ele = document.createElement(tag);
        ele.setAttribute('class', clas);
        if(typeof txt === 'undefined' || txt === null){
            return ele;
        }
        var tn = document.createTextNode(txt);
        ele.appendChild(tn);
        return ele;
    }
    var KEY_ESC = 27;

    var MscConfirm = function(utilisateur, msgConnect, msgEtape, onOk, onCancel) {
        var prev = document.getElementsByClassName('msc-confirm');
        if(prev.length > 0){
            document.body.removeChild(prev[0]);
        }

        var options = {
        	utilisateur: null,
            msgConnect: null,
            msgEtape:null,
            onOk: null,
            onCancel: null,
            okText: 'OK',
            cancelText: 'Annuler'
        };

        if(typeof utilisateur === 'object') {
            for(var key in utilisateur) {
                options[key] = utilisateur[key];
            }
        } else {
            options.utilisateur = (typeof utilisateur === 'string') ? utilisateur : options.utilisateur;
            options.msgConnect = (typeof msgConnect === 'string') ? msgConnect : options.msgConnect;
            options.msgEtape = (typeof msgEtape === 'string') ? msgEtape : options.msgEtape;
            options.onOk = (typeof onOk === 'function') ? onOk : options.onOk;
            options.onCancel = (typeof onCancel === 'function') ? onCancel : options.onCancel;

            if(typeof sub === 'function') {
                options.onOk = sub;
            }
        }

        var dialog = ce('div', 'msc-confirm'),
            overlay = ce('div', 'msc-overlay'),
            closeBtn = ce('button', 'msc-close');
        //closeBtn.innerHTML = '&times;';
        //overlay.appendChild(closeBtn);

        //closeBtn.addEventListener('click', destroy);
  
        var content = ce('div', 'msc-content'),
            //cTitle = ce('h3', 'msc-title', options.title),
            
            alerte = ce('div', 'msc-popin-alerte'),
            //atag = ce('a', 'atag','Test'),
            body = ce('div', 'msc-body'),
            
            msgConnect = ce('span', 'msc-connect-message', options.msgConnect),
            util = ce('h4', 'msc-utilisataur', options.utilisateur),
            msgEtape = ce('span', 'msc-etape-message', options.msgEtape),
            
            action = ce('div', 'msc-action'),
            okBtn = ce('button', 'msc-ok', options.okText),
            cancelbtn = ce('button', 'msc-cancel', options.cancelText);
        
        
        content.appendChild(alerte);
        
        body.appendChild(msgConnect);
        body.appendChild(util);
        body.appendChild(msgEtape);
        
        action.appendChild(okBtn);
        action.appendChild(cancelbtn);

        //util.addEventListener('click', mailTo);
        okBtn.addEventListener('click', ok);
        cancelbtn.addEventListener('click', cancel);

        //content.appendChild(cTitle);
        content.appendChild(body);
        content.appendChild(action);

        dialog.appendChild(overlay);
        dialog.appendChild(content);
        document.body.appendChild(dialog);
        dialog.style.display = 'block';
        content.classList.add('msc-confirm--animate');
        //cancelbtn.focus();

        document.addEventListener('keyup', _hide);

        function destroy() {
            //closeBtn.removeEventListener('click', destroy);
            okBtn.removeEventListener('click', ok);
            cancelbtn.removeEventListener('click', cancel);
            //util.removeEventListener('click', mailTo);
            document.removeEventListener('keyup', _hide);
            document.body.removeChild(dialog);
        }

        function ok() {
            destroy();
            if(options.onOk !== null) {
                options.onOk();
            }
        }
        
        function mailTo(){
        	//destroy();
            if(options.utilisateur !== null) {
            	alert('mailto');
            	//options.utilisateur();
            }
        	
        }

        function cancel() {
            destroy();
            if(options.onCancel !== null) {
                options.onCancel();
            }
        }

        function _hide(e) {
            if(e.keyCode == 27) {
                destroy();
            }
        }
    };

    //window.msc = MscConfirm;
    window.mscConfirm = MscConfirm;
})();