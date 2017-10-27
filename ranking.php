<html>
	<head>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<div id="global"> 
			<h1> MEMORY	</h1>
				<?php
				$nombre="";
				$intentos="";
				
				if(isset($_POST['name']) && isset($_POST['intentos'])){
					$nombre = $_POST['name'];
					$intentos = $_POST['intentos'];	
				}
				
				
				if($nombre != "" && $intentos != ""){
					$file = fopen("datos.txt","a");
					fwrite($file,$intentos."  ".$nombre . PHP_EOL);
					fclose($file);
				}
				
				$file = fopen("datos.txt","r");
				$arrayPrueba = array();
				
				while(!feof($file)){
					
					$line = fgets($file);
					if( !
					empty($line) )
						$arrayPrueba[] = explode(" ",$line);
var_dump($arrayPrueba);
echo "<br>\n";
				}
				
				//sort($arrayPrueba);
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
				print_r($arrayPrueba);
				fclose($file);
				
				?>
		</div>	
	</body>
</html>
