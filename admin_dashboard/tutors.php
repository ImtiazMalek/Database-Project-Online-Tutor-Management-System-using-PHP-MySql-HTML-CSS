<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="../styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>O.T.M.S</h2>
        <h4 align="center">Admin</h4>
        <ul>
        	<li><a href="../intro1.html">HOME</a></li>
            <li><a href="all_offers.php"><i class="fas fa-home"></i>All Offers</a></li>
            <li><a href="request.php"><i class="fas fa-map-pin"></i>Edit Requests</a></li>
            <li><a href="user.php"><i class="fas fa-user"></i>User</a></li>
            <li><a href="tutors.php"><i class="fas fa-project-diagram"></i>Tutors</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Approved Requests</a></li>
            
            
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"> <b>Tutors</b>
          <?php
          session_start();
          ?>

        </div>  
        <div class="info">
          <div>





          	<table>
				<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Uni Name</th>
				<th>Department</th>
				<th>University Id</th>
				<th>Semester</th>
				<th>Location</th>
				</tr>
				<?php
				$conn = mysqli_connect("localhost", "root", "", "otms_test");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT name,email,contact_number,university_name,department,university_id,semester,location FROM tutor";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
				. $row["contact_number"]. "</td><td>" . $row["university_name"]. "</td><td>" . $row["department"]. "</td><td>" . $row["university_id"]. "</td><td>" . $row["semester"]. "</td><td>" . $row["location"]. "</td></tr>";
					}
					echo "</table>";
					} else { echo "0 results"; }
					$conn->close();
					?>
			</table>





          </div>
      </div>
    </div>
</div>

</body>
</html>


