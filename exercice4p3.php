<?php
if(isset($_POST['valid2']))
{
	echo "flag";
	echo $_POST['hiddenName'];
	$hiddenDob = $_POST['dob'];
	$hiddenUser = $_POST['user'];
	$hiddenPW = $_POST['pw'];
	$hiddenMother = $_POST['mother'];
	$hiddenName2 = $_POST['hiddenName'];
	$hiddenAddress2 = $_POST['hiddenAddress'];
}

print_r($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> exercice 4</title>
</head>
<body>
	<h1>Exercise Four – Hidden Fields</h1>
	<form method="post" action="exercice4p4.php" >           
		<p>
			<input type='checkbox' name='TC' required/> I accept terms and conditiom 
		</p>
		<p>
			your email adress : <input type='text' name='email'>
		</p>
		<input type="submit" name="valid3" value="valid">
		<input type="hidden" name="hiddenName2" value="<?php echo $hiddenName2; ?>">
		<input type="hidden" name="hiddenAddress2" value="<?php echo $hiddenAddress2; ?>"> 
		<input type="hidden" name="hiddenDob" value="<?php echo $hiddenDob; ?>">
		<input type="hidden" name="hiddenUser" value="<?php echo $hiddenUser; ?>">
		<input type="hidden" name="hiddenPW" value="<?php echo $hiddenPW; ?>">
		<input type="hidden" name="hiddenMother" value="<?php echo $hiddenMother; ?>"> 
		salut :<?php echo $hiddenName2 ?>

		
	</form>
</body>
</html>
