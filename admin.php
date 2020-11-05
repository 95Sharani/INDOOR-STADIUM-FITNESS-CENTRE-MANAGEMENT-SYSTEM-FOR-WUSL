<!DOCTYPE html>
<html lang="en">

 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>
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
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="admin.php" id="navbarDropdown1" role="button" data-toggle="dropdown" area-haspopup="true" area-expanded="false">Categories
                                  </a>
                                  <div class="dropdown-menu" area-labelledby="navbarDropdown1" >
                                    <a class="dropdown-item" href="indoor.php">Indoor</a>
                                    <a class="dropdown-item" href="gym.php">Gym</a>
                                </div>
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rules.php">Rules and Regulations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#footer">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Sign Out</a>
                                </li>
                            </ul>
                        </div>
 
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
          <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                             <p>Come, let us play a sport. Make your body fit and grow...!</p>
                             <br> <br>
                            <h1>WUSL <br> Indoor Administration</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
    <br>
    <br>
    <br>
    <br>
    <br>

<style>
  .btn-default{
  background: none;
  background-color: black;
 border-color: red;
 border-width: .2rem;
  color: white;
  font-size: 1.2rem;
 height: 250px;
 width: 250px;
  min-height: 48px;
  padding: 10px;
  border-radius: 30%;
  display: inline-block;
  text-align: center;

   margin:1.3rem 5rem;
   letter-spacing: .1rem;
 
</style>
<section class="second">
    <div class="new" style="margin-left: 5rem;">
        <div class="row">
        <div class="col-md-4">
        <a href="admin/admin_reg.php"> 
            <button type="submit" value=""  class=" btn btn-default btn-lg">
                <img src="img/u2.png" style="border-radius: 4rem;width: 70%;"><br><strong>My Profile</strong>
            </button>
        </a>

        </div>
        <div class="col-md-4">
        <a href="php/shedule.php"><button type="submit" value=""  class="btn btn-default btn-lg">
                <img src="img/u3.jpg" style="border-radius: 5rem;width: 70%;"><br><strong>Update Schedule</strong>
            </button></a>
        </div>
        <div class="col-md-4">
        <a href="admin/coach_reg.php"><button type="submit" value=""  class="btn btn-default btn-lg">
                <img src="img/294-512.WEBP" style="border-radius: 5rem;width: 70%;"><br><strong>Coach Profile</strong>
            </button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        <a href="admin/player.php"><button type="submit" value=""  class="btn btn-default btn-lg">
                <img src="img/05-512.png" style="border-radius: 5rem;width: 70%;"><br><strong>Player Profile</strong>
            </button></a>
        </div>
          <div class="col-md-4">
        <a href="admin/member.php"><button type="submit" value=""  class="btn btn-default btn-lg">
                <img src="img/294-512.WEBP" style="border-radius: 5rem;width: 70%;"><br><strong>Gym Member Profile</strong>
            </button></a>
        </div>
        <div class="col-md-4">
        <a href="admin/feedback.php"><button type="submit" value=""  class="btn btn-default btn-lg">
                <img src="img/h16.png" style="border-radius: 4rem;width: 70%;"><br><strong>Feedbacks</strong>
            </button></a>
        </div>
    </div>
    </div>    
</section>

        <!--dashboard buttons>
        <div  class="fixed-heading">
    <div class="narrow" style="padding-top: 4rem; margin-left: 6rem;">
        <div class="col-md-12">
          <br>
 

          <div class="row" style="">
            <div class="col-md-3">
              <a href="adminuserprofile.php">
              <button type="submit" value=""  class="btn btn-default  btn-lg text-uppercase"><img src="img/u2.png"><br><b style="color: white;">My Profile</b></button></a>
            </div>
            <div class="col-md-3" >
               <a href="adminreg.php">
              <button type="button"  class="btn btn-default  btn-lg text-uppercase"><img src="img/u14.ico"><br><b style="color: white;">Coach Registration</b></button></a>
            </div>

            <div class="col-md-3">
              <a href="Course_shedule.php">
              <button type="button"  class="btn btn-default  btn-lg text-uppercase"><img src="img/u7.png"><br><b style="color: white;">Course Schedule Handling</b></button></a>
            </div>
            
            <div class="col-md-3" >
             <a href="gym_management.php">
              <button type="button"  class="btn btn-default  btn-lg text-uppercase"><img src="img/u17.webp"><br><b style="color: white;">Gymnasium Management</b></button></a>
            </div>
          </div>
          <br>
          <br>
         
       
</div>
</div>
</div-->

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

        <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
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


