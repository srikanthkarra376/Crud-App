<?php
include 'inc/db.php';
session_start();

$name = $_POST["name"];
$email = $_POST["email"];


//checck for the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//write an Sql Query 

$sql = "INSERT INTO contact (name, email)
VALUES ('$name','$email')";

if (mysqli_query($conn, $sql)) {

 // Redirect to home page 

   header('Location:http://localhost:1234/CRUD_APP/show.php');

} else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>