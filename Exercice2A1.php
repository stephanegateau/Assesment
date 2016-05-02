<?php

if( isset ($_POST['update']))
{
	$title = $_POST['title'] ;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address[0] = $_POST['address0'];
	$address[1] = $_POST['address1'];
	$address[2] = $_POST['address2'];
	$postcode = $_POST['postcode'];
	$telephone = $_POST['telephone'];
}
else{		
		$title = "Mr";
		$name = "Philip Windridge";
		$email = "p.c.windridge@staffs.ac.uk";
		$address[0] = "The Ocatagon";
		$address[1] = "Beaconside";
		$address[2] = "Stafford";
		$postcode = "ST18 0DG";
		$telephone = "01785 353419";
}		
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
		<div id= "detail">
			<h2> Detail Amendment </h2>
			<form method="post">
				<fieldset>
					<legend> update details </legend>
						<p>				
							<input type ="text" name="title" id="title" value="<?php echo $title; ?>">
							
							<input type ="text" name="name" id="name" value="<?php echo $name; ?>">
							
							<input type ="email" name="email" id="email" value="<?php echo $email; ?>">
							
							<input type ="text" name="address0" id="address0" value="<?php echo $address[0]; ?>">
						</p>
						<p>
							<input type ="text" name="address1" id="address1" value="<?php echo $address[1]; ?>">
						
							<input type ="text" name="address2" id="address2" value="<?php echo $address[2]; ?>">
						
							<input type ="text" name="postcode" id="postcode" value="<?php echo $postcode; ?>">
							
							<input type ="tel" name="telephone" id="telephone"	value="<?php echo "$telephone" ?>">
						</p>	
					</table>
					<input name="update" type="submit" value="Update"></input>
				</fieldset>
			</form>
		</div>
	</body>
</html>