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
  <form role="form" action="cus_ins_tbl.php" method="post" name="signup" > 
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="fname" placeholder="First Name     Middle Name     Last Name" required  class="form-control" />
        </div>
        
        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" name="uname" placeholder="Enter username" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" placeholder="Email" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Contact Number</label>
            <input type="tel" name="cell" placeholder="Enter Contact Number" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">City</label>
            <input type="text" name="city" placeholder="Enter Your City" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Pincode</label>
            <input type="number" name="pincode" placeholder="Pincode" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="pass" placeholder="Password" required class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" name="cpass" placeholder="Confirm Password" required class="form-control" />
        </div>
        <div class="form-group">
			<input type="submit" name="signup" value="Submit" class="btn btn-primary" />
		</div>
  </form>
</div>

</body>
</html>
