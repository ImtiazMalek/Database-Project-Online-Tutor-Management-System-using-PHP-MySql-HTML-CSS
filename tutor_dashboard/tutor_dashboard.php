<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
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
          session_start();
          echo $_SESSION['tutor_name'];
          ?>




        </div>  
        <div class="info">
          <div><b>Let O.T.M.S BRIGHTEN YOUR DAY</b></div>
      </div>
    </div>
</div>

</body>
</html>