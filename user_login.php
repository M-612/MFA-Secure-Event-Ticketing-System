<?php 
session_start();
 
require ('C:\xampp\htdocs\NEW_FMP\DB\config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `new_user` WHERE email = '$email' AND passwd = '$password'";
$result_query = mysqli_query($con, $query);
$row = mysqli_fetch_array($result_query);
$count_query = mysqli_num_rows($result_query);

if ($count_query != 0) 
	{

    $_SESSION['email'] = $row['email'];
    header("Location:question.php");
	exit();
	} 
else {
		    echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
	}
?>