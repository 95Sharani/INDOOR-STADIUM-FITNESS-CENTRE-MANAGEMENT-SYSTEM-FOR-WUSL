<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--Bootstrap CSS-->


	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <title>Send Mail</title>
     <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
     <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="../js/2.2.0.jquery.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script>    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>


  <?php 

if (isset($_POST['sendmail'])) {
  if(mail( $_POST['email'], $_POST['subject'], $_POST['message'])){
    echo '<script type="text/javascript"> alert("succesfully send.")</script>';
  }else{
    echo '<script type="text/javascript"> alert("error.")</script>';
  }
}

 ?>


 <?php 
    $connection = mysqli_connect('localhost','root','','indoor');
    if(isset($_POST['email_id']))
    {
      $category =$_POST['email_id'];
 echo      $query="SELECT * FROM time_table WHERE category='$category'";

      $query_run = mysqli_query($connection,  $query);


 $q1 = "SELECT * FROM feedback INNER JOIN players USING(category) where category='$category'";

   $query_run1 = mysqli_query($connection,  $q1);

   exit();
      foreach ($query_run as $row) 
      {
        ?>







<div class="container">
	<div class="row">
<div class="col-md-12 text-center" style="padding-top: 3rem;">
<h1>Send E-mail</h1>
</div>
 <br>
		<div class="col-md-6 " style="margin-left: 18rem; text-transform: uppercase;">
	<form role="form" method="post" enctype="multipart/form-data">
		
    <form role="form" method="post" enctype="multipart/form-data">
     <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b> To:</b></label>
    <input type="email" name="email" required="" class="form-control"  value="">
  </div>

  <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b>Subject:</b> </label>
    <input type="text" name="subject" required="" class="form-control" placeholder="subject" value="Regarding the Request that you have made to schedule a practice time at : <?php echo $row['time']  ?> on ">
  </div>

  <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b>Message:</b></label>
    <input type="text" name="message" required="" class="form-control" placeholder="Your Message" height="7rem" style="height: 10rem;" 
    value=""   > 

  </div>

   <div class="modal-footer">
       
        <button type="submit" class="btn btn-success btn-lg btn-block" name="sendmail" style="font-size: 1.2rem;letter-spacing: .3rem; "><B>SEND</B></button>
      </div>
	</form>

  <?php
          
  }
    }
    
    ?>


</div>
</div>
</div>


</body>
</html>