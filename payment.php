<?php
require_once("session.user.php");
require_once("get.class.php");

Session::start();
Session::check();

$get = new GetUser();

echo $get->getName(Session::get('email'));

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome <?php echo $get->getName(Session::get('email')); ?></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Realstate</span>user</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<!--<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>-->
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $get->getName(Session::get('email')); ?></div>
				<!--<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>-->
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="index.php"><em class="">&nbsp;</em>home</a></li>
			<li><a href="user-profile.php">User Profile</a></li>
			<li class="active"><a href="payment.php"><em class="fa fa-gear">&nbsp;</em> Payment</a></li>
			<li><a href="user-posteadd.php"><em class="">&nbsp;</em>Posted Add</a></li>
			<li><a href="Follow.php"><em class="">&nbsp;</em>Following Add</a></li>
			
			<li><a href="bidhistory.php"><em class="">&nbsp;</em>Bidding History</a></li>
			
			
			
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Payment Account</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
		    <div class="col-md-7">
				
		<div class="text-center"><img src="images/payment.png" alt="" style="width: 120px; height: auto;"></div>
	</div>

</div>
		<div class="row">
		    <div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-heading">Submit Payment Account</div>
					

					<div class="panel-body">
						
					</br>
						<div class="text-center">Bikash No: 01762610647</div>
						<div id="payMsg"></div>
						<br>
						<div id="addMsg">
						</div>
						
						<br>
						<form action="" id="payMentInfo">
						    <div class="row">
						        <div class="col-md-6">
						            <div class="form-group">
                                        <label>TrxID</label>
                                        <input type="text" name="payName" value="<?php echo $get->getPayName(Session::get('email')); ?>" class="form-control" placeholder="TrxID" required>
                                        <input type="hidden" name="payEmail" value="<?php echo Session::get('email'); ?>">
                                    </div>
						        </div>
						        <div class="col-md-6">
						            <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" value="<?php echo $get->getPayNumber(Session::get('email')); ?>" name="paymentNumber" pattern="[\+]\d{13}" placeholder="Phone Number* (+8801*********)" title="Number Format: +8801*********" class="form-control" required>
                                    </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <button type="submit" class="btn btn-success">Submit</button>
						        </div>
						    </div>
						</form>
						
					</div>
				</div>
			</div>
		<div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-heading">Payment Procedur</div>
					<div class="panel-body">
					
						<div class="text-center"><img src="img/bkash_payment.jpg" alt="" style="width:400px; height: auto;"></div>
						
						
					</div>
				</div>
			</div>

		</div>
		
		
		
		<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
        
        $("#payMentInfo").submit(function(e) {
            e.preventDefault();
            $.ajax({
            type: 'post',
            url: 'sm-update.php',
            data: $(this).serialize(),
            success: function(info) {
                $("#payMsg").append('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+info+'</div>');
            }
          });
        });
	</script>
		
</body>
</html>