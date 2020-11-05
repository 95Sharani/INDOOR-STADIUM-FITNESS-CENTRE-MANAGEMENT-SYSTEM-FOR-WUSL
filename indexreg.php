<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="icon" href="img/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font
	 <link rel="stylesheet" type="text/css" href="css/opensans-font.css"> 
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	 datepicker
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"> 
	<!-Main Style Css -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/player.css">
</head>
<body>

    
    <!--::header part start::-->
     <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand" ><img src="img/favicon.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                             
                                <li class="nav-item">
                                    <a class="nav-link" href="#footer">Contact</a>
                                </li>
                            </ul>
                        </div>
 
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            
                            <h1>Registration profile</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


	   	<div class="page-content">
		<div class="indoor-heading"></div>



		  <form class="my-form" action="php/players.php" method="POST">
		 <div>
        <h2>Player Registration</h2>
      </div>
        <div class="form">
          <div class ="vehicle-no">
              <p>Registration No:</p>
              <input type="text" name="reg" placeholder= "Enter Registrtion No.">
          </div>
          <div class ="cus-id">
              <p>Name:</p>
              <input type="text" name="name" placeholder= "Enter name">
          </div>
           <div class ="time">
              <p>Email:</p>
              <input type="text" name="email" placeholder= "Enter email">
          </div>
           <div class ="phone">
              <p>Phone:</p>
              <input type="text" name="phone" placeholder= "Enter contact Number">
          </div>
          <div class ="date">
              <p>Date of Birth</p>
              <input type="date" name="dob">
          </div>
           <div class ="address">
              <p>Address:</p>
              <input type="text" name="add" placeholder= "Enter the address">
          </div>
           <div class ="faculty">
              <p>Faculty:</p>
              <input type="text" name="fac" placeholder= "Enter the faculty">
          </div>
           <div class ="sex">
              <p>Gender:</p>
              <input type="sex" name="sex" placeholder= "Enter the gender">
          </div>
           <div class ="sport">
              <p>Sport:</p>
              <select name="sport" id="sport" class="control">
              		<option value="Karate">Karate</option>
					<option value="Taekwondo">Taekwondo</option>
              		<option value="Basketball">Basketball</option>
              		<option value="Vollyball">Vollyball</option>
              		<option value="Netball">Netball</option>
              		<option value="Badminton">Badminton</option>
              		<option value="TableTennis">Table Tennis</option>
               		<option value="Carrom">Carrom</option>
              		<option value="Chess">Chess</option>
              </select>
          </div>
            <div class ="pass">
              <p>Password:</p>
              <input type="Password" name="pass" placeholder= "Enter the Password">
          </div>
          <div class ="submit" >
              <input type="submit" name="submit" value="Submit">
          </div>
          <div class ="view">
              <input type ="button" name="view" value="View Players" onclick="window.location='views/player_view.php'">
          </div>
          <div class ="clear">
              <input type="reset" name="clear" value="Clear all">
          </div>
        </div>
    </form>

    <form class="my-form1" action="php/gym.php" method="POST">
		 <div>
        <h2>Gym Member Registration</h2>
      </div>
        <div class="form1">
          <div class ="vehicle-no">
              <p>Registration No:</p>
              <input type="text" name="reg" placeholder= "Enter Registrtion No.">
          </div>
          <div class ="cus-id">
              <p>Name:</p>
              <input type="text" name="name" placeholder= "Enter name">
          </div>
           <div class ="time">
              <p>Email:</p>
              <input type="text" name="email" placeholder= "Enter email">
          </div>
           <div class ="phone">
              <p>Phone:</p>
              <input type="text" name="phone" placeholder= "Enter contact Number">
          </div>
          <div class ="date">
              <p>Date of Birth</p>
              <input type="date" name="dob">
          </div>
           <div class ="address">
              <p>Address:</p>
              <input type="text" name="add" placeholder= "Enter the address">
          </div>
           <div class ="faculty">
              <p>Faculty:</p>
              <input type="text" name="fac" placeholder= "Enter the faculty">
          </div>
           <div class ="sex">
              <p>Gender:</p>
              <input type="sex" name="sex" placeholder= "Enter the gender">
          </div>
           <div class ="sport">
              <p>Tools:</p>
              <select name="tool" id="sport" class="control">
              		<option value="Bench Press">Bench Press</option>
					<option value="Treadmill">Treadmill</option>
              		<option value="Barbell">Barbell</option>
              		<option value="Abcoster">Abcoster</option>
              		<option value="Leg Press Machine">Leg Press Machine</option>
              </select>
          </div>

          <div class ="pass">
              <p>Password:</p>
              <input type="Password" name="pass" placeholder= "Enter the Password">
          </div>
          <div class ="submit" >
              <input type="submit" name="submit" value="Submit">
          </div>
          <div class ="view">
              <input type ="button" name="view" value="View Gym Members" onclick="window.location='views/gym_view.php'">
          </div>
          <div class ="clear">
              <input type="reset" name="clear" value="Clear all">
          </div>
        </div>
<div class ="view2">
              <input type ="button" name="view" value="View Coaches" onclick="window.location='views/coach_view.php'">
          </div>
  
    </form>

		      
       
			</div>



    <!-- footer part start-->
    <footer class="footer-area section_padding" id="footer" style="background-color: brown;">
        <div class="container">
            <div class="row justify-content-between">
              <!--  <div class="col-sm-6 col-lg-3">-->
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>The Physical Education Unit of Wayamba University Sri Lanka is the key provider and the <br>promoter of the best possible sports and recreation environment for the University Community.<br> By considering the high standards of health and fitness in both students and staff lead to <br> an active cooperation in working environment and a healthier, happier and safer community.</p>
                    </div>
              <!--  </div>-->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p>Lional Jayathilake Mawatha, Kuliyapitiya, 60200, Sri Lanka</p>
                            <h2>+94 37 2281414</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved for Wayamba University of Sri Lanka <i class="ti-heart" aria-hidden="true"></i> by WUSL CMIS<a href="https://colorlib.com" target="_blank"> </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <div class="col-lg-6">
                                <div class="social_icon">
                                    <a href="https://www.facebook.com/wuslsports/"> <i class="ti-facebook"></i> </a>
                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                    <a href="#"> <i class="ti-skype"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

	    <!--script src="js/jquery-1.12.1.min.js"></script-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- contact js -->
         <script src="js/contact.js"></script> 
     <script src="js/jquery.form.js"></script> 
     <script src="js/jquery.validate.min.js"></script> 
     <script src="js/mail-script.js"></script> 
     <script src="js/jquery.ajaxchimp.min.js"></script> 
    <!-- custom js -->
    <script src="js/custom.js"></script>

</body>
</html>