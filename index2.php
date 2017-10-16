<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css">		
		<script>
		function rotar(b){
			var imagen = document.getElementById(b.id);
			if (imagen.className  == "imagen"){
				imagen.className = "rotar";
				
			}else{
				imagen.className = "imagen";
			}					
		}
		
		</script>
	</head>
	<body>
		<div id="global"> 
			<h1> MEMORI	</h1>
				<table id="tabla">
					<?php 
					$fila = 1;
					for($i=1;$i<=12;$i++){
						if($fila <= 6){	
							echo "<td>
									<div class='flip-container' ontouchstart='this.classList.toggle('hover');'>
										<div class='flipper'>
											<div class='front'>
												<img src='yo.png'/>
											</div>
											<div class='back'>
												<img src='guapo.jpg'/>
											</div>
										</div>
									</div>
								</td>";
								$fila++;
						 }else{
							echo "<tr></tr>";
							$fila = 1;
						 }
					}
					?>
				</table>
		</div>	
	</body>
</html>
