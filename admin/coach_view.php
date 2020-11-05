
<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM coach";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Coach View</title>
	 <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="../js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
  <!--script src="../js/3.3.6.bootstrap.min.js"></script-->
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
  <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='coach_reg.php'"></i>
  
</div>


<section class="vie">
		<form>
 <div class="container">
   
    <div class="table-responsive" align="right">

      <h3 align="center">Coach View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped" >
        <thead>
          <tr>
               
                <th>Registration No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Date of Birth</th>
                <th>Category</th>
                <th>Institute</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["staff_id"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["phone"].'</td>
                  <td>'.$row["dob"].'</td>
                  <td>'.$row["category"].'</td>
                  <td>'.$row["institute"].'</td>
                </tr>
              ';
            }

          ?>
        </tbody>
      </table>
      
    </div>

  </div>
</form>
	</section>

</body>
</html>

<script>
  $(document).ready(function(){
    $('#editable_table').Tabledit({
      url:'coach_action.php',
      columns:{
        identifier:[0,"staff_id"],
        editable:[[1, 'name'], [2, 'email'], [3, 'phone'], [4, 'dob'],[5, 'category'],[6,'institute']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.staff_id).remove();
        }
      }
    });
  });
</script>