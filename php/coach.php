<?php

include("../connect.php");
session_start();

$reg = $_POST['staff_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$category = $_POST['category'];
$institute = $_POST['institute'];
$pass = $_POST['pass'];

if(!empty($reg) && !empty($name) && !empty($email) && !empty($phone) && !empty($dob) && !empty($category) && !empty($institute) && !empty($pass))
{

$SELECT = "SELECT staff_id FROM coach where staff_id =? Limit 1";
$INSERT = "INSERT into coach (staff_id, name, email, phone, dob, category, institute, pass) values(?,?,?,?,?,?,?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$reg);
$stmt->execute();
$stmt->bind_result($reg);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("sssissss",$reg,$name,$email,$phone,$dob,$category,$institute,$pass);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../admin/coach_reg.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../admin/coach_reg.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../admin/coach_reg.php';
 </script>
<?php


}



?>