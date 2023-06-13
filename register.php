<?php
// Establish a database connection (replace with your own credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first-name'];
    $middleName = $_POST['middle-name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $mobile = $_POST['mobile'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (first_name, middle_name, surname, username, email, password, mobile, facebook, twitter, instagram) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $firstName, $middleName, $surname, $username, $email, $password, $mobile, $facebook, $twitter, $instagram);
    $stmt->execute();

    // Redirect the user to a success page or another page
    header("Location: success.html");
    exit();
}

// Close the database connection
$conn->close();
?>
