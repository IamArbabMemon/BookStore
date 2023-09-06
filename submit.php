<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contribution</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
<div class="alert alert-success" role="alert">
  Form Has Been Submitted Succesfully <a href="contribution.html" class="alert-link">Back to previous Page</a>
</div> 	
</body>
 

<?php
	// Connect to MySQL database
	$host = 'localhost'; // host name
	$username = 'root'; // MySQL username
	$password = ''; // MySQL password
	$dbname = 'BookTown'; // database name
	$conn = mysqli_connect($host, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Get form data
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$book = $_POST['book'];

	// Insert form data into MySQL database
	$sql = "INSERT INTO contributor (firstName, lastName, email,book) VALUES ('$firstName', '$lastName', '$email','$book')";
	mysqli_query($conn, $sql);



?>
