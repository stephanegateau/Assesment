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
		<link rel="stylesheet" type="text/css" href="Style.css">
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
		<div id="array">
		<?php 
		 echo "<h2> Message of the day </h2>";
		$dayOfWeek = date('D');
		$personInCharge = array('Nobody',
				'Russell Campion',
				'Fiona Knight', 
				'Philip Windridge', 
				'Fiona Knight',
				'Russell Campion',
				'Nobody');

		switch ($dayOfWeek) {
			case 'Mon':
				echo "Today is Monday and the person in charge is $personInCharge[1] !";
				break;
			case 'Tue':
				echo "Today is Tuesday and the person in charge is $personInCharge[2]!";
				break;
			case 'Wes':
				echo "Today is Westeday and the person in charge is $personInCharge[3]!";
				break;
			case 'Thu':
				echo "Today is Thursday and the person in charge is $personInCharge[4]!";
				break;	
			case 'Fri':
				echo "Today is Friday and the person in charge is $personInCharge[5]!";
				break;	
			case 'Sat':
				echo "Today is Saturday and the person in charge is $personInCharge[6]!";
				break;
			case 'Sun':
				echo "Today is Sunday and the person in charge is $personInCharge[7]!";
				break;
		}

		echo "<h2> The folowing modules are available at Level 4 </h2>";
		$moduleNames = array('Web Design and Development',
			'Introduction to Web Programming',
			'Introduction to Web Development',
			'Introduction to Software Development',
			'Object Oriented and Event Driven Programming',
			'Hardware',
			'Networks and Servers',
			'Maths For Interactive Computing',
			'System Modelling',
			'Introduction to Design Concepts for Computing',
			'Introduction to Digital Media');
		sort($moduleNames);
		echo "<ul>";
		foreach ($moduleNames as $key => $value) {
			echo "<li>". $value ."</li>" ;
		}
		echo "</ul>";
		; ?>
		</div>
	</body>
</html>
