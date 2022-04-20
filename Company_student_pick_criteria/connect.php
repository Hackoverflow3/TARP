<?php
	$Criteria1 = $_POST['Criteria 1'];
	$Criteria2 = $_POST['Criteria 2'];
	$Criteria3 = $_POST['Feild'];
	$Criteria4 = $_POST['Criteria 4'];
	$Criteria5 = $_POST['Criteria 5'];
	$percentage = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Criteria1, Criteria2, Criteria3, Criteria4, Criteria5,Percentage) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $Criteria1, $Criteria2, $Criteria3, $Criteria4, $Criteria5, $percentage);
		$execval = $stmt->execute();
		echo $execval;
		echo "Checking...";
		$stmt->close();
		$conn->close();
	}
?>