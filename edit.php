<?php 
 include 'inc/header.php';
 include 'inc/footer.php';
 include_once 'inc/db.php';

 $id = $_GET['id'];

 $name = "";

 $email = "";

 if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
} 
// Write the Sql Query 
$sql = "SELECT  * FROM contact WHERE id=$id";

$output = $conn->query($sql);

// Check the results count 

if ($output->num_rows > 0) {

 while($row = $output->fetch_assoc()) {
  echo $row["name"] =$name;
  echo $row["email"]=$email;

}

} else {
echo "No Results Found";
}
//close the connection
$conn->close();

?>
<div class="container">
<form method="post" action="update.php?id=<?php echo $id;?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"id="name" value="<?php echo $row["name"];?>" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
