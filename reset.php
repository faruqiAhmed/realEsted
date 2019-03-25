<?php
$code = "";
$email = "";

if(isset($_GET['code'])){
    $code = $_GET['code'];
    $email = $_GET['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rest Password</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
   
   <div id="sm-model" class="sm-model">
        <div class="sm-model-content">
            <div id="sm-reset-code" class="sm-reset-code">
               <div class="sm-title">Reset Code</div>
               <p id="sm-reset-info"></p>
                <form action="" id="sm-code-submit">
                   <input type="hidden" name="resetcode">
                   <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="text" name="code" placeholder="Enter Your Code" value="<?php echo $code; ?>" required>
                    <button id="sm-reset-submit-button" type="submit">Submit Code</button>
                </form>
            </div>
            <div id="sm-reset-password" class="sm-reset-password">
               <div class="sm-title">New Password</div>
               <p id="sm-reset-password-info"></p>
                <form action="" id="sm-repassword-submit">
                   <input type="hidden" name="resetpass">
                   <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="password" pattern=".{6,}" title="Minimum 6 Characters" name="password" placeholder="Enter Your New Password" required>
                    <input type="password" pattern=".{6,}" title="Minimum 6 Characters" name="repassword" placeholder="Again Your New Password" required>
                    <button id="sm-reset-password-submit-button" type="submit">Submit Code</button>
                </form>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-submenu.js"></script>
    <script>
        $(document).ready(function() {
            $("#sm-model").css("display", "block");
        });
        
        $("#sm-code-submit").submit(function(e) {
            e.preventDefault();
            $("#sm-reset-submit-button").prop('disabled', true);
            $("#sm-reset-submit-button").append(' <div class="rotating"><span class="glyphicon glyphicon-refresh"></span></div>');

            $.ajax({
                type: 'post',
                url: 'sm-post.php',
                data: $(this).serialize(),
                success: function(info) {
                    $("#sm-reset-submit-button").prop('disabled', false);
                    $("#sm-reset-submit-button .rotating").remove();
                    if(info == "SUCCESS"){
                        $("#sm-reset-code").css('display', 'none');
                        $("#sm-reset-password").css('display', 'block');
                    }else{
                        $("#sm-reset-info").text(info);
                    }
                }
              });
        });
        
        $("#sm-repassword-submit").submit(function(e) {
            e.preventDefault();
            $("#sm-reset-password-submit-button").prop('disabled', true);
            $("#sm-reset-password-submit-button").append(' <div class="rotating"><span class="glyphicon glyphicon-refresh"></span></div>');

            $.ajax({
                type: 'post',
                url: 'sm-post.php',
                data: $(this).serialize(),
                success: function(info) {
                    $("#sm-reset-password-submit-button").prop('disabled', false);
                    $("#sm-reset-password-submit-button .rotating").remove();
                    if(info == "UPDATED"){
                        window.location.replace("index.php");
                    }else{
                        $("#sm-reset-password-info").text(info);
                    }
                }
              });
        });
    </script>
</body>
</html>


<?php


?>