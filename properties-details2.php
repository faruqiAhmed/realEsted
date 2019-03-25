<?php
include("connect.php");
require_once("session.user.php");
require_once("get.class.php");

$get = new GetUser();

    Session::start();
    //echo Session::display();
    
$proLinkId = "bookBtn";
   
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
        
        if($get->checkBidding($_GET['detailsid'], Session::get("email"))){
            $proLinkId = "disabled";
        }
    }
    
   $topBids = ($get->topBidding($_GET['detailsid']));
    
    
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


<link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">


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
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php echo $link; ?>
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
				 <h1>Realeastate</h1>
				
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
			<h1>Properties Detail</h1>
			<ul class="breadcrumbs">
				<li><a href="index.php">Home</a></li>
				<li class="active">Properties Detail</li>
			</ul>
		</div>
	</div>
</div>
</div>


<div class="content-area  properties-details-page">
<div class="container">
	
	<div class="row">

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<?php

				$id = $_GET['detailsid'];
				$sql = "SELECT * FROM  proparty where properrty_id = {$id}";
				$result = mysqli_query($con, $sql);
					if($result){
				  while($val = $result->fetch_assoc()){ ?>
									
							
			<div class="heading-properties clearfix sidebar-widget">
				<div class="pull-left">
					<h3><?php echo $val['property_type'];?></h3>
					<p>
						<i class="fa fa-map-marker"></i><?php echo $val['location_address']?>
					</p>
				</div>
				<div class="pull-right">
					<h3><span><?php echo $val['price'];?></span></h3>
					<h5>
						Per Month
					</h5>
				</div>
			</div>
			<div class="Properties-details-section sidebar-widget">
			<div class="properties-detail-slider simple-slider mrg-btm-40 ">
					<div id="carousel-custom" class="carousel slide" data-ride="carousel">
						<div class="carousel-outer">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item">
									<img src="<?php echo $val['photo_gallery'];?>" class="thumb-preview" alt="Chevrolet Impala">
								</div>
								<div class="item">
									<img src="img/properties/properties-2.jpg" class="thumb-preview" alt="Chevrolet Impala">
								</div>
								<div class="item">
									<img src="img/properties/properties-7.jpg" class="thumb-preview" alt="Chevrolet Impala">
								</div>
								<div class="item">
									<img src="img/properties/properties-8.jpg" class="thumb-preview" alt="Chevrolet Impala">
								</div>
								<div class="item">
									<img src="img/properties/properties-5.jpg" class="thumb-preview" alt="Chevrolet Impala">
								</div>
								<div class="item">
									<img src="img/properties/properties-6.jpg" class="thumb-preview" alt="Chevrolet Impala">
								</div>
								<div class="item active">
									<img src="<?php echo $val['photo_gallery'];?>" class="thumb-preview" alt="Chevrolet Impala">
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
						<!-- Indicators -->
						<ol class="carousel-indicators thumbs visible-lg visible-md">
							<li data-target="#carousel-custom" data-slide-to="0" class="">
							<img src="img/properties/properties-small-1.jpg" alt="Chevrolet Impala"></li>
							<li data-target="#carousel-custom" data-slide-to="1" class=""><img src="img/properties/properties-small-2.jpg" alt="Chevrolet Impala"></li>
							<li data-target="#carousel-custom" data-slide-to="2" class=""><img src="img/properties/properties-small-7.jpg" alt="Chevrolet Impala"></li>
							<li data-target="#carousel-custom" data-slide-to="3" class=""><img src="img/properties/properties-small-8.jpg" alt="Chevrolet Impala"></li>
							<li data-target="#carousel-custom" data-slide-to="4" class=""><img src="img/properties/properties-small-5.jpg" alt="Chevrolet Impala"></li>
							<li data-target="#carousel-custom" data-slide-to="5" class=""><img src="img/properties/properties-small-6.jpg" alt="Chevrolet Impala"></li>
							<li data-target="#carousel-custom" data-slide-to="6" class=""><img src="<?php echo $val['photo_gallery']?>" alt="Chevrolet Impala"></li>
						</ol>
					</div>
				</div>
				
				<div class="panel-box properties-panel-box Property-description">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">video</a></li>
						<li><a href="#tab2default" data-toggle="tab" aria-expanded="true">description</a></li>
						<li><a href="#tab3default" data-toggle="tab" aria-expanded="true">google map</a></li>
						
					</ul>

					<div class="panel with-nav-tabs panel-default">
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab1default">
									<div class="main-title-2">
											<iframe width="854" height="480" src="<?php  echo $val['youtube_link']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
									
								</div>

								<div class="tab-pane fade" id="tab2default">
									<div class="main-title-2">
                                   <h1><span>Description</span></h1>								
                                   	</div>
									<p> <?php  echo $val['details_information']; ?></p>
								</div>
                                 <div class="tab-pane fade" id="tab4default">
									<!-- Inside properties start  -->
									<div class="inside-properties">
										<!-- Main Title 2 -->
										
									</div>
									<!-- Inside properties end -->
								</div>
								
									<!-- Inside properties end -->
								

								<div class="tab-pane fade" id="tab3default">
									<div class="main-title-2">
                                     <div class="location sidebar-widget">
                                     <iframe  src="https://maps.google.com.bd/maps?ie=UTF8&amp;cid=23.886&amp;q=Dhaka;t=m&amp;iwloc=A&amp;output=embed" width="490" height="370" frameborder="2px solid navy" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                                   </div>

                                   <h1><span><?php/// echo $val['google_map'];?>google map</span></h1>								
                                   	</div>


									
								</div>
							
							</div>
						</div>
					</div>
				</div>
				
				<!-- Property description end -->
			</div>
			<!-- Properties details section end -->

			<!-- Location start -->
			
		<?php } } else {
							echo "No post to show!!!!!!!";
						} ?>
						
		</div>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<!-- Sidebar start -->
			<div class="sidebar right">
				
				
				<!-- Social media end -->

				<!-- Agent widget start -->
				<div class="sidebar-widget contact-form agent-widget">
					<div class="main-title-2">
						<h1><span>Bidding</span> product <span class="float-right">
							
                            <?php
                            if(isset($_POST['submit'])){

                                  $q = "UPDATE proparty SET follow_status='1' WHERE properrty_id = $id";
                                  $query_result = mysqli_query($con, $q);
                                   }
                                    $select = "SELECT * FROM proparty where properrty_id = $id";
                                  $row = mysqli_query($con, $select);
                                  if($row){
                                    $follow = $row->fetch_assoc();
                                    $f = $follow['follow_status'];
                                    
                                  }
                            ?>
                            <form action="" method="post">
                            &nbsp;&nbsp; 
                            <?php if(isset($f)){ ?>
                             <input type="submit" name="submit" value="Following" class="button-md button-theme">
                           <?php }else{ ?>
                            <input type="submit" name="submit" value="Follow" class="button-md button-theme">
                            <?php } ?>
                            </form></span></h1>
                            <?php ?>
                       
                        <div class="col-lg-12">
                       <h1><span class=""><button class="button-md button-theme"> 1 day, left 7 days, open</button></span></h1>
                   </div>
					</div>
					<br>
						<div class="row">

							<div>
                                 	<table class="table table-responsive">
                                 				<th>Top 5 bids</th>
                                 				
                                 				<?php
                                                    if($topBids){
                                                        foreach($topBids as $bid){
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $bid['taka']; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                 		
                                 				
                                 	</table>
                                 	</div>
							<div class="col-lg-12">
								<a id="<?php echo $proLinkId; ?>"  href="#" class="button-md button-theme btn-block <?php echo $class; ?>">Bid Now</a>
							</div>
						</div>
					</form>
				</div>
				<!-- Agent widget end -->
			</div>
			<!-- Sidebar end -->
		</div>
	</div>
</div>
</div>
<!-- Properties details page end -->

<!-- Partners block end -->

<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer top -->
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                    <div class="logo-2">
                        <a href="">
                             <h1>Realeastate</h1>
                        </a>
                    </div>
                </div>
                <!---
                <div class="col-lg-4  col-md-4 col-sm-5 col-xs-12">
                    <form action="properties-details.html" method="GET">
                        <input type="text" class="form-contact" name="email" placeholder="Enter your email">
                        <button type="submit" name="submitNewsletter" class="btn btn-default button-small">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>--->
                <!-----
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <ul class="social-list clearfix">
                        <li><a href="properties-details.html"><i class="fa fa-rss"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="properties-details.html"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>--->
            </div>
        </div>
        <!-- Footer info-->
         
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        &copy;  2017.Trademarks and brands are the property of their respective owners.
    </div>
</div>
<!-- Copy end right-->

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
                    <option>User type</option>
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
        <div id="sm-model-active" class="sm-model-active">
            <div class="sm-title">Check your email. Please active your account.</div>
            <!--<p id="sm-active-info">If you did'nt receive. <a href="#">Resend Code</a></p>-->
            <div class="sm-line">
                <span>OR</span>
            </div>
            <div class="sm-model-footer">
                <div class="txt">Are you already a member? <span class="sm-link" id="sm-login3">Sign in</span></div>
            </div>
        </div>
        
        <div id="sm-model-terms" class="sm-model-terms">
            <div class="sm-title">Bid Now</div>
           <!--<p id="sm-active-info">If you did'nt receive. <a href="#">Resend Code</a></p>-->

           <form action="" id="sm-terms-submit">
           	
                <div class="form-group">
                 <label for="usr">Taka:</label>
                  <input type="number" name="taka" class="" id="usr" min="0" required>
                  </div>
                  <input type="hidden" name="proId" value="<?php echo $_GET['detailsid']; ?>">
                  <input type="hidden" name="email" value="<?php echo Session::get('email'); ?>">
               <input type="checkbox" name="check" required> <a href="#">Terms &amp; Conditions</a>
               <br>
               <br>
                <button id="sm-terms-submit-button" type="submit">Apply</button>
            </form>
        </div>
    </div>
</div>

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
<script type="text/javascript" src="js/maps.js"></script>
<script type="text/javascript" src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>
function LoadMap(propertes) {
	var defaultLat = 40.7110411;
	var defaultLng = -74.0110326;
	var mapOptions = {
		center: new google.maps.LatLng(defaultLat, defaultLng),
		zoom: 15,
		scrollwheel: false,
		styles: [
			{
				featureType: "administrative",
				elementType: "labels",
				stylers: [
					{visibility: "off"}
				]
			},
			{
				featureType: "water",
				elementType: "labels",
				stylers: [
					{visibility: "off"}
				]
			},
			{
				featureType: 'poi.business',
				stylers: [{visibility: 'off'}]
			},
			{
				featureType: 'transit',
				elementType: 'labels.icon',
				stylers: [{visibility: 'off'}]
			},
		]
	};
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	var infoWindow = new google.maps.InfoWindow();
	var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map
	});
	(function (marker) {
		google.maps.event.addListener(marker, "click", function (e) {
			infoWindow.setContent("" +
					"<div class='map-properties contact-map-content'>" +
					"<div class='map-content'>" +
					"<p class='address'>123 Kathal St. Tampa City, </p>" +
					"<ul class='map-properties-list'> " +
					"<li><i class='fa fa-phone'></i>  +0477 8556 552</li> " +
					"<li><i class='fa fa-envelope'></i>  info@themevessel.com</li> " +
					"<li><a href='index.html'><i class='fa fa-globe'></i>#</li></a> " +
					"</ul>" +
					"</div>" +
					"</div>");
			infoWindow.open(map, marker);
		});
	})(marker);
}
LoadMap();
</script>


<script>
    
    $("#disabled").css('pointer-events', 'none')
    $("#disabled").text("Bidded")
    
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
                    window.location.replace("index.php");
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
    
    $("#sm-terms-submit").submit(function(e) {
        e.preventDefault();
        $("#sm-terms-submit-button").prop('disabled', true);
        $("#sm-terms-submit-button").append(' <div class="rotating"><span class="glyphicon glyphicon-refresh"></span></div>');
        
        
        
        $.ajax({
            type: 'post',
            url: 'bidding-post.php',
            data: $(this).serialize(),
            success: function(info) {
                
                $("#bookBtn").css('pointer-events', 'none');
                $("#bookBtn").text(info);
                $("#sm-terms-submit-button .rotating").remove();
                $("#sm-terms-submit-button").prop('disabled', false);
                $("#sm-model").css("display", "none");
                $('body').css('overflow','auto');

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
        $("#sm-model-terms").css("display", "none");
    });
    
    $(".sm-terms").click(function(e) {
        e.preventDefault();
        $("#sm-model").css("display", "block");
        $('body').css('overflow','hidden');
        $("#sm-model-login").css("display", "none");
        $("#sm-model-terms").css("display", "block");
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