<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bueno Insurance System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">Bueno Insurance System</a>
    <ul class="nav navbar-nav" >
    <li class="active"><a href="index_admin.php">Home</a></li>
    <ul>
    </div>
  </div>
</nav>

<div class="container">
  <!-- <form role="form" action="login.php" method="post" name="loginform"> -->
  <form role="form" action="user_ins.php" method="post" name="userup" > 
    <div class="form-group">
        <label for="name">Username</label>
        <input type="text" name="usern" placeholder="Username" required  class="form-control" />
    </div>
    
    <div class="form-group">
        <label for="name">Password</label>
        <input type="password" name="upass" placeholder="password" required  class="form-control" />
    </div>
    <div class="form-group">
        <input type="submit" name="userup" value="Submit" class="btn btn-primary" />
    </div>
  </form>
</div>

</body>
</html>