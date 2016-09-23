<!DOCTYPE html>
<html>
<head>
	<?php
		//Creamos los parametros iniciales
		//estos podrían proceder de un formulario, sql, etc...
		$filas = 6;
		$columnas = 7;
		$dia = 1;
		$semana = array("Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom");
		//$grey = true;
	?>                                                   
</head>                                                                 
<body>      

	<!-- Creamos el inicio de la tabla manualmente-->
	<table border="1">
		<?php
		//Iniciamos el bucle de las filas
			echo "<tr>";
			for($d=0;$d<$columnas;$d++){
				echo "<th style=padding:3px;>".$semana[$d]."</th>";
			}
			echo "</tr>";

			for($t=0;$t<$filas;$t++){
				echo "<tr>";
			//Iniciamos el bucle de las columnas

				for($y=0;$y<$columnas;$y++){
				/*if($grey){
				//Pintamos el cuadro
				echo "<td style=padding:3px;
				background-color:#F5D0A9;>".$texto."</td>";
				//El próximo no será pintado
				$grey=false;
				$texto++;
				}else{
				//Dejamos cuadro en blanco
				echo "<td style=padding:3px;>".$texto."</td>";
				//El próximo será pintado
				$grey=true;
				$texto++;
				}*/
					echo "<td style=padding:3px;>".$dia."</td>";
					$dia++;
				}   
			//Cerramos columna
			echo "</tr>";
			}
		?>
	<!-- Cerramos tabla -->
	</table>
</body>                                                                 
</html>