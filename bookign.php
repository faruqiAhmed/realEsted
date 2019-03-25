 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coding Cage : Sign up</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>


<div class="signin-form">

<div class="container">
    	
        <form method="post" action="booking.php" class="form-signin">
            <h2 class="form-signin-heading">Booking.</h2><hr />
           
            <div class="form-group">
			
            <input type="text" class="form-control" name="name" placeholder="Name" value="" />
            </div>
            <div class="form-group">
            <textarea type="text" class="form-control" name="Address" placeholder="Address" value=""></textarea>
            </div>
            <div class="form-group">
            	<input type="email" class="form-control" name="email" placeholder="email" />
            	
            </div>
			<div class="form-group">
            	<input type="text" class="form-control" name="phone" placeholder="phone" />
            	
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;booking
                </button>
            </div>
            <br />
        </form>
       </div>
</div>

</div>

</body>
</html>