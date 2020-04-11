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
$sql = "INSERT INTO tutor (name,email,password,contact_number,university_name,department,semester,university_id,location,experience) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[contact_number]','$_POST[university_name]','$_POST[department]','$_POST[semester]','$_POST[university_id]','$_POST[location]','$_POST[experience]')";

//insert data
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<a href="tutor_login.php"> Back to login </a>

</body>
</html>