<?php
 $con = mysqli_connect('localhost','root');

 if($con){
    echo "Connection Successful";
 }else{
    echo "No Connect";
 }

 mysqli_select_db($con, 'newclient');
 $user = $_POST['user'];

 $email = $_POST['email'];

 $mobile = $_POST['mobile'];

 $status = $_POST['architectureStatus'];

 $query = " insert into newclientinfo (user, email, mobile, status ) 
 
 values ('$user', '$email', '$mobile', '$status') ";

 mysqli_query($con, $query);

header('location:index-2.php');

?>