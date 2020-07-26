<?php
session_start();

$con = oci_connect('girisha', 'girisha47', 'localhost/XE');

//check if form is submitted
if (isset($_POST['login'])) {
 
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
    
    $stid = oci_parse($con, "SELECT uname, pass FROM users WHERE uname ='$uname' AND pass='$pass' ");
    oci_execute($stid);
    if(!$stid){
        echo "<script>alert('USERNAME OR PASSWORD WRONG!!'); location.href='index.php';</script>";
    }
    else{
        while (($row = oci_fetch_array($stid, OCI_BOTH)) != false) {

            $uname1 = $row[0] ;
            $pass1 = $row[1] ;
        }   
        $_SESSION['cus_uname']= $uname1;
        echo "<script>alert('Successfully logged in!!'); location.href='index_cus.php';</script>";

    }
}
?>

