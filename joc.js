var carta1 = "";
var carta2 = "";
var iguales = 0;
var crono;

var contadorPista = 3;
var intentos = 0;
var arrayObjetos = [];
var cartasGiradas = [];

var audio1 = new Audio('sounds/girar.WAV');
var audio2 = new Audio('sounds/fallar.WAV');
var audio3 = new Audio('sounds/ganar.WAV');




function flip(event,pareja){
	audio1.play();
	//guardamos la primera carta
	if(carta1 == ""){
		carta1 = event.currentTarget;
		carta1.setAttribute('class','flip');	
		arrayObjetos.push(carta1);
		
		
	}else if( carta2 == ""){
	//guardamos la segunda carta
		carta2 = event.currentTarget;
		carta2.setAttribute('class','flip');
		document.getElementById('intent').innerHTML = "Intentos: " + intentos;	
		arrayObjetos.push(carta2);
		
	}
	
	//si son distintas, se vuelven a girar las cartas
	if(arrayObjetos.length == 2){
		if(carta1.id != carta2.id){
			setTimeout(girarCartas,1000);
		}else{
			//si son iguales, retiramos el atributo onclick y sumamos un punto
			sumarPuntos();
			
		}
	}
	
	//sumamos los intentos 
	intentos = intentos + 1;

	//en caso de que todas las cartas sean iguales se ejecuta la función ganador
	if(pareja == iguales){
		ganador();
	
	}
}

function girarCartas(){
	audio2.play();
	carta1.setAttribute('class','flip-container');
	carta2.setAttribute('class','flip-container');
	arrayObjetos=[];
	carta1="";
	carta2="";
}

function sumarPuntos(){
		//ejecuta el audio correspondiente a que ha acertado la pareja
		//y quita el onclic de ese objeto
		audio3.play();
		carta1.setAttribute("class","flip");
		carta1.removeAttribute("onclick");
		
		carta2.setAttribute("class","flip");
		carta2.removeAttribute("onclick");
		
		//la variable iguales suma uno cada vez que se da con una pareja y printa en pantalla las parejas que tiene
		iguales = iguales + 1;
		document.getElementById('acert').innerHTML = "Aciertos: " + iguales;	
		cartasGiradas.push(carta1.getAttribute("cartaid"));
		cartasGiradas.push(carta2.getAttribute("cartaid"));
		
		//inicializamos las variables a cero otra vez
		arrayObjetos=[];
		carta1="";
		carta2="";

}

function ganador(){
	//esta función muestra un alert de que ha ganado y detiene el cronómetro
	alert('has ganado');
	document.getElementById('intent').value = intentos;
	detenerse();
}

function detenerse(){	
	//función que sirve para detener el cronómetro
   clearInterval(crono);
}

function carga()
{
	//función que ejecuta un cronómetro, tanto segundos como minutos
	segundos =0;
	minutos =0;
	seg = document.getElementById("seg");
	min = document.getElementById("min");
	
	crono = setInterval(
		function(){
			if(segundos==60)
			{//cuando la variable segundos llega a 60, se inicializa a 0 y minutos suma 1
				segundos=0;
				minutos++;
				min.innerHTML = minutos;
				if(minutos==60)
				{
					minutos=0;
				}
			}
			seg.innerHTML = segundos;
			segundos++;
		}
		,1000);
}

function ayuda(){
	var clase = [];

	if(contadorPista >= 1){
		intentos = intentos + 5;
		document.getElementById('intent').innerHTML = "Intentos: " + intentos;	
		clase = document.getElementsByName("carta");
		
		for(i=0;i<clase.length;i++){
			var prueba = clase[i].getAttribute("class");
			if(prueba == 'flip-container'){
				clase[i].setAttribute("class","flip");
			}
		}
		contadorPista --;
		document.getElementById('ayuda').value = "Pistas: " + contadorPista;
		setTimeout(function(){
				for(i=0;i<clase.length;i++){
				var prueba = clase[i].getAttribute("onclick");
				if(prueba != null){
					clase[i].setAttribute("class","flip-container");
				}
			}
		},2000);
	}
}


