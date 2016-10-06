<!DOCTYPE html>
<html>
<head>
	<?php
		$filas = 6;
		$columnas = 7;
		$dia = 1;
		$semana = array("Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom");
		$ultimo_dia = date("t");
		$dia_inicial = mktime(0, 0, 0, date("n"), 1, date("Y"));
		$comienzo_semana = date("N",$dia_inicial);
		$comienzo_mes = false;

	?>                                                   
</head>                                                                 
<body>      
	<table border="1">
		<?php
			echo "<tr><th style=padding:3px; colspan='7'>" . date("F") . " " . date("Y") . "</th></tr>"; //muetro el mes y el año
			echo "<tr>";
			for($d=0;$d<$columnas;$d++){
				echo "<th style=padding:3px;>".$semana[$d]."</th>"; //muetro los días de la semana
			}
			echo "</tr>";
			for($t=0;$t<$filas;$t++){
				echo "<tr>";
				for($y=0;$y<$columnas;$y++){
					if($comienzo_mes==false){						
						if($y>=$comienzo_semana-1){
							$comienzo_mes=true;							
						}else{
							echo "<td style=padding:3px;></td>"; //dejo vacío las primeras celdas
						}
					}
					if($comienzo_mes==true){
						if($dia<=$ultimo_dia){
							echo "<td style=padding:3px;>".$dia."</td>";
							$dia++;
						}else{
							echo "<td style=padding:3px;></td>";
							$t=$filas; //no muestro filas innecesarias
						}
					}
				}   
			echo "</tr>";
			}
		?>
	</table>
</body>                                                                 
</html>