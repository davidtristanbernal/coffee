<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'coffee_shop';
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the values from the form
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insert the data into the database
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your message!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
