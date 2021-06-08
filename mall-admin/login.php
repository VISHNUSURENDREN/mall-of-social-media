<?php

if($_SERVER['REQUEST_METHOD']=='POST'){


    if (!empty($_POST["email"]) && !empty($_POST["password"])) 
    { 	
    echo "<script>console.log('hii');</script>"; 
        $_email = $_POST["email"];
        $_pass = $_POST["password"]; 
        include 'database.php';
        
        $sql1="SELECT * FROM `login_details` WHERE `user_email`='".$_email."' AND `user_password`='".$_pass."' ";
        $result=mysqli_query($connect,$sql1);
        $num_rows=mysqli_num_rows($result);
        if($num_rows !=0)
        {
            $row = mysqli_fetch_row($result);
            $dbemail = $row[2];
		    $dbpass = $row[3];
            
                
            if (!empty($_POST["rememberme"])) 
            { 

                setcookie("mall_email", $dbemail, time() + 
                                        (10 * 365 * 24 * 60 * 60)); 

                setcookie("mall_password", $dbpass, time() + 
                                        (10 * 365 * 24 * 60 * 60)); 

                
                    
    
            } 
            else
            { 
                if (isset($_COOKIE["mall_email"])) 
                { 
                    setcookie("mall_email", ""); 
                } 
                if (isset($_COOKIE["mall_password"])) 
                { 
                    setcookie("mall_password", ""); 
                } 
                    
            
                    
            } 
            
            
            session_start();
            $_SESSION["mall_email"] = $dbemail;	
            header('Location: index.php'); 

        }	
        else
    {
        echo"<script>alert('invalid detail');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }    
}
else
    { 
        $message = "Both are Required Fields. Please fill both the fields"; 
    } 
}
?>

