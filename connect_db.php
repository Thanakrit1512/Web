<?php 

$serverhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "wu_slc";

// create connection
$conn  = new mysqli($serverhost, $username, $password, $dbname);
// check connection
if($conn ->connect_error) {
	die("connection failed : " . $conn ->connect_error);
} else {
	// echo "Successfully Connected";
}

?>