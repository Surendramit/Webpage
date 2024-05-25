<?php
$base_username = "241acumeen";
$base_password = "acumeen@1234";

$db_hostname = "localhost";
$db_username = "u967844700_2023acumeen";
$db_userpassword = 'Acumeen@2023@';
$db_name = 'u967844700_acumeen';

$conn = new mysqli($db_hostname, $db_username, $db_userpassword, $db_name);

if($conn->connect_error){
    die("failed To Connect : ".$conn->connect_error);
}else{
    
    if($base_username == $_POST['username'] and $base_password == $_POST['password']){
       
        header('Location: admin_dashboard.php');
        exit();
       
     }else{
        echo "Invalid username or password.";
     }
}
?>






