
<?php
//$proparty_id = $_GET['id'];
//$query_result=$obj_app ->select_proparty_by_user($proparty_id);
//$product_info = mysqli_fetch_assoc($query_result);
?>
<!-- Sub Banner end -->

<!-- Properties details page start -->
</html>
<body>
<?php 
include "inc/headertop.php";
include "inc/header.php";
include "inc/slider.php";
include "inc/search.php";

?>
<div class="content-area  properties-details-page">
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<!-- Header -->
			<div class="heading-properties clearfix sidebar-widget">
				<div class="pull-left">
					<h3><?php echo $product_info['proparty_title']; ?></h3>
					
				</div>
				
				<div class="pull-right">
					<h3><span>price <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>status <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						
					</h5>
				</div><div class="pull-right">
					<h3><span>proparty type<?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>roome<?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>bathroome <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>Address<?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>city <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div>
				<div class="pull-right">
					<h3><span>state <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>postal code <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>detail <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>email <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div><div class="pull-right">
					<h3><span>phone <?php echo $product_info['proparty_price']; ?></span></h3>
					<h5>
						<?php echo $product_info['proparty_area']; ?> sq.ft/kata
					</h5>
				</div>
			</div>
			<!-- Properties details section start -->
			<div class="Properties-details-section sidebar-widget">
				<!-- Properties detail slider start -->
				<div class="properties-detail-slider simple-slider mrg-btm-40 ">
					<div id="carousel-custom" class="carousel slide" data-ride="carousel">
						<div class="carousel-outer">
							<!-- Wrapper for slides -->
							
								<div class="item">
									<img src="asset/<?php echo $product_info['proparty_image']; ?>" class="thumb-preview" alt="Chevrolet Impala" width="500" height="500">
								</div>
							
							<!-- Controls -->
							
							
						</div>
						<!-- Indicators -->
				
					</div>
				</div>
				<!-- Properties detail slider end -->

				<!-- Advanced search start -->
				<!-- Advanced search end -->

				<!-- Property description start -->
				<div class="panel-box properties-panel-box Property-description">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">video</a></li>
						<li><a href="#tab2default" data-toggle="tab" aria-expanded="true">description</a></li>
						<li><a href="#tab3default" data-toggle="tab" aria-expanded="true">google map</a></li>
						<li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Bite</a></li>
					</ul>

					<div class="panel with-nav-tabs panel-default">
						<div class="panel-body">
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab1default">
									<div class="main-title-2">
										<a href="<?php  echo $product_info['proparty_youtube']; ?>">Video</a></li>
									</div>
									
								</div>

								<div class="tab-pane fade" id="tab2default">
									<div class="main-title-2">
                                   <h1><span>Description</span></h1>								
                                   	</div>
									<p> <?php  echo $product_info['proparty_desc']; ?></p>
								</div>

								<div class="tab-pane fade" id="tab4default">
									<!-- Inside properties start  -->
									<div class="inside-properties">
										<!-- Main Title 2 -->
										<div class="main-title-2">
											<h1><span>Bite</span></h1>
										</div>
										 <h1>Taka:3000000/=</h1>
										<div class="form-group">
                                          <label for="usr">Name:</label>
                                            <input type="text" class="form-control" id="usr">
                                                      </div>
                                           <div class="form-group">
                                          <label for="pwd">Taka:</label>
                                           <input type="text" class="form-control" id="pwd">
                                               </div>
									</div>
									<!-- Inside properties end -->
								</div>

								<div class="tab-pane fade" id="tab3default">
									<div class="main-title-2">
                                   <h1><span>google map</span></h1>								
                                   	</div>
									<a href="<?php  echo $product_info['proparty_google']; ?>">google map</a></li>
								</div>
							
							</div>
						</div>
					</div>
				</div>
				

				<!-- Property description end -->
			</div>
			
			<!-- Properties details section end -->

			<!-- Location start -->
			<div class="location sidebar-widget">
				<div class="map">
					<!-- Main Title 2 -->
					<div class="main-title-2">
						<h1><span>name</span></h1>
						<p><?php  echo $product_info['proparty_owname']; ?></p>
						<h1><span>phone number</span></h1>
						<p><?php  echo $product_info['proparty_owphon']; ?></p>
						<h1><span>Email Address</span></h1>
						<p><?php  echo $product_info['proparty_owemail']; ?></p>
						<h1><span>instagram photo link</span></h1>
						<a href="<?php  echo $product_info['proparty_docimage']; ?>"> document</a>
						
					</div>
					<div id="map" class="contact-map"></div>
				</div>
			</div>
		
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<!-- Sidebar start -->
			<div class="sidebar right">
				
				<div class="social-media sidebar-widget clearfix">
					<!-- Main Title 2 -->
					<div class="main-title-2">
						<h1><span>Social</span> Media</h1>
					</div>
					<!-- Social list -->
					<ul class="social-list">
						<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<!-- Social media end -->

				<!-- Agent widget start -->
				<div class="sidebar-widget contact-form agent-widget">
					<div class="main-title-2">
						<h1><span>Message</span> to Dealer</h1>
					</div>
					<form id="agent_form"  method="GET" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group enter-email">
									<input type="email" name="email" class="input-text" placeholder="Your Email">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group number">
									<input type="text" name="phone" class="input-text"  placeholder="Your Phone">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group message">
									<textarea class="input-text" name="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<button type="submit" class="button-md button-theme btn-block">Send Message</button>
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
</body>
</html>
<!-- Properties details page end -->

<!-- Partners block end -->

