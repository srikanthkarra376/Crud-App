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
<div class="container">
<h1>CRUD APPLICATION</h1>
<form method="post" action="send.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div>

</body>
</html>