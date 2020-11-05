
<?php
include("../connect.php");
            session_start();

              $query="SELECT * FROM feedback";
              $result=mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback View</title>
  <link rel="icon" href="../img/favicon.png">
	 <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="../js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
  <!--script src="../js/3.3.6.bootstrap.min.js"></script-->
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>
  <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../admin.php'"></i>
  
</div>


<section class="vie">
		<form>
 <div class="container">
   
    <div class="table-responsive" align="right">

      <h3 align="center">Feedback View</h3><br />
      <table id="editable_table" class="table table-bordered table-striped" >
        <thead>
          <tr>
               <th>Updated Date Time</th>
                <th>Sport</th>
                <th>Description</th>
                <th>E-Mail</th>
                
                 
          </tr>
        </thead>
        <tbody>
          <?php
             if(mysqli_num_rows($result )>0)
    {
      while ($row=mysqli_fetch_assoc($result )) 
      {
      
       ?>
             
                <tr>
                 <td><?php echo $row['current_date']; ?> </td>
                  <td><?php echo $row['category']; ?></td>
                  <td><?php echo $row['description']; ?></td>
<td>
 <form action="email.php" method="POST">
            <input type="hidden" name="email_id"  value="<?php echo $row['category'];   ?>">
           <button type="submit" name="email_btn" class="btn btn-primary btn-block">Mail</button> 
           </form>
</td>

                </tr>
              <?php
            }
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

