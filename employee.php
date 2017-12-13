<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <title>Employee</title>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="./index.html"><img src="img/logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/Indian/index.html"><span class="fa fa-home "></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Indian/aboutus.html"><span class="fa fa-info "></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Indian/table.html"><span class="fa fa-list "></span> Reserve Table</a></li>
                    <li class="nav-item "><a class="nav-link" href="/Indian/contactus.html"><span class="fa fa-address-card"></span> Contact</a></li>
                </ul>
               
                <span class="navbar-text">
                    <a data-toggle="modal" data-target="#signupModal">
                        <span ></span> Restaurant</a>
                </span>
            </div>
        </div>
    </nav>
   
         <header class="jumbotron">
             <div class="container">
                 <div class="row row-header">
                     <div class="col-12 col-sm-8">
                         <h1><b>Make Sure Your Payment!  </b></h1>
                         <p style="padding:8px;"></p>
                     <h3>Please cheak your Bill and Pay us.</h3><br>

                     </div>
                 </div>
             </div>
</header>
<br><br><hr>

<?php
session_start();
//echo "132456";
echo "<center><br>";
echo $_SESSION['myValue'];
echo"<br></center>";
?>

<center><p><b>You can Pay Us Through Paytm:  </b>8989034822</center><br><br><hr>



             <footer class="footer raw-footer">
                 <div class="container">
                     <div class="row">
                         <div class="col-5 offset-1 col-sm-2">
                             <h5>Links</h5>
                             <ul class="list-unstyled">
                                 <li><a href="/index.html">Home</a></li>
                                 <li><a href="/table.html">Menu</a></li>

                             </ul>
                         </div>
                         <div class="col-6 col-sm-5">
                             <h5>Our Address</h5>
                             <address>
                              Dumna Airport Road<br>
                              IIITDMJ, 482005<br>
                              Jabalpur, India.<br>
                               <i class="fa fa-phone fa-lg"></i>: 123 456 789<br>
                               <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                           <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:indian@food.net">indian@food.net</a>
                        </address>
                         </div>
                         <div class="col col-sm-4 align-self-center">
                             <div style="text-align: center">
                                     <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><span class="fa fa-google-plus"></span></a>
                                     <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><span class="fa fa-facebook"></span></a>
                                     <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><span class="fa fa-linkedin"></span></a>
                                     <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><span class="fa fa-twitter"></span></a>
                                     <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><span class="fa fa-youtube"></span></a>
                                     <a class="btn btn-social-icon" href="mailto:"><span class="fa fa-envelope-o"></span></a>
                               </div>
                         </div>
                    </div>
                    <div class="row justify-content-center">
                         <div class="col-auto ">
                             <p>© Copyright 2017 Indian Restaurant</p>
                         </div>
                    </div>
                 </div>
             </footer>
             <script src="node_modules/jquery/dist/jquery.min.js"></script>
             <script src="node_modules/tether/dist/js/tether.min.js"></script>
             <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            </body>
             </html>
