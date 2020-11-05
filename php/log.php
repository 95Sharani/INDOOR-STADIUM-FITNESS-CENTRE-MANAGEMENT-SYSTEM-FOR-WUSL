<?php

include("../connect.php");
session_start();

if(isset($_POST['submit'])){
$reg = $_POST['reg'];
$Pass = $_POST['pass'];


	$query=("SELECT * from players where reg_no = '".$reg."' AND pass = '".$Pass."'");
	$query2=("SELECT * from gym where reg_no = '".$reg."' AND pass = '".$Pass."'");
	$query3=("SELECT * from admin where staff_id = '".$reg."' AND pass = '".$Pass."'");
	$query4=("SELECT * from coach where staff_id = '".$reg."' AND pass = '".$Pass."'");
	$result=mysqli_query($conn, $query);
	$result2=mysqli_query($conn, $query2);
	$result3=mysqli_query($conn, $query3);
	$result4=mysqli_query($conn, $query4);

	if($result){
		while($row = mysqli_fetch_array($result))
		{
			echo '<script type="text/javascript"> alert("you are login successfully...!")</script>';
		}
		if(mysqli_num_rows($result)>0){
			?>
			<script type="text/javascript">
				window.location.href="../indoor.php"
			</script>

			<?php

		}else if($result2) {
			while($row = mysqli_fetch_array($result2))
		{
			echo '<script type="text/javascript"> alert("you are login successfully...!")</script>';
		}if(mysqli_num_rows($result2)>0){
			?>
			<script type="text/javascript">
				window.location.href="../gym.php"
			</script>

			<?php

		}else if($result3) {
			while($row = mysqli_fetch_array($result3))
		{
			echo '<script type="text/javascript"> alert("you are login successfully...!")</script>';
		}if(mysqli_num_rows($result3)>0){
			?>
			<script type="text/javascript">
				window.location.href="../admin.php"
			</script>

			<?php

		}else if($result4) {
			while($row = mysqli_fetch_array($resul43))
		{
			echo '<script type="text/javascript"> alert("you are login successfully...!")</script>';
		}if(mysqli_num_rows($result4)>0){
			?>
			<script type="text/javascript">
				window.location.href="../indoor.php"
			</script>

			<?php

		}else {


			?>

			<script type="text/javascript">
				alert("username or password is wrong")
				window.location.href="../index.php"
			</script>
			<?php
		}
		
		}
		}
}


	}
}

?>