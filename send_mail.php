<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

function sendMail($toMail, $sub, $code){
    
    $smtp = "smtp.gmail.com";
    $user = "saylejahan121@gmail.com";
    $password = "studentofcse";
    $secure = "tls";
    $port = "587";
    $name = "Test Mailer";
    $replyTo = "mfaruqi933@gmail.com";
    
    $domain = "http://localhost/realEsted";
    
    $sub = strtolower($sub);
    
    if($sub == strtolower("SIGNUP")){
        $subject = "Confirm your email";
        $massage = "This is the validation link ".'<a href="'.$domain.'/verify.php?code='.$code.'&email='.$toMail.'">Click Here</a>';
    }else if($sub == strtolower("FORGOT")){
        $subject = "This is your reset key";
        $massage = "This is the code of reset password ".'<a href="'.$domain.'/reset.php?code='.$code.'&email='.$toMail.'">Click Here</a>';
    }else{
        return 'SUBJECT ERROR';
    }

    //Load composer's autoloader
    require 'mailer/vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $smtp;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $user;                 // SMTP username
        $mail->Password = $password;                           // SMTP password
        $mail->SMTPSecure = $secure;                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $port;                                    // TCP port to connect to
        $mail->AuthType = 'NTML';


        $mail->smtpConnect(
        array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
                )   
                )
            );

        //Recipients
        $mail->setFrom($user, $name);
        //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress($toMail);               // Name is optional
        $mail->addReplyTo($replyTo, 'No Reply');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $massage;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        
        return 'SEND';

    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
    

}

//sendMail('saylejahan@gmail.com', 'FORGOT', '124578');


?>