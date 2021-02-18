<?php

	
	if(isset($_POST['submit'])){

		$ename 	= $_POST['myemail'];

		if($ename == "" ){
			echo "null submission...";
		}else{
			echo "Email:".$ename;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			<input type="text" name="myemail" value="<?php echo $ename; ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html> 