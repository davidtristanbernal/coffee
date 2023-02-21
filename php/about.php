<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "coffee_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database for the about us information
$sql = "SELECT * FROM about_us";
$result = $conn->query($sql);

// Output the about us information on the page
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
    }
} else {
    echo "No information available.";
}

$conn->close();
?>