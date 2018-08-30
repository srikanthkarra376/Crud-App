
<?php 
 include 'inc/header.php';
 include 'inc/footer.php';
 include 'inc/db.php';

  $id =$_GET['id'];
  $name=$_GET['name'];
  $email=$_GET['email']; 

?> 
<div class="container">
<div id="editUser">
<h3 class="mb-5">Edit the User:</h3>
<form method="post" action="update.php?id=<?php echo $id;?>">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"id="name" value="<?php echo $name;?>" required >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>" required>
  </div>
  <button type="submit" class="btn btn-outline-success">Update</button>
</form>
</div>

</div>
