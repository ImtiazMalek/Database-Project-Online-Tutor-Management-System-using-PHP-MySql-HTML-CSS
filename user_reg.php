<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

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
 
//insert query stored in a string
$sql = "INSERT INTO user (username,user_email,user_password,user_contact_number) VALUES ('$_POST[username]','$_POST[user_email]','$_POST[user_password]','$_POST[user_contact_number]')";

//insert data
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<a href="user_login.php"> Back to login </a>

</body>
</html>