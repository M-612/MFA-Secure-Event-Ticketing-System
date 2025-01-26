<?php
require ('C:\xampp\htdocs\new_fmp\DB\config.php');
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if name and image data are set
    if (isset($_POST['name']) && isset($_POST['imageDataUrl'])) {
        // Connect to MySQL database
        $servername = "localhost"; // Change this to your MySQL server address
        $username = "username"; // Change this to your MySQL username
        $password = "password"; // Change this to your MySQL password
        $dbname = "captured image"; // Change this to your MySQL database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind parameters
        $stmt = $conn->prepare("INSERT INTO captured_images (name, image_data) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $imageDataUrl);

        // Set parameters and execute
        $name = $_POST['name'];
        $imageDataUrl = $_POST['imageDataUrl'];
        $stmt->execute();

        // Close statement and connection
        $stmt->close();
        $conn->close();

        // Send response
        echo "Image and name stored successfully!";
    } else {
        // If name or image data is not set, send error response
        echo "Error: Name or image data is missing!";
    }
} else {
    // If the request method is not POST, send error response
    echo "Error: Invalid request!";
}
?>
