<html>
	<head>
		<meta charset="UTF-8"/>
		<style>
			#global {border: 1px solid black; margin: 0 auto;height: 100%;}
			#tabla 	{border: 1px solid red; margin: 0 auto; height: 80%; width: 80%;}
			h1 {text-align: center;}
			span {display: block; clear: both;}
			img {height: 50%;width: 50%;}
			.cartas {border: 1px solid green; margin: 1%;height: 30%;width: 13%;float:left;}
			.rotar {border: 1px solid green; margin: 1%;height: 30%;width: 13%;float:left;transform: rotateY(180deg);}
			
		</style>
		<script>
		var rotar = false;
		function rotar(){
			if(rotar == false){
				document.getElementById('cartas').ClassName.replace('rotar');
				rotar = true;
				}
			else{
				document.getElementById('rotar').ClassName.replace('cartas');
				rotar = false;
				}
			}
		</script>
		
	</head>
	<body>
		<div id="global">
			<h1> MEMORI	</h1>
			<div id="tabla">
					<?php
					$val = $_POST["valor"];

					if($val == 8){
						for($i=1;$i<=2;$i++){				
							for($j=1;$j<=5;$j++){
								if($j > 4){
									echo "<span></span> \n";
								}else{
									echo "<div class='cartas'><img  id='imagen' src='yo.png' onClick=rotar()/></div>\n";			
								}
							}	
						}
					}
					else if($val == 10){
						for($i=1;$i<=2;$i++){				
							for($j=1;$j<=6;$j++){
								if($j > 5){
									echo "<span></span> \n";
								}else{
									echo "<div class='cartas'> <img  id='imagen' src='yo.png' onClick=rotar()/> </div>\n";			
								}
							}	
						}
					}
					else if($val == 12){
						for($i=1;$i<=2;$i++){				
							for($j=1;$j<=7;$j++){
								if($j > 6){
									echo "<span></span> \n";
								}else{
									echo "<div class='cartas'><img id='imagen' src='yo.png' onClick=rotar()/></div>\n";			
								}
							}	
						}
					}
					
					
					?>
			</div>
		</div>	
	</body>
</html>
