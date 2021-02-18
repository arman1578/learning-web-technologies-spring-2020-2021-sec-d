<?php

	if(isset($_POST['submit'])){

		$Ename = $_POST['myemail'];

		if($Ename == ""){
			echo "null submission...";
		}else{
			echo "Email:".$Ename;
		}

	}else{
		echo "invalid request...";
	}
?> 