<?php
	
	if(isset($_POST['Submit']))
	{
		$currentpassword = $_POST['passward'];
		$newpassword = $_POST['newpassward'];
		$retypenewpassword = $_POST['renewpassward'];

		if($currentpassword !== $newpassword && $newpassword == $retypenewpassword)
		{
			echo "Passward Successfully Changed";
		}
        else
        {
            echo "Something went wrong!!!! Please Try Again";
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>CHANGE PASSWORD</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="passward"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="newpassward"/> <br/></td> 
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="renewpassward"/> <br/></td> 
				</tr>
			</table>
			<hr>
			
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>