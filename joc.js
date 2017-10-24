var carta1 = "";
var carta2 = "";
var iguales = 1;
var intentos = 1;
var prueba = [];
var audio1 = new Audio('sounds/girar.WAV');
var audio2 = new Audio('sounds/fallar.WAV');





function flip(event,parell){
	audio1.play();
	//guardamos la primera carta
	if(carta1 == ""){
		carta1 = event.currentTarget;
		carta1.setAttribute('class','flip');	
		prueba.push(carta1);
	}else if( carta2 == ""){
	//guardamos la segunda carta
		carta2 = event.currentTarget;
		carta2.setAttribute('class','flip');
		document.getElementById('intent').innerHTML = "Intentos: " + intentos;	
		prueba.push(carta2);
		
	}
	
	//si son distintas, se vuelven a girar las cartas
	if(prueba.length == 2){
		if(carta1.id != carta2.id){
			setTimeout(girarCartas,1000);
		}else{
			//si son iguales, cambiamos el atributo onclick para que no se vuelva a ejecutar y de esta manera no se vuelva a girar la carta
			carta1.setAttribute("class","flip");
			carta2.setAttribute("class","flip");
			carta1.removeAttribute("onclick");
			carta2.removeAttribute("onclick");
			iguales = iguales + 1;
			prueba=[];
			carta1="";
			carta2="";
		}
	}
	
	//sumamos los intentos y volvemos a inicialicar las variables carta1 y carta2
	intentos = intentos + 1;

	
}

function girarCartas(){
	audio2.play();
	carta1.setAttribute('class','flip-container');
	carta2.setAttribute('class','flip-container');
	prueba=[];
	carta1="";
	carta2="";
}

