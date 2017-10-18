function flip(event){
	var clase = event.currentTarget.className;
	var carta1;
	var carta2;

	
	if(clase != 'flip-container'){
		event.currentTarget.setAttribute('class','flip-container');
	}else{
		event.currentTarget.setAttribute('class','flip');
	}
	
	
}




