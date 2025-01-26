<?php
require ('C:\xampp\htdocs\new_fmp\DB\config.php');

$fname = $_POST["FULL_NAME"];  
$email = $_POST["email"]; 
$password = $_POST["passwd"];  
$cpassword = $_POST["c_passwd"];  
        

$sql = "Select * from new_user where email='$email'"; 

$result = mysqli_query($con, $sql); 

$num = mysqli_num_rows($result);  

 
if($num == 0) { 
    if(($password == $cpassword)) {     
        
        $sql = "INSERT INTO new_user ( F_name,email,passwd) VALUES ('$fname','$email','$password')"; 

        $result = mysqli_query($con, $sql); 

        if ($result) { 
            echo '<script>alert("USER CREATED SUCCESSFULLY");location.replace("http://127.0.0.1/new_fmp");</script>';  
        } 
    }  
    else {  
        $showError = "Passwords do not match";  
    }       
} 

if($num>0)  
{ 
    echo '<script>alert("Username not available");location.replace(document.referrer);</script>'; 
}

$question1 = mysqli_real_escape_string($con, $_POST['question1']);
$answer1 = mysqli_real_escape_string($con, $_POST['answer1']);
$question2 = mysqli_real_escape_string($con, $_POST['question2']);
$answer2 = mysqli_real_escape_string($con, $_POST['answer2']);

$sql_questionnaire = "INSERT INTO questionnaire (id,email, question1, answer1, question2, answer2) VALUES ('', '$email','$question1', '$answer1', '$question2', '$answer2')";
$result_questionnaire = mysqli_query($con, $sql_questionnaire);

if ($result_questionnaire) {
    echo '<script>alert("true");</script>';
} else {
    echo '<script>alert("false");</script>';
}
?>