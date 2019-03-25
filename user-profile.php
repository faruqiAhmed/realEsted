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
	<title>Welcome<?php echo $get->getName(Session::get('email')); ?></title>
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
			<li class="active"><a href="user-profile.php"><em class="fa fa-gear">&nbsp;</em> User Profile</a></li>
			<li><a href="payment.php">Payment</a></li>
			<li><a href="user-posteadd.php"><em class="">&nbsp;</em>Posted Add</a></li>
			<li><a href="Follow.php"><em class="">&nbsp;</em>Following Add</a></li>
			
			<li><a href="bidhistory.php"><em class=""> &nbsp;</em>Bidding History</a></li>
			
			<li><a href="sm-out.php"><em class=""></em>logout</a></li>
			
			
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User Profile</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
		    <div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Profile</div>
					<div class="panel-body">
						<p>Make sure your details are updated so our users can easily contact you.</p>
						<br>
						<div id="addMsg">
						</div>
						
						<br>
						<form action="" id="updateInfo">
						    <div class="row">
						        <div class="col-md-6">
						            <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="<?php echo $get->getName(Session::get('email')); ?>" class="form-control" placeholder="Full Name" required>
                                    </div>
						        </div>
						        <div class="col-md-6">
						            <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?php echo Session::get('email'); ?>" class="form-control" placeholder="Placeholder" readonly>
                                    </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="tel" value="<?php echo $get->getPhone(Session::get('email')); ?>" name="phone" pattern="[\+]\d{13}" placeholder="Phone Number* (+8801*********)" title="Number Format: +8801*********" class="form-control" required>
                                    </div>
						        </div>
						        <div class="col-md-6">
						            <div class="form-group">
                                        <label>User Type</label>
                                        <select name="type" class="form-control" style="height: 45px;">
                                            <option value="seller">Seller</option>
                                            <option value="buyer">Buyer</option>
                                        </select>
                                    </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-12">
						            <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" rows="3" required><?php echo $get->getAddress(Session::get('email')); ?></textarea>
                                    </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <button type="submit" class="btn btn-success">Update</button>
						        </div>
						    </div>
						</form>
						
					</div>
				</div>
			</div>
		    <div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-heading">Change Password</div>
					<div class="panel-body">
						<p>Change Your Password</p>
						<br>
						<div id="addPass">
						</div>
						<br>
						<form action="" id="passwordUpdate">
						    <div class="row">
						        <div class="col-md-12">
						            <div class="form-group">
                                       <input type="hidden" name="passemail" value="<?php echo Session::get('email'); ?>">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Password" title="Minimum 6 Characters" required>
                                    </div>
						        </div>
						        <div class="col-md-12">
						            <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="newpassword" class="form-control" pattern=".{6,}" placeholder="New Password" title="Minimum 6 Characters" required>
                                    </div>
						        </div>
						        <div class="col-md-12">
						            <div class="form-group">
                                        <label>Re New Password</label>
                                        <input type="password" name="repassword" class="form-control" pattern=".{6,}" placeholder="Re New Password" title="Minimum 6 Characters" required>
                                    </div>
						        </div>
						    </div>
						    <div class="row">
						        <div class="col-md-6">
						            <button type="submit" class="btn btn-success">Update</button>
						        </div>
						    </div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
		
		
		
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
        $("#updateInfo").submit(function(e) {
            e.preventDefault();
            $.ajax({
            type: 'post',
            url: 'sm-update.php',
            data: $(this).serialize(),
            success: function(info) {
                $("#addMsg").append('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+info+'</div>');
            }
          });
        });
        
        $("#passwordUpdate").submit(function(e) {
            e.preventDefault();
            $.ajax({
            type: 'post',
            url: 'sm-update.php',
            data: $(this).serialize(),
            success: function(info) {
                $("#addPass").append('<div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+info+'</div>');
            }
          });
        });
	</script>
		
</body>
</html>