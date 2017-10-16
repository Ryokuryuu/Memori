function flip(event){
	var carta = event.currentTarget.className;
	
	if(carta == "flip-container"){
		event.currentTarget.setAttribute('class','flip');
	}else{
		event.currentTarget.setAttribute('class','flip-container');
	}
}
