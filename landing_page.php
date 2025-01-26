<?php
session_start();

if(isset($_SESSION['email'])) {
   
    $username = $_SESSION['email']; 
    echo "Username: $username <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketSwift</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
    font-family: 'Times New Roman', Times, serif, sans-serif;
    margin: 0;
    padding: 0;
}
      
.event {
    background-color: rgb(236, 217, 217);
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(209, 19, 19, 0.1);
    padding: 25px;
    margin-bottom: 50px;
    width: 200%; /* Set the width to cover the entire screen */
}

.event img {
    width: 300px; 
    height: 200px; 
    border-radius: 5px;
    margin-bottom: 10px;
}

.event h2 {
    color: #333;
    margin-top: 10px;
    font-weight: bold;
}

.event p {
    color: rgb(0, 0, 0);
}



.event .details p {
    margin: 5px 0;
}

.event button {
    background-color: #a7c2df;
    color: rgb(4, 23, 77);
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.event button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Welcome to TicketSwift</h1>

    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control mb-3" id="searchBar" placeholder="Search events...">
        </div>
        <div class="col-md-3">
            <select class="form-control mb-3" id="citySelect">
                <option value="">Cities</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Kolkata">Pune</option>
                <option value="Chennai">Chennai</option>
            </select>
       
        </div>

    <div class="event">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW2d6cJthxXYPx-qlgKXVtnq4VZ9hFYzF5bw&usqp=CAU" alt="Event 1">
        <h2> MUSIC CONCERT </h2>
        <p>Date: April 1, 2024</p>
        <p>Time: 7:00 PM</p>
        <p>Location: Pune</p>
            <p>Ratings: 4.5/5</p>
            <p>Address: Seasons Mall , Magarpatta</p>
            <p>Contact: 123-456-7890</p>
            <a href="Concert/Music_Concert.php"><button class="btn btn-primary" >Buy Tickets</button></a>
    </div>

    <div class="event">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJgv_7BRCR0MUhWrGxglL-SQktiV97yp6ERA&usqp=CAU" alt="Event 2">
        <h2> STANDUP COMEDY </h2>
        <p>Date: April 15, 2024</p>
        <p>Time: 7:00 PM</p>
        <p>Location: Mumbai</p>
            <p>Ratings: 4.0/5</p>
            <p>Address: Saint Paul Road , Bandra </p>
            <p>Contact: 987-654-3210</p>
            <a href="Concert/standup.php"><button class="btn btn-primary" >Buy Tickets</button></a>
    </div>

    <div class="event">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNfp5AuxfBzQ_NLp4JnoGgFObr4TVqopfVBg&usqp=CAU" alt="Event 3">
        <h2> THEATRE SHOW</h2>
        <p>Date: February 1, 2025</p>
        <p>Time: 5:00 PM</p>
        <p>Location: Delhi</p>
            <p>Ratings: 4.2/5</p>
            <p>Address: Talkotra Street, South Delhi </p>
            <p>Contact: 342-634-3441</p>
            <a href="Concert/THEATRE_SHOW.php"><button class="btn btn-primary" >Buy Tickets</button></a>
    </div>

    <div class="event">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7Y8jqJ2Kxn3jHcJKnJGiup0TohE217OroNA&usqp=CAU" alt="Event 4">
        <h2> ART SHOW </h2>
        <p>Date: May 1, 2024</p>
        <p>Time: 11:30 AM</p>
        <p>Location: Bangalore</p>
            <p>Ratings: 4.1/5</p>
            <p>Address: Cauvery Colony, Koramangala </p>
            <p>Contact: 412-092-4862</p>
            <a href="Concert/art.php"><button class="btn btn-primary" >Buy Tickets</button></a>
    </div>

    <div class="event">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThFTIV8uS3bPuRrONv-O4ki2VCrtcVHov_Rg&usqp=CAU" alt="Event 5">
        <h2> CLASSICAL MUSIC </h2>
        <p>Date: June 10, 2024</p>
        <p>Time: 12:00 PM</p>
        <p>Location: Chennai </p>
            <p>Ratings: 4.6/5</p>
            <p>Address: Sterling Road, Nungambakkam </p>
            <p>Contact: 782-100-2410</p>
        <a href="Concert/classical_music.php"><button class="btn btn-primary" >Buy Tickets</button></a>
    </div>
</div>
</body>
</html> 