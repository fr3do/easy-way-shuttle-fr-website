/******************************************
# Auteur : Julien Theler - www.twiip.ch
# Contact : julien.theler@twiip.ch
# Licence : CC-by-nc
******************************************/

/*Fonctions servant à vérifier qu'une liste d'éléments d'un formulaire ne soient pas nuls
	Paramètres de la fonction verifForm :
	form [élément HTML] 	-> 	formulaire à parcourir
	liste_requis [Array] 	-> 	liste des names des champs devant être vérifiés
*/
function verifForm(form, liste_requis){	
	var submit = 1;
	for(i=0; i< form.length; i++){
		if(is_required(form[i].name, liste_requis)){
			/*S'il s'agit d'une liste de checkbox ou d'une liste de radio*/
			if(form[i].type == 'checkbox' || form[i].type == 'radio'){
				//Recherche de toutes les checkbox/radio portant ce nom pour voir si au moins une est cochée
				var one_checked = 0;
				for(j=0; j< form.length; j++){
					if(form[j].name == form[i].name && form[j].checked){
						one_checked = 1;
					}
				}
				if(!one_checked){
					submit = 0;
					form[i].parentNode.className += ' error'
				}
				else{
					deleteErrorClass(form[i].parentNode);
				}							
			}
			else{						
				if(form[i].value == ''){
					submit = 0;
					form[i].className += ' error'
				}
				else{
					deleteErrorClass(form[i]);
				}
			}
		}
	}
	if(!submit){
		if(document.getElementById('js_errors')){
			document.getElementById('js_errors').innerHTML = 'Veuillez remplir les champs obligatoires *';
		}
		return false;
	}
	else{
		if(document.getElementById('js_errors')){
			document.getElementById('js_errors').innerHTML = null;
		}
		return true;
	}
}

function is_required(nom, liste_requis){
	var requis = 0;
	for(j=0; j< liste_requis.length; j	++){
		if(liste_requis[j] == nom){
			requis = 1;
		}
	}
	return requis;
}

//Suppression de la class "error" sur l'élément passé en argument
function deleteErrorClass(element){
	var class_list = element.className.split(' ');
	element.className = '';
	for(k=0; k<class_list.length; k++){
		if(class_list[k] != 'error'){
			element.className += ' '+class_list[k];
		}
	}
}	