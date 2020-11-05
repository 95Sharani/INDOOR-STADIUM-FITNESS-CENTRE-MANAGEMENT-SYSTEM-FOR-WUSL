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
  if(mail($_POST['emailfrom'], $_POST['email'], $_POST['subject'], $_POST['message'])){
    echo '<script type="text/javascript"> alert("succesfully send.")</script>';
  }else{
    echo '<script type="text/javascript"> alert("error.")</script>';
  }
}

 ?>


 






<div class="container">
	<div class="row">
<div class="col-md-12 text-center" style="padding-top: 3rem;">
<h1>Send E-mail</h1>
</div>
 <br>
		<div class="col-md-6 " style="margin-left: 18rem; text-transform: uppercase;">
	<form role="form" method="post" enctype="multipart/form-data">
		 <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b> From:</b></label>
    <input type="email" name="emailfrom" required="" class="form-control"  value="">
  </div>
    <form role="form" method="post" enctype="multipart/form-data">
     <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b> To:</b></label>
    <input type="email" name="email" required="" class="form-control"  value="g.j.bulegoda@gmail.com">
  </div>

  <div class="form-group">
    <label style="font-size: 1rem;letter-spacing: .3rem; text-transform: uppercase;"><b>Subject:</b> </label>
    <input type="text" name="subject" required="" class="form-control" placeholder="subject" value="">
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

 

</div>
</div>
</div>


</body>
</html>