<html>
	<head>
		<meta charset="UTF-8"/>
		<style>
			td{border: 1px solid black;border-radius: 5px;}
			h1{text-align: center;}
			#propio{float:left;border: 1px solid red;}
			table{margin: 0 auto;}
		</style>
	</head>
	<body>
		<div id="global"> 
			<h1> MEMORY	</h1>
				<?php		
				if(isset($_POST['boton'])){
					
					$intentos = $_POST['intentos'];	
					$nombre = $_POST['name'];
					$file = fopen("datos.txt","a");
					fwrite($file,$intentos .  " " . $nombre.PHP_EOL);
									
					fclose($file);
				}

				
				
				
				$file = fopen("datos.txt","r");
				$arrayPrueba = array();
				
				while(!feof($file)){
					
					$line = fgets($file);
					if( !
					empty($line) )
						$arrayPrueba[] = explode(" ",$line);
				}
				
				sort($arrayPrueba);
				
					echo "<table>";
						echo "<th>puntuación</th>";
						echo "<th>nombre</th>";
						echo "<tr></tr>";
						for($i=0;$i<sizeof($arrayPrueba);$i++){
							echo "<td>".$arrayPrueba[$i][0]."</td>";
							echo "<td>".$arrayPrueba[$i][1]."</td>";
							echo "<tr></tr>";
						}				
					echo "</table>";
					
	
					echo "<table>";
						echo "<th>puntuación</th>";
						echo "<th>nombre</th>";
						echo "<tr></tr>";
						
						echo $nombre."<br>";
						
						for($i=0;$i<sizeof($arrayPrueba);$i++){
							
							echo $arrayPrueba[$i][1]."<br>";
							if(strcmp($nombre,$arrayPrueba[$i][1]) == 0){
								
								echo "<td>".$arrayPrueba[$i][0]."</td>";
								echo "<td>".$arrayPrueba[$i][1]."</td>";
								echo "<tr></tr>";
							}
						}				
					echo "</table>";
					
				
				fclose($file);
				?>
		</div>	
	</body>
</html>
