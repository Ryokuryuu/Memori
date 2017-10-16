function flip(event){
	var clase = event.currentTarget.className;
	if(clase != 'flip-container'){
		event.currentTarget.setAttribute('class','flip-container');
	}else{
		event.currentTarget.setAttribute('class','flip');
	}
}
