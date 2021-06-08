<?php
include 'database.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/OnePage/assets/vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/OnePage/assets/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/OnePage/assets/vendor/PHPMailer/PHPMailer/src/SMTP.php';
require 'C:/xampp/htdocs/OnePage/assets/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

   $email = $_GET['mail'];
   $emailcheck = mysqli_query($connect, "SELECT * FROM `login_details` WHERE `user_email` = '".$email."' ");
   
   if ($path = mysqli_fetch_array($emailcheck)) { 
      
   
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'pythonprojectmail@gmail.com';                     //SMTP username
            $mail->Password   = 'python#2020';                               //SMTP password
            $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('pythonprojectmail@gmail.com', 'RESET');
            $mail->addAddress($email, 'ADMIN');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('assets/img/background1.jpg', 'new.jpg');    //Optional name
        
           
            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Rest Password';
            $mail->Body = 'Hii sir!!! <br/>Click on the link below to reset your password<br/><a href="localhost/mall-of-social-media/mall-admin/resetc.php?email='.$email.'">RESET PASSWORD</a>';
            $mail->AltBody = 'Here is your reset password link'; // Plain text for non-HTML mail clients
  
            if($mail->send()){$response['status']="A link to reset your password has been sent on your email address.";}
            else{$response['status']="An account on this email doesn't exist. catch";}
      } 
      catch (Exception $e) {
         $response['status']="An account on this email doesn't exist.";
      }
      
    }
   else{
      $response['status']="An account on this email doesn't exist.";
   
   }
echo json_encode($response);
   
?>
