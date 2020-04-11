<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "otms_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email'])){

    
    $uemail=$_POST['email'];

$sql="SELECT user_id,username FROM user WHERE user_email='".$uemail."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['user_id']=$row["user_id"];
$_SESSION['user_name']=$row["username"];
}

?>