<?php
if(isset($_POST['valid']))
{
	$hiddenName = $_POST['name'];
	$hiddenAdress = $_POST['address'];
	
}
else{
	$hiddenName = NULL;
	$hiddenAdress =NULL;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> exercice 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Exercise Four – Hidden Fields</h1>
	<fieldset>
		<legend>Hidden Fields</legend>
		<form method="post" action="exercice4p3.php">              
			<p>
				your date of birth : <input type='text' name='dob' value='dd/mm/yyyy'>
			</p>
			<p>
				your username : <input type='text' name='user'>
			</p>
			<p>
				your password : <input type='password' name='pw'>
			</p>
			<p>
				your mother's maiden name : <input type='text' name='mother'>
			</p>
			<input type="submit" name="valid2" value="valid" id='valid'> 
			<input type="hidden" name="hiddenName" value="<?php echo $hiddenName; ?>">
			<input type="hidden" name="hiddenAddress" value="<?php echo $hiddenAdress; ?>">         
		</form>
	</fieldset>
</body>
</html>
