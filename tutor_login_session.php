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

$sql="SELECT tutor_id,name FROM tutor WHERE email='".$uemail."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['tutor_id']=$row["tutor_id"];
$_SESSION['tutor_name']=$row["name"];
}

?>