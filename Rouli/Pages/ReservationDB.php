<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Rouli";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqlCreateTable = "CREATE TABLE IF NOT EXISTS reservations (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        cin VARCHAR(8) NOT NULL,
        car VARCHAR(50) NOT NULL,
        reservation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        
    ) ";

if ($conn->query($sqlCreateTable) === FALSE) {
    echo "Error creating table: " . $conn->error;
}


$name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$cin = $_POST['cin'];
$car = $_POST['car'];



$sqlInsertData = "INSERT INTO reservations (first_name, last_name, email, cin, car) VALUES ('$name', '$last_name', '$email', '$cin', '$car')";

if ($conn->query($sqlInsertData) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqlInsertData . "<br>" . $conn->error;
}


$conn->close();
