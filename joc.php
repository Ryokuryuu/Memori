<html>
	<head>
		<meta charset="UTF-8"/>
		<style>
			#global {border: 1px solid black; margin: 0 auto;height: 100%;}
			#tabla 	{border: 1px solid red; margin: 0 auto; height: 80%; width: 80%;}
			h1 {text-align: center;}
			.cartas {border: 1px solid green; margin: 17px; height: 42%;width: 13%; }
		</style>
		
	</head>
	<body>
		<div id="global">
			<h1> MEMORI	</h1>
			<table id="tabla">
					<?php
					$val = $_POST["valor"];

					if($val == 8){
						for($i=1;$i<=2;$i++){				
							for($j=1;$j<=5;$j++){
								if($j > 4){
									echo "<tr></tr> \n";
								}else{
									echo "<td class='cartas'></td>\n";			
								}
							}	
						}
					}
					else if($val == 10){
						for($i=1;$i<=2;$i++){				
							for($j=1;$j<=6;$j++){
								if($j > 5){
									echo "<tr></tr> \n";
								}else{
									echo "<td class='cartas'></td>\n";			
								}
							}	
						}
					}
					else if($val == 12){
						for($i=1;$i<=2;$i++){				
							for($j=1;$j<=7;$j++){
								if($j > 6){
									echo "<tr></tr> \n";
								}else{
									echo "<td class='cartas'></td>\n";			
								}
							}	
						}
					}
					
					
					?>
			</table>
		</div>	
	</body>
</html>
