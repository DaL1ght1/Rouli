<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Rouli";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $email = $_POST['email'];
    $password = $_POST['pass'];
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT * FROM persons WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $stored_password = $row['pass'];

            if ($password === $stored_password) {

                $_SESSION['username'] = $row['first_name'][0] . '.' . $row['last_name'];
                header("Location: index.php");
                $stmt->close();
                $conn->close();
                exit();
            } else {

                $_SESSION['error'] = "Incorrect password";
                header("Location: signin.php");
                $stmt->close();
                $conn->close();
                exit();
            }
        } else {

            $_SESSION['error'] = "User not found";
            header("Location: signin.php");
            $stmt->close();
            $conn->close();
            exit();
        }
    }
} else {
    header("Location: signin.php");
    exit();
}
