<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> exercice 4</title>
	<style type="text/css">
		h1{
			text-align: center;
		}
		fieldset
		{

			max-width:500px;
			padding:16px;
			margin-left: auto;
			margin-right: auto;	
		}
	</style>
</head>
<body>
	<h1>Exercise Four</h1>
	<fieldset > 
		<legend>Hidden Fields</legend>
		<form method="post" action="exercice4p2.php">             
			<p>
				your name : <input type='text' name='name'>
			</p>
			<p>
				your address : <input type='text' name='address'>
			</p>
			<input type='submit' name='valid' value='valid'>
		</fieldset>
	</form>
</body>
</html>
