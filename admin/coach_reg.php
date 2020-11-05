<!DOCTYPE html>
<html>
<head>
	<title>Coach</title>
   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!--script src="../js/2.2.0.jquery.min.js"></script>
  <link rel="stylesheet" href="../css/3.3.6.bootstrap.min.css" />
  <script src="../js/3.3.6.bootstrap.min.js"></script>
  <script src="jquery-tabledit-1.2.3/jquery.tabledit.min.js"></script-->
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<div class="back-button">
  <i class="fa fa-arrow-circle-left fa-3x" onclick="window.location='../admin.php'"></i>
  
</div>

	<form class="ade" action="../php/coach.php" method="POST" >
		<div>
        <h2>Coach Registration</h2>
      </div>
        <div class="form">
          <div class ="staff_id">
              <p>Registration No:</p>
              <input type="text" name="staff_id" placeholder= "Enter Registrtion No.">
          </div>
          <div class ="name">
              <p>Name:</p>
              <input type="text" name="name" placeholder= "Enter name">
          </div>
           <div class ="email">
              <p>Email:</p>
              <input type="text" name="email" placeholder= "Enter email">
          </div>
           <div class ="phone">
              <p>Phone:</p>
              <input type="text" name="phone" placeholder= "Enter contact Number">
          </div>
          <div class ="date">
              <p>Date of Birth:</p>
              <input type="date" name="dob">
          </div>
           <div class ="category">
              <p>Category:</p>
          <select name="category" id="sport" class="control">
                  <option value="Karate">Karate</option>
                  <option value="Taekwondo">Taekwondo</option>
                  <option value="Basketball">Basketball</option>
                  <option value="Vollyball">Vollyball</option>
                  <option value="Netball">Netball</option>
                  <option value="Badminton">Badminton</option>
                  <option value="TableTennis">Table Tennis</option>
                  <option value="Carrom">Carrom</option>
                  <option value="Chess">Chess</option>
                  <option value="Gym">Gym</option>
              </select>
          </div>
          <div class ="institute">
         <p>Institute:</p>
              <input type="text" name="institute" placeholder= "Enter the institute">
          </div>
            <div class ="passw">
              <p>Password:</p>
              <input type="Password" name="pass" placeholder= "Enter the Password">
          </div>
          <div class ="submit" >
              <input type="submit" name="submit" value="Submit">
          </div>
          <div class ="clear">
              <input type="reset" name="clear" value="Clear all">
          </div>
          <div class ="view">
              <input type ="button" name="view" value="View" onclick="window.location='../admin/coach_view.php'">
          </div>
        </div>
    </form>
	

</body>
</html>

