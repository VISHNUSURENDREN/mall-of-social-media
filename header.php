<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mall of Social media</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/topbar.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/mousepointer.css">
  <script src="assets/js/new.js"></script>

</head>

<body>
<div class="cursorpointer"></div>
<div class="cursordot"></div>
<div id="progressbar"></div>
<div id="scrollpath"></div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="topbar">
        <div class="topbar_contact">
            <a href="tel:+917208564500"><i class='bx bxs-contact'></i><label for="">+917208564500</label> </a>
            <a href="mailto:surendrenvishnu@gmail.com"><i class='bx bxs-envelope' ></i> <label for="">surendrenvishnu@gmail.com</label> </a>
        </div>

        <div class="topbar_social_media">
            <a href=""><i class='bx bxl-facebook-circle'></i></a>
            <a href=""><i class='bx bxl-twitter' ></i></a>
            <a href=""><i class='bx bxl-instagram-alt'></i></a>
            <a href=""><i class='bx bxl-linkedin-square' ></i></a>
        </div>
    </div>
    <div id="headermain" class="container d-flex  align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">M.O.S.M</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li class="mobileService"><a  href="" onclick="serviceCall(); return false;">Services</a></li>
          <li class="drop-down mainDropDown"><a href="">Services</a>
            <ul> 
                <li class="drop-down" ><a href="graphic-Design.php">Graphics & Design</a>
                    <ul class="servicesHeader">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                include "database.php";
                                $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='graphic-design'")or die(mysqli_error($connect));
                                while($service = mysqli_fetch_array($fetchservice))
                                {
                                ?>
                                    <li><a href="graphic-design-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                                <?php
                                }
                                ?>
                            </div>
                        </div>  
                    </ul>
                </li>

                <li class="drop-down"><a href="">Digital Marketing</a>
                    <ul class="servicesHeader">
                        <div class="row">
                            <div class="col-12">
                            <?php
                                include "database.php";
                                $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='digital-marketing'")or die(mysqli_error($connect));
                                while($service = mysqli_fetch_array($fetchservice))
                                {
                                ?>
                                    <li><a href="digital-marketing-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                                <?php
                                }
                            ?>
                            </div>
                        </div>  
                    </ul>
                </li>
              
                <li class="drop-down"><a href="">Writing & Translation</a>
                    <ul class="servicesHeader">
                        <div class="row">
                            <div class="col-12">
                            <?php
                                include "database.php";
                                $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='writing-translation'")or die(mysqli_error($connect));
                                while($service = mysqli_fetch_array($fetchservice))
                                {
                                ?>
                                    <li><a href="writing-translation-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                                <?php
                                }
                                ?>
                            </div>
                        </div>  
                    </ul>
                </li>

                <li class="drop-down"><a href="">Video & Animation</a>
                    <ul class="servicesHeader">
                        <div class="row">
                            <div class="col-12">
                            <?php
                                include "database.php";
                                $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='video-animation'")or die(mysqli_error($connect));
                                while($service = mysqli_fetch_array($fetchservice))
                                {
                                ?>
                                    <li><a href="video-animation-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                                <?php
                                }
                                ?>
                            </div>
                        </div>  
                    </ul>
                </li>
                <li class="drop-down"><a href="">Programming & Tech</a>
                    <ul class="servicesHeader">
                        <div class="row">
                            <div class="col-12">
                            <?php
                                include "database.php";
                                $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='programming-tech'")or die(mysqli_error($connect));
                                while($service = mysqli_fetch_array($fetchservice))
                                {
                                ?>
                                    <li><a href="programming-tech-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                                <?php
                                }
                                ?>
                            </div>
                        </div>  
                    </ul>
                </li>
                <li class="drop-down "><a href="">Business</a>
                    <ul class="servicesHeader">
                        <div class="row">
                            <div class="col-12 ">
                            <?php
                                include "database.php";
                                $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='business'")or die(mysqli_error($connect));
                                while($service = mysqli_fetch_array($fetchservice))
                                {
                                ?>
                                    <li><a href="business-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                                <?php
                                }
                                ?> 
                            </div>
                        </div>  
                    </ul>
                </li>
            </ul>
          </li>
          
          <li><a href="hiring-form.php">We are hiring!</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->
<script>

flag=true;
 function serviceCall() { 
     if(flag){
        $( "#hideit" ).slideDown( "fast" );
        document.getElementById("hideit").classList.remove("a");
        flag=false;
     }
     else{
        $( "#hideit" ).slideUp("fast" );
        document.getElementById("hideit").classList.add("a");
        flag=true;
     }
 }
