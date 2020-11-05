<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM gym";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Gymnasium View</title>

     <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="../js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
  <script src="../js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>

<link rel="stylesheet" href="../css/admin.css">
   <!--script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script-->
<!--link rel ="stylesheet" type="text/css" href="css/res_view.css"-->

</head>
<body ><!--background="image/23.jpg"-->
 
<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../admin.php'"></i>
  
</div>


  <div class="container">
   
    <div class="table-responsive">
      <h3 align="center">Gym Member View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
               
                <th>Registration No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Faculty</th>
                <th>Gender</th>
                <th>Equipment</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["reg_no"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["phone"].'</td>
                  <td>'.$row["dob"].'</td>
                  <td>'.$row["address"].'</td>
                  <td>'.$row["faculty"].'</td>
                  <td>'.$row["gender"].'</td>
                  <td>'.$row["equipment"].'</td>
                </tr>
              ';
            }

          ?>
        </tbody>
      </table>
      
    </div>

  </div>
</div>



</body>
</html>

<script>
  $(document).ready(function(){
    $('#editable_table').Tabledit({
      url:'member_action.php',
      columns:{
        identifier:[0,"reg_no"],
        editable:[[1, 'name'], [2, 'email'], [3, 'phone'], [4, 'dob'],[5, 'address'], [6, 'faculty'], [7, 'gender'], [8, 'equipment']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR){
        if(data.action == 'delete'){
          $('#' +data.reg_no).remove();
        }
      }
    });
  });
</script>