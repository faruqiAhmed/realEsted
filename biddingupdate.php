<?php //session_start(); ?>
<?php 
//if(!isset($_SESSION["user"])){ 
   // header('Location: user-profile.php');
   // exit();
//}  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome <?php //echo $get->getName(Session::get('email')); ?></title>
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
				<div class="profile-usertitle-name"><?php ///echo $get->getName(Session::get('email')); ?></div>
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
			<li><a href=".php"><em class="">&nbsp;</em>Following Add</a></li>
			<li><a href=".php"><em class="">&nbsp;</em>Puchasch History</a></li>
			<li><a href=".php"><em class="">&nbsp;</em>Bidding History</a></li>
			
			
			
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
				<div class="panel panel-default">
					<div class="panel-heading">Submit Payment Account</div>
					<div class="panel-body">
						<div class="text-center"><img src="images/payment.png" alt="" style="width: 120px; height: auto;"></div>
						
						<br>
             
	                     <div class="main_body">

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>

            <!-- End of Header Section -->

            <!-- Print admin table information-->

            <div style="margin:auto; width:70%; min-height: 300px;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u></u></div>
                <table style="width:100%; text-align: center;">
                    <tr> <th style="width:800px;">User Name</th>
                        <th style="width:500px;">Edit</th>
                        
                    </tr> 
			<?php
			
			include 'admin/connection1.php';
					try 
					{
						
						$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password); 
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM bidding");
						while ($row = $stmt->fetch())
						{ 
					$id=$row["id"];
			?>

			 <div class="col-md-6">
						            <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="<?php echo $row["taka"]?>" class="form-control" placeholder="Full Name" required>
                                    </div>
						        </div>	
					<tr>
                        
                        <td style="width:800px;"><?php echo $row["taka"]; ?></td>
                        
                           <td style="width:500px;">
                            <a href="adminEdit.php?id=<?php echo $id; ?>" >Edit</a>
                        </td>
                        </td>
						<?php if ($row["id"] != 1) { ?>
                                        
                        
									<?php }
										
									else {?>
						<td style="width:500px;">
                        </td>
									<?php } ?>
                    </tr>
		<?php 	} 
		}
			catch(PDOException $e)
				{
				echo "Error: " . $e->getMessage();
				}
			$conn = null;?>
                </table>
            </div>
						
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
        
        $("#payMentInfo").submit(function(e) {
          //  e.preventDefault();
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