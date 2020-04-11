<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "otms_test");
                  // Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
   }
$id=$_POST['enroll_no'];
$sql = "DELETE FROM enroll WHERE enroll_no='".$id."'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<a href="request.php">Return<a>';

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>