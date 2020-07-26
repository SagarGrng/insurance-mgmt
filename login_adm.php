<?php
session_start();

$con = oci_connect('girisha', 'girisha47', 'localhost/XE');
echo "fjsdl";
//check if form is submitted
if (isset($_POST['logup'])) {
 
	$uname = $_POST['username'];
	$pass = $_POST['password'];
    
    echo "kdfj";
    if($uname == 'girisha' and $pass == 'girisha47'){?>
        <script>alert('Successfully logged in!!'); location.href='index_admin.php';</script>"
    <?php
    }
    else{?>
        <script>alert('USERNAME OR PASSWORD WRONG!!'); location.href='index.php';</script>"
    <?php
    }
}
?>