</script>
      <a href="join-the-team.php" class="get-started-btn scrollto">JOIN US</a>

    </div>
    <div id="hideit" class="serviceDrop">
    <div class="container d-flex align-items-center boxes categoryDrop " id="categoryDrop">
      <div class="nav-menus d-none d-lg-block boxes">
        <ul>
          <li class="drop-down" id="graphicDesign"><a href="graphic-Design.php">Graphics & Design</a>
            <ul class="servicesHeader">
                <div class="row">
                <?php
                    $index = 0;
                    include "database.php";
                    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='graphic-design'")or die(mysqli_error($connect));
                    while($service = mysqli_fetch_array($fetchservice))
                    {   
                        $index++;
                        if($index==1){
                            echo "<div class='col-4'>";
                        }
                    ?>
                        <li ><a  href="graphic-design-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                    <?php
                        if($index==9){
                            echo "</div>";
                            $index=0;
                        }
                    }
                ?>
                </div>  
            </ul>
          </li>

          <li class="drop-down" id="digitalMarketing"><a href="digital-Marketing.php">Digital Marketing</a>
            <ul class="servicesHeader">
                <div class="row">
                <?php
                    $index = 0;
                    include "database.php";
                    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='digital-marketing'")or die(mysqli_error($connect));
                    while($service = mysqli_fetch_array($fetchservice))
                    {   
                        $index++;
                        if($index==1){
                            echo "<div class='col-4'>";
                        }
                    ?>
                        <li ><a  href="digital-marketing-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                    <?php
                        if($index==8){
                            echo "</div>";
                            $index=0;
                        }
                    }
                ?>
                </div>  
            </ul>
          </li>

          <li class="drop-down" id="writingTranslation"><a href="writing-Translation.php">Writing & Translation</a>
            <ul class="servicesHeader">
                <div class="row">
                <?php
                    $index = 0;
                    include "database.php";
                    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='writing-translation'")or die(mysqli_error($connect));
                    while($service = mysqli_fetch_array($fetchservice))
                    {   
                        $index++;
                        if($index==1){
                            echo "<div class='col-4'>";
                        }
                    ?>
                        <li ><a  href="writing-translation-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                    <?php
                        if($index==5){
                            echo "</div>";
                            $index=0;
                        }
                    }
                ?>
                </div>  
            </ul>
          </li>

          <li class="drop-down" id="videoAnimation"><a href="video-Animation.php">Video & Animation</a>
            <ul class="servicesHeader">
                <div class="row">
                <?php
                    $index = 0;
                    include "database.php";
                    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='video-animation'")or die(mysqli_error($connect));
                    while($service = mysqli_fetch_array($fetchservice))
                    {   
                        $index++;
                        if($index==1){
                            echo "<div class='col-4'>";
                        }
                    ?>
                        <li ><a  href="video-animation-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                    <?php
                        if($index==5){
                            echo "</div>";
                            $index=0;
                        }
                    }
                ?>
                </div>  
            </ul>
          </li>

          <li class="drop-down" id="programmingTech"><a href="programming-Tech.php">Programming & Tech</a>
            <ul class="servicesHeader">
                <div class="row">
                <?php
                    $index = 0;
                    include "database.php";
                    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='programming-tech'")or die(mysqli_error($connect));
                    while($service = mysqli_fetch_array($fetchservice))
                    {   
                        $index++;
                        if($index==1){
                            echo "<div class='col-4'>";
                        }
                    ?>
                        <li><a  href="programming-tech-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                    <?php
                        if($index==3){
                            echo "</div>";
                            $index=0;
                        }
                    }
                ?>
                </div>  
            </ul>
          </li>
          <li class="drop-down " id="business"><a href="business.php">Business</a>
            <ul class="servicesHeader business">
                <div class="row">
                    <div class="col-12 ">
                    <?php
                    
                    include "database.php";
                    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `division`='business'")or die(mysqli_error($connect));
                    while($service = mysqli_fetch_array($fetchservice))
                    {       
                    ?>
                        <li ><a  href="business-service.php?id=<?php echo $service["service_id"]?>"><?php echo $service["mainheader"]?></a></li>
                    <?php
                    }
                    ?>
                    </div>
                </div>  
            </ul>
          </li>

        </ul>
    </div>
    </div>
    </div>
  </header><!-- End Header -->
  <script>
  try {
    removeClass();
  } catch (error) {
    
  }
</script>


