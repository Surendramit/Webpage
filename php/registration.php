<?php


$db_hostname = "localhost";
$db_username = "u967844700_2023acumeen";
$db_userpassword = 'Acumeen@2023@';
$db_name = 'u967844700_acumeen';

// $db_hostname = "localhost";
// $db_username = "root";
// $db_userpassword = '';
// $db_name = 'test';

$conn = new mysqli($db_hostname, $db_username, $db_userpassword, $db_name);

if (!$conn) {
   echo "Connection Error : " . mysqli_connect_error();
}

$name = $_POST['name'];
$email = $_POST['email'];

$number = $_POST['mobile'];

$architecture = $_POST['architecture'];


// echo "$name +  $email +  $number +  $architecture";


$stmt = $conn->prepare("INSERT INTO registration(name, email,  mobile, architecture ) values(?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $number, $architecture);
$execval = $stmt->execute();




$stmt->close();
$conn->close();

header('Location: formConfirmation.html');

exit();




?>