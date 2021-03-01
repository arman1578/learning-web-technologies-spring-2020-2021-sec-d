<?php
   		if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$conPass=$_POST['conPassword'];

   		if($name == "" || $email == "" || $username == ""||$password == "" ||$conPass == "")
		{
			echo "Field empty..please try again";
		}
		else if ($password != $conPass){
			echo "password & confirm password mismatch...";
		}
		else
		{
   			$userdata = [];
		
  			$formdata = [
	      					'name' => $_POST['name'],
							'email' =>$_POST['email'],
							'username' => $_POST['username'],
							'password' => $_POST['password'],
							'conPass' => $_POST['conPassword']
	  					];

	   		$jsondata = file_get_contents('userinformation.json');
			$userdata = json_decode($jsondata, true);
			array_push($userdata,$formdata);
			$jsondata = json_encode($userdata, JSON_PRETTY_PRINT);
		   

		   if(file_put_contents('userinformation.json', $jsondata)) {
		        header('location: login.html');

		    }
		   else {
		        echo "error!!!!!";
		   }
	}
}

?>