function flip(event){
	var carta = event.currentTarget.className;
	if(carta != "flip-container"){
		carta.currentTarget.setAttribute("class","flip-container");
	}else{
		carta.currentTarget.setAttribute("class","flip");
	}
}
