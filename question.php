<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketSwift</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
        }
        label {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form id="questionnaireForm" action="submit_questionnaire.php" method="POST">
        <h2>Security Question.</h2>
        <label for="question1">Question 1:</label>
        <select id="question1" name="question1">
            <option value="">Select a question...</option>
            <option value="What city were you born in?">What city were you born in?</option>
            <option value="What is the name of your first pet?">What is the name of your first pet?</option>   
        </select>
        <label for="answer1">Your answer:</label>
        <input type="text" id="answer1" name="answer1" required>


        <label for="question2">Question 2:</label>
        <select id="question2" name="question2">
            <option value="">Select a question...</option>
            <option value="What is your favorite color?">What is your favorite color?</option>
            <option value="What is your favorite movie?">What is your favorite movie?</option>
        </select>
        <label for="answer2">Your answer:</label>
        <input type="text" id="answer2" name="answer2" required>

        <input type="submit" value="Submit">
    </form>

    
    
</body>
</html>
