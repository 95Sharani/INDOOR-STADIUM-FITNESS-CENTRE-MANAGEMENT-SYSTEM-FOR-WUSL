<?php
$conn = mysqli_connect("localhost","root","","indoor");
if(!$conn){
	die("Connection Fail: " .mysqli_connect_error());
	
}
?>