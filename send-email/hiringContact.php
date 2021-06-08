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

    if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email_id"]) && !empty($_POST["phone_number"]) && !empty($_POST["country"]) && !empty($_POST["date"]) && !empty($_POST["area_code"]) && !empty($_POST["gender"]) && !empty($_POST["address"]) && !empty($_POST["position"]) && !empty($_POST["age"])) 
    { 
        $_fname = test($_POST["first_name"]);
        $_lname = test($_POST["last_name"]);
        $_date = test($_POST["date"]);
        $_age = test($_POST["age"]);
        $_gender = test($_POST["gender"]);
        $_email = test($_POST["email_id"]);
        $_address = test($_POST["address"]);
        $_code = test($_POST["area_code"]);
        $_phone = test($_POST["phone_number"]);
        $_position = test($_POST["position"]);
        $_country = test($_POST["country"]);
        $_message = test($_POST["message"]);

        // ---------------------------------------------------------------------------------------------
        // FILE
        // ---------------------------------------------------------------------------------------------

        // $file_name = $_FILES['file']['name'];
        // $file_tmp = $_FILES['file']['tmp_name'];
        // $file_size = $_FILES['file']['size'];
        // $file_error = $_FILES['file']['error'];
        // $file_type = $_FILES['file']['type'];
        // $file_ext = explode('.', $file_name);
        // $file_act_ext = strtolower(end($file_ext));
        // $allowed = ['pdf'];
        // $path = 'C:/xampp/htdocs/OnePage/assets/resumes/';

        // if( !in_array($file_act_ext, $allowed) )
        //     return 'Only .pdf Files Are Allowed!';

        // if( $file_error != 0 )
        //     return 'Image Size Should Be Be Than 2mb.';

        // if( $file_size > 2000000 )
        //     return 'File Size Should Be Less Than 2mb.';

        // $new_file_name = $name . $file_act_ext;
        // $file_des = $path .'/'. $new_file_name;

        // $move = move_uploaded_file($file_tmp, $file_des);

        // if(!$move){
        //     $response['status']= "Sorry Failed To Upload Image!" ; 
        // }else{ 
        //     $image_name = [$new_file_name];
        //     $response['status']= $image_name; 
        // }
        // ---------------------------------------------------------------------------------------------
        // FILE END
        // ---------------------------------------------------------------------------------------------
       
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
            $mail->addAddress('pythonprojectmail@gmail.com', 'Hiring form');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('C:/xampp/htdocs/OnePage/assets/resumes/'.$new_file_name);         //Add attachments
            // $mail->addAttachment('assets/img/background1.jpg', 'new.jpg');    //Optional name
            $response['status']="sentbbheja";
            $body="First Name: ".$_fname."<br>Last Name: ".$_lname."<br>Email id: ".$_email."<br>Address: ".$_address."<br>Phone: ".$_code." ".$_phone."<br>Country: ".$_country."<br>Gender: ".$_gender."<br>Position: ".$_position;

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'HIRING FORM';
            $mail->Body = $body;
            $mail->AltBody = 'A test email from makitweb.com';
        
            if($mail->send())
            $response['status']="Hii ".$_fname.$_code;
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