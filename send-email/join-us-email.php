<?php
function test($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/OnePage/assets/vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/OnePage/assets/vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/OnePage/assets/vendor/PHPMailer/PHPMailer/src/SMTP.php';
require 'C:/xampp/htdocs/OnePage/assets/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if($_SERVER['REQUEST_METHOD']=='POST'){

    if (!empty($_POST["first_name"]) && !empty($_POST["email_id"]) && !empty($_POST["area_code"]) && !empty($_POST["phone_number"]) && !empty($_POST["country"]) && !empty($_POST["profession"])) 
    { 
        $_first_name = test($_POST["first_name"]);
        $_email = test($_POST["email_id"]);
        $_area_code = test($_POST["area_code"]);
        $_phone_number = test($_POST["phone_number"]);
        $_profession = test($_POST["profession"]);
        $_country = test($_POST["country"]);
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
            $mail->setFrom('pythonprojectmail@gmail.com', 'onepage');
            $mail->addAddress($_email, $_first_name);     //Add a recipient
            
            $body="First Name: ".$_first_name."<br>Email id: ".$_email."<br>Phone: ".$_area_code." ".$_phone_number."<br>Country: ".$_country."<br>Profession: ".$_profession;

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'JOIN US FORM';
            $mail->Body = $body;
            $mail->AltBody = 'A test email from makitweb.com';
        
            if($mail->send())
            $response['status']="Hii ".$_first_name." email have send successfully";
            else $response['status']="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    else{
        $response['msg']="error";
        $response['status']="Please fill up all the fields.";
    }
 
echo json_encode($response);
}

?>