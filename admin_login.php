<?php 
session_start();
$_SESSION['admin']=$_POST['admin_name'];

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



if(isset($_POST['admin_name'])){

    
    $uname=$_POST['admin_name'];
    $password=$_POST['admin_password'];
    
    $sql="select * from admin where admin_name='".$uname."'AND admin_password='".$password."' limit 1";
    
    $result = $conn->query($sql);
    
    if($result->num_rows==1){
        echo "welcome".$_SESSION['admin'];
        echo " You Have Successfully Logged in";
        echo '<a href="admin_dashboard/admin_dashboard.php"><h2>DASHBOARD<h2></a>';
        //echo $_SESSION['']
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        echo '<a href="admin_login.html"><h2>TRY AGAIN<h2></a>';
        exit();
    }
        
}
?>