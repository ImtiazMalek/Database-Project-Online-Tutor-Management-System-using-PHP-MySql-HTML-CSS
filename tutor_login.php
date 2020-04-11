<?php 
session_start();
$_SESSION['t_email']=$_POST['email'];
include 'tutor_login_session.php';


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
    $upassword=$_POST['password'];
    
    $sql="select * from tutor where email='".$uemail."'AND password='".$upassword."' limit 1";
    
    $result = $conn->query($sql);
    
    if($result->num_rows==1){
        echo "welcome ".$_SESSION['tutor_name'].".";
        echo " You Have Successfully Logged in.";
        echo " Your Id is: ".$_SESSION['tutor_id'];
        echo '<a href="tutor_dashboard/tutor_dashboard.php"><h2>DASHBOARD<h2></a>';
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        echo '<a href="tutor_login.php"><h2>TRY AGAIN<h2></a>';
        exit();
    }
        
}
?>











<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
      background-color: #000000;

}
form {border: 3px solid #f1f1f1;
background-color:#e5ccff;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 46px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Tutor Log In</h2>

<form method="post">
  <div class="imgcontainer">
    <img src="t.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <h2>Tutor login</h2>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f2e6ff">
    
 <p>Don't have an account? <a href="tutor_reg.html">click here</a></p>
  </div>

</form>

</body>
</html>
