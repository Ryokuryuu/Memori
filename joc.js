function flip(event){
	var clase = event.currentTarget.className;
	
	var carta1 = "";
	var carta2 = "";
	
	
	if(carta1 == ""){
		carta1 = event.currentTarget.className;
		event.currentTarget.setAttribute('class','flip');
	}else if(carta1 != "" && carta2 == ""){
		carta2 = event.currentTarget.className;
		event.currentTarget.setAttribute('class','flip');
	}
	
	document.getElementById("prueba").innerHTML = carta1;
	
	
//	if(clase != 'flip-container'){
//		event.currentTarget.setAttribute('class','flip-container');
//	}else{
//		event.currentTarget.setAttribute('class','flip');
//	}
	
	
}




