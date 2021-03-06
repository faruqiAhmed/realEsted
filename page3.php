<?php
    include("connect.php");
?>
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
<div class="page_loaderw"></div>

<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
        
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            
                <div class="list-inline">
                    
                
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



<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner/banner-slider-1.jpg" alt="banner-slider-1">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="text-center">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Find your </span> Dream House</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/banner-slider-2.jpg" alt="banner-slider-2">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="text-right">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Sweet Home For</span> <br>Small Family</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/banner-slider-3.jpg" alt="banner-slider-3">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="text-left">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Best Place To</span><br> Find Home</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search area start -->
<div class="search-area">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form method="post" action="searchpage2.php">
                    <div class="row">
                    
                        
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="from-control" name="status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Purpose</option>
                                    <option>For Sale</option>
                                    <option>For Reant</option>
                                    <option>For Buy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="from-control" name="property" data-live-search="true" data-live-search-placeholder="Search value">
                                   <option>Types</option>
                                    <option>Apertments</option>
                                    <option>House</option>
                                    <option>Lands/Plote</option>
                                    <option> Shop/Showroom </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="from-control" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                  <option>select divission</option>
                                
                                     <?php
                            $sql = "SELECT DISTINCT  location_city FROM  reant";
                            $result = mysqli_query($con, $sql);


                            while($row = $result->fetch_assoc())
                            {

                                echo '<option> ';
                                echo $row['location_city'];
                                echo '</option> ';
                            }?>
                                    
                                </select>
                            </div>
                        </div>
                       
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <!input type="text" class="selectpicker search-fields"" placeholder="Area" name="area">
                                 <select class="from-control" name="area" data-live-search="true" data-live-search-placeholder="Search value">
                                   <option>select area</option>
                                 <?php
                            $sql = "SELECT DISTINCT  location_address FROM  reant";
                            $result = mysqli_query($con, $sql);
                            
                                # code...
                            while($row = $result->fetch_assoc())                           
                                {
                                     echo'<option>';
                                     echo $row['location_address'];
                                    echo '</option>'; 
                                 }?>
                                </select> 
                            </div>
                        </div>
                    </div>
                       <!---style--->
                       
                <div class="form-group">
                          <p align="center">
                 <button type="submit"  class="btn success" value="search">search</button>
                    </p>

<style>

.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align:center;
}

/* Green */
.success {
  border-color: #4CAF50;
  color: green;

}

.success:hover {
  background-color: #4CAF50;
  color: white;
}
}
.wrapper {
    text-align: center;
}   
                       
                   </style>
                        
                         <div class="row">
                        
                      

                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>

