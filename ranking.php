<html>
	<head>
		<meta charset="UTF-8"/>
		<style>
			td{border: 1px solid black;border-radius: 5px;}
			h1{text-align: center;}
			
			#general{width: 570px;margin: 0 auto;}
			#tabla1,#tabla2{float:left}
			h3{padding-left: 35px;}
			table{margin: 0 auto;}
			
		</style>
	</head>
	<body>
		<div id="global"> 
			<h1> MEMORY	</h1>
			<div id="general">
				<?php		
				$nombre="";
				
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
					echo "<div id='tabla1'>";
						echo "<h3>RANKING MUNDIAL</h3>";
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
					echo "</div>";
	
	
					echo "<div id='tabla2'>";
						echo "<h3>RANKING PERSONAL</h3>";
						echo "<table>";
							echo "<th>puntuación</th>";
							echo "<th>nombre</th>";
							echo "<tr></tr>";
						
							
							for($i=0;$i<sizeof($arrayPrueba);$i++){
								if(strcmp($nombre,trim($arrayPrueba[$i][1])) == 0){
									
									echo "<td>".$arrayPrueba[$i][0]."</td>";
									echo "<td>".$arrayPrueba[$i][1]."</td>";
									echo "<tr></tr>";
								}
							}				
						echo "</table>";
					echo "</div>";
				
				fclose($file);
				?>
		</div>	
	</body>
</html>
