<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TicketSwift</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
    font-family: 'Times New Roman', Times, serif, sans-serif;
    margin: 0;
    padding: 0;
}
        body {
            background-color: #f3f3f3;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYdFlsd7NuVIcY1J55lrDnHKW8JuIIId76OjjfB7uRtJAQm1JTThtV5MAzIWgcwtKE9uc&usqp=CAU');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            background-position: center;
            padding: 20px;
        }
        
        .login-container {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-color: black;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-login {
            width: 100%;
            border-radius: 5px;
        }
        .signup-link {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2 class="text-center mb-4">LOGIN</h2>
    <form action="user_login.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-login">Login</button>
        <header>
            <a href="page1.html" >
            </a>
       </header>
    </form>
    <p class="mt-3 signup-link">Don't have an account? <a href="signup.php">Sign Up</a></p>

    
</div>

</body>
</html>
