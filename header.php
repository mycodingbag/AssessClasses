<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Assess Classes</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="images/assess icon.png" type="image/x-icon">
  <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  

</head>

<body>
 


<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+91 9930569824"><strong><i class="fa fa-phone"> : </i> </strong>+91 993 056 9824</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/Assess-Computer-Education-1028050623889516/"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://wa.me/919930569824"><i class="fa fa-whatsapp"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.justdial.com/Mumbai/Assess-Computer-Education-Next-To-Dominoz-Antop-Hill/022PXX22-XX22-130806114121-N4S2_BZDET">Jd</a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.instagram.com/assessclasses/"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.youtube.com/channel/UCw9tFY_Atc8_GptWa9tSfvQ"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">Enquiry</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt="logo2"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Computer
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <p class="dropdown-item"><b>Poulur Courses</b></p>
                  <a class="dropdown-item" href="coursedetail.php?course=mscit.php">MS-CIT</a>
                  <a class="dropdown-item" href="coursedetail.php?course=tallychamp.php">Adv. Tally ERP 9.0</a>
                  <a class="dropdown-item" href="coursedetail.php?course=advexcel.php">Adv. Excel</a>
                  <a class="dropdown-item" href="coursedetail.php?course=candcpp.php">C & C++</a>
                  <a class="dropdown-item" href="coursedetail.php?course=dtp.php">Graphic Designing</a>
                  <hr>
                  <a class="dropdown-item" href="courses.php">See All Courses</a>
                </div>
              </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="coaching.php">Coaching</a>
            </li>
            <li class="nav-item @@gallery">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">CONTACT</a>
              
            </li>
           
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->

<!-- Modal -->
<div class="modal fade" tabindex="-1" id="signupModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content rounded-0 border-0 p-4 pb-0" >
            <div class="modal-header border-0 pb-0">
                <h3>Enquiry Form  </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                <p>Please enter your detail so that we contact you. </p>
                    <form id="enquiry_form" action="codeengine.php" method = "POST" class="row">
                          <input type="hidden" name="mode" value="enquiry">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="enquiryName" name="enquiryName" placeholder="Name" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="enquiryEmail" name="enquiryEmail" placeholder="Email" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="enquiryPhone" name="enquiryPhone" placeholder="Phone" required>
                        </div>
                        <div class="col-6">
                            <select style="height:60px;" class="form-control mb-3 " id="enquiryCourse" name="enquiryCourse" placeholder="Courses Name" required>
                                <option>MS-CIT</option>
                                <option>Adv.Tally</option>
                                <option>Adv.Excel</option>
                                <option>D.T.P.</option>
                                <option>Programming</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                        <textarea name="enquiryMessage" id="message" class="form-control mb-3" rows="2" style="height:auto" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
