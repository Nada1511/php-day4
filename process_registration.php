<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $email_status = $_POST["email_status"];

    $sql = "INSERT INTO users (name, email, gender, email_status) VALUES ('$name', '$email', '$gender', '$email_status')";

    if ($conn->query($sql) === TRUE) {
        header("Location: user_details.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>