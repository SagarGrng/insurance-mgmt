<?php
/* session_start();

 if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
} 
 */
$con = oci_connect('girisha', 'girisha47', 'localhost/XE');

//set validation error flag as false
$error = false;

if (isset($_POST['healthup'])) {

    //check if form is submitted  fname, uname, email, cell, city, pincode, pass, cpass
    $cus_uname= $_SESSION['cus_uname'];
	$pol_id = $_POST['pol_id'];
	$pol_name = $_POST['pol_name'];
	$tenure = $_POST['tenure'];
	$type = $_POST['type'];
    $int = $_POST['interest'];
    $prm_term = $_POST['premium_term'];
	$prm_amt = $_POST['premium_amt'];

    


	if (!$error) {
		$query = "INSERT INTO policies_cus(cus_uname, pol_id, pol_name, tenure, type, interest, premium_term, premium_amt) VALUES('$cus_uname', '$pol_id','$pol_name','$tenure','$type','$int','$prm_term', '$prm_amt')";
		$how = oci_parse($con, $query);
		oci_execute($how);
		if(!($how == '')){
            //$successmsg = "Successfully Inserted!!";
            echo "yipeee";
            echo "<script>alert('Successfully Inserted!!'); location.href='view_health.php';</script>";
		} 
		else {
            //$errormsg = "Error in inserting...Please try again later!";
            echo "<script>alert('Error in inserting...Please try again later!') location.href='view_health.php';</script>";
		}
    }
    else{
        echo $error;?>
        <script>alert <?php echo $errormsg ?>; </script>";
        <?php
    }
}
?>