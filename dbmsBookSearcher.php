<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>SearchResults</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./" style="font-size: 30px;">BookTown</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 602px; ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contribution.html">Contribution</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.html">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./dsaBooks.html">Data Structures</a></li>
              <li><a class="dropdown-item" href="./dbmsBooks.html">Database Management</a></li>
            </ul>
          </li>
        </ul>
        <form action ="dbmsBookSearcher.php" method="post" class="d-flex" role="search" >
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name ="searchedItem">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>


</body>


<?php
	
	$host = 'localhost'; // host name
	$username = 'root'; // MySQL username
	$password = ''; // MySQL password
	$dbname = 'BookTown'; // database name
	$conn = mysqli_connect($host, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Get form data
    
	$item = $_POST['searchedItem'];
    if (isset($item)) {
      


// Query the database for records that match the search term
$sql = "SELECT * FROM dbmsbooks WHERE bookName LIKE '%$item%' ";
$result = $conn->query($sql);

// Create an HTML element for each record that matches the search term
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
    



        echo ' <div class="container " style = "margin-top : 2.5rem"><div class="row"> <div class="col"><div class="card" style="width: 18rem; margin-left:512px;"><img class="card-img-top" src= ' . $row["imageLink"] . ' alt="" height="320px" > <div class="card-body"><h5 class="card-title"> ' .$row["bookName"] .'</h5><p class="card-text">Are you interested in learning the Database Management Systems and looking for some excellent book that will help you skyrocket your Database Management Systems expertise</p><a href="e-commerce-business-technology-society.pdf" class="btn btn-primary">Download</a></div> </div> </div>'  ;


    

  }} else {
    echo '<div class = "container" style = "text-align:center; padding-top:60px;"><h1>SORRY !! NO RESULT FOUND </h1>';
  }
  
// Close the database connection
$conn->close();

    }














?>











</html>