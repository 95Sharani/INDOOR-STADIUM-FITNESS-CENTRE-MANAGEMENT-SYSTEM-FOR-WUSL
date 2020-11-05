<?php 

include("../connect.php");
           session_start();

//$connect=mysqli_connect("localhost","root","","shancabs");

$input=filter_input_array(INPUT_POST);

// 	$reg=mysqli_real_escape_string($conn, $input["reg_no"]);
    $monday=mysqli_real_escape_string($conn, $input["monday"]);
    $tuesday=mysqli_real_escape_string($conn, $input["tuesday"]);
    $wednesday=mysqli_real_escape_string($conn, $input["wednesday"]);
    $thursday=mysqli_real_escape_string($conn, $input["thursday"]);
    $friday=mysqli_real_escape_string($conn, $input["friday"]);
    $saturday=mysqli_real_escape_string($conn, $input["saturday"]);
    

     if($input["action"]==='edit'){
    	$query="UPDATE time_table SET 
        monday='".$monday."',
        tuesday= '".$tuesday."',
    	wednesday='".$wednesday."',
    	thursday='".$thursday."',
        friday='".$friday."',
        saturday='".$saturday."'
    	where time='".$input["time"]."'
    	";

    	mysqli_query($conn, $query);

    }

echo json_encode($input); 
    

?>