<div class="mrg-btm-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
        </br>
            <h1><span>Rent property</h1>
        </div>
        <div class="row">

                <div class="carousel-inner">
                        <?php
                            $sql = "SELECT * FROM  reant where action='1'";
                            $result = mysqli_query($con, $sql);
                            if($result){
                                while($val = $result->fetch_assoc()){ ?>
                                
                                <?php
                                    if ($val['property_type'] != 'Apartment') { ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property" style="height: 400px">
                                
                               
                                
                                <!-- Property img -->
                                <a href="" class="property-img">
                                    <img src="<?php echo $val['photo_gallery']; ?>" alt="properties-3" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                     <h1 class="title">
                                        <a href=""><?php echo $val['status'];?></a>
                                    </h1>
                                    <h1 class="title">
                                        <a href=""><?php echo $val['property_type'];?></a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="">
                                            <i class="fa fa-map-marker"></i> <?php echo $val['location_address'];?>, <?php echo $val['location_city'];?>
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span><?php echo $val['area']; ?> sq ft</span>
                                        </li>
                                        
                                        <li>
                                            
                                            <span>Taka: <?php echo $val['price']; ?> /=</span>
                                        </li>
                                        
                                        <li>
                                            <a href="reantdetails.php?detailsid=<?php echo $val['properrty_id'];?>" class="link" >Details</a>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>

                                  <?php  } else { ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property" style="height:400px">
                                
                               
                                
                                <!-- Property img -->
                                <a href="" class="property-img">
                                    <img src="<?php echo $val['photo_gallery']; ?>" alt="properties-3" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                     <h1 class="title">
                                        <a href=""><?php echo $val['status'];?></a>
                                    </h1>
                                    <h1 class="title">
                                        <a href=""><?php echo $val['property_type'];?></a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="">
                                            <i class="fa fa-map-marker"></i> <?php echo $val['location_address'];?>, <?php echo $val['location_city'];?>
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span><?php echo $val['area']; ?> sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span><?php echo $val['room']; ?> Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span> <?php echo $val['bathroom']; ?> Baths</span>
                                        </li>
                                        
                                        <li>
                                            
                                            <span>Taka: <?php echo $val['price']; ?> /=</span>
                                        </li>
                                        
                                        <li>
                                            <a href="reantdetails.php?detailsid=<?php echo $val['properrty_id'];?>" class="link" >Details</a>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>

                            <?php      }
                                ?>  
                            
                        <?php } } else {
                            echo "No post to show!!!!!!!";
                        } ?>
                        
                   
                </div>
             <style>
            .pagination a {
    color: black;
    float: center;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
    background-color: dodgerblue;
    color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
            </style>
        </div>
         <div style="text-center" class="pagination">
  <a href="#">&laquo;</a>
  <a href="Reant.php">1</a>
  <a class="active" href="page2.php">2</a>
  <a href="page3.php">3</a>
   <a href="#">&raquo;</a>
  
</div>
    </div>
</div>
<!--prortry---->
<div class="mrg-btm-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>offical property</h1>
        </div>
        <div class="row">

                <div class="carousel-inner">
                        <?php
                            $sql = "SELECT * FROM  tbl_product where 1";
                            $result = mysqli_query($con, $sql);
                            if($result){
                                while($val = $result->fetch_assoc()){ ?>
                                    
                            
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details.html" class="property-img">
                                    <img src="Admin/<?php echo $val['product_image']; ?>" alt="properties-3" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.html"><?php echo $val['product_tilte'];?></a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i><?php echo $val['location_address'];?>
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span><?php echo $val['product_area']; ?> sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span><?php echo $val['product_price']; ?>BDT</span>
                                        </li>
                                        
                                        <li>
                                            <a href="properties-details.html?detailsid=<!?php echo $val['properrty_id'];?>" class="link" >Details</a>
                                        </li>
                                    </ul>
                                    
                                    
                                </div>
                            </div>
                           
                        </div>
                        <?php } } else {
                            echo "No post to show!!!!!!!";
                        } ?>
                        
                   
                </div>
            
        </div>
    </div>
</div>





<!-- Recently properties start -->

<!-- Partners block end 

<div class="clearfix"></div>
<!-- Categories strat -->


<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer top -->
        <div class="footer-top">
            <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                    <div class="logo-2">
                        <!a href="index.html">
                        <h1>Realeastate</h1>
                         
                    </div>
                </div>
               
               
                <!---
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <ul class="social-list clearfix">
                        <li><a href="properties-details.html"><i class="fa fa-rss"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>---->
            </div>
        </div>
        <!-- Footer info-->
         
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        &copy;  2018.Rubina Azad Liza/Esrat jahan.
    </div>
</div>
<!-- Copy end right-->

<!--model-->

<div id="sm-model" class="sm-model">
    <div class="sm-model-close"><span id="sm-close" class="sm-close">X</span></div>
    <div class="sm-model-content">
        <div id="sm-model-login" class="sm-model-login">
           <div class="sm-title">Login</div>
           <p id="sm-login-info"></p>
            <form action="" id="sm-login-submit">
               <input type="hidden" name="login">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="txt"><span class="sm-link" id="sm-forgot">Forgot Your Password?</span></div>
                
                <button id="sm-login-submit-button" type="submit">Login</button>
            </form>
            <div class="sm-line">
                <span>OR</span>
            </div>
            <div class="sm-model-footer">
                <div class="txt">Not a member yet? <span class="sm-link" id="sm-reg">Register for Free</span></div>
            </div>
        </div>
        <div id="sm-model-signup" class="sm-model-signup">
            <div class="sm-title">Register for Free</div>
            <p id="sm-signup-info"></p>
            <form action="" id="sm-signup-submit">
               <input type="hidden" name="signup" id="signup-signup">
                <input type="text" name="name" placeholder="Full Name*" id="signup-name" required>
                <input type="email" name="email" placeholder="Email Address*" id="signup-email" required>
                <input type="tel" name="phone" pattern="[\+]\d{13}" placeholder="Phone Number* (+8801*********)" title="Number Format: +8801*********" id="signup-phone" required>
                <input type="password" name="password" pattern=".{6,}" placeholder="Password (min 6 char)*" title="Minimum 6 Characters" id="signup-password" required>
                <input type="password" name="repassword" pattern=".{6,}" placeholder="Confirm Password*" title="Minimum 6 Characters"  id="signup-repassword" required>
                <select name="type" id="signup-type">
                    <option value="seller">Seller</option>
                    <option value="buyer">Buyer</option>
                </select>
                <button id="sm-signup-submit-button" type="submit">Sign Up</button>
            </form>
            <div class="sm-line">
                <span>OR</span>
            </div>
            <div class="sm-model-footer">
                <div class="txt">Are you already a member? <span class="sm-link" id="sm-login">Sign in</span></div>
            </div>
        </div>
        <div id="sm-model-forgot" class="sm-model-forgot">
            <div class="sm-title">Forgot Password</div>
            <p id="sm-forgot-info"></p>
            <form action="" id="sm-forgot-submit">
               <input type="hidden" name="forgot">
                <input type="email" name="email" placeholder="Email Address*" required>
                <button id="sm-forgot-submit-button" type="submit"> Reset Password</button>
            </form>
            <div class="sm-line">
                <span>OR</span>
            </div>
            <div class="sm-model-footer">
                <div class="txt">Are you already a member? <span class="sm-link" id="sm-login2">Sign in</span></div>
            </div>
        </div>
        <div id="sm-model-active" class="sm-model-forgot">
            <div class="sm-title">Check your email. Please active your account.</div>
            <!--<p id="sm-active-info">If you did'nt receive. <a href="#">Resend Code</a></p>-->
            <div class="sm-line">
                <span>OR</span>
            </div>
            <div class="sm-model-footer">
                <div class="txt">Are you already a member? <span class="sm-link" id="sm-login3">Sign in</span></div>
            </div>
        </div>
    </div>
</div>

<!--model end-->

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

<script>
    
    $("#sm-login-submit").submit(function(e) {
        e.preventDefault();
        $("#sm-login-submit-button").prop('disabled', true);
        $("#sm-login-submit-button").append(' <div class="rotating"><span class="glyphicon glyphicon-refresh"></span></div>');
        $.ajax({
            type: 'post',
            url: 'sm-post.php',
            data: $(this).serialize(),
            success: function(info) {
                if(info == 1){
                    window.location.replace("user-profile.php");
                }else{
                  $("#sm-login-info").text(info);
                  $("#sm-login-submit-button").prop('disabled', false);
                  $("#sm-login-submit-button .rotating").remove();
                }
            }
          });
        
    });
    
    
    $("#sm-signup-submit").submit(function(e) {
        e.preventDefault();
        $("#sm-signup-submit-button").prop('disabled', true);
        $("#sm-signup-submit-button").append(' <div class="rotating"><span class="glyphicon glyphicon-refresh"></span></div>');
        
        $.ajax({
            type: 'post',
            url: 'sm-post.php',
            data: $(this).serialize(),
            success: function(info) {
                $("#sm-signup-submit-button").prop('disabled', false);
                $("#sm-signup-submit-button .rotating").remove();
                
                if(info == "INSERTED"){
                    $("#sm-signup-info").text("Signup completed! Please verify your email.");
                    $("#sm-model-signup").css("display", "none");
                    $("#sm-model-active").css("display", "block");
                }else{
                    $("#sm-signup-info").text(info);
                }
            }
          });
    });
    
    
    $("#sm-forgot-submit").submit(function(e) {
        e.preventDefault();
        $("#sm-forgot-submit-button").prop('disabled', true);
        $("#sm-forgot-submit-button").append(' <div class="rotating"><span class="glyphicon glyphicon-refresh"></span></div>');
        
        $.ajax({
            type: 'post',
            url: 'sm-post.php',
            data: $(this).serialize(),
            success: function(info) {
                $("#sm-forgot-info").text(info);
                $("#sm-forgot-submit-button").prop('disabled', false);
                $("#sm-forgot-submit-button .rotating").remove();
                if(info == "Password reset code Was Send in Your Mail!"){
                    $("#sm-forgot-submit-button").prop('disabled', true);
                }
            }
          });
    });
    
    $(".sm-sign").click(function(e) {
        e.preventDefault();
        $("#sm-model").css("display", "block");
        $('body').css('overflow','hidden');
        $("#sm-model-login").css("display", "block");
        $("#sm-model-signup").css("display", "none");
        $("#sm-model-forgot").css("display", "none");
        $("#sm-model-active").css("display", "none");
    });
    
    $("#sm-reg").click(function() {
        $("#sm-model-login").css("display", "none");
        $("#sm-model-signup").css("display", "block");
    });
    
    $("#sm-login").click(function() {
        $("#sm-model-signup").css("display", "none");
        $("#sm-model-login").css("display", "block");
    });
    
    $("#sm-login2").click(function() {
        $("#sm-model-forgot").css("display", "none");
        $("#sm-model-login").css("display", "block");
    });
    
    $("#sm-login3").click(function() {
        $("#sm-model-active").css("display", "none");
        $("#sm-model-login").css("display", "block");
    });
    
    $("#sm-forgot").click(function() {
        $("#sm-model-login").css("display", "none");
        $("#sm-model-forgot").css("display", "block");
    });
    
    $("#sm-close").click(function() {
        $("#sm-model").css("display", "none");
        $('body').css('overflow','auto');
    });
</script>


</body>
</html>