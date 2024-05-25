 <!-- <?php
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	
	$number = $_POST['mobile'];

	$architecture = $_POST['architecture'];
	$reg_time = $_POST['reg_time'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','acumeen_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(name, email,  mobile, architecture ) values(?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $fullname, $email, $number, $architecture);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Thank You For Connecting with Us. We will connect with you soon.";
		$stmt->close();
		$conn->close();
	}
?> -->