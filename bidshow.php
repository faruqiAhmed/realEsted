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
<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
		
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<!--
                <div class="list-inline">
                    <a href="tel:01777888866"><i class="fa fa-phone"></i>01777888866</a>
                    <a href="tel:info@test.com"><i class="fa fa-envelope"></i>info@test.com</a>
                </div>
				-->
            </div>
			
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="index2.php" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="sign-up2.php" class="sign-in"><i class="fa fa-user"></i> Register</a>
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
                    
                    <li><a href="index.php">Apartment</a></li>
                     
                      <li><a href="index.php">land/plot</a></li>
                       <li><a href="index.php">Shop</a></li>

                      
                </ul>
                
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="sign-up2.php" class="button">
                            Submit Property
                        </a>
                    </li>
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
                <form method="post" action="searchpage.php">
                    <div class="row">
					
                        
						
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                    <option>For Buy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>Dhaka</option>
                                    <option>savar</option>
									
                                    <option>Commilla</option>
                                    <option>Borisal</option>
                                    <option>chatagong</option>
                                    <option>Rongpur</option>
                                    <option>Syllet</option>
                                    <option>Ashulia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Types</option>
                                    <option>APERTMENTS/ FLAT</option>
                                    <option>House</option>
									
                                    <option>LANDS/PLOTE</option>
                                    <option>SHOP/ SHOWROOM</option>
                                </select>
                            </div>
                        </div>


                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                            <div class="form-group">
                             <button type="submit"class="search-button"value="search">Search</button>
                                <!input type="submit" class="serarch-button" value="Search"></button>
                            </div>
                            </div>  
                       </div>
                   
                        
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
            <h1><span>Apertments/ flat</h1>
        </div>
        <div class="row">

                <div class="carousel-inner">
						<?php
                             $id=$_GET['didid']
							$sql = "SELECT * FROM  biding where bid_id='$id'";
							$result = mysqli_query($con, $sql);
							if($result){
								while($val = $result->fetch_assoc()){ ?>
									
							
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details2.php" class="property-img">
                                    <!img src="<?php echo $val['photo_gallery']; ?>" alt="properties-3" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.html"><?php echo $val['Name'];?></a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i><?php echo $val['location_state'];?>, <?php echo $val['location_address'];?>, <?php echo $val['location_city'];?>
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
                                            <i class="flaticon-vehicle"></i>
                                            <span><?php echo $val['property_type'];?></span>
                                        </li>
										<li>
                                            
                                            <span>Taka: <?php echo $val['price']; ?> /=</span>
                                        </li>
										<li>
                                            
                                            <span> status: <?php echo $val['status']; ?></span>
                                        </li>
										<li>
                                            <a href="bid.php=<?php echo $val['properrty_id'];?>" class="link" >Details</a>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>
                    	<?php } } else {
							echo "No post to show!!!!!!!";
						} ?>
						
                   
                </div>
            
        </div>
    </div>
</div>
<!--prortry---->
<div class="mrg-btm-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Apertments/ flat</h1>
        </div>
        <div class="row">

                <div class="carousel-inner">
						<?php
                       // $id = $_GET['bidid'];
							$sql = "SELECT * FROM  biding where 1 ";
							$result = mysqli_query($con, $sql);
							if($result){
								while($val = $result->fetch_assoc()){ ?>
									
							
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details.html" class="property-img">
                                    <!img src="Admin/<!?php echo $val['product_image']; ?>" alt="properties-3" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.html"><?php echo $val['Name'];?></a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="">
                                            <i class="title">Email:</i><?php echo $val['email'];?>
                                        </a>
                                    </h3>
                                     <h3 class="property-address">
                                        <a href="">
                                            <i class="title"></i>Taka/=<?php echo $val['taka'];?>
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    
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
                          <d  <!img src="img/logos/footer-logo.png" alt="footer-logo">
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