<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'coffee_shop';

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Perform a query
$sql = "SELECT * FROM menu_items";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// Output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo "Name: " . $row["name"]. " - Price: " . $row["price"]. "<br>";
	}
} else {
	echo "0 results";
}

// Close the connection
mysqli_close($conn);
