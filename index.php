<html>
	<head>
		<title>conectar a una BD MySqL</title>
   
	</head>
	<body>
	<div id="chart_div" style="width: 98%; height: 120px;"></div>
	<?php
	//conexion a la base de datos
	$con = mysql_connect ('localhost','root','neon4420');
	mysql_select_db ("chart", $con) or die ("No se pudo conectar a la bd")
	
	?>
	<table border="1">
	<tr>
		<td colspan="4"> My Sql PHP Select Query</td>
	</tr>
	<tr>
		<td>tiempo</td>
		<td>temperatura</td>
		<td>consumo</td>

	</tr>

	<?php
	$result = mysql_query("select * from Log");
	while($row = mysql_fetch_array($result)){ ?>
	<tr>
		<td><?php echo $row["time"];?></td>
		<td><?php echo $row["temp"];?></td>
		<td><?php echo $row["watt"];?></td>
	</tr>
	
	<?php		
	} ?>
	</table>
	</body>
</html>
	
