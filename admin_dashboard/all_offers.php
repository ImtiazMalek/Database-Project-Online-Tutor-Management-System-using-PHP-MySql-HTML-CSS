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
        <div class="header"> <b>All Offers</b>
          <?php
          session_start();
          ?>

        </div>  
        <div class="info">
          <div>





          	<table>
				<tr>
				<th>offer_no</th>
				<th>subject</th>
				<th>area</th>
				<th>salary</th>
				<th>catagory</th>
				<th>tutor_gender</th>
				<th>class</th>
				<th>week_days</th>
				<th>user_id</th>

				</tr>
				<?php
				$conn = mysqli_connect("localhost", "root", "", "otms_test");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT offer_no,subject,area,salary,catagory,tutor_gender,class,week_days,user_id FROM offer";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["offer_no"]. "</td><td>" . $row["subjuct"] . "</td><td>"
				. $row["area"]. "</td><td>" . $row["salary"]. "</td><td>" . $row["catagory"]. "</td><td>" . $row["tutor_gender"]. "</td><td>" . $row["class"]. "</td><td>" . $row["week_days"]. "</td><td>" . $row["user_id"]. "</td></tr>";
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





























