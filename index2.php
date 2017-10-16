<html>
	<head>
		<meta charset="UTF-8"/>
		<style>
			#global {border: 1px solid black; margin: 0 auto;height: 100%;}
			#tabla 	{border: 1px solid red; margin: 0 auto; height: 80%; width: 90%;}
			h1 {text-align: center;}
			.imagen {border: 1px solid green;background-color:green; height: 36%; width: 10%;float: left; margin: 3%;}
			.rotar {border: 1px solid blue; height: 36%; width: 10%;float: left; margin: 3%;}
			
		</style>
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
				<div id="tabla" onload=setImagen()>
					<?php 
						for($i=1;$i<=12;$i++){
							echo "<div class='imagen' id=$i onClick=rotar(this)> </div> \n";
						}
					?>
				</div>
		</div>	
	</body>
</html>
