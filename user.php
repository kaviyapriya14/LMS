<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
$databaseName="lms_db";
$sql="CREATE DATABASE IF NOT EXISTS $databaseName";

if ($conn->query($sql) === TRUE) {
    echo "Database '$databaseName' created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($databaseName);
$sqlcreatetable="CREATE TABLE IF NOT EXISTS user(
    User_id INT AUTO_INCREMENT PRIMARY KEY,
    First_name VARCHAR(50) NOT NULL,
    Last_name VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    User_password VARCHAR(255) NOT NULL
)";
if($conn->query($sqlcreatetable)==TRUE){
    echo "Table 'users' created successfully!";
}else{
    echo"Error creating table: ".$conn->error;
}

$conn->close();

?>

