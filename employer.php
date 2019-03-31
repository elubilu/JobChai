<?php 

$serverName = "localhost"; //host name
$dbUserName = "root"; //Database Username
$dbPassword = ""; //Database Password
$dbName = "jobChai"; //Database Name

$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 

	if($db){

		//Geting input
		$companyName = mysqli_real_escape_string($db, $_POST['companyName']);
		$companyType = mysqli_real_escape_string($db, $_POST['companyType']);
		$concernName = mysqli_real_escape_string($db, $_POST['concernName']);
		$concernPosition = mysqli_real_escape_string($db, $_POST['concernPosition']);
		$concernEmail = mysqli_real_escape_string($db, $_POST['concernEmail']);
		$concernNumber = mysqli_real_escape_string($db, $_POST['concernNumber']);
		$jobTitle = mysqli_real_escape_string($db, $_POST['jobTitle']);
		$jobCategory = mysqli_real_escape_string($db, $_POST['jobCategory']);
		$salary = mysqli_real_escape_string($db, $_POST['salary']);
		$deadline = mysqli_real_escape_string($db, $_POST['deadline']);
		$jobType = mysqli_real_escape_string($db, $_POST['jobType']);
		$experience = mysqli_real_escape_string($db, $_POST['experience']);
		$qualification = mysqli_real_escape_string($db, $_POST['qualification']);
		$jobLocation = mysqli_real_escape_string($db, $_POST['jobLocation']);
		$jobDescription = mysqli_real_escape_string($db, $_POST['jobDescription']);
		// $position = mysqli_real_escape_string($db, $_POST['position']);
		// $experties = mysqli_real_escape_string($db, $_POST['experties']);
		// $experience = mysqli_real_escape_string($db, $_POST['experience']);
		// $companyAddress = mysqli_real_escape_string($db, $_POST['companyAddress']);
		// $careerObjective = mysqli_real_escape_string($db, $_POST['careerObjective']);
		// $program = mysqli_real_escape_string($db, $_POST['program']);
		
			// $check= "SELECT * from user_info where email = '$email'";
			// if ($db->query($check) === TRUE) {
			//inerting data to database
			$sql ="INSERT  INTO job_info (companyName, companyType, concernName,concernPosition,concernEmail,concernNumber,jobTitle,jobCategory,salary,deadline,jobType,experience,qualification,jobLocation,jobDescription) values('$companyName', '$companyType', '$concernName', '$concernPosition', '$concernEmail','$concernNumber','$jobTitle','$jobCategory','$salary','$deadline','$jobType','$experience','$qualification','$jobLocation','$jobDescription')"; 
			if ($db->query($sql) === TRUE) {
			    header('Location: index.php'); 
			} 
			else {
			    echo "Error: " . $sql . "<br>" . $db->error;
			}
	
	}	
	else {
		echo "Database Not connected";
	}

?>