<?php
// connect to the database
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'DessertZone';
$conn = mysqli_connect($servername, $username, $password, $db_name);

// get the name and image data from the form
$name = $_POST['name'];
$image = file_get_contents($_FILES['image']['tmp_name']);

// prepare the SQL statement
$query = "INSERT INTO customize(name, image) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ss', $name, $image);

// execute the SQL statement

if (mysqli_stmt_execute($stmt)) {
	echo "Image uploaded successfully!";
    
} else {
	echo "Error uploading image: " . mysqli_error($conn);
}

// close the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
