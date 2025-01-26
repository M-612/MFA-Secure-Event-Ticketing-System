<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TicketSwift</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      border-color: black;
    }

    .signup-form {
      width: 400px;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
    }

    .signup-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-signup {
      width: 100%;
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="signup-form">
      <h2> SIGNUP</h2>
      <form action="create_user.php" method="post">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" name="FULL_NAME" class="form-control" id="name" >
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" name="email" class="form-control" id="email" >
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="passwd" class="form-control" id="password" >
        </div>
        <div class="form-group">
          <label for="password">Confirm Password:</label>
          <input type="password" name="c_passwd" class="form-control" id="password" >
        </div>
        <hr>
       
            <h2 class="text-center mb-4">Security Questionnaire</h2>
            <div class="form-group">
                <label for="question1">Question 1:</label>
                <select id="question1" name="question1" class="form-control">
                    <option value="">Select a question...</option>
                    <option value="What city were you born in?">What city were you born in?</option>
                    <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                </select>
            </div>
            <div class="form-group">
                <label for="answer1">Your answer:</label>
                <input type="text" id="answer1" name="answer1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="question2">Question 2:</label>
                <select id="question2" name="question2" class="form-control">
                    <option value="">Select a question...</option>
                    <option value="What is your favorite color?">What is your favorite color?</option>
                    <option value="What is your favorite movie?">What is your favorite movie?</option>
                </select>
            </div>
            <div class="form-group">
                <label for="answer2">Your answer:</label>
                <input type="text" id="answer2" name="answer2" class="form-control" required>
            </div>
            
        <button type="submit" class="btn btn-primary btn-signup">Signup</button>
      </form>
      <p class="text-center mt-3 login-link">Already have an account? <a href="login.php">Login</a></p>
    </div>
    </div>
  </div>

</body>

</html>