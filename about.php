<?php
    include("connect.php");
?>
<?php
require_once("session.user.php");
require_once("get.class.php");

$get = new GetUser();

    Session::start();
    //echo Session::display();

   
    if(Session::status() == FALSE){
        $link = '<ul class="top-social-media pull-right sm-sign">
                    <li>
                        <a href="#" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="#" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>';
        $class = "sm-sign";
    }else{
        $link = '<ul class="top-social-media pull-right">
                    <li>
                        <a href="user-profile.php" class="sign-in">'.$get->getName(Session::get("email")).'</a>
                    </li>
                    <li>
                        <a href="sm-out.php" class="fa fa-power-off"> Logout</a>
                    </li>
                </ul>';
        $class = "sm-terms";
    }
    
    
    
?>



<!DOCTYPE html>
<html lang="zxx">


<head>

    <title>The Nest - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Google Tag Manager (noscript) -->

<div class="page_loader"></div>



<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                    <li>
                        <?php echo $link; ?>
                        <!a href="index2.php" class="sign-in"><!i class="fa fa-sign-in"></i></a>
                    </li>
                    <li>
                        <!a href="sign-up2.php" class="sign-in"><!i class="fa fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="properties-details.htmlapp-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="logo">
                    <span><h1>RealEstaste</h1></span>
                    <!img src="img/logos/logo.png" alt="logo">
                </a>
            </div>
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact-2.php">Contact</a></li>
                    
                   
                </ul>
                
               
               
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>About Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About city estate start -->
<div class="about-city-estate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="car-detail-slider simple-slider">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="img/properties/properties-1.jpg" class="img-preview img-responsive" alt="properties-1">
                                </div>
                                <div class="item">
                                    <img src="img/properties/properties-2.jpg" class="img-preview img-responsive" alt="properties-2">
                                </div>
                                <div class="item">
                                    <img src="img/properties/properties-5.jpg" class="img-preview img-responsive" alt="properties-3">
                                </div>
                                <div class="item active left">
                                    <img src="img/properties/properties-8.jpg" class="img-preview img-responsive" alt="properties-8">
                                </div>
                                <div class="item next left">
                                    <img src="img/properties/properties-3.jpg" class="img-preview img-responsive" alt="properties-5">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-text">
                    <div class="main-title-2">
                        <h1><span>Welcome</span> to RealEstast</h1>
                    </div>
                   <h3>WHO WE ARE</h3>
                  
                    <p>Nest is the largest real estate market place in Bangladesh. Being an e-commerce property portal, we 
                    cater to the needs of those seeking real estate services, with a promise to deliver a high class service and make 
                    the house hunting and renting / buying process easier than ever.</p> 
                    <p>By offering the easiest platform enabling you to 
                    consume property content in the comfort of their own surroundings, this enables anyone to buy, rent or sell 
                    properties in Bangladesh</p>
                    <a href="#" class=" btn button-sm button-theme">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About city estate end -->


<!-- Agent section end -->

<!-- Counters strat -->

<!-- Counters end -->


<!-- Testimonial secion end -->
<div class="clearfix"></div>



<!-- Footer start
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer top -
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                    <div class="logo-2">
                        <a href="index.html">
                            <h1>Realestate
                            <!img src="img/logos/footer-logo.png" alt="footer-logo">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <ul class="social-list clearfix">
                        <li><a href="properties-details.html"><i class="fa fa-rss"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer info-->
         


<!-- Footer end -->
<?php 
include "inc/footer.php";

?>
<!-- Copy right start 
<div class="copy-right">
    <div class="container">
        &copy;  2017.Trademarks and brands are the property of their respective owners.
    </div>
</div>
<!-- Copy end right-->

<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-submenu.js"></script>
<script type="text/javascript" src="js/rangeslider.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.scrollUp.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/leaflet.js"></script>
<script type="text/javascript" src="js/leaflet-providers.js"></script>
<script type="text/javascript" src="js/leaflet.markercluster.js"></script>
<script type="text/javascript" src="js/dropzone.js"></script>
<script type="text/javascript" src="js/jquery.filterizr.js"></script>
<script type="text/javascript" src="js/maps.js"></script>
<script type="text/javascript" src="js/app.js"></script>

<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>