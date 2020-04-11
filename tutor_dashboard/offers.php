<?php 
session_start();
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

if(isset($_POST['delete']))
{
	$t_id=$_SESSION['tutor_id'];
	$t_name=$_SESSION['tutor_name'];
	$o_no=$_POST['o_no'];



	$sql="INSERT INTO enroll (tutor_id,offer_no,tutor_name) VALUES ('$t_id','$o_no','$t_name')";
	if($conn -> query($sql) === TRUE)
	{
		echo "success";

	}
	else{
		echo "Not Inserted";
		;
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enrolment</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>O.T.M.S</h2>
        <h4 align="center">Tutor</h4>
        <ul>
            <li><a href="../intro1.html">HOME</a></li>
            <li><a href="offers.php"><i class="fas fa-home"></i>Offers</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Search Offer</a></li>
            
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Welcome!!
          <?php
          echo $_SESSION['tutor_name'];
          echo '>Offers';
          ?>




        </div>  
        <div class="info">
          	<div class="container">
		<div id="Sign-up">
			<fieldset "width=30%">
				<lagend> Enrolment </lagend>
			
				<table border="0">
				<tr>
				<form method="POST">
				<td>Offer No</td> <td><input type="number" name="o_no"> </td></tr>
				<tr><td><input type="Submit" name="delete"> </td></tr>
				</form>
				</table>


			</fieldset>

		</div>






          </div>
      </div>
    </div>
</div>

</body>
</html>
