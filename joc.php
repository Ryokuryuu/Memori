<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">		
		<script src="joc.js" language="javascript" type="text/javascript"> </script>
		
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
									echo "<td>
											<div class='flip-container' onclick='flip(event)'>
												<div class='flipper'>
													<div class='front'>
														<img src='backside.png'/>
													</div>
													<div class='back'>
														<img src='guapo.jpg'/>
													</div>
												</div>
											</div>
										</td>";			
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
									echo "<td>
											<div class='flip-container' onclick='flip(event)'>
												<div class='flipper'>
													<div class='front'>
														<img src='backside.png'/>
													</div>
													<div class='back'>
														<img src='guapo.jpg'/>
													</div>
												</div>
											</div>
										</td>";			
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
									echo "<td>
											<div class='flip-container' onclick='flip(event)'>
												<div class='flipper'>
													<div class='front'>
														<img src='backside.png'/>
													</div>
													<div class='back'>
														<img src='guapo.jpg'/>
													</div>
												</div>
											</div>
										</td>";			
								}
							}	
						}
					} 
					
					
					?>
			</table>
		</div>	
	</body>
</html>
