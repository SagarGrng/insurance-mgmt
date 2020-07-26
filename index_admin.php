<style>

/* Main Navigation */
#nao {
    position:relative;
    width:820px;
    margin:0 auto;
    margin-top:50px;
    padding:10px;
    
}
 
ul#navi {
    margin:0px auto;
    position:relative;
    float:left;
    border-left:1px solid #c4dbe7;
    border-right:1px solid #c4dbe7;
}
 
ul#navi li {
    display:inline;
    font-size:12px;
    font-weight:bold;
    margin:0;
    padding:0;
    float:left;
    position:relative;
    border-top:1px solid #c4dbe7;
    border-bottom:2px solid #c4dbe7;
}
 
ul#navi li a {
    padding:10px 25px;
    color:#616161;
    text-shadow:1px 1px 0px #fff;
    text-decoration:none;
    display:inline-block;
    border-right:1px solid #fff;
    border-left:1px solid #C2C2C2;
    border-top:1px solid #fff;
    background: #f5f5f5;
 
    -webkit-transition:color 0.2s linear, background 0.2s linear;
    -moz-transition:color 0.2s linear, background 0.2s linear;
    -o-transition:color 0.2s linear, background 0.2s linear;
    transition:color 0.2s linear, background 0.2s linear;
}
 
ul#navi li a:hover {
    background:#f8f8f8;
    color:#282828;
}
 
ul#navi li a.first {
    border-left: 0 none;
}
 
ul#navi li a.last {
    border-right: 0 none;
}
 
ul#navi li:hover > a {
    background:#fff;
}

/* Drop-Down Navigation */
ul#navi li:hover > ul
{
/*these 2 styles are very important,
being the ones which make the drop-down to appear on hover */
    visibility:visible;
    opacity:1;
}
 
ul#navi ul, ul#navi ul li ul {
    list-style: none;
    margin: 0;
    padding: 0;
/*the next 2 styles are very important,
being the ones which make the drop-down to stay hidden */
    visibility:hidden;
    opacity:0;
    position: absolute;
    z-index: 99999;
    width:280px;
    background:#f8f8f8;
    box-shadow:1px 1px 3px #ccc;
/* css3 transitions for smooth hover effect */
    -webkit-transition:opacity 0.2s linear, visibility 0.2s linear;
    -moz-transition:opacity 0.2s linear, visibility 0.2s linear;
    -o-transition:opacity 0.2s linear, visibility 0.2s linear;
    transition:opacity 0.2s linear, visibility 0.2s linear;
}
 
ul#navi ul {
    top: 43px;
    left: 1px;
}
 
ul#navi ul li ul {
    top: 0;
    left: 181px; /* strong related to width:180px; from above */
}
 
ul#navi ul li {
    clear:both;
    width:100%;
    border:0 none;
    border-bottom:1px solid #c9c9c9;
}
 
ul#navi ul li a {
    background:none;
    padding:7px 15px;
    color:#616161;
    text-shadow:1px 1px 0px #fff;
    text-decoration:none;
    display:inline-block;
    border:0 none;
    float:left;
    clear:both;
    width:150px;
}
</style>
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
  
<div class="container">
</div>

<div id='nao'>
<ul id="navi">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Customers<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="insert_cus.php">Add a new customer</a></li>
          <li><a href="view_cus.php">View Customers</a></li>
          <li><a href="#">Delete a customer</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Policies <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="insert_pol.php">Add a new Policy</a></li>
          <li><a href="view_pol.php">View Policies</a></li>
          <li><a href="#">Delete a policy</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="insert_user.php">Add new user</a></li>
          <li><a href="view_users.php">View all users</a></li>
          <li><a href="#">Delete user</a></li>
        </ul>
      </li>
      <li><a data-toggle="modal" data-target=".bs-example-modal-sm" role="button">Query processing</a></li>
    </ul>
</div>  
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Query processing</h4>
      </div>
      <div class="modal-body">
        <form name="reg-form" method="post" action="query_disp.php">
          <div class= "form-group" >
            <label for="user-name" class="control-label">Query:</label>
            <input type="text" class="form-control" id="user-name"  name="query" >
          </div>
          <div class="form-group">
			<input type="submit" name="queryup" value="Submit" class="btn btn-primary" />
		</div>
        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>
