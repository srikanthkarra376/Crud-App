<?php include 'inc/header.php'?>;
<div class="container">
<div id="addUser">
<h3 class="mb-5">Add A new User:</h3>
<form method="post" action="send.php">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"id="name"  required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email"   required>
  </div>
  <button type="submit" class="btn btn-success mt-3">Add User</button>
</form>
</div>
</div>
</body>
</html>