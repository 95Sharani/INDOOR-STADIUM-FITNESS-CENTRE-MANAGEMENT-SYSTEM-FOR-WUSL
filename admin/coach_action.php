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
    $category=mysqli_real_escape_string($conn, $input["category"]);
    $institute=mysqli_real_escape_string($conn, $input["institute"]);
    

     if($input["action"]==='edit'){
    	$query="UPDATE coach SET 
        name='".$name."',
        email= '".$email."',
    	phone='".$phone."',
    	dob='".$dob."',
        category='".$category."',
        institute='".$institute."'
    	where staff_id='".$input["staff_id"]."'
    	";

    	mysqli_query($conn, $query);

    }

    if($input["action"] === 'delete'){
    	$query = "
    	DELETE from coach 
    	where staff_id = '".$input["staff_id"]."'
    	";
    	mysqli_query($conn, $query);

    }
echo json_encode($input); 
    

?>