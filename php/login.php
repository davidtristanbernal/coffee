<!-- login.php -->
<html>
<head>
  <title>Login</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <h1>Login</h1>
  <form method="POST" action="process_login.php">
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <div class="g-recaptcha" data-sitekey="your_site_key"></div><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
