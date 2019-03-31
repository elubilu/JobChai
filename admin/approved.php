<?php 
        $serverName = "localhost"; //host name
        $dbUserName = "root"; //Database Username
        $dbPassword = ""; //Database Password
        $dbName = "jobChai"; //Database Name

        $db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 
		$status = mysqli_real_escape_string($db, $_POST['status']);
		$id = mysqli_real_escape_string($db, $_POST['jobID']);
		// print_r($id); exit();
        $courses = "UPDATE job_info SET status = '$status'  WHERE jobID = '$id'";
        if($db->query($courses)){
        	header('Location: jobApproval.php');
        }


?>