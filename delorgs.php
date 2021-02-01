<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="jaisai1918!";
$db="mypro_bdms";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$org_id = $_GET['orgid'];
$sql = "DELETE FROM organization_list WHERE org_id = '$org_id'";

$result = mysqli_query($conn,$sql);

header('location:orgs.php');

?>