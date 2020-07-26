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
  <form role="form" action="pol_ins_tbl.php" method="post" name="polup" > 
        <div class="form-group">
            <label for="name">Policy ID</label>
            <input type="text" name="pol_id" placeholder="Policy ID" required  class="form-control" />
        </div>
        
        <div class="form-group">
            <label for="name">Policy Name</label>
            <input type="text" name="pol_name" placeholder="Name" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Tenure</label>
            <input type="number" name="tenure" placeholder="Tenure in years" required  class="form-control" />
        </div>

        <div class="form-group">
        <label for="name">Type of plan</label>
            <select name="type" class="form-control">
                <option >ULIPS</option>
                <option >Money Back</option>
                <option >Endowment</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Interest</label>
            <input type="int" name="interest" placeholder="Interest Percent" required  class="form-control" />
        </div>

        <div class="form-group">
            <label for="name">Premium Term</label>
            <select name="premium_term" class="form-control">
                <option >Monthly</option>
                <option >Quarterly</option>
                <option >Annually</option>
            </select>
        </div>

        <div class="form-group">
            <label for="name">Premium Amount</label>
            <input type="int" name="premium_amt" placeholder="Amount" required  class="form-control" />
        </div>

        <div class="form-group">
			<input type="submit" name="polup" value="Submit" class="btn btn-primary" />
		</div>
  </form>
</div>

</body>
</html>
