<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<style>
.grid { 
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-gap: 20px;
  align-items: center;
  }
.grid > article {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  max-width: 100%;
}
.text {
  padding: 0 20px 20px;
}
.text > button {
  background: gray;
  border: 0;
  color: white;
  padding: 10px;
  width: 100%;
  }
</style>
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
  
<div class="container" align="center">
<?php echo $_SESSION['cus_uname'];
?>
<main class="grid">
  <article>
    <img src="img/img2.jpg" alt="Sample photo" width="700px" height="300px">
    <div class="text">
      <h3>View Account</h3>
      <button onclick="location.href='view_acc.php';">Click Here</button>
    </div>
  </article>
  <article>
    <img src="img/img1.jpg" alt="Sample photo" width="700px" height="300px">
    <div class="text">
      <h3>View Policies</h3>
        <button onclick="location.href='policies.php';">Click Here</button>
    </div>
  </article>
  <article>
    <img src="img/img4.jpg" alt="Sample photo" width="700px" height="300px">
    <div class="text">
      <h3>View Plans</h3>
         <button onclick="location.href='plan.php';">Click Here</button>
    </div>
  </article>
</main>
</body>
</html>
