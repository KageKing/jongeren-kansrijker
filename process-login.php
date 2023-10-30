<?php

$servername = "127.0.0.1";
$username = "root"; // vervang dit door je database gebruikersnaam
$password = ""; // vervang dit door je database wachtwoord
$dbname = "jongeren-kansrijker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    echo '<div class="alert alert-danger">Invalid username or password</div>';
}

$conn->close();
