<!DOCTYPE html>
<html>
<head>
	<title>Order | Coffee Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Twistan Dee's Coffee Shop</h1>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="menu.php">Menu</a></li>
				<li><a class="active" href="order.php">Orders</a></li>
				<li><a href="location_hours.php">Locations</a></li>
				<li><a href="about_us.php">About Us</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	
<body>
	<h1>Place an Order</h1>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Process the order

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

		// Get the order information from the form
		$name = $_POST["name"];
		$email = $_POST["email"];
		$item2 = $_POST["item2"];
		$quantity = $_POST["quantity"];

		// Insert the order into the database
		$sql = "INSERT INTO orders (name, email, item2, quantity) VALUES ('$name', '$email', '$item2', $quantity)";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "<p>Thank you for your order, $name! Your $item2 x $quantity will be ready soon.</p>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		// Close the connection
		mysqli_close($conn);
	}
	?>

	<form method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br>
				<label for="item2">Item:</label>
		<select name="item2" id="item2" required>
			<option value="">-- Select an item --</option>
			<option value="Latte">Latte</option>
			<option value="Cappuccino">Cappuccino</option>
			<option value="Espresso">Espresso</option>
			<option value="Mocha">Mocha</option>
		</select><br><br>

		<label for="quantity">Quantity:</label>
		<input type="number" name="quantity" id="quantity" min="1" required><br>

		<input type="submit" value="Place Order">
	</form><br><br><br>
</body>
 <footer>
    <p><b>&copy; 2023 Twistan Dee's Coffee Shop</b></p>
  </footer>
</html>
