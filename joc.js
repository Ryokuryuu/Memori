var carta1 = "";
var carta2 = "";
var iguales = 1;
var intentos = 1;


function flip(event,parell){
	//guardamos la primera carta
	if(carta1 == ""){
		carta1 = event.currentTarget;
		carta1.setAttribute('class','flip');	
	
	}else if( carta2 == ""){
	//guardamos la segunda carta
		carta2 = event.currentTarget;
		carta2.setAttribute('class','flip');
		document.getElementById('prueba').innerHTML = "Intentos: " + intentos;	
		document.getElementById('prueba').value = intentos;	
		
	}else{
		if(iguales == parell){
			alert('has ganado');

		}else{
			//comprobamos las cartas
			setTimeout(comprobar(carta1,carta2),5000);					
		}
	}
	
}

function comprobar(a,b){
	//si son distintas, se vuelven a girar las cartas
	if(a.id != b.id){
		a.setAttribute('class','flip-container');
		b.setAttribute('class','flip-container');

	}else{
		a.setAttribute('onclick','nada');
		b.setAttribute('onclick','nada');
		iguales = iguales + 1;
	}
	
	intentos = intentos + 1;
	carta1="";
	carta2="";
}




