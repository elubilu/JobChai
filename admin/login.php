<?php 

        $serverName = "localhost"; //host name
        $dbUserName = "root"; //Database Username
        $dbPassword = ""; //Database Password
        $dbName = "jobChai"; //Database Name

        $db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 
        if($db){

		//Geting input
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		$check = "SELECT * FROM admin_info WHERE email = '$email' AND password = '$password' ";
		if($db->query($check)){
			header('Location: home.php');
		}
		else {
			header('Location: index.php');
		}
	}


?>