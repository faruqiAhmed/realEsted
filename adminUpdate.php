<?php session_start(); ?>
<?php 
if(!isset($_SESSION["user"])){ 
    ///header('Location: user-profile.php');
    exit();
}  
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
            <li class="active"><a href="user-profile.php"><em class="fa fa-gear">&nbsp;</em> User Profile</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="user-posteadd.php"><em class="">&nbsp;</em>Posted Add</a></li>
            <li><a href="Follow.php"><em class="">&nbsp;</em>Following Add</a></li>
            <li><a href=".php"><em class="">&nbsp;</em>Puchasch History</a></li>
            <li><a href=".php"><em class="">&nbsp;</em>Bidding History</a></li>
            <li><a href="adminUpdate.php"><em class="">&nbsp;</em>Bidding update</a></li>
            
            
            
        </ul>
    </div><!--/.sidebar-->
		<!-- Main div start here-->
        <div class="main_body">

            <div style="margin-top: 100px;">
                <!--Extra Margin add for menu bar-->

            </div>

            <!-- End of Header Section -->

            <!-- Print admin table information-->

            <div style="margin:auto; width:70%; min-height: 300px;">
                <div style="font-size:30px; text-align: center;font-weight: bold; margin-bottom: 10px;">
                    <u>Edit Administrator Information</u></div>
                <table style="width:100%; text-align: center;">
                    <tr><th style="width:500px;">ID</th>
                        <th style="width:800px;">User Name</th>
                        <th style="width:1500px;">Full Name</th>
                        <th style="width:500px;">Branch</th>
                        <th style="width:500px;">Edit</th>
                        <th style="width:500px;">Delete</th>
                    </tr> 
			<?php
			
			include 'connection1.php';
					try 
					{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						$stmt = $conn->query("SELECT * FROM admin");
						while ($row = $stmt->fetch())
						{ 
					$id=$row["id"];
			?>	
					<tr>
                        <td style="width:500px;"><?php echo $row["id"]; ?></td>
                        <td style="width:800px;"><?php echo $row["adminUserName"]; ?></td>
                        <td style="width:1500px;"><?php echo $row["adminFullName"]; ?></td>
                        <td style="width:500px;"><?php echo $row["adminBranch"]; ?></td>
                        <td style="width:500px;">
                            <a href="adminEdit.php?id=<?php echo $id; ?>" >Edit</a>
                        </td>
						<?php if ($row["id"] != 1) { ?>
                                        
                        <td style="width:500px;">
                            <a href="adminDelete.php?id=<?php echo $id; ?>" >
                                <button type="button" style="background:red;color: white; padding:5px 20px 5px 20px;">Delete</button>
                            </a>
                        </td>
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

            <!-- End of admin table information-->
            <!-- Footer Start Here -------------------------------------------------------------------- --> 
            <hr>
            <div class="footer">
                <div class="icon">
                    <a href="#">N@zrul</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Courses</a>
                </div>
                <div class="icon">
                    <a href="#">Policy</a>
                </div>
                <div class="icon">
                    <a href="#">Suggest</a>
                </div>
                <div class="icon">
                    <a href="#">Branches</a>
                </div>
                <div class="icon">
                    <a href="#">Career</a>
                </div>
                <div class="icon">
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    </body>
</html>
