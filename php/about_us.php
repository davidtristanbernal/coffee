<!DOCTYPE html>
<html>
<head>
	<title>About Us | Coffee Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<header>
    <h1>Twistan Dee's Coffee Shop</h1>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="order.php">Orders</a></li>
        <li><a href="location_hours.php">Locations</a></li>
        <li><a class="active" href="about_us.php">About Us</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </nav>
</header>
	<style>
		.container_about {
			display: flex;
			flex-direction: column;
			align-items: center;
			background-color: beige;
		}

		h1 {
			font-size: 36px;
			margin-top: 50px;
		}

		p {
			font-size: 18px;
			margin-top: 20px;
			text-align: justify;
			max-width: 800px;
		}

		img {
			width: 300px;
			margin-top: 50px;
			border-radius: 50%;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}

.column {
  float: left;
  width: 20%;
  margin-bottom: 10px;
  padding: 0px;
  background-color: khaki;
}

.card { box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); margin: 8px; }

.about-section {
  padding: 20px;
  text-align: center;
  background-color: #5d6d14;
  color: rgb(255, 255, 255);
}

.container_about::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}
.button:hover { background-color: #555; }
	</style>

</head>
<section>
	<div class="container_about">
		<h1><i>About Us</i></h1>
		<img src="image/cappuccino.jpeg" alt="About Us Image">
		<p><b>Taste and see our Coffee shop aand gallery offers a unique coffee house environment unlike any other in Coffee Shop. We are not only a place to drop in and get your morning cup of coffee, we are a place where you can sit down and enjoy that tailor-made cup of coffee. If you need to work, we have a seating are created specially for you.<b></p>
	</div>
</section>
	 
	 <h1 style="text-align:center">Developers</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/dp1.jpeg" style="width:100%">
      <div class="container">
        <h2>David Tristan M. Bernal</h2>
        <p class="title">Project Manager</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>dama.bernal.au@phinmaed.com</p>
        <p><button class="button"><i><b>Contact<b></i></button></p>
      </div>
    </div>
  </div>

    <div class="column">
    <div class="card">
      <img src="image/dp1.jpeg" style="width:100%">
      <div class="container">
        <h2>Jeferson C. Pascual</h2>
        <p class="title">Programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jeca.pascual.au@phinmaed.com</p>
        <p><button class="button"><i><b>Contact<b></i></button></p>
      </div>
    </div>
  </div>

   <div class="column">
    <div class="card">
      <img src="image/dp1.jpeg" style="width:100%">
      <div class="container">
        <h2>Andrew J. Panganiban</h2>
        <p class="title">Lead Programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>roja.panganiban.au@phinmaed.com</p>
        <p><button class="button"><i><b>Contact<b></i></button></p>
      </div>
    </div>
  </div>

      <div class="column">
    <div class="card">
      <img src="image/dp1.jpeg" style="width:100%">
      <div class="container">
        <h2>Jaimie C.Ortega</h2>
        <p class="title">Programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jaca.ortega.au@phinmaed.com</p>
        <p><button class="button"><i><b>Contact<b></i></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/dp1.jpeg" style="width:100%">
      <div class="container">
        <h2>Alyssa D. Valdez</h2>
        <p class="title">Test Engineer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>aldi.valdez.au@phinmaed.com</p>
        <p><button class="button"><i><b>Contact<b></i></button></p>
      </div>
    </div>
  </div>
  <footer>
    <p><b>&copy; 2023 Twistan Dee's Coffee Shop</b></p>
  </footer>
</html>
