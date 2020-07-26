<?php 
session_start();
?>

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

// Create connection to Oracle
$conn = oci_connect('girisha', 'girisha47', 'localhost/XE');
$unames = $_SESSION['cus_uname'];
$query = "select * from users where uname='$unames'";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// Fetch each row in an associative array
print '<table border="2" align="center" style="color: blue; font-family: Courier New,Courier;">';
print '<tr style="background: lightblue; color: black;"><td>Customer Name</td><td>User Name</td><td>Email</td><td>Contact No.</td ><td>City</td><td>PinCode</td><td>Password</td></tr>';
while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   print '<tr>';
   foreach ($row as $item) {
       print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   print '</tr>';
}
print '</table>';

?>