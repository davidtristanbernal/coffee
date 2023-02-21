<!DOCTYPE html>
<html>
<head>
	<title>Coffee Shop Website</title>
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
				<li><a href="location_hours.php">Locations</a></li>
				<li><a href="about_us.php">About Us</a></li>
				<li><a class="active" href="contact_us.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
<body>
	<div class="container">
		<h1>Contact Us</h1>

		<form method="post" action="process_contact.php">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">

			<label for="email">Email Address</label>
			<input type="email" id="email" name="email">

			<label for="message">Message</label>
			<textarea id="message" name="message"></textarea>

			<input type="submit" value="Send">
		</form>

	</div> <br><br><br>

</body>
 <footer>
    <p><b>&copy; 2023 Twistan Dee's Coffee Shop</b></p>
</html>
