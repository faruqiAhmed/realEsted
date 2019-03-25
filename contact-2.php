

<!DOCTYPE html>
<html lang="en">
<head>

    <title>::.Real Estate.::</title>
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
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">
    <script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>
</head>
<body>
<?php 

//require "classes/application.php";
//$obj_app = new Application();
include "inc/headertop.php";
include "inc/header.php";
?>

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact body start -->
<div class="contact-body content-area-2">
    <div class="container">
        <div class="contact-box">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Contact</span> with us</h1>
            </div>
            <!-- Contact form start -->
            <div class="contact-form">
                <form  action="contact.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group fullname">
                                <input type="text" name="name" class="input-text" placeholder="Full Name">
                            </div>
                            <div class="form-group enter-email">
                                <input type="email" name="email" class="input-text" placeholder="Enter email">
                            </div>
                            <div class="form-group subject">
                                <input type="text" name="subject" class="input-text" placeholder="Subject">
                            </div>
                            <div class="form-group number">
                                <input type="text" name="phone" class="input-text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group message">
                                <textarea class="input-text" name="message" placeholder="Write message"></textarea>
                            </div>
                            <div class="form-group send-btn">
                               <button type="submit" class="button-md button-theme">Send Message</button>
                               
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
            <!-- Contact form end -->
            <hr>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <!-- Opening hours start -->
                    <div class="opening-hours">
                        <div class="main-title-2">
                            <h1><span>opening</span> hours</h1>
                        </div>
                        <ul class="list-style-none">
                            <li><strong>Sunday</strong> <span class="text-red">Off Day</span></li>
                            <li><strong>Monday</strong> <span> 10:00 AM to 4:00 PM</span></li>
                            <li><strong>Tuesday </strong> <span> 10:00 AM to 4:00 PM</span></li>
                            <li><strong>Wednesday </strong> <span> 10:00 AM to 4:00 PM</span></li>
                            <li><strong>Thursday </strong> <span> 10:00 AM to 4:00 PM</span></li>
                            <li><strong>Friday </strong> <span> Off Day</span></li>
                            <li><strong>Saturday </strong> <span> 10:00 AM to 4:00 PM</span></li>
                        </ul>
                    </div>
                    <!-- Opening hours end  -->
                </div>
                <div class="col-md-8 col-sm-6">
                    <!-- Contact details start -->
                    <div class="contact-details">
                        <div class="main-title-2">
                            <h1><span>Our</span> address</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Office Address</h4>
                                        <p>Savar Bazar, Dhaka </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone Number</h4>
                                        <p>
                                            <a href="tel:0477-0477-8556-552">office: 020000000</a>
                                        </p>
                                        <p>
                                            <a href="tel:+55-417-634-7071">Mobile: +88017000000</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-fax"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Fax</h4>
                                        <p>
                                            <a href="tel:1-800-624-5462">1-800-624-5462</a>
                                        </p>
                                        <p>
                                            <a href="tel:+55-417-634-7071">Mobile: +888017222222</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media mrg-btm-0">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email Address</h4>
                                        <p>
                                            <a href="mailto:info@themevessel.com">realestate@gmail.com</a>
                                        </p>
                                        <p>
                                            <a href="http://themevessel.com/" target="_blank">http://realestate.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact details end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact body end -->

<?php 
include "inc/footer.php";

?>