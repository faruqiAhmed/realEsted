

<html lang="en">


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
    <!link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
   
</head>

<body>

<div class="page_loader"></div>

<!-- Option Panel -->
<!---
<div class="option-panel option-panel-collased">
    <h2>Change Color</h2>
    <div class="color-plate default-plate" data-color="default"></div>
    <div class="color-plate blue-plate" data-color="blue"></div>
    <div class="color-plate yellow-plate" data-color="yellow"></div>
    <div class="color-plate red-plate" data-color="red"></div>
    <div class="color-plate green-light-plate" data-color="green-light"></div>
    <div class="color-plate orange-plate" data-color="orange"></div>
    <div class="color-plate yellow-light-plate" data-color="yellow-light"></div>
    <div class="color-plate green-light-2-plate" data-color="green-light-2"></div>
    <div class="color-plate olive-plate" data-color="olive"></div>
    <div class="color-plate purple-plate" data-color="purple"></div>
    <div class="color-plate blue-light-plate" data-color="blue-light"></div>
    <div class="color-plate brown-plate" data-color="brown"></div>
    <div class="setting-button">
        <i class="fa fa-gear"></i>
    </div>
</div>
<!-- /Option Panel -->

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
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
              <ul class="dropdown-menu">
                
                
              </ul>
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
                <a href="index.html" class="logo">
                           <div class="main-title-2">
                            <h1><span>realestate</span></h1>
						
                        </div>
                </a>
            </div>
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact-2.php">Contact</a></li>
                   

                      
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="logout.php?logout=true" class="button">
                            Sign Out
                        </a>
                    </li>
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
                <h1>Submit Property</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Submit Property</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="content-area submit-property">
    <div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="submit-address">
                    <form method="post" enctype="multipart/form-data" action="information.php">
                        <div class="main-title-2">
                            <h1><span>sale</span> Information</h1>
						
                        </div>

                        <div class="search-contents-sidebar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="selectpicker search-fields" name="stu">
                                            <option>status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                             <option>For buy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="selectpicker search-fields" name="apartment">
                                            <option>property type</option>
                                            <option>Apartment</option>
                                            <option>Building</option>
                                            <option>Showroom/shop</option>
                                            <option>office</option>
                                            <option>Plot</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="input-text" name="pri" placeholder="BDT">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Area/Location</label>
                                        <input type="text" class="input-text" name="area" placeholder="SqFt">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Rooms</label>
                                        <select class="selectpicker search-fields" name="room">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Bathroom</label>
                                        <select class="selectpicker search-fields" name="Bathro">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Kitchen</label>
                                        <select class="selectpicker search-fields" name="Bathro">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Property</span> Gallery</h1>
                            <input type="file" name="photo_gallery" id="">
                        </div>
<!--                         <div id="myDropZone" class="dropzone dropzone-design">
                            
						<div class="dz-default dz-message"><span>Drop files here to upload</span></div>
						<input type="file" value="Upload Image" name="photo_gallery">
                        </div> -->

                        <div class="main-title-2">
                            <h1><span>Location</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="input-text" name="address"  placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="selectpicker search-fields" name="choose" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Dhaka</option>
                                        <option>Chittagong</option>
                                        <option>Khulna</option>
                                        <option>Rajshahi </option>
                                        <option>Rangpur </option>
                                        <option>Sylhet </option>
                                       <option>Barisal </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input class="input-text" name="choos" data-live-search="true" data-live-search-placeholder="Search value">
                                        
                                       
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="input-text" name="zip"  placeholder="Postal Code">
                                </div>
                            </div>
                        </div>

                        <div class="main-title-2">
                            <h1><span>Detailed</span> Information</h1>
                            
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label>Youtubelink</label>
                                    <input type="text" class="input-text" name="youtube"  placeholder="Youtubelink">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Googlemap</label>
                                    <input type="text" class="input-text" name="google"  placeholder="Googlemap">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detailed Information</label>
                                    <textarea class="input-text" name="messs" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="main-title-2">
                            <h1><span>Contact</span> Details</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="input-text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="input-text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone (optional)</label>
                                    <input type="text" class="input-text" name="ph"  placeholder="Phone">
                                </div>
                            </div>
                            
                           
                        
                        <div class="col-md-4">
                            <div class="form-group">
                        <div style="display: inline-table; width: 50%;">
                            <input type="date" name="fromDate" placeholder="yyyy-mm-dd" class="input_box" style="width: 98%;" required="" />
                        </div>
                      </div>
                     </div>
                            <div class="col-md-12">
                                 <input type="submit" name="submit" value="submit"color="red">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->

<!-- Partners block start -->

<!-- Partners block end -->

<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer top -->
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                    <div class="logo-2">
                        <a href="index.html">
                            <!img src="img/logos/footer-logo.png" alt="footer-logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-5 col-xs-12">
                    <form action="properties-details.html" method="GET">
                        <input type="text" class="form-contact" name="email" placeholder="Enter your email">
                        <button type="submit" name="submitNewsletter" class="btn btn-default button-small">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
				<!--
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
        </div>--->
        <!-- Footer info-->
         
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        &copy;  2018.realestate lmit.
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