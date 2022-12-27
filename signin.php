<!DOCTYPE html>
<html lang="en">
<head>
  <title>BSSE - Signin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Signin</h2>
  <form action="do_signin.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember" disabled> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Signin</button>
  </form>

  <?php
    if(isset($_GET['rid'])){
      print('<div class="alert alert-danger">
      <strong>Login Failed!</strong>');
    }
  ?>
</div>

</body>
</html>
