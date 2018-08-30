<?php include 'inc/header.php'?>;
<div class="container">
<h3 class="mb-5">checkout all users :</h3>
  <table class="table table-striped bordered">
    <tr  class=" text-center thead-dark">
      <th class=" text-center" scope="col">S.NO</th>
      <th class=" text-center" scope="col">Name</th>
      <th  class=" text-center" scope="col">Email</th>
      <th  class=" text-center" scope="col">Edit</th>
      <th  class=" text-center" scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php  include_once 'inc/db.php';
    
        //check the connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        // Write the Sql Query 
       $sql = "SELECT id,name,email FROM contact";

        $result = $conn->query($sql);

        $count = 1;
        // Check the results count 

    if ($result->num_rows > 0) {

         while($row = $result->fetch_assoc()) {
         echo '<tr class=" text-center" >';
         echo '<td class="text-center">'.$count.'</td>';
         echo '<td>' .$row["name"]. '</td>';
         echo '<td>' .$row["email"]. '</td>';
         echo '<td ><a class="btn btn-warning" href="edit.php?id='. $row["id"]."&name=". $row["name"]."&email=". $row["email"].'">Edit</a></td>';
         echo '<td ><a class="btn btn-danger" href="Delete.php?id=' . $row["id"].'">Delete</a></td>';
         echo '</tr>';
         $count++;
      }

    } else {
     echo "No Results Found";
   }
   //close the connection
$conn->close();

?>
</tbody>
</table>
</div>
</body>
</html>






