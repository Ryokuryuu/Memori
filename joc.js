var carta1 = "";
var carta2 = "";

function flip(event){
	//guardamos la primera carta
	if(carta1 == ""){
		console.log("flip in 1");
		carta1 = event.currentTarget;
		carta1.setAttribute('class','flip');	
	
	}else if( carta2 == ""){
	//guardamos la segunda carta
		console.log("flip in 2");
		carta2 = event.currentTarget;
		carta2.setAttribute('class','flip');	
	}else{
		//comprobamos las cartas
		setTimeout(comprobar(carta1,carta2),5000);	
	}
}

function comprobar(a,b){
	//si son distintas, se vuelven a girar las cartas
	if(a.id != b.id){
		a.setAttribute('class','flip-container');
		b.setAttribute('class','flip-container');
		carta1="";
		carta2="";
	}else{
		carta1="";
		carta2="";
	}
}



