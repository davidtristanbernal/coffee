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

	?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu | Coffee Shop</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Twistan Dee's Coffee Shop</h1>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a class="active" href="menu.php">Menu</a></li>
				<li><a href="order.php">Orders</a></li>
				<li><a href="location_hours.php">Locations</a></li>
				<li><a href="about_us.php">About Us</a></li>
				<li><a href="contact_us.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
</head>
<style>
      /* add your custom styles here */
      * {
        box-sizing: border-box;
      }
      body {
        font-family: Arial, sans-serif;
        color: #333;
        background-color: #f9f9f9;
        margin: 0;
      }
      .row {
        display: flex;
        flex-wrap: wrap;
      }
      .column {
        flex: 50%;
        padding: 10px;
      }
      .menu-item {
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
      }
      .menu-item:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      h2 {
        margin: 0;
        font-size: 24px;
      }
      h3 {
        margin: 0;
        font-size: 18px;
      }
      p {
        margin: 0;
      }
      .price {
        float: right;
        color: #666;
        font-size: 18px;
      }
          .row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }

    .col {
      flex: 1;
      padding: 0 10px;
    }

    @media screen and (max-width: 768px) {
      .col {
        flex: 100%;
      }
    }
    
    </style>
<body>
    <section id="item">
        <h1>Our Special Coffee</h1>
        <div class="item-grid">
          <div class="item-card">
            <img src="image/black.jpeg" alt="Black Coffee">
            <h3>Black Coffee</h3>
            <p>Black Coffee that is normally brewed without the addition of additives such as sugar, milk, cream, or added flavors.</p>
            <h4>$2.50</h4>
            <a href="#"><i> Buy Now</i></a>
          </div>
          <div class="item-card">
            <img src="image/espresso.jpeg" alt="Espresso">
            <h3>Espresso</h3>
            <p>Espresso is thicker and more intense than coffee because of the lower grounds to water ratio, the finer grind, and the pressurized brewing method. Regular coffee uses a coarser grind, more water and gravity to extract the final brew.</p>
            <h4>$3.50</h4>
            <a href="#"><i> Buy Now</i></a>
          </div>
          <div class="item-card">
            <img src="image/cappuccino.jpeg" alt="Cappuccino">
            <h3>Cappuccino</h3>
            <p>Cappuccino is an espresso-based coffee drink that originated in Italy and is traditionally prepared with steamed milk foam.</p>
            <h4>$4.00</h4>
            <a href="#"><i> Buy Now</i></a>
          </div>
        </div>
      </section> 
  <header>
     <h1>--- Our Other Items ---</h1>
  
  <nav>
    <ul>
      <li><a href="#hot-drinks">Hot Drinks</a></li>
      <li><a href="#cold-drinks">Cold Drinks</a></li>
      <li><a href="#pastries">Pastries</a></li>
    </ul>
  </nav>
</header>
  <main>

    <div class="row">
      <div class="col">
        <section id="hot-drinks">
          <h2>Hot Drinks</h2>
          <ul>
            <li>Espresso - $2.50</li>
            <li>Cappuccino - $3.50</li>
            <li>Latte - $4.00</li>
            <li>Americano - $3.00</li>
            <li>Mocha - $4.50</li>
            <li>Hot Chocolate - $3.50</li>
            <li>Tea - $2.50</li>
          </ul>
        </section>
      </div>
      <div class="col">
        <section id="cold-drinks">
          <h2>Cold Drinks</h2>
          <ul>
            <li>Iced Coffee - $3.50</li>
            <li>Iced Latte - $4.50</li>
            <li>Iced Tea - $3.00</li>
            <li>Frappe - $5.00</li>
            <li>Smoothie - $5.50</li>
            <li>Lemonade - $3.50</li>
          </ul>
        </section>
      </div>
      <div class="col">
        <section id="pastries">
          <h2>Pastries</h2>
          <ul>
            <li>Croissant - $2.50</li>
            <li>Muffin - $2.00</li>
            <li>Scone - $2.50</li>
            <li>Bagel - $3.00</li>
            <li>Cinnamon Roll - $3.50</li>
            <li>Cookie - $1.50</li>
          </ul>
        </section>
      </div>
    </div>

  </main>

</body>
</html>


</div>
      <footer>
    <p><b>&copy; 2023 Twistan Dee's Coffee Shop</b></p>
  </footer>
</body>
</html>
