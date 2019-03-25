<?php
include("connect.php");
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
    <!link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
    <!--Custom Font-->

    <!link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <!link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
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
            <li class=""><a href="user-profile.php"><em class="fa fa-gear">&nbsp;</em> User Profile</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="user-posteadd.php"><em class="">&nbsp;</em>Posted Add</a></li>
            <li class="active"><a href="Follow.php"><em class="">&nbsp;</em>Following Add</a></li>
            <li><a href=".php"><em class="">&nbsp;</em>Puchasch History</a></li>
            
            <li><a href="bidhistory.php"><em class=""> &nbsp;</em>Bidding History</a></li>
            <li><a href="biddingupdate.php"><em class="">&nbsp;</em>Bidding update</a></li>
            
            
            
        </ul>
    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        
        <div class="row">
            <div class="mrg-btm-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
        </br>
            
        </div>
        <div class="row">

                <div class="carousel-inner">
                        <?php
                            $sql = "SELECT * FROM  proparty where action='1'";
                            $result = mysqli_query($con, $sql);
                            if($result){
                                while($val = $result->fetch_assoc()){ ?>
                                
                                <?php
                                    if ($val['property_type'] != 'Apartment') { ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <div class="row">
                                <div class="col-lg-12">
                       <h1><span class=""><button class="button-md button-theme"> 1 day, left 7 days, open</button></span></h1>
                       <div>
                                        <table class="table table-responsive">
                                                <th>Top 5 bids</th>
                                        <?php 
                                        $query= "SELECT taka FROM `bidding` ORDER BY `bidding`.`taka` DESC LIMIT 5";
                                        $b = mysqli_query($con, $query);
                                        $b = mysqli_fetch_all($b, MYSQLI_ASSOC);
                                        //var_dump($b);
                                        foreach ($b as $bid) {
                                            ?>
                                            
                                                <tr>
                                                    <td><?php echo $bid['taka'];?></td>
                                                </tr>
                                            
                                            <?php
                                        }
                                    ?>
                                    </table>
                                    </div>
                   </div>
                    </div>
                    

                            
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
                                            <a href="Followdetails.php?detailsid=<?php echo $val['properrty_id'];?>" class="link" >Details</a>
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
                            <div class="property">
                                <div class="row">
                                <div class="col-lg-12">
                       <h1><span class=""><button class="button-md button-theme"> 1 day, left 7 days, open</button></span></h1>
                        <div>
                                        <table class="table table-responsive">
                                                <th>Top 5 bids</th>
                                        <?php 
                                        $query = "SELECT taka FROM `bidding` ORDER BY `bidding`.`taka` DESC LIMIT 5";
                                        $b = mysqli_query($con, $query);
                                        $b = mysqli_fetch_all($b, MYSQLI_ASSOC);
                                        //var_dump($b);
                                        foreach ($b as $bid) {
                                            ?>
                                            
                                                <tr>
                                                    <td><?php echo $bid['taka'];?></td>
                                                </tr>
                                            
                                            <?php
                                        }
                                    ?>
                                    </table>
                                    </div>

                   </div>
                    </div>
                    
                                
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
                                            <a href=".php?detailsid=<?php echo $val['properrty_id'];?>" class="link" >Details</a>
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
            
        </div>
    </div>
</div>
        </div><!--/.row-->
        
        
        
    <!/div> <!--/.main-->
    
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