<?php 

$serverName = "localhost"; //host name
$dbUserName = "root"; //Database Username
$dbPassword = ""; //Database Password
$dbName = "jobChai"; //Database Name

$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 

	if($db){

		//Geting input
		$firstName = mysqli_real_escape_string($db, $_POST['firstName']);
		$lastName = mysqli_real_escape_string($db, $_POST['lastName']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$birthDate = mysqli_real_escape_string($db, $_POST['birthDate']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$state = mysqli_real_escape_string($db, $_POST['state']);
		$country = mysqli_real_escape_string($db, $_POST['country']);
		$postCode = mysqli_real_escape_string($db, $_POST['postCode']);
		$institutionName = mysqli_real_escape_string($db, $_POST['institutionName']);
		$cgpa = mysqli_real_escape_string($db, $_POST['cgpa']);
		$cgpaScale = mysqli_real_escape_string($db, $_POST['cgpaScale']);
		$lastOrganization = mysqli_real_escape_string($db, $_POST['lastOrganization']);
		$position = mysqli_real_escape_string($db, $_POST['position']);
		$experties = mysqli_real_escape_string($db, $_POST['experties']);
		$experience = mysqli_real_escape_string($db, $_POST['experience']);
		$companyAddress = mysqli_real_escape_string($db, $_POST['companyAddress']);
		$careerObjective = mysqli_real_escape_string($db, $_POST['careerObjective']);
		$program = mysqli_real_escape_string($db, $_POST['program']);
		$jobID = mysqli_real_escape_string($db, $_POST['jobID']);
		$image = mysqli_real_escape_string($db, $_FILES['image']['name']);
		//$image= $_POST['image'];

		//print_r($image); exit();
		$uploaddir = 'images/';
		$uploadfile = $uploaddir . basename($_FILES['image']['name']);

		//echo "<p>";
		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		//print_r($uploadfile); exit();
		  
		// $check= "SELECT * from user_info where email = '$email'";
			// if ($db->query($check) === TRUE) {
			//inerting data to database
			$sql ="INSERT  INTO applicant_info (firstName, lastName, email,mobile,gender,birthDate,address,city,state,country,postCode,institutionName,cgpa,cgpaScale,lastOrganization,position,experience,experties,companyAddress,careerObjective,program,jobID,image) values('$firstName', '$lastName', '$email', '$mobile', '$gender','$birthDate','$address','$city','$state','$country','$postCode','$institutionName','$cgpa','$cgpaScale','$lastOrganization','$position','$experience','$experties', '$companyAddress','$careerObjective','$program','$jobID','$uploadfile')"; 
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

	} 
	else {
		   echo "Upload failed";
		}
			

?>