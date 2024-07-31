<?php

if (isset($_POST[''])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "broadcast";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];

    $insert = "INSERT INTO broadcast (name,email) VALUES ('$name', '$email')";

    if ($conn->query($insert) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql. "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>

