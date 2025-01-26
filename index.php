<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TicketSwift</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<style>
body {
    font-family: 'Times New Roman', Times, serif, sans-serif;
    margin: 0;
    padding: 0;
}

.background {
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYdFlsd7NuVIcY1J55lrDnHKW8JuIIId76OjjfB7uRtJAQm1JTThtV5MAzIWgcwtKE9uc&usqp=CAU');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.container {
    text-align: center;
    flex-grow: 1; /* To fill the available space */
}

.page-header {
    position: absolute;
    top: 20px;
    left: 20px;
    color: black;
    font-size: 50px; /* Adjust font size as needed */
}

.options {
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 10px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.logo {
    padding: 0;
    border: none; 
    background: none;
}

.logo img {
    height: 100px;
}


.signup img, .login img {
    height: 100%;
}

.signup, 
.login {
  position: absolute;
  top: 30px;
}

.signup {
  right: 20px; 
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  flex-direction: column;
  font-size: 12px;
}

.login {
  right: 120px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  flex-direction: column;
  font-size: 12px;
}
.signup-text, .login-text {
    margin-top: 10px;
    color: black;
    font-size: 14px;
    font-weight: bold;

}
</style>

<div class="background">
    <div class="container">
        <div class="page-header">
            <h1 font-weight="bold" font-size="100px"> TicketSwift</h1>
            <p style="width: 100%; font-size: 80px; color: #8d0d8d" > 
             <i>"Enhance your event experience with our cutting-edge ticketing system. Enjoy seamless purchases secured by multi-factor authentication, preventing fraud and ensuring hassle-free access. Your security, our priority."
            </p>
            
        </div>
        
        <header>
            <a href="signup.php" class="signup">
              <img src="https://cdn1.iconfinder.com/data/icons/user-113/24/glyph_add_user_add_user_avatar_signup_profile_social_create_account_create_account_add_friend_add_friend-64.png"> 
              <div class="signup-text"> Sign Up </div>
            </a>
              
            <a href="login.php" class="login">
              <img src="https://cdn3.iconfinder.com/data/icons/bold-ui-2/24/artsebasov_profile-64.png">
              <div class="login-text" > Login </div>
            </a>  
          </header>
        
    </div>
</div>

</body>
</html>

<script>
const logo = document.querySelector('.logo');

logo.addEventListener('click', () => {
  window.location.href = 'nextpage.html';
});

const signupLogo = document.querySelector('.signup-logo');

signupLogo.addEventListener('click', () => {
  window.location.href = 'signup.html'; 
});
</script>