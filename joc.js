function flip(event){
	var clase = event.currentTarget.className;
//	var carta1 = "";
//	var carta2 = "";
	
//	if(carta1 == ""){
//		carta1 = event.currentTarget;
//		event.currentTarget.setAttribute('class','flip');
//	}
//	else if(carta1 != "" && carta2 == ""){
//		carta2 = event.currentTarget;
//		event.currentTarget.setAttribute('class','flip');
//	}else if(carta1 != carta2){
//		carta1.setAttribue('class','flip-container');
//		carta2.setAttribue('class','flip-container');
//	}
	
	
	
	
	if(clase != 'flip-container'){
		event.currentTarget.setAttribute('class','flip-container');
	}else{
		event.currentTarget.setAttribute('class','flip');
	}
	
	
}




