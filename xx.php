<?php
include("connect.php");
            session_start();

              $query="SELECT * FROM time_table";
              $result=mysqli_query($conn, $query);

if(isset($_POST['upload'])){
    $sport=$_POST['sport'];
    $text=$_POST['text'];

    $table="INSERT into feedback(sport, description) VALUES ('$sport', '$text')";
    mysqli_query($conn, $table);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Course Schedule</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style2.css">
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
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                               <p>Come, let us play a sport. Make your body fit and grow...!</p>
                           <br><br>
                            <h1>DEFEND &
DOMINATE</h1>
 <p>The Harder the <strong>BATTLE</strong> the sweeter the <strong>VICTORY......</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
<br><br><br><br><br><br>
 <div class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
            </div>
            <div class="row gallery-filter">
                <div class="col-lg-6 mix all fitness">
                    <img src="img/333.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 mix all fitness coaching">
                            <img src="img/222.jpg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 mix all coaching">
                                    <img src="img/5.1.jpg" alt="">
                                </div>
                                <div class="col-lg-12 mix all coaching">
                                    <img src="img/classes-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-7 mix all other">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="col-lg-5 mix all other">
                            <img src="img/555.1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mix all event">
                    <img src="img/444.jpg" alt="">
                </div>
            </div>
        </div>
    </div>



    <!-- shedule part here -->
    <section class="shedule_part single_page_shedule section_padding overflow-hidden">
    <div>
    <h1 class="header">Time Shedule</h1>
    </div> 
    <br>     
        <div class="container p-lg-0">

            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="shedule_content">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th >Time</th>
                                <th >Monday</th>
                                <th >Tuesday</th>
                                <th >Wednesday</th>
                                <th >Thursday</th>
                                <th >Friday</th>
                                <th >Saturday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
            while ($row=mysqli_fetch_array($result)) {
              echo '
                <tr>
                 
                  <td>'.$row["time"].'</td>
                  <td>'.$row["monday"].'</td>
                  <td>'.$row["tuesday"].'</td>
                  <td>'.$row["wednesday"].'</td>
                  <td>'.$row["thursday"].'</td>
                  <td>'.$row["friday"].'</td>
                  <td>'.$row["saturday"].'</td>
                </tr>
              ';
            }

          ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shedule part end -->

    <!-- become a member part here -->
    <section class="become_member section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="become_member_text">
                        <h2>Any upgrades..!</h2>
                        <p><font color='black'>Do you need any suggestions to make. Dont worry. let me know.</font></p>
                        <form method="POST" action="indoor.php">   
                        <div class= "feedback1">
                        <input type="text" name="sport" placeholder="Enter the name of sport">
                        </div>
                        <div class="feedback2">
                            <textarea name="text" cols="40" rows="4" placeholder="Enter your suggestion"></textarea>
                        </div>
                        <input type="submit" name="upload" value="Upload" class="btn_1">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- become a member part end -->

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

    <!-- jquery plugins here-->
    <!-- jquery -->
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