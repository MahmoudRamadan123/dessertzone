<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "DessertZone";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$number = mysqli_real_escape_string($conn, $_POST["number"]);
$time = mysqli_real_escape_string($conn, $_POST["time"]);
$date = mysqli_real_escape_string($conn, $_POST["date"]);
// Insert the form data into MySQL database
$sql = "INSERT INTO book (email, number, date, time) VALUES ( '$email', '$number', '$date', '$time')";

if (mysqli_query($conn, $sql)) {
    echo "Form data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>