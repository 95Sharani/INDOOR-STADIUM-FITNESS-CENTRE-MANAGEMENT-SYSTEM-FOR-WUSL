<?php

include("../connect.php");
session_start();


$name = $_POST['name'];
$reg = $_POST['reg'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$address = $_POST['add'];
$faculty = $_POST['fac'];
$gender = $_POST['sex'];
$sport = $_POST['sport'];
$pass = $_POST['pass'];

if(!empty($reg) && !empty($name) && !empty($email) && !empty($phone) && !empty($dob) && !empty($address) && !empty($faculty) && !empty($gender) && !empty($sport) && !empty($pass))
{

$SELECT = "SELECT reg_no FROM players where reg_no =? Limit 1";
$INSERT = "INSERT into players (reg_no, name, email, phone, dob, address, faculty, gender, category,pass) values(?,?,?,?,?,?,?,?,?,?)";


$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$reg);
$stmt->execute();
$stmt->bind_result($reg);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0){
	$stmt->close();

	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("ississssss",$reg,$name,$email,$phone,$dob,$address,$faculty,$gender,$sport,$pass);
	$stmt->execute();

	?>
<script> alert ("New record inserted Sucessfully");
	window.location.href='../indexreg.php';
 </script>
<?php

}else{
	?>
<script> alert ("Someone already registered with this Reservation No");
	window.location.href='../indexreg.php';
</script>
<?php
}
$stmt->close();
$conn->close();

}else{
	?>
<script> alert ("All the fields are required");
	window.location.href='../indexreg.php';
 </script>
<?php


}



?>