<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRUD_APP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div class="container">
<h1>See All Users Application</h1>
  <table class="table">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
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
         echo '<tr>';
         echo '<td>'.$count.'</td>';
         echo '<td>' .$row["name"]. '</td>';
         echo '<td>' .$row["email"]. '</td>';
          echo '<td><a href="edit.php?id='. $row["id"]."&name=". $row["name"]."&email=". $row["email"].'">Edit</a></td>';
         echo '<td><a href="Delete.php?id=' . $row["id"].'">Delete</a></td>';
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






