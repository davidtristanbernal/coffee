<?php
session_start();

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

// Verify the CAPTCHA response
$captcha_response = $_POST['g-recaptcha-response'];
$secret_key = 'your_secret_key';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secret_key, 'response' => $captcha_response)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$response_data = json_decode($response);
if (!$response_data->success) {
    die("CAPTCHA verification failed");
}

// Query the database for the user
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

// Log in the user if the email and password match
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    header("Location: profile.php");
} else {
    echo "Invalid email or password.";
}

$conn->close();
?>
