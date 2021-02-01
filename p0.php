<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
//if($conn->connect_error){
//	echo "ERROR - 404";
//}else{
//	echo "Connected";
//}

$username = $_POST['username'];
$password = $_POST['password'];
//echo $username;
//echo $password;
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($username != "admin" && $password != "a123"){
	header('location:login.html');
}
if($row['username'] == $username && $row['password'] == $password){
	header('location:admin_panel.html');
}else{
	echo "<script>alert('Check your credentials')</script>";
	echo "<script>location.replace('login.html')</script>";
}


?>