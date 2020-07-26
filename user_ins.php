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
<!-- style="background: #a31911; border: 1px solid #a31911" -->
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
</body>
</html>
<?php

$con = oci_connect('girisha', 'girisha47', 'localhost/XE');

if (isset($_POST['userup'])) {

	$name = $_POST['usern'];
	$pass = $_POST['upass'];

    $query = "CREATE USER $name IDENTIFIED BY $pass";
    $how = oci_parse($con, $query);
	oci_execute($how);
	if(!($how == '')){
        echo "yipeee!";
        echo "<script>alert('User successfully created!!'); location.href='view_users.php';</script>";
    }
    else{
        echo "FAILED";
        echo "<script>alert('Error in creating user...Please try again later!') location.href='insert_user.php';</script>";
    }

}

?>