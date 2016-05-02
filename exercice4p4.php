<?php
if(isset($_POST['valid3']))
{         
	$hiddenEmail = $_POST['email'];
}
else
{
	$hiddenEmail = NULL;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> exercice 4</title>
	<style type="text/css">
		table,td,th {
			border: 1px solid black;
			border-collapse: collapse;
			text-align: left;
		}

	</style>
</head>
<body>
	<h1>Exercise Four – Hidden Fields</h1>           
	<input type="hidden" name="hiddenEmail" value="<?php echo $hiddenEmail; ?>">

	<table >
		<tr>
			<th> Name :</th> 
			<td> <?php echo $_POST['hiddenName2']; ?> </td> </tr>
			<tr>
				<th> Address : </th> 
				<td> <?php echo $_POST['hiddenAddress2']; ?> </td> </tr>
				<tr>
					<th> day of birth : </th> 
					<td> <?php echo $_POST['hiddenDob']; ?> </td> </tr>	
					<tr>
						<th> UserName :</th> 
						<td> <?php echo $_POST['hiddenUser']; ?> </td> </tr>
						<tr>
							<th> PassWord :</th> 
							<td> <?php echo $_POST['hiddenPW']; ?> </td> </tr>	
							<tr>
								<th> Mother's maiden name :</th> 
								<td> <?php echo $_POST['hiddenMother']; ?> </td> </tr>	
								<tr>
									<th> Email : </th> 
									<td> <?php echo $hiddenEmail; ?> </td> </tr>		

								</table>
							</body>
							</html>
