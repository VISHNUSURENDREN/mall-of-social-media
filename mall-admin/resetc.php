<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<!-- <link href="css/reset.css" rel="stylesheet"> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>

</head>
<body>




<?php
// require "header.php";
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
$msg="";
$email=$_GET['email'];

?>
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12" style="padding:0px; margin:0px">
            <div class="card" style="margin:100px;">
                <div class="card-header">
                    <strong>RESET PASSWORD </strong>
                </div>
                <!-- <form method="post"> -->
                    <div class="card-body card-block">
                        
                        <div class="form-group">
                            <label >New Password:</label>
                            <input type="password" name="pnew" placeholder="Enter New Password" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="form-control-label">Confirm New Password</label>
                            <input type="password" name="pconfirm" placeholder="Confirm New Password" class="form-control" required/>
				        </div>
                        
                        <button type="button" name="submit" onclick="checkDetail()" class="btn btn-success btn-flat m-b-30 m-t-30" >Change Password</button>
                        <div class="field_error" style="color: red; margin-top:5px; font-style:italic">
                        <p id="here"></p>
                        </div>
                        </div>
                    </div>
                <!-- </form> -->
                <script>
                    function checkDetail(){
                       
                       var pnew = document.querySelector("input[name=pnew]").value;
                       var pconfirm = document.querySelector("input[name=pconfirm]").value;
                    // window.location.href='pass.php?pold='+pold+'&pnew='+pnew+'&pconfirm='+pconfirm;
                    
                       $.ajax(
                            {
                                type: 'POST',
                                url:'pass.php?email="<?php echo $email;?>"&pnew="'+pnew+'"&pconfirm="'+pconfirm+'"',
                                // dataType:'json',
                                success: function(data){
                                    console.log(data);
                                    var data = JSON.parse(data);
                                    if(data.status=='success'){
                                        alert("successfully changed");
                                        window.location.href="http://localhost/mall-of-social-media/mall-admin/";
                                    }
                                    else{
                                        document.getElementById("here").innerHTML=data.status;
                                    }
                                    
                                }
							});
                    }
                </script>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
