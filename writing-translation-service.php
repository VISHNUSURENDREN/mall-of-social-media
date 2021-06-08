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
    <div class="container-fluid  position-relative book-header" data-aos="fade-up" data-aos-delay="100">    
      <div class="row heading">
          <div class="col-xl-7 col-lg-9 logo-title " id="logo-title">
              <h1 class="book"><?php echo $service['mainheader']?></h1>
              <h3 class="book"><?php echo $service['secondsmall']?></h3>
              <p class="logo-description book"><?php echo $service['whatheader']?></p>
              <a href="contact.php" class="bookbtn logobtn get-started scrollto">Contact us</a> 
          </div>
          <div class=" col-md-4 col-lg-4 logo-img" >
            <img src="assets/images/services/png/<?php echo $service["file"]?>" style="max-width: 100%;height: auto;" alt="<?php echo $service["mainheader"]?>">
          </div>
      </div>
      <div class="custom-shape-divider-bottom-1619547852">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill" stroke="brown" stroke-opacity="1"></path>
        </svg>
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