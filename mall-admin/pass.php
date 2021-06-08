<?php
include 'database.php';
$msg="";

$email = $_GET['email'];
$pnew =$_GET['pnew'];
$pconfirm =$_GET['pconfirm'];
$response = array();
if($pnew==$pconfirm){
        if(mysqli_query($connect,"UPDATE `login_details` set `user_password`=$pnew WHERE `user_email`=$email")){               
                $response['status'] = 'success';
                $response['message'] = 'This was successful';
                
        }
        else {
            $response['status'] = 'error';
            $response['message'] = 'failed';
        }
}
else{
    $response['status']="New passwords does not match";
}
// mysqli_free_result($response); 
echo json_encode($response);

?>

