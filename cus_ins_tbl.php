<?php
/* session_start();

 if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
} 
 */
$con = oci_connect('girisha', 'girisha47', 'localhost/XE');

//set validation error flag as false
$error = false;

if (isset($_POST['signup'])) {

	//check if form is submitted  fname, uname, email, cell, city, pincode, pass, cpass
	$fname = $_POST['fname'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];




    if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
		$error = true;
		$errormsg = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$errormsg = "Please Enter Valid Email ID";
	}
	if(strlen($pass) < 6) {
		$error = true;
		$errormsg = "Password must be minimum of 6 characters";
	}
	if($pass != $cpass) {
		$error = true;
		$errormsg = "Password and Confirm Password doesn't match";
    }

	if (!$error) {
		$query = "INSERT INTO users(fname, uname, email, cell, city, pincode, pass) VALUES('$fname','$uname','$email','$cell','$city','$pincode','$pass')";
		$how = oci_parse($con, $query);
		oci_execute($how);
		if(!($how == '')){
            //$successmsg = "Successfully Inserted!!";
            echo "yipeee";
            echo "<script>alert('Successfully Inserted!!'); location.href='view_cus.php';</script>";
		} 
		else {
            //$errormsg = "Error in inserting...Please try again later!";
            echo "<script>alert('Error in inserting...Please try again later!') location.href='insert_cus.php';</script>";
		}
    }
    else{
        echo $error;?>
        <script>alert <?php echo $errormsg ?>; </script>";
        <?php
    }
}
?>