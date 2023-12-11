<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "lms_db";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "";
$lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

$sql = "INSERT INTO user (First_name, Last_name, Email, User_password) VALUES ('$firstname', '$lastname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
