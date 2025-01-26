<?php
session_start();

if(isset($_SESSION['email'])) {
   
    $username = $_SESSION['email']; 
    echo "Username: $username <br>";
}


require ('C:\xampp\htdocs\NEW_FMP\DB\config.php');

$answer1 = $_POST["answer1"];  
$answer2 = $_POST["answer2"]; 


$query = "SELECT * FROM `questionnaire` WHERE email = '$username' AND answer1 = '$answer1' AND answer2='$answer2'";
$result_query = mysqli_query($con, $query);
$row = mysqli_fetch_array($result_query);
$count_query = mysqli_num_rows($result_query);


if ($count_query != 0) 
	{
    header("Location: landing_page.php");
	exit();
	} 
else {
		    echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
	}

?>