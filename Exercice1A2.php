<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>table de multiplication</title>
		<style>
			
			table {
				border: 1px solid black;
    			border-collapse: collapse;
    			border-spacing: 30px;
    			width: 40%;
    			text-align: center;
			}
		</style>
	</head>
	<body>
		<figure >
			<?php
			echo "<table border=1>";

			for ($ligne =1; $ligne <= 10; $ligne++){

			    echo('<tr>');

			    for ($colone = 1; $colone <= 10; $colone++){

			        echo('<td>' .$ligne*$colone.'</td>');
			    }
			    echo('</tr>');
			}
			echo("</table>");
			?>
		</figure>
	</body>
</html>
