<?php		
		$title = "Mr";
		$name = "Philip Windridge";
		$email = "p.c.windridge@staffs.ac.uk";
		$address[0] = "The Ocatagon";
		$address[1] = "Beaconside";
		$address[2] = "Stafford";
		$postcode = "ST18 0DG";
		$telephone = "01785 353419";
		
?>
<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title> PHP Assessment Exercice: Set 1</title>
	</head>
	<body>
		<h1>PHP Assessment Exercice: Set 1</h1>
		<div id= "contact">
			<h2> Contact details</h2>
			<address><?php  echo " $title $name  $email  $address[0]  $address[1]  $address[2]  $postcode  $telephone"; ?></address>
		</div>
	</body>
</html>
