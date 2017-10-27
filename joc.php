<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">		
		<script src="joc.js" language="javascript" type="text/javascript"> </script>
		
	</head>
	<body onload="carga()">
		<div id="global" >
			<h1> MEMORY	</h1>
			<table id="tabla">
			 <p>
				<span id="min">0</span>min  <span id="seg">0</span>seg
			</p>
					<?php
					$val = $_POST["valor"];
					$file = fopen("datos.txt","w");
					$count = 0;
					
					//creamos una array con las imagenes y luego las ordenamos aleatoriamente
					$imagenes = array();
					for($i=1;$i<=8;$i++){
						$imagen = 'img/tumblr_os0seil6oc1tanwyno'.$i.'_400.png';
						array_push($imagenes,$imagen);
					}
					shuffle($imagenes);	
					
					
					//se decide el tamaño que ha escogido el usuario anteriormente en el html
					
					
					if($val == 8){
						//creamos con 4 imagenes una array y luego la ordenamos random
						$random = array();
						for($p=1;$p<=4;$p++){
							$random[$p] = $imagenes[$p];
							
						}
						shuffle($random);
		
						for($i=1;$i<=2;$i++){		
							for($j=0;$j<=4;$j++){
									if($j == 4){
										//cuando haya una fila de 4 cartas, continua en la siguiente fila y además vuelve a desordenar la array
										echo "<tr></tr> \n";
										shuffle($random);
									}else{
										echo "<td>
												<div class='flip-container' name='carta'  id='$random[$j]' onclick='flip(event,".($val/2).")'>
													<div class='flipper'>
														<div class='front'>
															<img src='backside.png'/>
														</div>
														<div class='back'>
															<img src='$random[$j]'/>
														</div>
													</div>
												</div>
											</td>";			
									$count++;
									}
								}
							}
						
						}
					
					//creamos con 5 imagenes una array y luego la ordenamos random
					else if($val == 10){
						$random = array();
						for($p=1;$p<=5;$p++){
							$random[$p] = $imagenes[$p];
							
						}
						shuffle($random);
						
						for($i=1;$i<=2;$i++){				
							for($j=0;$j<=5;$j++){
								if($j == 5){
									//cuando haya una fila de 5 cartas, continua en la siguiente fila y además vuelve a desordenar la array
									echo "<tr></tr> \n";
									shuffle($random);
								}else{
									echo "<td>
											<div class='flip-container' name='carta' id='$random[$j]'  onclick='flip(event,".($val/2).")'>
												<div class='flipper'>
													<div class='front'>
														<img src='backside.png'/>
													</div>
													<div class='back'>
														<img src='$random[$j]'/>
													</div>
												</div>
											</div>
										</td>";	
								$count++;		
								}
							}	
						}
					}
					
					//creamos con 6 imagenes una array y luego la ordenamos random
					else if($val == 12){
						$random = array();
						for($p=1;$p<=6;$p++){
							$random[$p] = $imagenes[$p];
							
						}
						shuffle($random);
						echo "<a id='prueba'>";
						for($i=1;$i<=2;$i++){				
							for($j=0;$j<=6;$j++){
								if($j == 6){
									//cuando haya una fila de 6 cartas, continua en la siguiente fila y además vuelve a desordenar la array
									echo "<tr></tr> \n";
									shuffle($random);
								}else{
									echo "<td>
											<div  class='flip-container' name='carta' id='$random[$j]'  onclick='flip(event,".($val/2).")'>
												<div class='flipper'>
													<div class='front'>
														<img src='backside.png'/>
													</div>
													<div class='back'>
														<img src='$random[$j]'/>
														
													</div>
												</div>
											</div>
										</td>";	
								$count++;	
								}
							}	
						}
					} 
					?>
			</table>
			<?php
				echo "<input type='button' id='ayuda' onclick='ayuda()' value='Pistas: 3'> </input>";
				echo "<form action='ranking.php' method='POST'>
						Intentos:
					    <input type='text' id='intent' name='intentos' value=0 > </input>;
				        <p id='acert'> Aciertos: </p>
						<input type='text' name='name' required placeholder='Introduece tu nombre:' autofocus /></br>
						<input type='submit' id='boton'/> 
						<input type='button' value='Guardar'> fwrite($file,$nom) </input>
				      </form>";
			?>	
		</div>	
	</body>
</html>
