<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$camp_no = $_GET['camp_no'];
$sql = "DELETE FROM blood_camp_list WHERE camp_no = '$camp_no'";

$result = mysqli_query($conn,$sql);

header('location:camps.php');

?>