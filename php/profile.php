<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page if they are not authenticated
    header("Location: login.php");
    die();
}

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for the user's information
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
} else {
    die("User not found");
}

$conn->close();
?>

<html>
<head>
  <title>Profile</title>
</head>
<body>
  <h1>Welcome, <?php echo $name; ?>!</h1>
  <p>Your email address is <?php echo $email; ?>.</p>
</body>
</html>
