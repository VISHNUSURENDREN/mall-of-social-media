<?php 
    $id = $_GET["id"];
    include "database.php";
    include "header.php";
    $fetchservice = mysqli_query($connect,"SELECT * FROM `service_details` WHERE `service_id`=$id")or die(mysqli_error($connect));
    $service = mysqli_fetch_array($fetchservice);
    $fetchImage2 = mysqli_query($connect,"SELECT `image_name` FROM `service_images` WHERE `main_id`=2  and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    $image1 = mysqli_fetch_array($fetchImage2);
    $fetchImage2 = mysqli_query($connect,"SELECT `image_name` FROM `service_images` WHERE `main_id`=3  and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    $image2 = mysqli_fetch_array($fetchImage2);

    $fetchwhatService = mysqli_query($connect,"SELECT * FROM `service_points` WHERE `which_category`='whatService' and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));
    
    $fetchwhychoose = mysqli_query($connect,"SELECT * FROM `service_points` WHERE `which_category`='whychoose' and `service_id`=".$service['service_id']."")or die(mysqli_error($connect));

?>
<section class="logo-container ">
    <div class="container-fluid  position-relative logo-header" data-aos="fade-up" data-aos-delay="100">
        <div class="custom-shape-divider-top-1619337188">
            <svg data-name="Layer 1" id="logosvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
            <div class="row heading">
                <div class="col-xl-7 col-lg-9 logo-title" id="logo-title">
                    <h1><?php echo $service["mainheader"]?></h1>
                    <h3><?php echo $service["secondsmall"]?></h3>
                    <p class="logo-description"><?php echo $service["whatheader"]?></p>
                    <a href="contact.php" class="logobtn get-started scrollto">Contact us</a> 
                </div>
                <div class=" col-md-4 col-lg-4 logo-img" >
                    <img src="assets/images/services/png/<?php echo $service["file"]?>" style="max-width: 100%;height: auto;" alt="<?php echo $service["mainheader"]?>">
                </div>
            </div>          
    </div>
    <div class="logo-section" id="section2">
        <div class="logo-content">
            <div class="service-bg">
                <div class="container-fluid " data-aos="fade-up">
                    <div class="serviceDetail" data-aos="fade-in" data-aos-delay="500">
                        <div class="row">
                            <div class="col-lg-8 serviceContent " data-aos="fade-left" data-aos-delay="100">
                                <div class=" ">
                                <h3><?php echo $service["whyheader"]?></h3>
                                    <p class="font-italic">
                                      <?php echo $service["whypara"]?>
                                    </p>
                                    <?php
                                      while($whatService = mysqli_fetch_array($fetchwhatService)){
                                    ?>
                                    <ul>
                                        <b><?php echo $whatService['bold_header'] ?></b>
                                            <li><i class="bx bx-check-double"></i><?php echo $whatService['points'] ?></li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                                    <img src="assets/images/services/<?php echo $image1['image_name']?>" class="img-fluid" alt="<?php echo $service["whatheader"]?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="logo-section" id="section3">
        <div class="logo-content">
            <div class="parallax2">
                <div class="container-fluid " data-aos="fade-up">
                    <div class="serviceDetail" data-aos="fade-in" data-aos-delay="500">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <div class="image-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
                                    <img src="assets/images/services/<?php echo $image2['image_name']?>" class="img-fluid" alt="<?php echo $service["whatheader"]?>">
                                </div>
                            </div>
                            <div class="col-lg-8 serviceContent" data-aos="fade-left" data-aos-delay="100">
                                <div class="">
                                    <h3><?php echo $service["whychoose"]?></h3>
                                    <p class="font-italic">
                                    <?php echo $service["choosepara"]?>
                                    </p>
                                    <?php
                                      while($whychoose = mysqli_fetch_array($fetchwhychoose)){
                                    ?>
                                    <ul>
                                        <b><?php echo $whychoose['bold_header'] ?></b>
                                            <li><i class="bx bx-check-double"></i><?php echo $whychoose['points'] ?></li>
                                    </ul>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<?php 
    include "footer.php";
?>
<script>
  headerColor("rgb(108,166,224)","black");    // $("#header").css("background-color","#78b9fac5");
</script>