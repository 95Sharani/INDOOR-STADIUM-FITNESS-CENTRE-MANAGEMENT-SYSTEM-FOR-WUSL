<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");

$input=filter_input_array(INPUT_POST);

// 	$reg=mysqli_real_escape_string($conn, $input["reg_no"]);
    $name=mysqli_real_escape_string($conn, $input["name"]);
    $email=mysqli_real_escape_string($conn, $input["email"]);
    $phone=mysqli_real_escape_string($conn, $input["phone"]);
    $dob=mysqli_real_escape_string($conn, $input["dob"]);
    $address=mysqli_real_escape_string($conn, $input["address"]);
    $faculty=mysqli_real_escape_string($conn, $input["faculty"]);
    $gender=mysqli_real_escape_string($conn, $input["gender"]);
    $tool=mysqli_real_escape_string($conn, $input["equipment"]);
    

     if($input["action"]==='edit'){
    	$query="UPDATE gym SET 
        name='".$name."',
        email= '".$email."',
    	phone='".$phone."',
    	dob='".$dob."',
        address='".$address."',
        faculty= '".$faculty."',
        gender='".$gender."',
        equipment='".$tool."'
    	WHERE reg_no='".$input["reg_no"]."'
    	";

    	mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
    	DELETE from gym 
    	where reg_no = '".$input["reg_no"]."'
    	";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>