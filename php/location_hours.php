<!DOCTYPE html>
<html>
<head>
	<title>Location_Hours | Coffee Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Twistan Dee's Coffee Shop</h1>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a href="order.php">Orders</a></li>
				<li><a class="active" href="location_hours.php">Locations</a></li>
				<li><a href="about_us.php">About Us</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
<body>
	<h1>Location and Hours</h1>
	<img src="image/store.jpg" alt="location_hours">

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

		// Query the database for the location and hours
		$sql = "SELECT * FROM location_hours";
		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<h2>" . $row['location_name'] . "</h2>";
				echo "<p>" . $row['address'] . "</p>";
				echo "<p>Open hours:</p>";
				echo "<ul>";
				echo "<li>Monday: " . $row['monday_hours'] . "</li>";
				echo "<li>Tuesday: " . $row['tuesday_hours'] . "</li>";
				echo "<li>Wednesday: " . $row['wednesday_hours'] . "</li>";
				echo "<li>Thursday: " . $row['thursday_hours'] . "</li>";
				echo "<li>Friday: " . $row['friday_hours'] . "</li>";
				echo "<li>Saturday: " . $row['saturday_hours'] . "</li>";
				echo "<li>Sunday: " . $row['sunday_hours'] . "</li>";
				echo "</ul>";
			}
		} else {
			echo "No locations found.";
		}

		// Close the database connection
		mysqli_close($conn);
	?><br><br><br><br><br><br><br><br><br><br>
</body>
<footer>
    <p><b>&copy; 2023 Twistan Dee's Coffee Shop</b></p>
  </footer>
</html>
