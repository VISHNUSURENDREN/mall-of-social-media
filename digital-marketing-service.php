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
<section  id="servicesdetails" class="logo-container ">
    <div class=" topheader container-fluid  position-relative digital-header" data-aos="fade-up" data-aos-delay="100">
        <div class="overlay"></div>
        <div class="overlay2"></div>
        <div class="row heading">
            <div class="col-xl-7 col-lg-9 logo-title digital-title" id="logo-title">
                <h1><?php echo $service["mainheader"]?></h1>
                <h4><?php echo $service["secondsmall"]?></h4>
                <p class="logo-description"><?php echo $service["whatheader"]?></p>
                <a href="contact.php" class="logobtn digital-btn get-started scrollto">Contact us</a> 
            </div>
            <div class=" col-md-4 col-lg-4 digital-img" >
                <img src="assets/images/services/png/<?php echo $service["file"]?>" style="max-width: 100%;height: auto;" alt="<?php echo $service["mainheader"]?>">
            </div>
        </div> 
                        
    </div>
    
   <?php 
    include "servicecontent.php";
   ?>


</section>
<?php 
    include "footer.php";
?>
<script>
  headerColor("black","#45a29e");    // $("#header").css("background-color","#78b9fac5");
  $(".get-started-btn").css("color","black");

</script>
