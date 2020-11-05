<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Bootstrap CSS-->
	
	<title>Send Mail</title>

	<link rel="stylesheet" type="text" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
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
      $query="SELECT feedback.current_date , feedback.description, players.email as players_email,feedback.category as sport,coach.email as coach_email  FROM feedback LEFT OUTER JOIN players ON feedback.category = players.category LEFT OUTER JOIN coach ON feedback.category = coach.category WHERE feedback.category='$category'";
      $query_run = mysqli_query($connection,  $query);

  
  

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
    <input type="email" name="email" required="" class="form-control"  value="<?php echo $row['coach_email'] ?>,<?php echo $row['players_email'] ?>">
  </div>

  <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b>Subject:</b> </label>
    <input type="text" name="subject" required="" class="form-control" placeholder="subject" value="Regarding the Request that you have made to schedule a practice time on : <?php echo $row['current_date']  ?> about <?php echo $row['sport'] ?>">
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