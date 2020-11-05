<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM players";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Player View</title>

   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="../js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
  <script src="../js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
  <link rel ="stylesheet" type="text/css" href="../css/res_view.css">
   <!--script src="jquery-tabledit-1.2.3/jquery.tabledit.js"></script-->
<!--link rel ="stylesheet" type="text/css" href="css/res_view.css"-->

</head>
<body  background="../img/22.jpg">
 
<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../indexreg.php'"></i>
  
</div>


  <div class="container">
   
    <div class="table-responsive">
      <h3 align="right">Player View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped">
        <thead>
          <tr>
               
                <th>Registration No.</th>
                <th>Name</th>
                <th>Faculty</th>
                <th>Gender</th>
                <th>Sport</th>
                 
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["reg_no"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["faculty"].'</td>
                  <td>'.$row["gender"].'</td>
                  <td>'.$row["category"].'</td>
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

