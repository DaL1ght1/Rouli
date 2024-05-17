<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Rouli";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqlCreateTable = "CREATE TABLE IF NOT EXISTS Persons (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(100) unique NOT NULL ,
        pass VARCHAR(8) NOT NULL,
        gender VARCHAR(20) NOT NULL,
        inscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        
    ) ";

if ($conn->query($sqlCreateTable) === FALSE) {
    echo "Error creating table: " . $conn->error;
}


$name = $_POST['N'];
$last_name = $_POST['PN'];
$email = $_POST['email'];
$pass = $_POST['P'];
$gender = $_POST['Gender'];

$name = mysqli_real_escape_string($conn, $name);
$last_name = mysqli_real_escape_string($conn, $last_name);
$email = mysqli_real_escape_string($conn, $email);
$pass = mysqli_real_escape_string($conn, $pass);

$sqlInsertData = "INSERT INTO Persons (first_name, last_name, email, pass, gender) VALUES ('$name', '$last_name', '$email', '$pass', '$gender')";

if ($conn->query($sqlInsertData) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqlInsertData . "<br>" . $conn->error;
}


$conn->close();
header('location: signin.php');
