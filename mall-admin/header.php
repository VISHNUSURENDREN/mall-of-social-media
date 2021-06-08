<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mall of Social media</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <!-- Template Main File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <script src="../assets/js/new.js"></script>


</head>

<body>

<div id="progressbar"></div>
<div id="scrollpath"></div>

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">

    <div id="headermain" class="container d-flex  align-items-center">
        <h1 class="logo mr-auto"><a href="index.php">M.O.S.M (ADMIN)</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <nav id="nav" class="nav-menu d-none d-lg-block">
            <ul>
                <li ><a href="index.php">Home</a></li>
                <li class="drop-down "><a href="">Services</a>
                    <ul>
                        <li ><a href="addService.php">ADD Service</a></li>
                        <li ><a href="deleteService.php">Delete Service</a></li>
                        <li ><a href="editService.php">Edit Service</a></li>
                        
                    </ul>
                </li>   
                <li class="drop-down "><a href="">Profile</a>
                    <ul>
                        <li ><a href="" data-toggle="modal" data-target="#exampleModal">RESET</a></li>
                        <li ><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </li>
                </li>   
            </ul>
        </nav><!-- .nav-menu -->
    </div>

</header><!-- End Header -->    

<!-- modal  -->
                
<div class="modal fade" id="exampleModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Enter your email address:</label>
                    <input type="text" class="form-control" id="recipient-name">
                    <label>An email will be sent to you shortly.</label>
                </div>
            </form>
        </div>
        <script>
            function forget() {
                var mail = document.getElementById("recipient-name").value;
                $.ajax(
                {   
                    url:'../send-email/email.php?mail='+mail,
                    success: function(data){
                        var data = JSON.parse(data);
                        alert(data.status);
                    }
                });
            }
        </script>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="forget()" data-dismiss="modal">Send message</button>
        </div>
        </div>
    </div>
</div> 
<!-- end    -->
