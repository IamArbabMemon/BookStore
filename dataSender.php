<?php


$studentJson = $_POST['student'];
$student = json_decode($studentJson);
echo $student->full_name; // Outputs "John Doe"



//     $conn = mysqli_connect("localhost","root","","students");

// $nameOfStudent=$_POST['name'];
// $idOfStudent = $_POST['id'];

// $sql ="INSERT INTO studentdata VALUES ('$idOfStudent','$nameOfStudent')";

// if($conn->query($sql)==true)
// echo "DATA HAS BEEN SEND";
// $sql = "INSERT INTO students (full_name, email, phone, gender, dob, address) 
//         VALUES ('$full_name', '$email', '$phone', '$gender', '$dob', '$address')";


/*

<?php
// Get the form data
$full_name = $_POST['full-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insert the form data into the database
$sql = "INSERT INTO students (full_name, email, phone, gender, dob, address) 
        VALUES ('$full_name', '$email', '$phone', '$gender', '$dob', '$address')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

*/


?>